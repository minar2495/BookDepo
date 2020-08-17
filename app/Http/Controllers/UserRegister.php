<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserRegister extends Controller
{
    public function saveUser(Request $req)    
    {      
       $isUnique = $this->checkUnique($req->email_id);      
       if(!$isUnique){
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
    public function login(Request $req){
        $result = DB::table('registered_user')
        ->where('email',$req->username)
        ->where('password',$req->password)
        ->get();
        if($result){
            //set session
        }else{

        }
    }
    public function checkUnique($email_id){
        $result = DB::table('registered_user')
        ->where('email',$email_id)
        ->get();
        return $result;
    }
}
