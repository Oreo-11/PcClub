<?php

namespace app\Services\Schedule;

use App\Models\Schedule;
use App\Services\Schedule\InterfaceScheduleServices;
use DateTimeImmutable;
use stdClass;
use Illuminate\Http\Request;
use App\Models\TimeSchedule;
use Illuminate\Support\Facades\DB;

class ScheduleServices implements InterfaceScheduleServices
{
    public static function checkToBook($time_start, $time_end, $pc_number)
    {
        $time = TimeSchedule::all()->where('time_start', '<=', $time_end)->where('time_end', '>=', $time_start)->where("pc_number", $pc_number);
        if (count($time) > 0) {
            return true;
        } else {
            return false;
        }
    }


    public static function toBook($request)
    {
        $time_start = $request->input('start_time');
        $time_end = $request->input('end_time');
        $pc_number = $request->input('pc_number');
        $type = $request->input('type');

        $a = self::checkToBook($time_start, $time_end, $pc_number);
        if ($a) {
            return false;
        } else {
            $newTimeSchedule = new TimeSchedule();
            $newTimeSchedule->time_start = $time_start;
            $newTimeSchedule->time_end = $time_end;
            $newTimeSchedule->pc_number = $pc_number;
            $newTimeSchedule->type = $type;
            $newTimeSchedule->save();
            return $newTimeSchedule->id;
        }
    }


    public static function allInfoToBook($request)
    {
        $time_start = $request->input('start_time');
        $time_end = $request->input('end_time');
        $type = $request->input('type');

        $time = TimeSchedule::all()->where('time_start', '<=', $time_end)->where('time_end', '>=', $time_start)->where('type', '=', $type);

        $array_pc = [];
        foreach ($time as $item) {
            array_push($array_pc, $item["pc_number"]);
        }
        return response()->json([
            'success' => true,
            'message' => 'Success',
            'array_pc' => $array_pc
        ], 200);
    }
}
