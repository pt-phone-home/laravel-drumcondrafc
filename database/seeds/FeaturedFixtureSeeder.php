<?php

use Illuminate\Database\Seeder;

class FeaturedFixtureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\FeaturedFixture::create([
            'date' => '31st March', 
            'squad' => 'U11s A',
            'home_team' => 'Drumcondra',
            'away_team' => 'Clontarf',
            'location' => 'Clonturk Park',
            'time' => '10:30am'
        ]);
    }
}
