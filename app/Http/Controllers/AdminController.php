<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\Auth\RegistrationRequest;
use App\Mail\UserRegistrationMail;
use Illuminate\Support\Str;
use Carbon\Carbon;

use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    function login(){
        return view('admin.auth.login');
    }
    function register(){
        return view('admin.auth.register');
    }
    function save(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:admins',
            'password' => 'required|min:5|max:12',
        ]);

        
        // Insert Data
        $admin = new Admin;
        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->password = Hash::make($request->password);
        if($admin->save()){
            return back()->with('success','New User Register Success');
        }else{
            return back()->with('fail','Something went to wrong,try again later');
        }
        //return $request->input();
    }

    function check(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:5|max:12',
        ]);
        $userInfo = Admin::where('email', $request->email)->first();
        if(!$userInfo){
            return back()->with('fail','User Not Found');
        }else{
            if(Hash::check($request->password, $userInfo->password)){
                $request->session()->put('LoggedUser', $userInfo->id);
                return redirect('admin/dashboard');
            }else{
                return back()->with('fail','Incorrect Password');
            }
        }
        //return $request->input();
    }

    function authenticate(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:5|max:12',
        ]);
        $user = Admin::where('email', $request->email)->first();
        if(!$user){
            return back()->with('fail','User Not Found');
        }
        
        
        $login_credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if (Auth::guard('admin')->attempt($login_credentials, $request->remember)) {
            if (request()->redirectTo != '') {
                return redirect($request->redirectTo)
                    ->with('success', 'You are successfully logged in.');
            }
            // Authentication passed...
            return redirect()->route('admin.dashboard')
                ->with('success', 'You are successfully logged in.');
        }else{
            session()->flash('error','Either Email/Password is Incorrect');
            return back()->withInput($request->only('email'));
        }
        //return $request->input();
    }

    function logout(){
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
    }

    public function postRegister(RegistrationRequest $request){
        
         try {
            $user = new Admin();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->phone = $request->phone;
            $user->password = Hash::make($request->password);
            $user->remember_token = Str::random(30);
            $user->created_at = Carbon::now();
            $user->save();


        } catch (\Exception $exception) {
            return redirect()->back()
                ->with('failed', 'Register operation failed. Cause '.$exception->getMessage());
        }  

        return redirect()->back()->withInput()
            ->with('success', 'Register Success.');
    }


    public function getConfirmRegister(Request $request)
    {
        if (empty($request->token)) {
            return "Invalid Token. <a href='". route('admin.login') ."'>Click Here</a> to login";
        }
        $user = Admin::where('email_verified_at', null)
            ->where('remember_token', $request->token)
            ->first();
        if (empty($user)) {
            $msg = "Invalid Token";
            return redirect()->route('admin.login')
                ->with('fail', $msg);

        }

        $user->email_verified_at = Carbon::now();
        $user->remember_token = '';
        $user->save();

        return redirect()->route('admin.login')
            ->with('success', 'Email verified.');
    }
}
