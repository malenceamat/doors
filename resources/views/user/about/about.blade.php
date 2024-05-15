@extends('user.general')
@section('about')
    <div class="middle" style="margin-top: 20px">
        <div class="container">
            <h1 class="pagetitle">О нас</h1>
            <div class="row">
                <div class="col-sm-6 col-lg-5 col-sm-push-6 col-lg-push-7">
                    <div class="index-about-img">
                        <img src="{{ asset('storage/' . ($about['image'] ?? '')) }}" alt="{{ $about['image'] ?? '' }}">
                    </div>
                    <div class="push40"></div>
                </div>

                <div class="col-sm-6 col-lg-7 col-sm-pull-6 col-lg-pull-5">
                    <div class="content">
                        {!! $about->text ?? '' !!}
                    </div>
                </div>
            </div>
            <div class="push30"></div>
        </div>
@endsection
