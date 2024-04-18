@extends('admin.general')
@section('pay_delivery_create')
    <script src={{asset("https://code.jquery.com/jquery-3.6.0.min.js")}}></script>
    <link rel="stylesheet" type="text/css" href={{asset("src/plugins/css/light/editors/quill/quill.snow.css")}}>
    <link rel="stylesheet" type="text/css" href={{asset("src/plugins/css/dark/editors/quill/quill.snow.css")}}>

    <div class="container">
        <form action="{{route('pay_delivery_create')}}" method="post" enctype="multipart/form-data" id="save">
            @csrf
            <div class="tab-content" id="animateLineContent-4">
                <div class="tab-pane fade show active" id="animated-underline-home" role="tabpanel"
                     aria-labelledby="animated-underline-home-tab">
                    <div class="row">
                        <div class="col-xl-10 col-lg-12 col-md-8 mt-md-0 mt-4">
                            <div class="form">
                                <div class="row">
                                    <input type="hidden" name="id" value="{{$pay_delivery['id']}}">
                                    <div id="basic" class="row layout-spacing layout-top-spacing">
                                        <div class="col-lg-12">
                                            <div class="statbox widget box box-shadow">
                                                <div class="widget-header">
                                                    <div class="row">
                                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                                            <h4> Текст на странице </h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="widget-content widget-content-area">
                                                    <div id="editor-container">
                                                        <label for="hiddenArea">{!! $pay_delivery['text'] !!}</label>
                                                        <textarea name="text" style="display:none"
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
                $(this).append("<textarea name='text' style='display:none'>" + value + "</textarea>");
            });
        });
    </script>
@endsection
