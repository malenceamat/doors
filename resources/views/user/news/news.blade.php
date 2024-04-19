@extends('user.general')
@section('news')
    <div class="middle">
        <div class="container">
            <br>
            <h1 class="pagetitle">Новости</h1>
            <div class="news">
                <div class="row">
                    @foreach($news as $new)
                        <div class="col-xs-6 col-md-4">
                            <div class="element relative">
                                <a href="{{route('news_index_id', ['id' => $new['id']])}}" class="absolute visible-xs visible-sm"></a>
                                <div class="element-img"
                                     style="background-image: url({{asset('/storage/'. $new['image'])}});"></div>
                                <div class="element-inner">
                                    <div class="element-date">
                                        <div class="day">
                                            {{$new->created_at->day}}
                                        </div>
                                        <div class="month_year">
                                            <span>{{ mb_strtoupper(mb_substr($new->created_at->translatedFormat('F'), 0, 1)) }}{{ mb_substr($new->created_at->translatedFormat('F'), 1) }}</span>
                                            {{$new->created_at->year}}
                                        </div>
                                    </div>
                                    <div class="element-title">
                                        {{$new['title']}}
                                    </div>
                                    <a class="element-btn" href="{{route('news_index_id', ['id' => $new['id']])}}">
                                        <span>Подробнее</span>
                                        <svg aria-hidden="true" focusable="false" data-prefix="fal"
                                             data-icon="long-arrow-right" role="img" xmlns="http://www.w3.org/2000/svg"
                                             viewBox="0 0 448 512"
                                             class="svg-inline--fa fa-long-arrow-right fa-w-14 fa-2x">
                                            <path fill="currentColor"
                                                  d="M311.03 131.515l-7.071 7.07c-4.686 4.686-4.686 12.284 0 16.971L387.887 239H12c-6.627 0-12 5.373-12 12v10c0 6.627 5.373 12 12 12h375.887l-83.928 83.444c-4.686 4.686-4.686 12.284 0 16.971l7.071 7.07c4.686 4.686 12.284 4.686 16.97 0l116.485-116c4.686-4.686 4.686-12.284 0-16.971L328 131.515c-4.686-4.687-12.284-4.687-16.97 0z"
                                                  class="">
                                            </path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="footer-push"></div>
@endsection
