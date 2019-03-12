@extends('frontmaster')

@section('title')
News - Drumcondra FC
@endsection

@section('content')
<div class="news-header">
        <h1>Latest News</h1>
        <i class="fas fa-newspaper"></i>

    </div>

    <div class="section-news">
        @foreach ($articles as $article)
        <div class="news-item">
            <h1>
                {{$article->title}}
            </h1>
            <div class="news-item-img">
                @if ($article->img)
                <img src="/{{$article->img}}" alt="">
                @else
                <img src="/{{$article->img}}" alt="">
                @endif
            </div>
            <div class="news-item-content">
                {!! str_limit($article->content, $limit = 400, $end = '...') !!}
            </div>
            <div class="news-item-footer">
                <a href="/newsitem/{{$article->id}}">Read More</a>
                
            </div>
        </div>
        @endforeach
        <div class="links">
            {{$articles->links()}}
        </div>
    </div>
@endsection