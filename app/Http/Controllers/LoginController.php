<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Middleware\RedirectIfAuthenticated;


class LoginController extends Controller
{

    private $user;

    public function __construct() {
        $this->user = new User();
    }

    public function getLogin() {
        return view('login');
    }

    

    public function postLogin(Request $request) {
        $email = $request->email;
        $password = $request->password;
        // $name = $request->name;
    
        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            // Authentication passed...
            if(Auth::user()->admin == 1){
                return redirect()->route('admin')->with('message', 'Chúc mừng bạn đã đăng nhập thành công');
            }else {
                return redirect('read');
            }
        }else{
            return redirect()->route('welcome')->with('message', 'Bạn đã đăng nhập sai email hoặc mật khẩu, mời bạn đăng nhập lại!');
        }

    }

    public function postLogOut() {
        Auth::logout();
        return redirect()->route('welcome');
    }
}
