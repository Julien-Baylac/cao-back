<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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

    protected function authenticate(Request $request)
    {
        // return Hash::make($request->password);

        // if( User::where('email', $request->email)
        // ->where('password', Hash::make($request->password))
        // ->exists() ) {

        //     $user = User::select('email', 'password', 'api_token')
        //     ->where('email', '=', $request->email)
        //     ->where('password', '=', Hash::make($request->password))
        //     ->value('api_token');

        // } else {
        //     return 'no token';
        // }


        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return Auth::User()->api_token;
        } else {
            return 'non connecté';
        }
    }

}
