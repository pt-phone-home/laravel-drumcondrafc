@extends('adminmaster')

@section('title')
Featured Fixture - Drumcondra FC
@endsection

@section('content')
<section class="new_newsitem-intro">
        <h1>Add new featured fixture</h1>
    </section>
    <section class="form-container">
            <form action="/admin/createfeaturedfixture" method="POST" class="contact-form article-form" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="date">Date:</label>
                    <input type="text" name="date" id="date" placeholder="Date of Fixture (E.g. 20th Dec 2018)" 
                     required>
                </div>
                <div class="form-group">
                    <label for="squad">Squad:</label>
                    <input type="text" name="squad" id="squad" placeholder="Enter Squad E.g. U10's" 
                     required>
                </div>
                <div class="form-group">
                    <label for="home_team">Home Team:</label>
                    <input type="text" name="home_team" id="home_team" placeholder="Enter team playing at home" 
                     required>
                </div>
                <div class="form-group">
                    <label for="away_team">Away Team:</label>
                    <input type="text" name="away_team" id="away_team" placeholder="Enter team playing away" 
                     required>
                </div>
                <div class="form-group">
                    <label for="location">Location:</label>
                    <input type="text" name="location" id="location" placeholder="Where is the game being played?" 
                     required>
                </div>
                <div class="form-group">
                    <label for="time">Time:</label>
                    <input type="text" name="time" id="time" placeholder="What time is the game at? E.g. 10:30am" 
                     required>
                </div>
            
            
                <button>Save</button>
                <a href="/admin">Go Back</a>
            </form>

        

    </section>
@endsection