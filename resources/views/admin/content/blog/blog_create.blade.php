@extends('admin.general')
@section('blog')
    <script src={{asset("https://code.jquery.com/jquery-3.6.0.min.js")}}></script>
    <link rel="stylesheet" type="text/css" href={{asset("src/plugins/css/light/editors/quill/quill.snow.css")}}>
    <link rel="stylesheet" type="text/css" href={{asset("src/plugins/css/dark/editors/quill/quill.snow.css")}}>
    <link rel="stylesheet" href={{asset("croppie.css")}} />

    <div class="profile-image">
        <form action="{{route('blog_create')}}" method="post" enctype="multipart/form-data" id="save">
            @csrf
            <div class="col-md-12">
                <div class="mb-3">
                    <div class="col-lg-5 col-sm-12 mt-3 pl-0">
                        <input id="itn-croppie-result-i" type="text" hidden value="{{$blog['image']}}"
                               name="image">

                        <img id="itn-croppie-result" src="{{asset('/storage/'.$blog['image'])}}"
                             class="col-lg-6 col-sm-12 pl-0">

                        <input id="croppie-input" type="file" style="color: #3b3f5c"
                               class="form-control-file d-block mt-3">
                    </div>
                    <div class="col-lg-3 col-sm-12 mt-3 pl-0">
                        <div class="itn-croppie" style="display: none"></div>
                        <div class="col-12 pl-0">
                            <a id="itn-croppie-save" class="btn btn-dark" style="display: none">Обрезать</a>
                            <a id="itn-croppie-rotate" class="btn btn-dark"
                               style="display: none">Повернуть</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-content" id="animateLineContent-4">
                <div class="tab-pane fade show active" id="animated-underline-home" role="tabpanel"
                     aria-labelledby="animated-underline-home-tab">
                    <div class="row">
                        <div class="col-xl-10 col-lg-12 col-md-8 mt-md-0 mt-4">
                            <div class="form">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="title">Заголовок</label>
                                            <input type="text" class="form-control mb-3"
                                                   placeholder="Заголовок" id="title" name="title"
                                                   value="{{$blog['title']}}">
                                        </div>
                                    </div>
                                    <input type="hidden" name="id" value="{{$blog['id']}}">
                                    <div id="basic" class="row layout-spacing layout-top-spacing">
                                        <div class="col-lg-12">
                                            <div class="statbox widget box box-shadow">
                                                <div class="widget-header">
                                                    <div class="row">
                                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                                            <h4> Текст </h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="widget-content widget-content-area">

                                                    <div id="editor-container">
                                                        <label for="hiddenArea">{!! $blog['subtitle'] !!}</label>
                                                        <textarea name="subtitle" style="display:none"
                                                                  id="hiddenArea"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <button class="btn btn-outline-secondary btn-rounded mb-2 me-4">Создать</button>
            </div>
        </form>
    </div>









    <script src={{asset("src/assets/js/scrollspyNav.js")}}></script>
    <script src={{asset("src/plugins/src/editors/quill/quill.js")}}></script>
    <script> quill = new Quill('#editor-container', {
            modules: {
                toolbar: [
                    [{header: [1, 2, false]}],
                    ['bold', 'italic', 'underline']
                ]
            },
            placeholder: 'Введите текст',
            theme: 'snow'
        });
        $(document).ready(function () {
            $("#save").on("submit", function () {
                let value = $('.ql-editor').html();
                $(this).append("<textarea name='subtitle' style='display:none'>" + value + "</textarea>");
            });
        });
    </script>
    <script src={{asset("croppie.js")}}></script>

    <script>
        let uploadCrop = $('.itn-croppie').croppie({
            enableExif: true,
            enableOrientation: true,
            viewport: {
                width: 200,
                height: 200,
                type: 'square'
            },
            boundary: {
                width: 300,
                height: 300
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
