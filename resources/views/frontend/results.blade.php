@extends('frontmaster')

@section('title')
Results - Drumcondra A.F.C
@endsection

@section('content')
<div class="news-header">
        <h1>Results List</h1>
        <i class="fas fa-trophy"></i>

    </div>

    <div class="fixtures">
        @foreach ($results as $res)
        <div class="fixture_card">
            <h3>Week Beginning :</h3>
        <a href="/resultsitem/{{$res->id}}">
                <h1>
                    {{$res->week_start}}
                </h1>
            </a>
            <p>Click for a list of Results</p>

        </div>

        @endforeach




    </div>
@endsection