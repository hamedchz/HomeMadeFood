<?php

namespace App\Enums\Casts;

enum CategoryTypes: string
{
  case Advisor = 'advisor';
  case Business = 'business';
  // case Phone = 'phone';


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
