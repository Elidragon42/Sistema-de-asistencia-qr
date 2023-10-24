<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use app\Models\User;
use Illuminate\support\Facedes\Hash;
use illuminate\support\facedes\auth;

class LoginController extends Controller
{
    //
    public function register(request $request){
        //Validar los datos

        $user = new User();

        $user->name = $request->name;
        $user->email = $request ->email;
        $user->password = Hash::make($request->password);

        $user->save();

        Auth::login($user);

        return redirect (route('privada'));
    }

    public function login(Request $request){
    
    //validacion

    $credentials =[
        "email" => $request->emaill,
        "password" =>$request->password,
        //"active" => true
    ];

$remember = ($request -> has ('remember')? true : false);

if (Auth::attempt($credentials,$remember)){
    $request->session()->regenerate();

    }else{
        return redirect ('login');
        }

    }
    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect(route('login'));

    }

}
