@extends('user.general')
@section('content')
    @include('user.content.slider')
    @include('user.content.info_block')
    @include('user.content.popular_categories')
    @include('user.content.categories')
    @include('user.content.recommendations')
    @include('user.content.about')
    @include('user.content.news')
    @include('user.content.map')
@endsection

