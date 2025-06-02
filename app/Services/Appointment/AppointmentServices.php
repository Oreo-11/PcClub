<?php

namespace app\Services\Appointment;

use App\Services\Appointment\InterfaceAppointmentServices;
use Illuminate\Http\Request;
use App\Models\TimeSchedule;
use Illuminate\Support\Facades\URL;
use App\Models\Appointment;
use App\Services\Schedule\ScheduleServices;
use App\Services\Email\EmailServices;

class AppointmentServices implements InterfaceAppointmentServices
{
    public static function newAppointment($request)
    {
        $id_user = $request->input('id_user');
        $email_user = $request->input('email');
        $new_idTime = ScheduleServices::toBook($request);
        if ($new_idTime) {
            $newAppoinment = new Appointment();
            $newAppoinment->id_user = $id_user;
            $newAppoinment->id_time = $new_idTime;
            $newAppoinment->save();

            EmailServices::sendEmail($email_user, "appoinmentEmail", [$request->start_time, $request->end_time, $request->input('pc_number')]);
        } else {
            var_dump("нету записи");
        }
    }
}
