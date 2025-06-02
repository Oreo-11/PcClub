<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use App\Models\TimeSchedule;
use App\Models\User;

class Appointment extends Model
{
    use HasFactory;

    protected $table = 'appointment';
    public $timestamps = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id_user',
        'id_time'
    ];



    public function timeSchedule(): HasOne
    {
        return $this->hasOne(TimeSchedule::class, 'id', 'id_time');
    }
    public function userAppointment(): HasOne
    {
        return $this->hasOne(User::class, 'id', 'id_user');
    }
}
