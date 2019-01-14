<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Article;
use App\FeaturedFixture;
use App\FeaturedResults;
use App\Fixture;
use App\Result;

class AdminController extends Controller
{
    public function index() {

        $articles = Article::all();
        $featured_fixtures = FeaturedFixture::all();
        $featured_results = FeaturedResults::all();
        $fixtures = Fixture::all();
        $results = Result::all();

        return view('admin.admin-page')->with([
            'articles' => $articles,
            'featured_fixtures' => $featured_fixtures,
            'featured_results' => $featured_results,
            'fixtures' => $fixtures,
            'results' => $results
        ]);
    }

    public function loginview() {


        return view('admin.login');

    }

    public function login(Request $request) {

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Auth Passed

            return redirect()->intended('/admin');
        } else {

            return redirect()->back()->with('failed', 'Sorry your details are not correct');
        }


    }

    public function logout() {

        Auth::logout();

        return redirect('login')->with('success', 'You are logged out');
    }

    public function create() {

        return view('admin.createarticle');
    }

    public function store(Request $request) {

        $this->validate($request, [
            'title' => 'required|min:3|max:100',
            'headline' => 'required|min:10|max:100',
            'content' => 'required',
            'img' => 'image|nullable'
        ]);

        if ($request->file('img')) {
            $filenameWithExt = $request->file('img')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('img')->getClientOriginalExtension();
            $filenameToStore = $filename . '_' . time() . '.' . $extension;
            $path = $request->file('img')->move('/images/uploads', $filenameToStore);
        } else {
            $path = '/images/uploads/default.jpg';
        }
        

        $article = new Article;
        $article->title = $request['title'];
        $article->headline = $request['headline'];
        $article->content = $request['content'];
        $article->img = $path;

        $article->save();

        return redirect('/admin')->with('success', 'Article created successfully');

    }

    public function edit($id) {

        $article = Article::find($id);

        return view('admin.edit')->with('article', $article);
    }

    public function update(Request $request, $id) {

        $this->validate($request, [
            'title' => 'required|min:3|max:100',
            'headline' => 'required|min:10|max:100',
            'content' => 'required',
            'img' => 'image|nullable'
        ]);

        if ($request->file('img')) {
            $filenameWithExt = $request->file('img')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('img')->getClientOriginalExtension();
            $filenameToStore = $filename . '_' . time() . '.' . $extension;
            $path = $request->file('img')->move('/images/uploads', $filenameToStore);
        } else {
            $path = '/images/uploads/default.jpg';
        }

        $article = Article::find($id);

        $article->title = $request['title'];
        $article->headline = $request['headline'];
        $article->content = $request['content'];
        $article->img = $path;

        $article->save();

        return redirect('/admin')->with('success', 'Article Updated');
    }

    public function destroy($id) {

        $article = Article::find($id);

        $article->delete();

        return redirect('/admin');
    }


}
