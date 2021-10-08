<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

final class UserRole extends Enum
{
    const ADMINISTRATOR = 1;
    const MODERATOR = 2;
    const MEMBER = 3;
}
