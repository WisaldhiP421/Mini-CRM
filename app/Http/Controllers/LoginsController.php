<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginsController extends Controller
{
    public function index(){
        if(Auth::check()){
            return redirect(route('company.index'));
        } else {
            return view('login.index');
        }
    }

    public function authenticate(Request $req){
        $req->validate([
                    'email' => 'required|email',
                    'password' => 'required'
                ]);
            
                $data = [
                    'email' => $req->input('email'),
                    'password' => $req->input('password'),
                ];
        
                if (Auth::Attempt($data)) {
                    return redirect(route('company.index'));
                }else{
                    return back()->with('fail', 'Email or Password Incorrect');
                }
            
        
        
    }
        
        public function actionlogout()
        {
            Auth::logout();
            return redirect(route('login'));
        }
}
