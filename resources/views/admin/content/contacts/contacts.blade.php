@extends('admin.general')
@section('contacts')
    <form action="{{route('contact_create')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="tab-content" id="animateLineContent-4">
            <div class="tab-pane fade show active" id="animated-underline-home" role="tabpanel"
                 aria-labelledby="animated-underline-home-tab">
                <div class="row">
                    <div class="col-xl-10 col-lg-12 col-md-8 mt-md-0 mt-4">
                        <div class="form">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="address">Адрес магазина</label>
                                        <input type="text" class="form-control mb-3"
                                               placeholder="Пример: г. Москва, ул. Калужская, 80, офис 315" id="address" name="address"
                                               value="{{$contact['address']}}">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="number">Номер телефона для связи</label>
                                        <input type="tel" class="form-control mb-3"
                                               placeholder="+79123456789" id="number" name="number"
                                               value="{{$contact['number']}}">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email">E-mail</label>
                                        <input type="email" class="form-control mb-3"
                                               placeholder="myemail@gmail.com" id="email" name="email"
                                               value="{{$contact['email']}}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="work_mode">Режим работы</label>
                                        <input type="text" class="form-control mb-3"
                                               placeholder="Пример: Пн - Пт: c 8.00 - 19.00 Сб - Вс: c 9.00 - 15.00" id="work_mode" name="work_mode"
                                               value="{{$contact['work_time']}}">
                                    </div>
                                </div>
                                <input type="hidden" name="id" value="{{$contact['id']}}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button class="btn btn-outline-success mb-2 me-4">Сохранить</button>
    </form>
@endsection
