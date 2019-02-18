<?php

namespace App\Http\Controllers\Admin\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:admin');
    }

    public function getLogin()
    {
        return view('admin.login');
    }

    public function postLogin( Request $request)
    {
            $email = $request->email;
            $password = $request->password;
            $remember = isset($request->remember);
            if (Auth::guard('admin')->attempt(['email' => $email, 'password' => $password], $remember)) {
                return redirect()->route('admin.index');
            } else {
                $error ='Tài khoản hoặc mật khẩu không đúng';
                return view('admin.login', compact('error'));
            }
    }
}
