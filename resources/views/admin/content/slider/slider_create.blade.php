@extends('admin.general')
@section('slider')
    <link rel="stylesheet" type="text/css" href={{asset("../src/assets/css/light/elements/alert.css")}}>
    <link rel="stylesheet" type="text/css" href={{asset("../src/assets/css/dark/elements/alert.css")}}>
    <link rel="stylesheet" href={{asset("../src/plugins/src/filepond/filepond.min.css")}}>
    <link rel="stylesheet" href={{asset("../src/plugins/src/filepond/FilePondPluginImagePreview.min.css")}}>

    <link href={{asset("../src/assets/css/light/scrollspyNav.css")}} rel="stylesheet" type="text/css"/>
    <link href={{asset("../src/plugins/css/light/filepond/custom-filepond.css")}} rel="stylesheet" type="text/css"/>

    <link href={{asset("../src/assets/css/dark/scrollspyNav.css")}} rel="stylesheet" type="text/css"/>
    <link href={{asset("../src/plugins/css/dark/filepond/custom-filepond.css")}} rel="stylesheet" type="text/css"/>
    <script src={{asset("https://code.jquery.com/jquery-3.5.1.min.js")}}></script>
    <script src={{asset("https://code.jquery.com/jquery-3.6.0.min.js")}}></script>
    <link rel="stylesheet" type="text/css" href={{asset("../src/plugins/css/light/editors/quill/quill.snow.css")}}>

    <link href={{asset("../src/assets/css/dark/scrollspyNav.css")}} rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css" href={{asset("../src/plugins/css/dark/editors/quill/quill.snow.css")}}>
    <script src={{asset("https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js")}}></script>
    <link rel="stylesheet" href={{asset("croppie.css")}} />

    <div class="profile-image">
        <form @if (isset($slider->id)) action="{{route('slider_edit')}}" @else action="{{route('slider_create')}}" @endif method="POST" enctype="multipart/form-data" id="save">
            @csrf
            @if($slider->id)
                @method('POST')
            @endif
            <div class="col-md-12">
                <div class="mb-3">
                    <div class="col-lg-10 col-sm-12 mt-3 pl-0">
                        <input id="itn-croppie-result-i" type="text" hidden value=""
                               name="image">
                        <img id="itn-croppie-result" src="{{asset('/storage/'.$slider['image'])}}"
                             class="col-lg-6 col-sm-12 pl-0">
                        <input id="croppie-input" type="file" style="color: #3b3f5c"
                               class="form-control-file d-block mt-3">
                    </div>
                    <div class="col-lg-3 col-sm-12 mt-3 pl-0">
                        <div class="itn-croppie" style="display: none"></div>
                        <div class="col-12 pl-0">
                            <a id="itn-croppie-save" class="btn btn-dark" style="display: none">Обрезать</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-content" id="animateLineContent-4">
                <div class="tab-pane fade show active" id="animated-underline-home" role="tabpanel"
                     aria-labelledby="animated-underline-home-tab">
                    <div class="row">
                        <div class="container">
                            <div class="form">
                                <div class="row">
                                    <div class="container">
                                        <div class="form-group">
                                            <label for="title">Основной заголовок</label>
                                            <input id="title" type="text" name="title" value="{{$slider['title']}}"
                                                   placeholder="Основной заголовок" class="form-control">

                                        </div>
                                    </div>
                                    <div class="container">
                                        <div class="form-group">
                                            <label for="subtitle">Дополнительный текст</label>
                                            <input type="text" class="form-control mb-3"
                                                   placeholder="Дополнительный текст"
                                                   id="subtitle" name="subtitle"
                                                   value="{{$slider['subtitle']}}">
                                        </div>
                                    </div>

                                    <div class="container">
                                        <div class="form-group">
                                            <label for="button_text">Текст на кнопке</label>
                                            <input type="text" class="form-control mb-3"
                                                   placeholder="Текст на кнопке"
                                                   id="button_text" name="button_text"
                                                   value="{{$slider['button_text']}}">
                                        </div>
                                    </div>
                                    <div class="container">
                                        <div class="form-group">
                                            <label for="button_link">Ссылка в кнопке</label>
                                            <input type="text" class="form-control mb-3"
                                                   placeholder="Ссылка в кнопке"
                                                   id="button_link" name="button_link"
                                                   value="{{$slider['button_link']}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @if(isset($slider->id))
                <div class="container">
                    <button class="btn btn-outline-secondary btn-rounded mb-2 me-4">Редактировать</button>
                </div>
            @else
                <div class="container">
                    <button class="btn btn-outline-secondary btn-rounded mb-2 me-4">Создать</button>
                </div>
            @endif
        </form>
        @if(isset($slider->id))
            <div class="" style="float: right;height: auto">
                <form method="POST" action="/slider_delete/{{$slider->id}}">
                    @csrf
                    {{method_field('DELETE')}}
                    <button class="btn btn-danger mb-2 me-4">Удалить</button>
                </form>
            </div>
        @endif
    </div>






    <script src={{asset("croppie.js")}}></script>
    <script>
        let uploadCrop = $('.itn-croppie').croppie({
            enableExif: true,
            enableOrientation: true,
            viewport: {
                width: 550,
                height: 350,
                type: 'square'
            },
            boundary: {
                width: 900,
                height: 550
            }
        });

        let res

        $('#croppie-input').on('change', function () {
            var reader = new FileReader();
            reader.onload = function (e) {
                res = e.target.result
                uploadCrop.croppie('bind', {
                    url: res
                });
            }
            reader.readAsDataURL(this.files[0]);
            $('.itn-croppie').slideDown();
            $('#itn-croppie-save').show();
            $('#itn-croppie-rotate').show();
        });

        $('#itn-croppie-save').on('click', function () {
            $('#itn-croppie-save').hide();
            $('#itn-croppie-rotate').hide();
            $('.itn-croppie').slideUp();
            uploadCrop.croppie('result', {
                type: 'base64',
                size: 'original'
            }).then(function (result) {
                $('#itn-croppie-result').attr('src', result)
                $('#itn-croppie-result-i').attr('value', result)
                $('#croppie-input').val('')
            });
        });

        let i = 1;

        $('#itn-croppie-rotate').on('click', function () {
            i = i + 1
            if (i === 9) {
                i = 1
            }
            uploadCrop.croppie('bind', {
                url: res,
                orientation: i,
            });
        });
    </script>



@endsection
