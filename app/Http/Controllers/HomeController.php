<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {   
        $categoryList = DB::table('book_categories')->get();
        return view('index',["list"=>$categoryList]);
    }
}
