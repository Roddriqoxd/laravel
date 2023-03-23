<?php

namespace App\Http\Controllers;

use App\Http\Requests\PedidoDeRegistro;
use App\Models\Afiliados;
use App\Models\User;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules;

class ControladoDeRegistro extends Controller
{

    public function registrar(Request $request)
    {
        $request->validate([
           'name' => ['required','string','max:255'],
           'email'=> ['required','string','email', 'max:255','unique:users,email'],
           'password'=> ['required','confirmed',Rules\Password::default()] 
        ]);

        User::create([
            'name' => $request->name,
            'email'=> $request->email,
            'password'=> $request->password,
        ]);

        return to_route('login')->with('status','Usuario creado exitosamente');
    }


    public function entrar(Request $request)
    {
        $login = $request->validate([
            'name'=>['required'],
            'password'=>['required']
        ]);

        if(Auth::attempt($login)){
            $request->session()->regenerate();

            return redirect()->intended('/registrar/mostrar');
        }
        throw ValidationException::withMessages([__('auth.failed')]);
    }

    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return to_route('login');
    }
}
