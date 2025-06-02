<?php

namespace App\Http\Controllers\Api;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Role;
use App\Services\Appointment\AppointmentServices;
use Illuminate\Http\Request;


class AppointmentController extends BaseController
{

    public function newAppointment(Request $request)
    {
        AppointmentServices::newAppointment($request);
    }
}
