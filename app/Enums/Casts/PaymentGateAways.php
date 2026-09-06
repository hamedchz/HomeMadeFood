<?php

namespace App\Enums\Casts;

enum PaymentGateAways: string
{

  case Stripe = 'stripe';
  case Paytr = 'paytr';
  case Zarinpal = 'zarinpal';

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
