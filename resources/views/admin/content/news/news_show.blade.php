@extends('admin.general')
@section('news_show')
    <div class="col-xxl-12">
        <div class="row">
            @foreach($news as $data)
                <div class="col-sm-3" style="padding: 10px">
                    <div class="card">
                        <img src="{{asset('/storage/'. $data['image'])}}" alt="...">
                        <div class="card-body">
                            <h5 class="card-title mb-3">{{$data['title']}}</h5>
                        </div>
                        <a href="{{route('news_index', ['id' => $data['id']])}}" >
                            <button class="btn btn-outline-secondary mb-2 me-4" style="margin: 10px">Редактировать
                            </button>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
