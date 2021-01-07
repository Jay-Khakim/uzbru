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


    //Information
    public function partners(){
        $partners = Partner::paginate(10);
        return view('information.partners')->with(compact('partners'));
    }

    public function faq(){
        return view('information.faq');
    }

    // News
    public function news(){
        $news = News::paginate(8);
        // dd($news);
        return view('news.news')->with(compact("news"));
    }

    public function associationnews(){
        $news = News::where('type', "association")
        ->paginate(8);
        // dd($news);
        return view('news.association-news')->with(compact("news"));
    }

    public function singlenews($language, $id){
        $single = News::where('id', $id)->first();
        $members = Membership::where("id", $id)->first();
        return view("news.single-news")->with(compact("single", "members"));
    }

    // Media
    public function photos(){
        $photos = Media::where("status", "photo")
        ->paginate(16);
        return view("media.photo")->with(compact("photos"));
    }

    public function videos(){
        $videos = Media::where("status", "video")
        ->paginate(4);
        return view("media.videos")->with(compact("videos"));
    }


}
