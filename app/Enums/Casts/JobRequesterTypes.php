<?php

namespace App\Enums\Casts;

enum JobRequesterTypes: string
{

  case Advisor = 'advisor';

  case Client = 'client';



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
