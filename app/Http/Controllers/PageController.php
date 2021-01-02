<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Product;

class PageController extends Controller
{
    public function index(){
        $news = News::all()
        ->take(8);
        // dd($news);
        return view("index")->with(compact("news"));
    }


    // Association
    public function association(){
        return view('association.association');
    }
}
