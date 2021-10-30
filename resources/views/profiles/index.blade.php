@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row ">
            <div class="col-3 p-5">
                <img src="{{ asset('img/icon.png')}}"  width="150px" height="150px" class="rounded-circle">
            </div>

            <div class="col-9 pt-5">
                <div class="d-flex justify-content-between align-items-baseline">
                    <h1>{{ $user->username }}</h1>
                    <a href="/p/create">Add New Post</a>
                </div>
                <div class="d-flex">
                    <div class="pr-5"><strong>6</strong> posts</div>
                    <div class="pr-5"><strong>66,6m</strong> followers</div>
                    <div class="pr-5"><strong>66</strong> following</div>
                </div>
                <div class="pt-4 font-weight-bold ">{{ $user->name }}</div>
                <div>

{{--                    {{ $user->profile->bio }}--}}
                </div>
                <div class="font-weight-bold">
{{--                    <a href="{{ $user->profile->website }}" target="_blanc">--}}
{{--                         {{ $user->profile->website }}--}}
{{--                    </a>--}}
                </div>

            </div>
            <div class="row pt-5">
                <div class="col-4">
                    <img src="https://picsum.photos/320/290?random=1" class="w-100">
                </div>
                <div class="col-4">
                    <img src="https://picsum.photos/320/290?random=2" class="w-100">
                </div>
                <div class="col-4">
                    <img src="https://picsum.photos/320/290?random=3" class="w-100">
                </div>


            </div>
        <div class="row pt-5">
            @foreach ( $user->posts as $post)
                <div class="col-4 col-md-4 align-self-stretch">
                    <img src="/storage/{{ $post->image }}" class="w-100 h-100" style="max-height: 296px">

                </div>
            @endforeach
        </div>
    </div>
@endsection
