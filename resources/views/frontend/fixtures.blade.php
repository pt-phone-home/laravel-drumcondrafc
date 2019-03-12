@extends('frontmaster')

@section('title')
Fixtures - Drumcondra A.F.C
@endsection

@section('content')

<div class="news-header">
        <h1>Fixture List</h1>
        <i class="fas fa-newspaper"></i>

    </div>

    <div class="fixtures">
        @foreach($fixtures as $fix)
        <div class="fixture_card">
            <h3>Week Beginning :</h3>
        <a href="{{route('fixture.item', ['id' => $fix->id])}}"> 
                <h1>
                    {{$fix->week_start}}
                </h1>
            </a>
            <p>Click for a list of fixtures</p>
            
        </div>
        @endforeach
    </div>

@endsection