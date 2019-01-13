<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFeaturedResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('featured_results', function (Blueprint $table) {
            $table->increments('id');
            $table->string('date');
            $table->string('squad');
            $table->string('home_team');
            $table->string('away_team');
            $table->string('home_team_score');
            $table->string('away_team_score');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('featured_results');
    }
}
