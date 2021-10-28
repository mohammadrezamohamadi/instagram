@extends('layouts.app')

@section('content')
<div class="container">
{{--    <div class="row justify-content-center">--}}
{{--        <div class="col-md-8">--}}
{{--            <div class="card">--}}
{{--                <div class="card-header">{{ __('Dashboard') }}</div>--}}
    <div class="row ">
        <div class="col-3 p-5">
            <img src="img/icon.png" width="150px" height="150px" class="rounded-circle">
        </div>

{{--                <div class="card-body">--}}
{{--                    @if (session('status'))--}}
{{--                        <div class="alert alert-success" role="alert">--}}
{{--                            {{ session('status') }}--}}
{{--                        </div>--}}
{{--                    @endif--}}
        <div class="col-9 pt-5">
            <div><h1>MaktabSharif</h1></div>
            <div class="d-flex">
                <div class="pr-5"><strong>6</strong> posts</div>
                <div class="pr-5"><strong>66,6m</strong> followers</div>
                <div class="pr-5"><strong>66</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold ">Bootcamp:PHP Maktab54</div>
            <div>
                مکتب یه مدرسه برنامه‌نویسیه، یعنی جایی که در کمترین مدت مهارت‌های مورد نیاز بازار کار رو به صورت عملی یاد میده
                <br>
                -
                <br>
                  آینده‌ات رو بساز
            </div>
            <div class="font-weight-bold"><a href="https://maktabsharif.ir">https://maktabsharif.ir</a> </div>

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

{{--                    {{ __('You are logged in!') }}--}}
{{--                </div>--}}
        <div class="row pt-5">
            <div class="col-4">
                <img src="https://picsum.photos/320/290?random=4" class="w-100">
            </div>
            <div class="col-4">
                <img src="https://picsum.photos/320/290?random=5" class="w-100">
            </div>
            <div class="col-4">
                <img src="https://picsum.photos/320/290?random=6" class="w-100">
            </div>
        </div>
    </div>
</div>
@endsection
