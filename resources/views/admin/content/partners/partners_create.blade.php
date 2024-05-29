@extends('admin.general')
@section('style')
    <script src={{asset("https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js")}}></script>
    <link rel="stylesheet" href={{asset("croppie.css")}} />
@endsection
@section('partners_create')
    <div class="profile-image">
        <form @if(isset($partners->id)) action="{{route('partners_edit')}}" @else action="{{route('partners_create')}}"
              @endif method="POST" enctype="multipart/form-data" id="save">
            @csrf
            @if($partners->id)
                @method('POST')
            @endif
            <div class="col-md-12">
                <div class="mb-3">
                    <div class="col-lg-10 col-sm-12 mt-3 pl-0">
                        <input id="itn-croppie-result-i" type="text" hidden value="{{$partners['image']}}"
                               name="image">
                        <img id="itn-croppie-result" src="{{asset('/storage/'.$partners['image'])}}"
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
                <input type="hidden" value="{{$partners['id']}}" name="id">
            </div>

            @if(isset($partners->id))
                <div class="container">
                    <button class="btn btn-outline-secondary btn-rounded mb-2 me-4">Редактировать</button>
                </div>
            @else
                <div class="container">
                    <button class="btn btn-outline-secondary btn-rounded mb-2 me-4">Создать</button>
                </div>
            @endif
        </form>
        @if(isset($partners->id))
            <div class="" style="float: right;height: auto">
                <form method="POST" action="{{route('partners_delete', ['id' => $partners['id']])}}">
                    @csrf
                    {{method_field('DELETE')}}
                    <button class="btn btn-danger mb-2 me-4">Удалить</button>
                </form>
            </div>
        @endif
    </div>
@endsection
@section('script')
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
                size: {width:190, height:80}
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
