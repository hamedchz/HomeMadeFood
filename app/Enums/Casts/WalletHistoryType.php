<?php

namespace App\Enums\Casts;

enum WalletHistoryType: string
{
  case deposit = 'deposit';
  case withdrawal = 'withdrawal';
  case transfer = 'transfer';



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
