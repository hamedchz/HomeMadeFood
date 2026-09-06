<?php

namespace App\Enums\Casts;

enum BusinessStatus: string
{
  case pending = 'pending';
    // users with completed profile, waiting for admin approval
  case rejected = 'rejected';
    // rejected users, won't be shown in website
  case approved = 'approved';
    // approved users will be shown in website
  case suspended = 'suspended';
  // suspended users
}
