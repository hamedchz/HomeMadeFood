<?php

namespace App\Enums\Casts;

enum InvoiceStatus: string
{

  case Pending = 'pending';

  case Paid = 'paid';
  case Unsuccessful = 'unsuccessful';
  case Refunded = 'refunded';
  case Canceled = 'canceled';

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
