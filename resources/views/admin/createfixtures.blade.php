@extends('adminmaster')

@section('title')

@endsection

@section('content')
<section class="new_newsitem-intro">
        <h1>Add list of weekly fixtures</h1>
    </section>
    <section class="form-container">

            <form action="/admin/createfixtures" method="POST" class="contact-form article-form" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="week_start">Fixtures for Week Beginning:</label>
                    <input type="text" name="week_start" id="date" placeholder="E.g. 3rd Feb 2019"
                     required>
                </div>
            
                <div class="form-group">
                    <textarea name="content" id="content" cols="30" rows="20" placeholder="use the table to insert list of fixtures"></textarea>
                </div>
            
            
            
                <button>Save</button>
                <a href="/admin">Go Back</a>
            </form>
        

    </section>
@endsection