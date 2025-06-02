<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class EmailLogin extends Model
{
    public $fillable = ['email', 'token'];

    public function user()
    {
        return $this->hasOne(User::class, 'email', 'email');
    }

    public function login(Request $request)
    {
        $this->validate($request, ['email' => 'required|email|exists:users']);

        $emailLogin = EmailLogin::createForEmail($request->input('email'));

        $url = route('auth.email-authenticate', [
            'token' => $emailLogin->token
        ]);
    }

    public static function createForEmail($email)
    {
        return self::create([
            'email' => $email,
            'token' => Str::random(20)
        ]);
    }
}
