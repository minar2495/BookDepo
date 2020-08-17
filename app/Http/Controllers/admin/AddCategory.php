<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AddCategory extends Controller
{
    public function addCategory(Request $request){
        DB::insert('insert into book_categories (category_name) values (?)', [$request->category_name]);
        return redirect('addCategory');        
    }    
}
