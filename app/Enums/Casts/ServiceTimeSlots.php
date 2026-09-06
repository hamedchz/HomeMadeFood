<?php

namespace App\Enums\Casts;

enum ServiceTimeSlots: string
{
  case time1 = '8:00:00-12:00:00';
  case time2 = '12:00:00-15:00:00';
  case time3 = '15:00:00-18:00:00';

  /**
   * Get the formatted time range without seconds (e.g., '8:00-12:00')
   */
  public function getDisplayValue(): string
  {
    return preg_replace('/(:00)(?=-|$)/', '', $this->value);
  }

  /**
   * Get all time slots (cases starting with 'time')
   */
  public static function getTimeSlots(): array
  {
    return array_filter(self::cases(), function ($case) {
      return str_starts_with($case->name, 'time');
    });
  }

  public static function fromName(string $name): self
  {
    foreach (self::cases() as $case) {
      if ($case->name === $name) {
        return $case;
      }
    }

    throw new \ValueError("'$name' is not a valid case name for " . self::class);
  }

  /**
   * Get all the possible statuses as an array.
   *
   * @return array
   */
  public static function toArray(): array
  {
    return array_map(fn($status) => $status->value, self::cases());
  }

  /**
   * Get display values as an array (e.g., ['8:00-12:00', '12:00-15:00', ...])
   */
  public static function toDisplayArray(): array
  {
    $result = [];
    foreach (self::cases() as $case) {
      $result[$case->name] = $case->getDisplayValue();
    }
    return $result;
  }
}
