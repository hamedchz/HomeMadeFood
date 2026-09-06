<?php

namespace App\Enums\Casts;

enum UserRoles: string
{
  case Member = 'member';
  case Customer = 'customer';


  public static function toArray(): array
  {
    return array_map(fn($status) => $status->value, self::cases());
  }
}
