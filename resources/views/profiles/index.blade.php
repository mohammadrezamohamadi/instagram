@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row ">
            <div class="col-3 p-5">
{{--                <img src="storage/{{ $user->profiles->image }}" class="rounded-circle w-100">--}}
                <img src="{{ asset('storage') .'/'. $user->profile->getProfileImage() }}" class="rounded-circle w-100">
            </div>

            <div class="col-9 pt-5">
                <div class="d-flex align-items-center">
                    <h1>{{ $user->username }}</h1>
                    @can('update', $user->profile)
                        <a class="btn btn-outline-secondary ml-3" href="/profile/{{$user->username}}/edit" role="button">
                            Edit Profile
                        </a>
                    @else
                        <a class="btn btn-primary ml-3" href="#" role="button">
                            Follow
                        </a>
                    @endcan
                </div>
                <div class="d-flex">
                    <div class="pr-5"><strong>{{ $user->posts->count()}}</strong> posts</div>
                    <div class="pr-5"><strong>66,6m</strong> followers</div>
                    <div class="pr-5"><strong>66</strong> following</div>
                </div>
                <div class="pt-4 font-weight-bold ">{{ $user->name }}</div>
                <div>



                    {!! nl2br(e($user->profile->bio)) !!}
                </div>
                <div class="font-weight-bold">
                    <a href="{{ $user->profile->website }}" target="_blanc">
                        {{ $user->profile->website }}
                    </a>
                </div>

            </div>

        <div class="row pt-5">
            @foreach ( $user->posts as $post)
                <div class="col-4 col-md-4 mb-4 align-self-stretch">
                    <a href="/p/{{ $post->id }}">
                        <img class="img border" height="300" src="{{ asset("storage/$post->image") }}">
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
