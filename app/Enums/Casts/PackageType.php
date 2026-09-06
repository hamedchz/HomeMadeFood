<?php

namespace App\Enums\Casts;

enum PackageType: string
{

  case Advisor = 'advisor';
  case Business = 'business';

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
