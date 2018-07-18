<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CrudController extends Controller
{

    private $user;

    public function __construct() {
        $this->user = new User();
    }


    public function getCreate() {
        return view('create');
    }
    public function postCreate(Request $request) {

        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required',
            'password' => 'required',
            'admin' => 'required'
        ]);

        $this->user->name = $request->name;
        $this->user->email     = $request->email;
        $this->user->password = Hash::make($request->password);
        $this->user->admin    = $request->admin;
        $this->user->create($request->name, $request->email, $request->password, $request->admin);

        return redirect()->route('welcome');
    }
    

    public function getDataForAdmin() {
        return view('admin');
    }

    public function getDataForUser() {
        echo "Day la trang user";
    }

    public function postLogOut() {

    }
}
