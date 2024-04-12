@extends('admin.general')
@section('info_show')
    <div class="col-sm-3" style="padding: 10px">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">йцу</h4>
            </div>
            <div class="card-footer">
                <p class="mb-0">1</p>
            </div>
            <form method="get" action="/stages/3">
                @csrf
                <button class="btn btn-outline-secondary mb-2 me-4" style="margin: 10px">Редактировать</button>
            </form>
        </div>
    </div>
@endsection
