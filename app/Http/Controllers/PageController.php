<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Media;
use App\Models\Membership;
use App\Models\Partner;
use App\Models\Staff;

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

    public function about(){
        $staff = Staff::all();
        return view('association.aboutus')->with(compact("staff"));
    }

    public function services(){
        return view('association.services');
    }

    public function team(){
        $staff = Staff::all();
        return view('association.team')->with(compact("staff"));
    }

    public function branches(){
        return view('association.branches');
    }

    public function bemember(){
        return view('membership.bemember');
    }

}
