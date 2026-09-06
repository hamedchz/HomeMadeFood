<?php

namespace App\Enums\Casts;

enum ProposalStatus: string
{
  case Pending = 'pending';
  case Accepted = 'accepted';
  case Rejected = 'rejected';
  case Confirmed = 'confirmed';



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
