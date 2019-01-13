@extends('adminmaster')

@section('title')

@endsection

@section('content')
<section class="new_newsitem-intro">
        <h1>Edit list of weekly fixtures</h1>
    </section>
    <section class="form-container">

    <form action="/admin/fixtures/{{$fixtures->id}}" method="POST" class="contact-form article-form" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="week_start">Fixtures for Week Beginning:</label>
                <input type="text" name="week_start" id="date" placeholder="E.g. 3rd Feb 2019" value="{{$fixtures->week_start}}"
                     required>
                </div>
            
                <div class="form-group">
                <textarea name="content" id="content" cols="30" rows="20" placeholder="use the table to insert list of fixtures">{!! $fixtures->content !!}</textarea>
                </div>
            
            
            
                <button>Update</button>
                <a href="/admin">Go Back</a>
            </form>
        

    </section>

@endsection

