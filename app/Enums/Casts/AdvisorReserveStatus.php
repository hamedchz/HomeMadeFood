<?php

namespace App\Enums\Casts;

enum AdvisorReserveStatus: string
{

  case Reserved = 'reserved';
  case Available = 'available';

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
