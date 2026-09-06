<?php

namespace App\Enums\Casts;

enum PaymentMethods: string
{

  case Wallet = 'wallet';
  case CreditCard = 'credit card';
  case Cash = 'cash';

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
