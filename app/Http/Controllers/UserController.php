<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
   public function create(){
    return view('user.register');
   }

   public function store(Request $request){
        $formFields = $request->validate([
            'name' => 'required',
            'email' => ['required','email'],
            'password' => ['required', 'min:6', 'confirmed']
        ]);

        $formFields['password'] = bcrypt($formFields['password']);

        $user = User::create($formFields);

        auth()->login($user);

        return redirect('/')->with('success', 'User created and logged in!');
   }

   public function logout(Request $request){
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('success', 'You are logged out!');
   }


   public function login(){
    return view('user.login');
   }


   public function authenticate(Request $request){
    $formFields = $request->validate([
   
        'email' => ['required','email'],
        'password'=>'required'
        
    ]);
        if(auth()->attempt($formFields)){
            $request->session()->regenerate();

            return redirect('/')->with('success', 'You are logged in!');
        }
        return back()->with('error', 'Wrong email or password!');
   }

  
}
