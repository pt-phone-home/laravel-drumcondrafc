<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Result;

class ResultsController extends Controller
{
    public function create() {

        return view('admin.createresults');
    }

    public function store(Request $request) {

        $this->validate($request, [
            'week_start' => 'required|min:5',
            'result_list' => 'required|min:30'
        ]);

        $results = new Result;

        $results->week_start = $request['week_start'];
        $results->result_list = $request['result_list'];

        $results->save();

        return redirect('/admin');

    }

    public function edit($id) {

        $results = Result::find($id);
        return view('admin.editresults')->with('results', $results);
    }

    public function update(Request $request, $id) {
        $this->validate($request, [
            'week_start' => 'required|min:5',
            'result_list' => 'required|min:30'
        ]);

        $results = Result::find($id);

        $results->week_start = $request['week_start'];
        $results->result_list = $request['result_list'];

        $results->save();

        return redirect('admin')->with('success', 'Results Updated successfully');

    }

    public function destroy($id) {
        $results = Result::find($id);

        $results->delete();

        return redirect('/admin')->with('success', 'Results successfully deleted');
    }
}
