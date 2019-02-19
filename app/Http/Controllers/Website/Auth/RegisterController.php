<?php

namespace App\Http\Controllers\Website\Auth;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegisterController extends Controller
{
    public function getRegister()
    {
        return view('website.register');
    }
    public function postRegister( Request $request)
    {
        $email = $request->email;
        $users = User::all();
        
        $d = 0;
        foreach($users as $user)
        {   
            if($email==$user->email)
            {
                $d++;
            }
        }
        if($d==0)
        {
            $request->password = $request->merge(['password' => bcrypt($request->password)]);
            $request->level = $request->merge(['level' =>'customer']);
            User::create($request->all());
            return redirect()->route('web.index')->with('notification', 'Đăng ký thành công');
        }
        else
        {
            $error ="Tài khoản đã tồn tại";
            return view('website.register',compact('error'));
        }
    }
}
