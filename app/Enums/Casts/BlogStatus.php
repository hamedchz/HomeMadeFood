<?php

namespace App\Enums\Casts;

enum BlogStatus: string
{

  case publishWaiting = 'Publish Waiting';
  case published = 'Published';

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
