@extends('adminmaster')

@section('title')

@endsection

@section('content')
<section class="new_newsitem-intro">
        <h1>Edit article</h1>
    </section>
    <section class="form-container">
            <form action="/admin/{{$article->id}}" method="POST" class="contact-form article-form" enctype="multipart/form-data" name="myform" id="myform">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="title">News Title:</label>
                <input type="text" name="title" id="title" placeholder="Article Title" value="{{$article->title}}" required>
                </div>
                <div class="form-group">
                    <label for="headline">Headline:</label>
                <input type="text" name="headline" id="headline" placeholder="Headline for article" value="{{$article->headline}}" required>
                </div>
                <div class="form-group">
                    <label for="summernote">Article Content:</label>
            
                    <textarea name="content" id="content" cols="30" rows="20" placeholder="Type the content of your article here">{!! $article->content !!}</textarea>
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