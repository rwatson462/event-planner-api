<?php

declare(strict_types=1);

namespace App\Auth\Application\Enums;

enum UserRole: string
{
    case Admin = 'admin';
    case EventOrganiser = 'organiser';
    case EventGuest = 'guest';
}
