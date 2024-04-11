@extends('admin.general')
@section('slider_show')
    <div class="col-xxl-12">
        <div class="row">
            @foreach($sliders as $slider)
                <div class="col-sm-3" style="padding: 10px">
                    <div class="card">
                        <img src="{{asset('/storage/'. $slider['image'])}}" alt="...">
                        <div class="card-body">
                            <h5 class="card-title mb-3">{{$slider['title']}}</h5>
                        </div>
                        <a href="/slider/{{$slider['id']}}">
                            <button class="btn btn-outline-secondary mb-2 me-4" style="margin: 10px">Редактировать
                            </button>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
