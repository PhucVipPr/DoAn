<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        $role = $request->get('role');
        DB::table('users')->insert([
            'name'=>$name,
            'email'=>$email,
            'password'=>Hash::make($password),
            'phone'=>$phone,
            'role'=>$role,
        ]);
        return redirect('/login');
    }
}
