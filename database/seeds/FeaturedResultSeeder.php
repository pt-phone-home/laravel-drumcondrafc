<?php

use Illuminate\Database\Seeder;

class FeaturedResultSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\FeaturedResults::create([
            'date' => '1st April', 
            'squad' => 'Senior 1',
            'home_team' => 'Drumcondra',
            'away_team' => 'Raheny',
            'home_team_score' => '4',
            'away_team_score' => '1'
        ]);
    }
}
