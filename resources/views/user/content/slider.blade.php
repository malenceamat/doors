<div class="top-slider-wrapper gray-bg">
    <div class="push40"></div>
    <div class="container container-slider">
        <div class="top-slider">
            @foreach($sliders as $slider)
                <div class="item">
                    <div class="inner relative">
                        <div class="item-img"
                             style="background-image: url({{asset('/storage/' . $slider['image'])}});"></div>
                        <div class="element-content-wrapper">
                            <div class="table">
                                <div class="table-cell">
                                    <div class="container">
                                        <div class="element-content">
                                            <div class="item-title">
                                                {{$slider['title']}}<br>{{$slider['subtitle']}}
                                            </div>
                                            <a class="button" href="{{$slider['button_link']}}">{{$slider['button_text']}}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
