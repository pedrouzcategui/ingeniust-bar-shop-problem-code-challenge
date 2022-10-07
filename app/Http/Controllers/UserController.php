<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{

    public function create(Request $request){
        $form_fields = $request->validate([
            'name' => 'required',
            'email' => ['required','unique:users,email'],
            'password' => ['required','min:8','confirmed','alpha_num']
        ]);

        $form_fields['password'] = bcrypt($request->input('password'));

        // Create user
        $user = User::create($form_fields);

        // Nice to have: Aggregate Email Confirmation?
        
        auth()->login($user);
        
        // Redirect to dashboard
        return redirect('/admin');
    }

    public function register(){
        return view("auth.register");
    }

    public function verify(Request $request){
        $formFields = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        if(auth()->attempt($formFields)){
            $request->session()->regenerate();
            return redirect('/admin');
        }
    }

    public function logout(Request $request){
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
