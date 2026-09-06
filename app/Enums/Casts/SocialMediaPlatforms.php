<?php

namespace App\Enums\Casts;

enum SocialMediaPlatforms: string
{
  case FACEBOOK = 'https://facebook.com/';
  case TWITTER = 'https://x.com/';
  case INSTAGRAM = 'https://instagram.com/';


  public static function getBaseUrl(string $platform): ?string
  {
    return match (strtolower($platform)) {
      'facebook' => self::FACEBOOK->value,
      'twitter' => self::TWITTER->value,
      'instagram' => self::INSTAGRAM->value,

      default => null,
    };
  }
}
