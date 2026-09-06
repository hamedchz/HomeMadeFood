<?php

namespace App\Enums\Casts;

enum SettingKey: string
{

  case SLOGAN = 'slogan';
  case LandVideo = 'landing-video';
  case SeoHead = 'seo-head';
  case SeoBodyStart = 'seo-body-start';
  case SeoBodyEnd = 'seo-body-end';
  case Schema = 'schema';


  public static function toArray(): array
  {
    return array_map(fn($status) => $status->value, self::cases());
  }
}
