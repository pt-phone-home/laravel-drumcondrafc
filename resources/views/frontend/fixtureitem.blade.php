@extends('frontmaster')

@section('title')

@endsection

@section('content')
<div class="news-header">
        <h1>Fixtures</h1>
        <i class="fas fa-newspaper"></i>

    </div>

    <div class="section-newsitem">
        @if ($fixture)
        <div class="news-item-full">
            <h1>Week Beginning
                {{$fixture->week_start}}
            </h1>
            <div class="news-item-full-content">
                <p>
                    {!! $fixture->content !!}
                </p>
            </div>
            <div class="news-item-full-footer">
                <a href="/fixtures">Back to fixtures</a>
            </div>
        </div>

        

        @endif

    </div>
@endsection