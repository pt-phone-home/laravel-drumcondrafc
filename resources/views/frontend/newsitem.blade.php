@extends('frontmaster')

@section('title')

@endsection

@section('content')

<div class="news-header">
        <h1>Latest News</h1>
        <i class="fas fa-newspaper"></i>

    </div>

    <div class="section-newsitem">
        @if ($article)
        <div class="news-item-full">
            <h1>
                {{$article->title}}
            </h1>

            <div class="news-item-full-img">
                @if($article->img)
                <img src="{{$article->img}}" alt="">
                @else
            <img src="{{$article->img}}">
                @endif
            </div>
            <div class="news-item-full-content">
                <p>
                    {!!$article->content!!}
                </p>
            </div>
            <div class="news-item-full-footer">
                <a href="/news">Back to news</a>
            </div>
        </div>

        @endif

    </div>

@endsection