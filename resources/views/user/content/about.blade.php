<div class="about-section">
    <div class="push80"></div>
    <div class="container">
        <div class="row">

            <div class="col-sm-6 col-lg-5 col-sm-push-6 col-lg-push-7 index-about-img-wrapper">
                <div class="index-about-img">
                    <img src="{{asset('/storage/' . $blog->image) ?? ''}}" alt="">
                </div>
                <div class="push50 visible-xs"></div>
            </div>

            <div class="col-sm-6 col-lg-7 col-sm-pull-6 col-lg-pull-5">
                <div class="content">
                    <h1 class="line"><strong>{{$blog->title ?? ''}}</strong></h1>
                    <p>{!! $blog->subtitle ?? '' !!}</p>
                </div>
                <a class="button" href="{{route('about_index')}}">Подробнее</a>
            </div>
        </div>
    </div>
    <div class="push50"></div>
</div>
