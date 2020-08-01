<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserRegister extends Controller
{
    public function saveUser(Request $req)    
    {      
       
       DB::table('registered_user')->insert(
            [
                'name' => $req->username,
                'address'=> $req->address,
                'contact'=> $req->contact_number,
                'email'=>$req->email_id,
                'password'=>$req->password
            ]
        );
        return DB::table('registered_user')->get();
    }
}
