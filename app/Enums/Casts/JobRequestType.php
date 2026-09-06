<?php

namespace App\Enums\Casts;

enum JobRequestType: string
{

  case AddFund = 'Add Fund';

  case AddTime = 'Add Time';

  case CancelProject = 'Cancel Project';
  case CancelPayment = 'Cancel Payment';
  case EndProject = 'End Project';

  case ReleaseFund = 'Release Fund';

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
