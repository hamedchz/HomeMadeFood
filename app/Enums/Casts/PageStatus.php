<?php

namespace App\Enums\Casts;

enum PageStatus: string
{

  case active = 'active';
  case deactive = 'deactive';



  public static function toArray(): array
  {
    return array_map(fn($status) => $status->value, self::cases());
  }
}
