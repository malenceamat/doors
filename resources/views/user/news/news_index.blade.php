@extends('user.general')
@section('news_index')
    <div class="middle">
        <div class="container">
            <br>
            <h1 class="pagetitle">{{$news['title']}}</h1>
            <div class="row">
                <div class="col-md-8">
                    <div class="main-column-left">
                        <div class="article-img relative">
                            <div class="page-date">
                                <div class="inner">
                                    <div class="day">
                                        {{$news->created_at->day}}
                                    </div>
                                    <div class="month_year">
                                        <span>{{ mb_strtoupper(mb_substr($news->created_at->translatedFormat('F'), 0, 1)) }}{{ mb_substr($news->created_at->translatedFormat('F'), 1) }}</span>
                                        {{$news->created_at->year}}
                                    </div>
                                </div>
                            </div>
                            <img src="{{asset('/storage/'. $news['image'])}}"
                                 alt="{{$news['title']}}"/>
                            <div class="push30"></div>
                        </div>
                        <div class="content">
                            <div class="content">
                                {!! $news['text'] !!}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="aside-news">
                        <div class="title-h3" style="margin-top: -8px;">Читайте также:</div>
                        <div class="inner">
                            <div class="row">
                                @foreach($data as $new)
                                    <div class="col-sm-6 col-md-12">
                                        <div class="element relative">
                                            <div class="element-content">
                                                <div class="date f13">
                                                    <span>{{$new->created_at->day}}.</span>
                                                    <span>{{ str_pad($new->created_at->month, 2, '0', STR_PAD_LEFT) }}.</span>
                                                    <span>{{$new->created_at->year}}</span>
                                                </div>
                                                <div class="push2"></div>
                                                <div class="title bold f14">
                                                    {{$new['title']}}
                                                </div>
                                                <a href="{{route('news_index_id', ['id' => $new['id']])}}" class="f13">
                                                    Читать подробнее
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-push"></div>
@endsection
