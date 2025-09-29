<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        // $this->middleware('guest:web,empleados')->except('logout');
        // $this->middleware('auth:web,empleados')->only('logout');

         $this->middleware(function ($request, $next) {
        if (Auth::guard('web')->check()) {
            return redirect('/'); // clientes
        }
        if (Auth::guard('empleados')->check()) {
            return redirect('/'); // empleados
        }
        return $next($request);
    })->except('logout');

    $this->middleware('auth:web,empleados')->only('logout');
    }

    public function username(){
        return 'dni';
    }

    protected function credentials(Request $request){
        return array_merge(
            $request->only($this->username(), 'password'),
            ['is_active' => 1]
        );
    }


    public function login(Request $request)
{
    $this->validate($request, [
        $this->username() => 'required|string',
        'password' => 'required|string',
        'tipo_usuario' => 'required|string'
    ]);

    $credentials = array_merge(
        $request->only($this->username(), 'password'),
        ['is_active' => 1]
    );

    $guard = $request->input('tipo_usuario');

    if (Auth::guard($guard)->attempt($credentials, $request->filled('remember'))) {
        // Redirige según el tipo de usuario
        return redirect()->intended('/');
        // if ($guard === 'web') {
        //     return redirect()->intended('/home'); // dashboard de clientes
        // } else {
        //     return redirect()->intended('/home'); // dashboard de empleados
        // }
    }

    return back()->withErrors([
        $this->username() => 'Credenciales incorrectas o usuario inactivo.',
    ]);
}

}
