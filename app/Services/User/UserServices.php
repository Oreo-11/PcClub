<?php

namespace app\Services\User;

use App\Models\User;
use App\Services\User\InterfaceUserServices;
use DateTimeImmutable;
use stdClass;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\URL;
use App\Services\Email\EmailServices;
use Illuminate\Support\Facades\Validator;

class UserServices implements InterfaceUserServices
{
    public static function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'Имя' => 'required|min:3',
            'Фамилия' => 'required|min:3',
            'Отчество' => 'required|min:3',
            'email' => 'required|unique:users|email',
            'Пароль' => 'required|min:6',
        ], $messages = [
            'required' => 'Поле \':attribute\' должна быть заполнена',
            'unique' => 'Такой email уже есть',
            'email' => 'Введите поле \':attribute\' по примеру example@gmail.com',
            'min' => 'Поле \':attribute\' должно содержать не менее :min символов'
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors();
            return response()->json([
                'success' => false,
                'message' => 'NotSuccess',
                'name' => $errors->first('Имя'),
                'surname' => $errors->first('Фамилия'),
                'patronymic' => $errors->first('Отчество'),
                'email' => $errors->first('email'),
                'password' => $errors->first('Пароль'),
            ], 403);
        }

        $user = User::create([
            'name' => $request->Имя,
            'surname' => $request->Фамилия,
            'patronymic' => $request->Отчество,
            'email' => $request->email,
            'password' => $request->Пароль
        ]);

        $token = $user->createToken('user_token')->plainTextToken;
        $user->remember_token = $token;
        $user->save();

        return response()->json([
            'success' => true,
            'message' => 'Success',
            'token' => $token,
            'user_id' => $user->id,
            'user_name' => $user->name,
            'email' => $user->email
        ], 200);
    }


    public static function getAllInfo($id)
    {
        $user = User::find($id);

        $appointment = $user->appointment;
        return $appointment;
    }


    public static function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'Пароль' => 'required|min:6',
        ], $messages = [
            'required' => 'Поле \':attribute\' должна быть заполнена',
            'unique' => 'Такой email уже есть',
            'email' => 'Введите поле \':attribute\' по примеру example@gmail.com',
            'min' => 'Поле \':attribute\' должно содержать не менее :min символов'
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors();
            return response()->json([
                'success' => false,
                'message' => 'NotSuccess',
                'email' => $errors->first('email'),
                'password' => $errors->first('Пароль'),
            ], 403);
        }

        $user = User::where('email', '=', trim($request->input('email')))->firstOrFail();

        if (Hash::check(trim($request->input('Пароль')), $user->password)) {
            $token = $user->createToken('user_token')->plainTextToken;

            return response()->json([
                'success' => true,
                'message' => "Success",
                'token' => $token,
                'user_id' => $user->id,
                'user_name' => $user->name,
                'email' => $user->email,
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => "Login failed"
            ], 401);
        }
    }

    public static function authTocken($request)
    {
        $user = User::where('remember_token', '=', trim($request->input('remember_token')))->firstOrFail();
        $token = $user->createToken('user_token')->plainTextToken;
        return response()->json([
            'success' => true,
            'message' => "Success",
            'token' => $token,
            'user_id' => $user->id,
            'email' => $user->email,
            'user_name' => $user->name,
        ], 200);
    }

    public static function authEmail($request)
    {
        $email = $request->email;
        $url = EmailServices::generateUrl($email);
        EmailServices::sendEmail($email, "authEmail", [$url, "Вход в аккаунт"]);
    }


    public static function autoAuth($request)
    {
        $user = User::where('email', '=', $request->get('email'))->firstOrFail();

        $token = $user->createToken('user_token')->plainTextToken;
        $user->remember_token = $token;
        $user->save();
        return $user;
    }
}
