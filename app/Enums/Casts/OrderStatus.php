<?php

namespace App\Enums\Casts;

enum OrderStatus: string
{

  case PENDING = 'pending';
  case CONFIRMED = 'confirmed';
  case PROCESSING = 'processing';
  case CANCELLED = 'cancelled';
  case COMPLETED = 'completed';
  case EXPIRED = 'expired';

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
