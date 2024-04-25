@extends('user.general')
@section('pay_delivery')
    <div class="middle">
        <div class="container">
            <br>
            <h1 class="pagetitle">Оплата и доставка</h1>
            <div class="content">
                 {!! $pay_delivery['text'] ?? '' !!}
            <div class="push20"></div>
        </div>
    </div>
@endsection
