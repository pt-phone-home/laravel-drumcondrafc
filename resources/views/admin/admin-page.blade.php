@extends('adminmaster')

@section('title')
Drumcondra FC Admin Panel
@endsection

@section('content')
<div class="contact-header">
        <h1>Admin Area</h1>
        <i class="fas fa-toolbox"></i>
    </div>

    <div class="admin-content">
        
        <div class="admin-login">
                <form action="/logout" method="GET">
                    <label for="">You are logged in, please</label>
                    <button class="btn-flat">Log out</button>
                </form>
        </div>
        <div class="admin-area-articles">
            @include('inc.messages')
            <h2 class="admin-area-articles-heading">Articles</h2>
            <p class="admin-area-articles-new">
                <a href="/admin/createarticle">
                    <h1>Add New Article</h1>
                </a>
            </p>
            <table class="admin-area-articles-table">
                <thead>
                    <th>Title</th>
                    <th>Published/Updated Date</th>
                    <th colspan=2>Admin Options</th>
                </thead>
                <tbody>
                    <?php foreach ($articles as $article): ?>
                    <tr>

                        <td>
                        <a href="/newsitem/{{$article->id}}">
                                {{$article->title}}
                            </a>
                        </td>
                        <td>
                            {{$article->updated_at}}
                        </td>
                        <td>
                        <a href="/admin/{{$article->id}}/edit">Edit</a>
                        </td>
                        <td>
                            <form action="/admin/{{$article->id}}" method="POST" onsubmit="return confirm('Are you sure you want to delete this article? This cannot be undone!')">
                                @csrf
                                @method('DELETE')
                                <button>DELETE</button>
                            </form>
                        </td>

                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            
        </div>

        <div class="admin-area-fixtures">
            <h2 class="admin-area-fixtures-heading">Fixtures & Results</h2>
            <p class="admin-area-fixtures-fixtures">
                <h1>Weekly Fixtures</h1>
                <a href="/admin/createfixtures">
                    <h2>Add Weeks Fixtures</h2>
                </a>

                <table class="admin-area-articles-table">
                        <thead>
                            <th>Title</th>
                            <th>Published/Updated Date</th>
                            <th colspan=2>Admin Options</th>
                        </thead>
                        <tbody>
                            @foreach ($fixtures as $fix)
                            <tr>
        
                                <td>
                                <a href="/fixtureitem/{{$fix->id}}">
                                        {{$fix->week_start}}
                                    </a>
                                </td>
                                <td>
                                    {{$fix->updated_at}}
                                </td>
                                <td>
                                <a href="admin/fixtures/{{$fix->id}}/editfixtures">Edit</a>
                                </td>
                                <td>
                                    <form action="/admin/fixtures/{{$fix->id}}" method="POST" onsubmit="return confirm('Are you sure you want to delete these fixtures? This cannot be undone!')">
                                        @csrf
                                        @method('DELETE')
                                        <button>DELETE</button>
                                    </form>
                                </td>
        
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>

                <a href="">
                    <h2>Edit Weeks Fixtures</h2>
                </a>
            </p>
            <p class="admin-area-fixtures-results">
                <a href="new_results.php">
                    <h2>Add Weeks Results</h2>
                </a>
                <a href="">
                    <h2>Edit Weeks Results</h2>
                </a>
            </p>
            <p class="admin-area-fixtures-featured_fixture">
                <a href="new_featured_fixture.php">
                    <h2>Add New Featured Fixture</h2>
                </a>
                <a href="">
                    <h2>Edit Featured Fixture</h2>
                </a>
            </p>
            <p class="admin-area-fixtures-featured_result">
                <a href="new_featured_result.php">
                    <h2>Add New Featured result</h2>
                </a>
                <a href="">
                    <h2>Edit Featured Result</h2>
                </a>
            </p>
        </div>
        
        



    </div>
@endsection