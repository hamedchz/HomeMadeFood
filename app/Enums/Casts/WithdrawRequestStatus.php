<?php

namespace App\Enums\Casts;

enum WithdrawRequestStatus: string
{
  case pending = 'pending';
  case completed = 'approved';
  case failed = 'failed';


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
