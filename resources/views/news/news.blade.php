@extends('layouts.app')
@section('title')
<title>@lang("News") | O'zBRU</title>
@endsection
@section('content')
<section class="no-padding sh-news">
    <div class="sub-header ">
        <span>@lang("Uzbekistan Business Development Association")</span>
        <h3>@lang("News")</h3>
        <ol class="breadcrumb">
             <li>
                <a href="{{route('home', app()->getLocale())}}"><i class="fa fa-home"></i> @lang("Main")</a>
             </li>
             
             <li class="active"> @lang("News")</li>
         </ol>
    </div>
</section>
<!-- /subheader -->
    
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="news-list-warp">
                    @foreach ($news as $single)
                    <div class="item-new-list "> <!-- add class no-position --> 

                        <div class="feature-new-warp">
                            <a href="#">
                                <img src="/storage/{{$single->image1}}" alt="Image">
                            </a>
                        </div>
                        <div class="box-new-info">
                            <div class="new-info">
                                <h4>
                                    <a href="single_new.html">{{$single->title}}</a>
                                </h4>
                                <p><i class="fa fa-calendar" aria-hidden="true"></i>{{$single->created_at->format('d')}}
                                @if ($single->created_at->format('m') == 1)
                                    @lang("Jan")
                                @endif
                                @if ($single->created_at->format('m') == 2)
                                    @lang("Feb")
                                @endif
                                @if ($single->created_at->format('m') == 3)
                                    @lang("Mar")
                                @endif
                                @if ($single->created_at->format('m') == 4)
                                    @lang("Apr")
                                @endif
                                @if ($single->created_at->format('m') == 5)
                                    @lang("May")
                                @endif
                                @if ($single->created_at->format('m') == 6)
                                    @lang("Jun")
                                @endif
                                @if ($single->created_at->format('m') == 7)
                                    @lang("Jul")
                                @endif
                                @if ($single->created_at->format('m') == 8)
                                    @lang("Aug")
                                @endif
                                @if ($single->created_at->format('m') == 9)
                                    @lang("Sep")
                                @endif
                                @if ($single->created_at->format('m') == 10)
                                    @lang("Oct")
                                @endif
                                @if ($single->created_at->format('m') == 11)
                                    @lang("Nov")
                                @endif
                                @if ($single->created_at->format('m') == 12)
                                    @lang("Dec")
                                @endif,
                                {{$single->created_at->format('Y')}}</p>
                                @if ($single->author)
                                    <p><i class="fa fa-user" aria-hidden="true"></i>{{$single->author}}</p>
                                @else 
                                    <p><i class="fa fa-user" aria-hidden="true"></i>@lang("By Admin")</p>
                                @endif
                                
                            </div>
                            <div class="tapo">
                                <p>
                                    @php
                                    if(strlen($single->body)> 159){
                                        echo substr($single->body, 0, 150)."...";
                                    }else {
                                        echo $single->body;
                                    }  
                                    @endphp      
                                </p>
                            </div>
                            <a href="#" class="ot-btn btn-sub-color">@lang("Read More")</a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            {{$news->links()}}
        </div>
    </div>
</section>

{{-- <section class="bg-subcr-1">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="subcribe-warp">
                    <p class="sub-text-subcri">Newsletter for recieve </p>
                    <form class="form-inline form-subcri">
                      <div class="form-group">
                        <label for="exampleInputName2"><small>our <span> latest company</span>updates</small></label>
                        <input type="text" class="form-control" id="exampleInputName2" placeholder="Your E-mail Address">
                      </div>
                      <button type="submit" class="btn-subcrib"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section> --}}
<!-- /Subcribe -->
@endsection