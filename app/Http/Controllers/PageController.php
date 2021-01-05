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


    // Membership
    public function bemember(){
        return view('membership.bemember');
    }

    public function members(){
        $members = Membership::paginate(12);
        return view('membership.members')->with(compact("members"));
    }

    public function singlemember($language, $id){
        $members = Membership::take(10);
        $member = Membership::where("id", $id)->first();
        return view("membership.single-member")->with(compact("member", "members"));
    }

    public function checkmembers(){
        return view('membership.checkmembers');
    }

    public function check(){
        // $dt = Carbon::now();
        $search_text = $_GET['check'];
        $member = Membership::where('inn', 'LIKE', '%'.$search_text.'%')->get();
        // dd($member);

        return view('membership.checkmembers')->with(compact('member'));
    }

    public function partners(){
        $partners = Partner::paginate(10);
        return view('information.partners')->with(compact('partners'));
    }

}
