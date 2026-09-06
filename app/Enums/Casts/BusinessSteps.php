<?php

namespace App\Enums\Casts;

enum BusinessSteps: string
{
  case Basic = 'basic';
  case Address = 'address';
  case ContactsDetails = 'contacts';
  case BusinessHours = 'business-hours';
}
