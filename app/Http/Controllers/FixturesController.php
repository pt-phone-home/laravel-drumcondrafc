<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fixture;

class FixturesController extends Controller
{
    public function create() {

        return view('admin.createfixtures');
    }

    public function store(Request $request) {

        $this->validate($request, [
            'week_start' => 'required',
            'content' => 'required'
        ]);

        $fixtures = new Fixture;

        $fixtures->week_start = $request['week_start'];
        $fixtures->content = $request['content'];

        $fixtures->save();

        return redirect('/admin')->with('success', 'Fixtures Added');
    }

    public function edit($id) {

        $fixtures = Fixture::find($id);

        return view('admin.editfixtures')->with('fixtures', $fixtures);

    }

    public function update(Request $request, $id) {

        $this->validate($request, [
            'week_start' => 'required',
            'content' => 'required'
        ]);

        $fixtures = Fixture::find($id);

        $fixtures->week_start = $request['week_start'];
        $fixtures->content = $request['content'];

        $fixtures->save();

        return redirect('/admin')->with('success', 'Fixture successfully updated');

    }

    public function destroy($id) {

        $fixtures = Fixture::find($id);

        $fixtures->delete();

        return redirect('/admin')->with('success', 'Fixtures Deleted');
    }


}
