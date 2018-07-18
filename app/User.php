<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Model
{

    protected $table = 'users';

    public function __construct(){
        DB::Connection();
    }

    public function create($name, $email, $password, $admin) {
        DB::table('users') -> insert(['name'=>$this->name ,'email'=>$this->email,'password' => $this->password, 'admin' => $this->admin]);
    }
    

}
