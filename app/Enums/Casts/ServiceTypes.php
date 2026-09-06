<?php

namespace App\Enums\Casts;

enum ServiceTypes: string
{
  case InPerson = 'in-person';
  case Online = 'online';
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
