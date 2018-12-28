<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Session;
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

    private const ADMIN = 1;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login()
    {
        $credentials = $this->validate(request(), [
            'email'    => 'required|string|email|max:255',
            'password' => 'required|string|max:255',
        ]);

        if (Auth::attempt($credentials)) {
            if (auth()->user()->user_type_id === SELF::ADMIN) {
                return redirect()->route('admin');     
            } else {
                return redirect()->route('home');
            }
            
        } else {
            Session::flash('message',trans('auth.failed'));
            return redirect('login');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('home');
    }
}
