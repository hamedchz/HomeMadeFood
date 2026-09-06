<?php

namespace App\Enums\Casts;

enum CommentStatus: string
{

  case displayed = 'Displayed';
  case notDisplayed = 'Not displayed';
}
