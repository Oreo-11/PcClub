<?php

namespace App\Http\Controllers\Api;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Role;
use App\Models\Appointment;
use Illuminate\Http\Request;
use App\Services\Email\EmailServices;

class EmailController extends BaseController {}
