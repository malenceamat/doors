@extends('admin.general')
@section('dealer')
    <form action="{{route ('register_dealer')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="exampleFormControlInput1">ФИО</label>
            <input type="text" class="form-control" name="name" placeholder="Фамилия Имя Отчество">
        </div>
        <div class="form-group" style="margin-top: 10px">
            <label for="exampleFormControlInput1">E-mail</label>
            <input type="email" class="form-control" name="email" placeholder="example@doc.org">
        </div>
        <div class="form-group" style="margin-top: 10px">
            <label for="exampleFormControlInput1">Пароль</label>
            <input type="text" class="form-control" name="password">
        </div>
            <button style="margin-top: 20px" class="btn btn-outline-secondary btn-rounded mb-2 me-4">Зарегистрировать</button>
    </form>
@endsection
