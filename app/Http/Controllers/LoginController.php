<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function viewLogin(){
        return view('login');
    }

    public function login(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');
        $rs = Auth::attempt(
            ['email'=>$email,'password'=>$password]
        );
        $user = Auth::user();
        if ($rs == true) {
            if ($user->role == 0){
                return redirect('admin/home');
            } else {
                return redirect('client/home');
            }
        }else{
            return redirect('login')->with('message',"Thông tin của bạn đang chưa chính xác");
    }
    }

    function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('login');
    }
}
