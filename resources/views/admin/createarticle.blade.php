@extends('adminmaster')

@section('title')
    Create Article
@endsection

@section('content')
<section class="new_newsitem-intro">
        <h1>Add new article</h1>
    </section>
    <section class="form-container">
            <form action="/admin/create" method="POST" class="contact-form article-form" enctype="multipart/form-data" name="myform" id="myform">
                @csrf
                @include('inc.messages')
                @if($errors)
                    @foreach($errors->all() as $error)
                    <p>{{$error}}</p>
                    @endforeach
                @endif
                <div class="form-group">
                    <label for="title">News Title:</label>
                    <input type="text" name="title" id="title" placeholder="Article Title" max=50 required>
                </div>
                <div class="form-group">
                    <label for="headline">Headline:</label>
                    <input type="text" name="headline" id="headline" placeholder="Headline for article" required>
                </div>
                <div class="form-group">
                    <label for="summernote">Article Content:</label>
            
                    <textarea name="content" id="content" cols="30" rows="20" placeholder="Type the content of your article here"></textarea>
                </div>
            
                <div class="form-group">
                    <label for="img">Upload Image (Optional):</label>
                    <input type="file" name="img" id="img">
                </div>
            
            
            
                <button>Save</button>
                
                <a href="/admin">Go Back</a>
            </form>
    </section>
@endsection