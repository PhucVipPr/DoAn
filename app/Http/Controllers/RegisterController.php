<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function viewRegister(){
        return view('/register');
    }

    public function storeaccount(Request $request){
        $name = $request->get('name');
        $email =$request->get('email');
        $password = $request->get('password');
        $phone = $request->get('phone');
        $role = 1;
        $level = 1;
        DB::table('users')->insert([
            'name'=>$name,
            'email'=>$email,
            'password'=>Hash::make($password),
            'phone'=>$phone,
            'role'=>$role,
            'level'=>$level,
        ]);
        return redirect('/login')->with('success', "Tài khoản đăng ký thành công!");;
    }
}
