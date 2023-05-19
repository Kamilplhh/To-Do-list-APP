<?php

namespace App\Http\Controllers;

use Hash;
use Session;
use App\Models\User;
use App\Models\tag;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }  
      
    public function customLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
   
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('/');
        }
  
        return redirect()->back()->with('message', 'Wrong data!');
    }
      
    public function customRegistration(Request $request)
    {  
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);
           
        $data = $request->all();
        $check = $this->create($data);
         
        return redirect('/');
    }

    public function create(array $data)
    {
      return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password'])
      ]);
    }    
    
    public function signOut() {
        Session::flush();
        Auth::logout();
  
        return Redirect('/');
    }

    public function Profile($id) {

        $tags = tag::where('userid', Auth::id())->get();
        $user = User::where('id', $id)->get();

        return view('profile', compact(['user', 'tags']));
    }

    public function updateLogin(Request $request) {

        user::where('id', Auth::id())->update([
            'name'=>$request['name'],
            'password' => Hash::make($request['password'])
            ]);
        
        return redirect()->back();
    }
}
