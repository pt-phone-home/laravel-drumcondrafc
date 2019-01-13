@extends('frontmaster')

@section('title')
Results - Drumcondra FC
@endsection

@section('content')
<div class="news-header">
        <h1>Results</h1>
        <i class="fas fa-trophy"></i>

    </div>

    <div class="section-newsitem">
        @if ($result)
        <div class="news-item-full">
            <h1>Week Beginning
                {{$result->week_start}}
            </h1>
            <div class="news-item-full-content">
                <p>
                    {!! $result->result_list !!}
                </p>
            </div>
            <div class="news-item-full-footer">
                <a href="/results">Back to Results</a>
            </div>
        </div>

        @endif

    </div>
@endsection