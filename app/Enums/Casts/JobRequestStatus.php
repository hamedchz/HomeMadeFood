<?php

namespace App\Enums\Casts;

enum JobRequestStatus: string
{


  case approved = 'approved';
  case rejected = 'rejected';
  case pending = 'pending';

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
