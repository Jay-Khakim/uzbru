@extends('layouts.app')
@section('title')
    <title>@lang("Check for membership") | O'zBRU</title>
@endsection
@section('content')
<section class="no-padding sh-company-history">
    <div class="sub-header ">
        <span>@lang("Uzbekistan Business Development Association")</span>
        <h3>@lang("Check for membership")</h3>
        <ol class="breadcrumb">
             <li>
                <a href="{{route('home', app()->getLocale())}}"><i class="fa fa-home"></i> @lang("Main")</a>
             </li>
             <li>
                <a href="{{route('bemember', app()->getLocale())}}">@lang("Membership")</a>
             </li>
             <li class="active">@lang("Check for membership")</li>
         </ol>
    </div>
</section>
<!-- /Sub HEader -->

<section class="bg-acc">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="tab-warp-acc desk-pdt-30">
                  <!-- Nav tabs -->
                      <ul class="nav tab-style-1 tab-style-2 tab-acc" role="tablist">
                        <li role="presentation" class="active"><a href="#Login" aria-controls="Login" role="tab" data-toggle="tab">@lang("Become a member")</a></li>
                      </ul>
                      <div class="tab-content tab-content-style-1 tab-content-style-2">
                          <div role="tabpanel" class="tab-pane fade in active" id="Login">
                              <h3 align="center">@lang("Enter the Tax Identification Number"):</h3>
                              <div class="login-warp">
                                <form class="form-contact-warp form-calc-ship cb-form" action="{{route('check', app()->getLocale())}}" method="get">
                                    @csrf
                                    <input   class="form-control" name="check" value="" required="" title="" placeholder="@lang("Enter the TIN")..." type="text">
                                    <button type="submit" name="check" class="btn-main-color btn-block"> @lang("Check")</button>
                                </form>
                              </div>
                          </div>
                     </div>
                </div>
            </div>
        </div>
    </div>
</section>
@if ($member ?? ''>0)
<section class="bg-light-grey">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title-block title-contact">
                    <h3>@lang("Search Results")</h3>
                    <span class="bottom-title"></span>
                </div>
                <div class="list-job-warp">
                    <div class="table-warp">
                        <div class="table-responsive">
                           <table class="table table-hover table-reset">
                              <thead>
                                 <tr>
                                    <th>STIR raqami</th>
                                    <th>Korxona nomi</th>
                                    <th>Manzili</th>
                                    <th>Status</th>
                                    <th>A'zolik sanasi</th>
                                  
                                 </tr>
                              </thead>
                              <tbody>
                                @foreach ($member ?? '' as $item)
                                 <tr>
                                    <td>{{$item->inn}}</td>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->address}}</td>
                                    @if ($item->status == "active")
                                        <td style="color: green;">@lang("Active")</td>
                                    @endif
                                    @if ($item->status == "inactive")
                                        <td style="color: red;">@lang("Inactive")</td>
                                    @endif
                                    <td>{{$item->created_at->format('d')}} <p> </p>
                                        @if ($item->created_at->format('m') == 1)
                                            @lang("Jan")
                                        @endif
                                        @if ($item->created_at->format('m') == 2)
                                            @lang("Feb")
                                        @endif
                                        @if ($item->created_at->format('m') == 3)
                                            @lang("Mar")
                                        @endif
                                        @if ($item->created_at->format('m') == 4)
                                            @lang("Apr")
                                        @endif
                                        @if ($item->created_at->format('m') == 5)
                                            @lang("May")
                                        @endif
                                        @if ($item->created_at->format('m') == 6)
                                            @lang("Jun")
                                        @endif
                                        @if ($item->created_at->format('m') == 7)
                                            @lang("Jul")
                                        @endif
                                        @if ($item->created_at->format('m') == 8)
                                            @lang("Aug")
                                        @endif
                                        @if ($item->created_at->format('m') == 9)
                                            @lang("Sep")
                                        @endif
                                        @if ($item->created_at->format('m') == 10)
                                            @lang("Oct")
                                        @endif
                                        @if ($item->created_at->format('m') == 11)
                                            @lang("Nov")
                                        @endif
                                        @if ($item->created_at->format('m') == 12)
                                            @lang("Dec")
                                        @endif,
                                        {{$item->created_at->format('Y')}}
                                        </td>
                                 </tr>
                                 @endforeach
                              </tbody>
                           </table>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</section>
@endif
@endsection