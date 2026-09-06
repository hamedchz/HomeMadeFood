<?php

namespace App\Enums\Casts;

enum SeoPages: string
{
  case Landing = 'landing';
  case ProductList = 'product-list';

  case ProjectList = 'project-list';
  case BlogList = 'blog-list';
  case Contactus = 'contact-us';
  case Aboutus = 'about-us';


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
