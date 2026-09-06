<?php

namespace App\Enums\Casts;

enum AdvisorStatus: string
{
  case pending = 'pending';
  case rejected = 'rejected';
  case approved = 'approved';


  public static function toArray(): array
  {
    return array_map(fn($status) => $status->value, self::cases());
  }
}
