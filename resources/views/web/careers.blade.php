@extends('web.layouts.master')
@section('content')
    <div class="jobs-container">
        <div class="job-heading" @if(app()->getLocale()=='ar')style="direction: rtl" @else style="direction: ltr" @endif >
            <h4>@lang('front.choose your category')</h4>
            <h2  >
                @lang('front.What kind of jobs')
            </h2 >
            <p >
                @lang('front.Join our team and play')
            </p>
        </div>

        <div class="job-boxs">
            @foreach($careers as $career)
            <div class="box">
                <div class="heading">
                    <div class="icon">
                        <i class="fa-solid fa-bag-shopping"></i>
                    </div>
                    <h2>{{$career->translate(app()->getLocale())->title}}</h2>
                </div>
                <div class="job-description">
                    <div class="title">
                        <p>{{$career->translate(app()->getLocale())->title}}</p>
                    </div>
                    <div class="description">
                        <b>Location:</b>
                        {{$career->translate(app()->getLocale())->location}}
                    </div>
                    <div class="description">
                        <b>Experience:</b>
                        {{$career->translate(app()->getLocale())->experience}}
                    </div>
                </div>

                <div class="links">
                    <a href="job.html"> Apply </a>
                    <a href="" class="open-link" onclick="openBox(event)">
                        Learn More
                    </a>
                </div>
                <div class="overview-box">
                    <i
                        class="fa-solid fa-xmark close close-btn"
                        onclick="closeBox(event)"
                    ></i>
                     <p>
                         {!! $career->translate(app()->getLocale())->description !!}
                     </p>

                </div>
            </div>
            @endforeach
        </div>
        <br><br><br><br><br><br><br><br><br>

    </div>
 @endsection
