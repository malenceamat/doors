@extends('admin.general')
@section('partners_show')
    <div class="col-xxl-12">
        <div class="row">
            @foreach($partners as $data)
                <div class="col-sm-3" style="padding: 10px">
                    <div class="card">
                        <img src="{{asset('/storage/'. $data['image'])}}" alt="...">
                        <a href="{{route('partners', ['id' => $data['id']])}}" >
                            <button class="btn btn-outline-secondary mb-2 me-4" style="margin: 10px">Редактировать
                            </button>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
