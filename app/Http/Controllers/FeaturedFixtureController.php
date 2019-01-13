<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FeaturedFixture;

class FeaturedFixtureController extends Controller
{
    public function create() {

        return view('admin.createfeaturedfixture');
    }

    public function store(Request $request) {

        $this->validate($request, [
            'date' => 'required',
            'squad' => 'required',
            'home_team' => 'required',
            'away_team' => 'required',
            'location' => 'required',
            'time' => 'required'
        ]);

        $featfix = new FeaturedFixture;

        $featfix->date = $request['date'];
        $featfix->squad = $request['squad'];
        $featfix->home_team = $request['home_team'];
        $featfix->away_team = $request['away_team'];
        $featfix->location = $request['location'];
        $featfix->time = $request['time'];

        $featfix->save();

        return redirect('/admin')->with('success', 'Feature Fixture successfully added');
    }

    public function edit($id) {
        $featfix = FeaturedFixture::find($id);

        return view('admin.editfeaturedfixture')->with('featfix', $featfix);
    }

    public function update(Request $request, $id) {

        $this->validate($request, [
            'date' => 'required',
            'squad' => 'required',
            'home_team' => 'required',
            'away_team' => 'required',
            'location' => 'required',
            'time' => 'required'
        ]);

        $featfix = FeaturedFixture::find($id);

        $featfix->date = $request['date'];
        $featfix->squad = $request['squad'];
        $featfix->home_team = $request['home_team'];
        $featfix->away_team = $request['away_team'];
        $featfix->location = $request['location'];
        $featfix->time = $request['time'];

        $featfix->save();

        return redirect('/admin')->with('success', 'Featured Fixture successfully updated');
    }

    public function destroy($id) {

        $featfix = FeaturedFixture::find($id);

        $featfix->delete();

        return redirect('/admin')->with('success', 'Featured Fixture deleted');
    }
}
