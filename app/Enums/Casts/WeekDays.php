<?php

namespace App\Enums\Casts;

enum WeekDays: string
{

  case Monday = 'Monday';
  case Tuesday = 'Tuesday';
  case Wednesday = 'Wednesday';
  case Thursday = 'Thursday';
  case Friday = 'Friday';
  case Saturday = 'Saturday';
  case Sunday = 'Sunday';
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
