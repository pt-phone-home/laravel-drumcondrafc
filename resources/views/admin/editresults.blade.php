@extends('adminmaster')

@section('title')
Submit Results - Drumcondra AFC
@endsection

@section('content')
<section class="new_newsitem-intro">
        <h1>Edit list of weekly results</h1>
    </section>
    <section class="form-container">
        @foreach($errors->all() as $error)
    <p>{{$error}}</p>
    @endforeach

            <form action="/admin/results/{{$results->id}}" method="POST" class="contact-form article-form" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="week_start">Results for Week Beginning:</label>
                <input type="text" name="week_start" id="date" placeholder="3rd Dec 2018" value="{{$results->week_start}}" 
                     required>
                </div>
            
                <div class="form-group">
                <textarea name="result_list" id="content" cols="30" rows="20" placeholder="Type the content of your article here">{{$results->result_list}}</textarea>
                </div>
            
            
            
                <button>Save</button>
                <a href="/admin">Go Back</a>
            </form>

       

    </section>
@endsection