<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use Hash;
use Auth;
use Session;


class AuthController extends Controller
{
    public function home(Request $req)
    {
        // Retreiving the session data using 'Request instance' methods
        $userId = $req->session()->get('user_id','No Session Data Found !!!');
        $user = User::find($userId);
        $userName = $user->name;
        return view('CustomAuth.home',['username'=>$userName]);
    }
    public function adminhome()
    {
        // Retreiving the session data using 'Global Session Helper' methods
        $userId =session('user_id');
        $user = User::where('id',$userId)->first();
        $userName = $user->name;
        return view('CustomAuth.admin',compact('userName'));
    }

    public function register(Request $req)
    {
        return view('CustomAuth.register');
    }
    public function registerUser(Request $req)
    {
        $req->validate([
            'name'=>'required',
            'email'=>'required|email',
            'password'=>'required|min:5|confirmed',
        ]);
        $user = User::create([
            'name' => $req ->name,
            'email' => $req->email,
            'password' => Hash::make($req->password),
        ]);
        // Storing the data to session via 'Request instance' methods
        $req->session()->put('user_id', $user->id);
        return redirect()->route('home');
    }

    public function logout(Request $req)
    {
        $req->session()->flush();
        return redirect()->route('guesthome');
    }

    public function login()
    {
        return view('CustomAuth.login');
    }
    public function authenticateUser(Request $req)
    {
        $user = User::where('email' , $req->email)->first();
        $role_id = $user->role_id;
        if ($user && Hash::check($req->password, $user->password)) {
        // Storing the data to session via 'Global Session Helper' methods
            session(['user_id' => $user->id]);
            if($role_id == 1){
                return redirect()->route('adminhome');
            }else{
                return redirect()->route('home');
            }
        }
        else{
            return redirect()->route('login')->with('message','Email or password doesnot match!!!');
        }
    }
}
