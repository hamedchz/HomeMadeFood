<?php

namespace App\Enums\Casts;

enum ReviewStatuses: string
{

  case Pending = 'pending';
  case Accepted = 'accepted';
  case Rejected = 'rejected';

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
