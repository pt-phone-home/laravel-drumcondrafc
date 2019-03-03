<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\NewFixtures;

class NewFixturesController extends Controller
{

    public function show($id) {

        $fixtures = NewFixtures::find($id);

        return view('admin.newfixturesitem')->with('fixtures', $fixtures);

    }
    public function create() {
        return view('admin.createnewfixtures');
    }

    public function store(Request $request) {

        $this->validate($request, [
            'week_start' => 'required',
            
        ]);

        $fixtures = new NewFixtures;
            
        $fixtures->week_start = $request['week_start'];
        $fixtures->u8_navy_homeoraway = $request['u8_navy_homeoraway'];
        $fixtures->u8_navy_opposition = $request['u8_navy_opposition'];
        $fixtures->u8_navy_venue = $request['u8_navy_venue'];
        $fixtures->u8_navy_start = $request['u8_navy_start'];

        $fixtures->u10d_homeoraway = $request['u10d_homeoraway'];
        $fixtures->u10d_opposition = $request['u10d_opposition'];
        $fixtures->u10d_venue = $request['u10d_venue'];
        $fixtures->u10d_start = $request['u10d_start'];

        $fixtures->u15_b1_homeoraway = $request['u15_b1_homeoraway'];
        $fixtures->u15_b1_opposition = $request['u15_b1_opposition'];
        $fixtures->u15_b1_venue = $request['u15_b1_venue'];
        $fixtures->u15_b1_start = $request['u15_b1_start'];

        $fixtures->seniors_1_homeoraway = $request['seniors_1_homeoraway'];
        $fixtures->seniors_1_opposition = $request['seniors_1_opposition'];
        $fixtures->seniors_1_venue = $request['seniors_1_venue'];
        $fixtures->seniors_1_start = $request['seniors_1_start'];

        $fixtures->seniors_2_homeoraway = $request['seniors_2_homeoraway'];
        $fixtures->seniors_2_opposition = $request['seniors_2_opposition'];
        $fixtures->seniors_2_venue = $request['seniors_2_venue'];
        $fixtures->seniors_2_start = $request['seniors_2_start'];

        $fixtures->u8_homeoraway = $request['u8_homeoraway'];
        $fixtures->u8_opposition = $request['u8_opposition'];
        $fixtures->u8_venue = $request['u8_venue'];
        $fixtures->u8_start = $request['u8_start'];

        $fixtures->u10_a_homeoraway = $request['u10_a_homeoraway'];
        $fixtures->u10_a_opposition = $request['u10_a_opposition'];
        $fixtures->u10_a_venue = $request['u10_a_venue'];
        $fixtures->u10_a_start = $request['u10_a_start'];

        $fixtures->u10_b_homeoraway = $request['u10_b_homeoraway'];
        $fixtures->u10_b_opposition = $request['u10_b_opposition'];
        $fixtures->u10_b_venue = $request['u10_b_venue'];
        $fixtures->u10_b_start = $request['u10_b_start'];

        $fixtures->u10_d_homeoraway = $request['u10_d_homeoraway'];
        $fixtures->u10_d_opposition = $request['u10_d_opposition'];
        $fixtures->u10_d_venue = $request['u10_d_venue'];
        $fixtures->u10_d_start = $request['u10_d_start'];

        $fixtures->u10_e1_homeoraway = $request['u10_e1_homeoraway'];
        $fixtures->u10_e1_opposition = $request['u10_e1_opposition'];
        $fixtures->u10_e1_venue = $request['u10_e1_venue'];
        $fixtures->u10_e1_start = $request['u10_e1_start'];

        $fixtures->u11_a1_homeoraway = $request['u11_a1_homeoraway'];
        $fixtures->u11_a1_opposition = $request['u11_a1_opposition'];
        $fixtures->u11_a1_venue = $request['u11_a1_venue'];
        $fixtures->u11_a1_start = $request['u11_a1_start'];

        $fixtures->u11_b1_homeoraway = $request['u11_b1_homeoraway'];
        $fixtures->u11_b1_opposition = $request['u11_b1_opposition'];
        $fixtures->u11_b1_venue = $request['u11_b1_venue'];
        $fixtures->u11_b1_start = $request['u11_b1_start'];

        $fixtures->u11_d_homeoraway = $request['u11_d_homeoraway'];
        $fixtures->u11_d_opposition = $request['u11_d_opposition'];
        $fixtures->u11_d_venue = $request['u11_d_venue'];
        $fixtures->u11_d_start = $request['u11_d_start'];
    
        $fixtures->u11_e1_homeoraway = $request['u11_e1_homeoraway'];
        $fixtures->u11_e1_opposition = $request['u11_e1_opposition'];
        $fixtures->u11_e1_venue = $request['u11_e1_venue'];
        $fixtures->u11_e1_start = $request['u11_e1_start'];

        $fixtures->u12_1_homeoraway = $request['u12_1_homeoraway'];
        $fixtures->u12_1_opposition = $request['u12_1_opposition'];
        $fixtures->u12_1_venue = $request['u12_1_venue'];
        $fixtures->u12_1_start = $request['u12_1_start'];
    
        $fixtures->u12_4_homeoraway = $request['u12_4_homeoraway'];
        $fixtures->u12_4_opposition = $request['u12_4_opposition'];
        $fixtures->u12_4_venue = $request['u12_4_venue'];
        $fixtures->u12_4_start = $request['u12_4_start'];

        $fixtures->u12_8_homeoraway = $request['u12_8_homeoraway'];
        $fixtures->u12_8_opposition = $request['u12_8_opposition'];
        $fixtures->u12_8_venue = $request['u12_8_venue'];
        $fixtures->u12_8_start = $request['u12_8_start'];

        $fixtures->u14_4_homeoraway = $request['u14_4_homeoraway'];
        $fixtures->u14_4_opposition = $request['u14_4_opposition'];
        $fixtures->u14_4_venue = $request['u14_4_venue'];
        $fixtures->u14_4_start = $request['u14_4_start'];

        $fixtures->u16_c_homeoraway = $request['u16_c_homeoraway'];
        $fixtures->u16_c_opposition = $request['u16_c_opposition'];
        $fixtures->u16_c_venue = $request['u16_c_venue'];
        $fixtures->u16_c_start = $request['u16_c_start'];

        $fixtures->youths_homeoraway = $request['youths_homeoraway'];
        $fixtures->youths_opposition = $request['youths_opposition'];
        $fixtures->youths_venue = $request['youths_venue'];
        $fixtures->youths_start = $request['youths_start'];

        $fixtures->save();

        return redirect('/admin')->with('success', 'Fixtures Added');

    }

    public function edit($id) {

        $fixtures = NewFixtures::find($id);

        return view('admin.editnewfixtures')->with('fixtures', $fixtures);

    }

    public function update(Request $request, $id) {

        // $this->validate($request, [
        //     'week_start' => 'required',
            
        // ]);

        $fixtures = NewFixtures::find($id);
            
        $fixtures->week_start = $request['week_start'];
        $fixtures->u8_navy_homeoraway = $request['u8_navy_homeoraway'];
        $fixtures->u8_navy_opposition = $request['u8_navy_opposition'];
        $fixtures->u8_navy_venue = $request['u8_navy_venue'];
        $fixtures->u8_navy_start = $request['u8_navy_start'];

        $fixtures->u10d_homeoraway = $request['u10d_homeoraway'];
        $fixtures->u10d_opposition = $request['u10d_opposition'];
        $fixtures->u10d_venue = $request['u10d_venue'];
        $fixtures->u10d_start = $request['u10d_start'];

        $fixtures->u15_b1_homeoraway = $request['u15_b1_homeoraway'];
        $fixtures->u15_b1_opposition = $request['u15_b1_opposition'];
        $fixtures->u15_b1_venue = $request['u15_b1_venue'];
        $fixtures->u15_b1_start = $request['u15_b1_start'];

        $fixtures->seniors_1_homeoraway = $request['seniors_1_homeoraway'];
        $fixtures->seniors_1_opposition = $request['seniors_1_opposition'];
        $fixtures->seniors_1_venue = $request['seniors_1_venue'];
        $fixtures->seniors_1_start = $request['seniors_1_start'];

        $fixtures->seniors_2_homeoraway = $request['seniors_2_homeoraway'];
        $fixtures->seniors_2_opposition = $request['seniors_2_opposition'];
        $fixtures->seniors_2_venue = $request['seniors_2_venue'];
        $fixtures->seniors_2_start = $request['seniors_2_start'];

        $fixtures->u8_homeoraway = $request['u8_homeoraway'];
        $fixtures->u8_opposition = $request['u8_opposition'];
        $fixtures->u8_venue = $request['u8_venue'];
        $fixtures->u8_start = $request['u8_start'];

        $fixtures->u10_a_homeoraway = $request['u10_a_homeoraway'];
        $fixtures->u10_a_opposition = $request['u10_a_opposition'];
        $fixtures->u10_a_venue = $request['u10_a_venue'];
        $fixtures->u10_a_start = $request['u10_a_start'];

        $fixtures->u10_b_homeoraway = $request['u10_b_homeoraway'];
        $fixtures->u10_b_opposition = $request['u10_b_opposition'];
        $fixtures->u10_b_venue = $request['u10_b_venue'];
        $fixtures->u10_b_start = $request['u10_b_start'];

        $fixtures->u10_d_homeoraway = $request['u10_d_homeoraway'];
        $fixtures->u10_d_opposition = $request['u10_d_opposition'];
        $fixtures->u10_d_venue = $request['u10_d_venue'];
        $fixtures->u10_d_start = $request['u10_d_start'];

        $fixtures->u10_e1_homeoraway = $request['u10_e1_homeoraway'];
        $fixtures->u10_e1_opposition = $request['u10_e1_opposition'];
        $fixtures->u10_e1_venue = $request['u10_e1_venue'];
        $fixtures->u10_e1_start = $request['u10_e1_start'];

        $fixtures->u11_a1_homeoraway = $request['u11_a1_homeoraway'];
        $fixtures->u11_a1_opposition = $request['u11_a1_opposition'];
        $fixtures->u11_a1_venue = $request['u11_a1_venue'];
        $fixtures->u11_a1_start = $request['u11_a1_start'];

        $fixtures->u11_b1_homeoraway = $request['u11_b1_homeoraway'];
        $fixtures->u11_b1_opposition = $request['u11_b1_opposition'];
        $fixtures->u11_b1_venue = $request['u11_b1_venue'];
        $fixtures->u11_b1_start = $request['u11_b1_start'];

        $fixtures->u11_d_homeoraway = $request['u11_d_homeoraway'];
        $fixtures->u11_d_opposition = $request['u11_d_opposition'];
        $fixtures->u11_d_venue = $request['u11_d_venue'];
        $fixtures->u11_d_start = $request['u11_d_start'];
    
        $fixtures->u11_e1_homeoraway = $request['u11_e1_homeoraway'];
        $fixtures->u11_e1_opposition = $request['u11_e1_opposition'];
        $fixtures->u11_e1_venue = $request['u11_e1_venue'];
        $fixtures->u11_e1_start = $request['u11_e1_start'];

        $fixtures->u12_1_homeoraway = $request['u12_1_homeoraway'];
        $fixtures->u12_1_opposition = $request['u12_1_opposition'];
        $fixtures->u12_1_venue = $request['u12_1_venue'];
        $fixtures->u12_1_start = $request['u12_1_start'];
    
        $fixtures->u12_4_homeoraway = $request['u12_4_homeoraway'];
        $fixtures->u12_4_opposition = $request['u12_4_opposition'];
        $fixtures->u12_4_venue = $request['u12_4_venue'];
        $fixtures->u12_4_start = $request['u12_4_start'];

        $fixtures->u12_8_homeoraway = $request['u12_8_homeoraway'];
        $fixtures->u12_8_opposition = $request['u12_8_opposition'];
        $fixtures->u12_8_venue = $request['u12_8_venue'];
        $fixtures->u12_8_start = $request['u12_8_start'];

        $fixtures->u14_4_homeoraway = $request['u14_4_homeoraway'];
        $fixtures->u14_4_opposition = $request['u14_4_opposition'];
        $fixtures->u14_4_venue = $request['u14_4_venue'];
        $fixtures->u14_4_start = $request['u14_4_start'];

        $fixtures->u16_c_homeoraway = $request['u16_c_homeoraway'];
        $fixtures->u16_c_opposition = $request['u16_c_opposition'];
        $fixtures->u16_c_venue = $request['u16_c_venue'];
        $fixtures->u16_c_start = $request['u16_c_start'];

        $fixtures->youths_homeoraway = $request['youths_homeoraway'];
        $fixtures->youths_opposition = $request['youths_opposition'];
        $fixtures->youths_venue = $request['youths_venue'];
        $fixtures->youths_start = $request['youths_start'];

        $fixtures->save();

        return redirect('/admin')->with('success', 'Fixtures Updated');


    }

    public function destroy($id) {
        $fixtures = NewFixtures::find($id);

        $fixtures->delete();

        return redirect('/admin')->with('success', 'Fixtures Delete');
    } 
}
