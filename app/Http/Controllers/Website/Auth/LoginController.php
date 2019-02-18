<?php

namespace App\Http\Controllers\Website\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\User;
class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:web');
    }
    public function getLogin()
    {
        return view('website.login');
    }
    public function postLogin( Request $request)
    {
            $email = $request->email;
            $password = $request->password;
            $remember = isset($request->remember);
            if (Auth::attempt(['email' => $email, 'password' => $password], $remember))
            {
                return redirect()->route('web.index');
            }
            else
            {
                $error ='Tài khoản hoặc mật khẩu không đúng';
                return view('website.login',compact('error'));
            }
    }

}
