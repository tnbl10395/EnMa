<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;

use Illuminate\Support\MessageBag;
use Validator;
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
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');


    }

//    public function showLoginForm() {
//        return view("auth.login");
//    }

    public function login(Request $request){
        $rules=
            [
                'username'=>'required',
                'password'=>'required|min:5|max:20'
            ];
        $mess=    [
                'username.required'=>'Please enter your username',
                'password.required'=>'Please enter your password',
                'password.min'=>'Your password is from 5 to 20 characters',
                'password.max'=>'Your password is from 5 to 20 characters',
            ];
        $validate = Validator::make($request->all(),$rules,$mess);
      //  $cre = array('name'=>$request->username,'password'=>$request->password);

        if($validate->fails()){
            return redirect()->back()->withErrors($validate);
        }
        else{
            $name = $request->input('username');
            $pass = $request->input('password');
            if(Auth::attempt(['name'=>$name, 'password'=>$pass])){
                return view('dashboard');

            }else{
                $errors = new MessageBag(['errorlogin'=>'Username or Password is not correct!']);
                return redirect()->back()->withInput()->withErrors($errors);
            }

        }
         //   dd($validate);
     //  dd($request->all());

    }
}
