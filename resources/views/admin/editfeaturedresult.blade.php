@extends('adminmaster')

@section('title')

@endsection

@section('content')
<section class="new_newsitem-intro">
        <h1>Edit featured result</h1>
    </section>
    <section class="form-container">
    <form action="/admin/featuredresult/{{$featres->id}}" method="POST" class="contact-form article-form" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="date">Date:</label>
                <input type="text" name="date" id="date" placeholder="Date of Fixture (E.g. 20th Dec 2018)" value="{{$featres->date}}" 
                     required>
                </div>
                <div class="form-group">
                    <label for="squad">Squad:</label>
                <input type="text" name="squad" id="squad" placeholder="Enter Squad E.g. U10's" value="{{$featres->squad}}"
                     required>
                </div>
                <div class="form-group">
                    <label for="home_team">Home Team:</label>
                <input type="text" name="home_team" id="home_team" placeholder="Enter team playing at home" value="{{$featres->home_team}}"
                     required>
                </div>
                <div class="form-group">
                    <label for="away_team">Away Team:</label>
                <input type="text" name="away_team" id="away_team" placeholder="Enter team playing away" value="{{$featres->away_team}}"
                     required>
                </div>
                <div class="form-group">
                    <label for="home_team_score">Home Team Score:</label>
                <input type="text" name="home_team_score" id="home_team_score" placeholder="Enter Home Team Score" value="{{$featres->home_team_score}}"
                     required>
                </div>
                <div class="form-group">
                    <label for="away_team_score">Away Team Score:</label>
                <input type="text" name="away_team_score" id="away_team_score" placeholder="Enter Away Team Score" value="{{$featres->away_team_score}}" 
                     required>
                </div>
            
            
                <button>Update</button>
                <a href="/admin">Go Back</a>
            </form>

        

    </section>

@endsection