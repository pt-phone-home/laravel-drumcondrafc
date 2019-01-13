<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FeaturedResults;

class FeaturedResultController extends Controller
{
    public function create() {

        return view('admin.createfeaturedresult');
    }

    public function store(Request $request) {

        $this->validate($request, [
            'date' => 'required',
            'squad' => 'required',
            'home_team' => 'required',
            'away_team' => 'required',
            'home_team_score' => 'required',
            'away_team_score' => 'required'
        ]);

        $featres = new FeaturedResults;

        $featres->date = $request['date'];
        $featres->squad = $request['squad'];
        $featres->home_team = $request['home_team'];
        $featres->away_team = $request['away_team'];
        $featres->home_team_score = $request['home_team_score'];
        $featres->away_team_score = $request['away_team_score'];

        $featres->save();

        return redirect('/admin')->with('success', 'Featured result created');
    }

    public function edit($id) {

        $featres = FeaturedResults::find($id);

        return view('admin.editfeaturedresult')->with('featres', $featres);

    }

    public function update(Request $request, $id) {

        $this->validate($request, [
            'date' => 'required',
            'squad' => 'required',
            'home_team' => 'required',
            'away_team' => 'required',
            'home_team_score' => 'required',
            'away_team_score' => 'required'
        ]);

        $featres = FeaturedResults::find($id);

        $featres->date = $request['date'];
        $featres->squad = $request['squad'];
        $featres->home_team = $request['home_team'];
        $featres->away_team = $request['away_team'];
        $featres->home_team_score = $request['home_team_score'];
        $featres->away_team_score = $request['away_team_score'];

        $featres->save();

        return redirect('/admin')->with('success', 'Featured result updated');
    }

    public function destroy($id) {

        $featres = FeaturedResults::find($id);

        $featres->delete();

        return redirect('/admin')->with('success', 'Featured result deleted');
    }
}
