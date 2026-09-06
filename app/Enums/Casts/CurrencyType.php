<?php

namespace App\Enums\Casts;

enum CurrencyType: string
{
  case Fiat = 'fiat';
  case Crypto = 'crypto';



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
