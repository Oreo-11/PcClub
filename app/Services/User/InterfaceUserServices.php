<?php

namespace App\Services\User;

use App\Models\User;

interface InterfaceUserServices
{
    public static function getAllInfo(User $client);
}
