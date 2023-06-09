@extends('layouts.app')

@section('content')
<div class="container">
    {{--        // колличество колнок и отступ--}}
    <div class="col-9 pt-5" >
        <img src="https://sun1-19.userapi.com/impg/c855124/v855124303/21d669/-5ak96MrdIQ.jpg?size=2160x2160&quality=96&sign=a3a77f302e1f07cf9161da1cff5ca23e&type=album" style="height: 300px" class="rounded-circle">
        <div>
            <h1> {{ Auth::user()->username }}
            </h1>
        </div>
        {{--            //располжение в одну строку--}}
        <div class="d-flex">
            <div class="pr-5"><strong>153</strong> posts</div>
            <div class="pr-5"><strong>23k</strong> followers</div>
            <div class="pr-5"><strong>212</strong> following</div>
        </div>     </div>
{{--    // это возвращает определенные строки из профиля--}}
    <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
    <div class="pt-4 font-weight-bold">{{ $user->profile->description }}</div>
    <div><a href="#">{{ $user->profile->url }}</a></div>


    <div class="row flex-lg-row">
        <div class="col-4 pt-5">
            <img src="https://images.hdqwalls.com/download/cyberpunk-2077-colored-band-4k-wq-2048x2048.jpg" style="height: 300px" сlass="w-100">
            <img src="https://images.hdqwalls.com/download/cyberpunk-2077-colored-band-4k-wq-2048x2048.jpg" style="height: 300px" сlass="w-100">
            <img src="https://images.hdqwalls.com/download/cyberpunk-2077-colored-band-4k-wq-2048x2048.jpg" style="height: 300px" сlass="w-100">
        </div>
    </div>
</div>
@endsection
