<?php

namespace App\Http\Controllers\Api;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Services\Schedule\ScheduleServices;
use Illuminate\Http\Request;

class ScheduleController extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;


    public function allInfoToBook(Request $request)
    {
        $response = ScheduleServices::allInfoToBook($request);
        return $response;
    }
}
