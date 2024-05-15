<section class="vantages-section gray-bg">
    <div class="container">
        <div class="vantages">
            <div class="row min">
                @foreach($info_blocks as $info_block)
                    <div class="col-sm-6 col-md-3">
                        <div class="element">
                            <div class="img-wrapper">
                                <img src="{{asset('/storage/' . $info_block['image'])}}" alt="{{$info_block['title']}}">
                            </div>
                            <div class="element-content">
                                <div class="title">{{$info_block['title']}}</div>
                                <div class="text">
                                    {{$info_block['subtitle']}}
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
