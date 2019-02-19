<?php

namespace App\Http\Controllers\Website\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class LogoutController extends Controller
{
    public function getLogout()
    {
		Auth::logout();
		return redirect()->back();
    }
}
