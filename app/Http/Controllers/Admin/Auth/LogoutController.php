<?php

namespace App\Http\Controllers\Admin\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class LogoutController extends Controller
{
	public function getLogout()
	{
		Auth::guard('admin')->logout();
		return redirect()->route('admin.get.login');
	}
}
