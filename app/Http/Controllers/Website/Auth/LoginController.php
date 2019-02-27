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
    public function postLogin( Request $request)
    {
        if($request->ajax()){
            $email = $request->post('email');
            $password = $request->get('password');
            if (Auth::attempt(['email' => $email, 'password' => $password]))
            {
                return 1;
            }
            else
            {
                return 0;
            }
           
        }
    }

}
