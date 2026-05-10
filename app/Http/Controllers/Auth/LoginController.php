<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{

    use AuthenticatesUsers;

    protected $redirectTo = '/dashboard';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    
    protected function authenticated(Request $request, $user)
    {
        // Redirect based on user role
        if ($user->role == 'Murid' || $user->role == 'Siswa') {
            return redirect()->route('siswa.dashboard');
        }
        
        if ($user->role == 'Guru') {
            return redirect()->route('guru.dashboard');
        }
        
        // Admin, dll redirect ke dashboard admin
        return redirect()->route('dashboard');
    }
}
