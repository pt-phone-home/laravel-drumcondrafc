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
                @include('inc.messages')
        </div>
        <div class="admin-area-articles">
            
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
                            @endforeach
                        </tbody>
                    </table>

            </p>

            <p class="admin-area-fixtures-results">
                <h1>Weekly Results</h1>
                <a href="/admin/createresults">
                    <h2>Add Weeks Results</h2>
                </a>
                <table class="admin-area-articles-table">
                        <thead>
                            <th>Title</th>
                            <th>Published/Updated Date</th>
                            <th colspan=2>Admin Options</th>
                        </thead>
                        <tbody>
                            @foreach ($results as $res)
                            <tr>
        
                                <td>
                                <a href="/resultsitem/{{$res->id}}">
                                        {{$res->week_start}}
                                    </a>
                                </td>
                                <td>
                                    {{$res->updated_at}}
                                </td>
                                <td>
                                <a href="admin/results/{{$res->id}}/editresults">Edit</a>
                                </td>
                                <td>
                                    <form action="/admin/results/{{$res->id}}" method="POST" onsubmit="return confirm('Are you sure you want to delete these results? This cannot be undone!')">
                                        @csrf
                                        @method('DELETE')
                                        <button>DELETE</button>
                                    </form>
                                </td>
        
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                
            </p>
            <p class="admin-area-fixtures-featured_fixture">
                <h1>Featured Fixture</h1>
                <a href="/admin/createfeaturedfixture">
                    <h2>Add New Featured Fixture</h2>
                </a>
                <table class="admin-area-articles-table">
                        <thead>
                            <th>Title</th>
                            <th>Published/Updated Date</th>
                            <th colspan=2>Admin Options</th>
                        </thead>
                        <tbody>
                            @foreach ($featured_fixtures as $fix)
                            <tr>
        
                                <td>
                                {{$fix->home_team}} v's {{$fix->away_team}}
                                </td>
                                <td>
                                    {{$fix->updated_at}}
                                </td>
                                <td>
                                <a href="admin/featuredfixture/{{$fix->id}}/editfeaturedfixture">Edit</a>
                                </td>
                                <td>
                                    <form action="/admin/featuredfixture/{{$fix->id}}" method="POST" onsubmit="return confirm('Are you sure you want to delete this featured fixture? This cannot be undone!')">
                                        @csrf
                                        @method('DELETE')
                                        <button>DELETE</button>
                                    </form>
                                </td>
        
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
            </p>
            <p class="admin-area-fixtures-featured_result">
                <h1>Featured Result</h1>
                <a href="/admin/createfeaturedresult">
                    <h2>Add New Featured result</h2>
                </a>
                <table class="admin-area-articles-table">
                        <thead>
                            <th>Title</th>
                            <th>Published/Updated Date</th>
                            <th colspan=2>Admin Options</th>
                        </thead>
                        <tbody>
                            @foreach ($featured_results as $res)
                            <tr>
        
                                <td>
                                {{$res->home_team}} v's {{$res->away_team}}
                                </td>
                                <td>
                                    {{$res->updated_at}}
                                </td>
                                <td>
                                <a href="admin/featuredresult/{{$res->id}}/editfeaturedresult">Edit</a>
                                </td>
                                <td>
                                    <form action="/admin/featuredresult/{{$res->id}}" method="POST" onsubmit="return confirm('Are you sure you want to delete this featured result? This cannot be undone!')">
                                        @csrf
                                        @method('DELETE')
                                        <button>DELETE</button>
                                    </form>
                                </td>
        
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
            </p>
        </div>
        
        



    </div>
@endsection