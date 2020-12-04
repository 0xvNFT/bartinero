<?php

namespace App\Http\Controllers\Auth;
use App\User;
use Illuminate\Http\Request;//validation ito for request
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;//hashing

class RegisterController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest');
    }

    public function register(){
        return view('auth.register');
    }

        //validate/storing/sign/redirect data controller store method for POST
        public function store(Request $request) {
            //diedump ito dd($request); dd($request->get('email')); dd($request->email);
            $this->validate($request, [
                'firstname' => 'required|max:20',
                'lastname' => 'required|max:20',
                'sex' => 'required',
                'number'=>'required|max:11',
                'address' => 'required|max:100',
                'barangay' => 'required|max:100',
                'email' => 'required|email|max:35',
                'password' => 'required|confirmed',
            ]);
            User::create([
                'firstname'=>$request->firstname,
                'lastname'=>$request->lastname,
                'sex' =>$request->sex,
                'number'=>$request->number,
                'address' =>$request->address,
                'barangay' =>$request->barangay,
                'email' =>$request->email,
                'password' =>Hash::make($request->password),
            ]);

            //sign in user check
            auth()->attempt($request->only('email', 'password'));
                
            /**auth()->attempt([
                'email' => $request->email,
                'password' => $request->password ,
            ]);**/
    
            return redirect()->route('dashboard'); //redirect to dashboard when register
        }
}
