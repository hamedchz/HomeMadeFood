<?php

namespace App\Enums\Casts;

enum BankAccountType: string
{

  case Crypto = 'crypto-account';
  case UsdAccount = 'usd-account';
  case EurAccount = 'eur-account';
  case TrLiraAccount = 'tr-account';
  case PaypalAccount = 'paypal-account';
  case ToomanAccount = 'tooman-account';

  /**
   * Get all the possible statuses as an array.
   *
   * @return array
   */
  public static function toArray(): array
  {
    return array_map(fn($status) => $status->value, self::cases());
  }
}
