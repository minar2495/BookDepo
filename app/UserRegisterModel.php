<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserRegisterModel extends Model
{
    protected $table = 'registered_user';
    
    public function saveUserData($req){
        return $req;
    }
}
