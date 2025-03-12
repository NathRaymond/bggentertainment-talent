<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    /**
     * Determine where to redirect users after login.
     *
     * @return string
     */
    protected function redirectTo()
    {
        $user = Auth::user();

        if ($user->user_type === 'client') {
            return route('client.dashboard');
        } elseif ($user->user_type === 'partnership') {
            return route('partnership.dashboard');
        } elseif ($user->user_type === 'vendor') {
            return route('vendor.dashboard');
        }

        return '/home';
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('auth')->only('logout');
    }
    public function logout()
    {
        Session::flush();
        Auth::logout();

        return redirect('/login');
    }
}
