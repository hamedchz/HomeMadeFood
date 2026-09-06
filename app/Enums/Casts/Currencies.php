<?php

namespace App\Enums\Casts;

enum Currencies: string
{
  case Tooman = 'تومان';
  case TurkLira = 'TRY';
  case Usd = 'USD';
  case EUR = 'EUR';



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
