<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Article;

use DB;

class PagesController extends Controller
{
    public function welcome(){
        return view('welcome') ;
    }

    public function home1(){
        return view('home1') ;
    }

    public function single($id){
        
        $article = DB::table('articles')->where('id', $id)->find($id);
        
        return view('single')->with('article', $article);
    }

    public function preference(){
        return view('preference');
    }

    public function landing(){
        return view('admin.landing');
    }

    public function publisher(){
        return view('admin.publisher');
    }

    public function edit(){
        return view('admin.edit');
    }

    public function report(){
        return view('admin.report');
    }
}
