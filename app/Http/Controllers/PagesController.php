<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Notifications\InboxMessage;
use App\Http\Requests\ContactFormRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;

use App\Article;
use App\FeaturedFixture;
use App\FeaturedResults;
use App\Fixture;
use App\Result;
use App\Mail;
use App\Mail\ProjectCreated;
use App\Mail\MailCreated;
//use Illuminate\Support\Facades\Mail;

class PagesController extends Controller
{
    public function index() {

        $articles = Article::all()->take(6);
        $featured_articles = Article::all()->take(3);
        $featured_fixtures = FeaturedFixture::orderBy('updated_at', 'DESC')->take(1)->get();
        $featured_results = FeaturedResults::orderBy('updated_at', 'DESC')->take(1)->get();

        // \Mail::to('ptiernan@gmail.com')->send(
        //     new ProjectCreated()
        // );

        return view('frontend.index')->with([
            'featured_articles' => $featured_articles,
            'articles' => $articles,
            'featured_fixtures' => $featured_fixtures,
            'featured_results' => $featured_results]);
    }

    public function news() {

        $articles = Article::orderBy('updated_at', 'DESC')->paginate(5);
        //Paginate(10);

        return view('frontend.news')->with('articles', $articles);

    }

    public function newsitem($id) {

        $article = Article::findOrFail($id);

        return view('frontend.newsitem')->with('article', $article);
    }

    public function about() {
        
        return view('frontend.about');
    }

    public function findus() {

        return view('frontend.findus');
    }

    public function fixtures() {

        $fixtures = Fixture::all();

        return view('frontend.fixtures')->with('fixtures', $fixtures);
    }

    public function fixtureitem($id) {

        $fixture = Fixture::findOrFail($id);

        return view('frontend.fixtureitem')->with('fixture', $fixture);
    }

    public function results() {

        $results = Result::all();

        return view('frontend.results')->with('results', $results);
    }

    public function resultsitem($id) {
        $result = Result::findOrFail($id);

        return view('frontend.resultsitem')->with('result', $result);
    }

    public function members() {

        return view('frontend.members');
    }

    public function gallery() {

        return view('frontend.gallery');
    }

    public function contact() {

        return view('frontend.contact');
    }

    public function sendEmail(Request $request) {

        $email = new Mail;

        $email->name = $request['name'];
        $email->email = $request['email'];
        $email->teamName = $request['teamName'];
        $email->message = $request['message'];

        // dd($email);

        \Mail::to('admin@drumcondrafc.com')->send(
                new MailCreated($email)
        );
        return redirect('/contact')->with('mail', 'Thanks for getting in touch');
    }
}
