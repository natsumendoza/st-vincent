<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    protected function validateLogin(Request $request)
    {

        $loginType = $request['loginType'];
        if($loginType == 'admin') {
            $this->validate($request, [
                'username' => 'required|string',
                'password' => 'required|string',
            ]);
        } else {
            $this->validate($request, [
                'lrn' => 'required|string',
                'password' => 'required|string',
            ]);
        }
    }

    protected function credentials(Request $request)
    {

        $loginType = $request['loginType'];
        if($loginType == 'admin') {
            return $request->only('username', 'password');
        } else {
            return $request->only('lrn', 'password');
        }
    }


}
