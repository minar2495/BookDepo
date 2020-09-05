<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Book extends Controller
{
    public function add(Request $req)
    {
        DB::table('books')->insert(
            [
                "book_name"=>$req->book_name,
                "author"=>$req->author
            ]
        );
        return redirect('list');
    }
    public function update($id)
    {

    }
    public function delete($id)
    {

    }
    public function show()
    {        
        $list = DB::table('books')->paginate(10);
        return view('book.list',["list"=>$list]);
    }
    public function filter(Request $req)
    {
        if($req->categoryId)
        {
            $list = DB::table('books')
                ->where('book_category_id',$req->categoryId)                
                ->paginate(10); 
        }
        else
        {
            $list = DB::table('books')
                ->where('category_id','like','%'.$req->search.'%')
                ->orwhere('author','like','%'.$req->search.'%')
                ->paginate(10);
        }                
        return view('book.list',["list"=>$list]);
    }
    
}
