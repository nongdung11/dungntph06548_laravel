<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
class AuthController extends Controller
{

    use AuthenticatesUsers;

    public function getLoginForm()
    {
    	return view('auth/login');
    }

    public function LoginForm(Request $request)
    {
    	if ($this->attemptLogin($request)) 
    	{
    		return redirect()->route('index');
    	} 	
    		return redirect()->route('auth.login');
    }
}
