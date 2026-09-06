<?php

namespace App\Enums\Casts;

enum TransactionTypes: string
{

  case AdvisorPayment = 'advisor payment';
  case PackagePayment = 'package payment';
  case DepositPayment = 'deposit payment';


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
