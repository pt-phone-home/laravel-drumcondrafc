<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewFixturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('new_fixtures', function (Blueprint $table) {
            $table->increments('id');
            $table->string('week_start');

            $table->string('u8_navy_homeoraway')->nullable();
            $table->string('u8_navy_opposition')->nullable();
            $table->string('u8_navy_venue')->nullable();
            $table->string('u8_navy_start')->nullable();

            $table->string('u10d_homeoraway')->nullable();
            $table->string('u10d_opposition')->nullable();
            $table->string('u10d_venue')->nullable();
            $table->string('u10d_start')->nullable();

            $table->string('u15_b1_homeoraway')->nullable();
            $table->string('u15_b1_opposition')->nullable();
            $table->string('u15_b1_venue')->nullable();
            $table->string('u15_b1_start')->nullable();

            $table->string('seniors_1_homeoraway')->nullable();
            $table->string('seniors_1_opposition')->nullable();
            $table->string('seniors_1_venue')->nullable();
            $table->string('seniors_1_start')->nullable();

            $table->string('seniors_2_homeoraway')->nullable();
            $table->string('seniors_2_opposition')->nullable();
            $table->string('seniors_2_venue')->nullable();
            $table->string('seniors_2_start')->nullable();

            $table->string('u8_homeoraway')->nullable();
            $table->string('u8_opposition')->nullable();
            $table->string('u8_venue')->nullable();
            $table->string('u8_start')->nullable();

            $table->string('u10_a_homeoraway')->nullable();
            $table->string('u10_a_opposition')->nullable();
            $table->string('u10_a_venue')->nullable();
            $table->string('u10_a_start')->nullable();

            $table->string('u10_b_homeoraway')->nullable();
            $table->string('u10_b_opposition')->nullable();
            $table->string('u10_b_venue')->nullable();
            $table->string('u10_b_start')->nullable();

            $table->string('u10_d_homeoraway')->nullable();
            $table->string('u10_d_opposition')->nullable();
            $table->string('u10_d_venue')->nullable();
            $table->string('u10_d_start')->nullable();

            $table->string('u10_e1_homeoraway')->nullable();
            $table->string('u10_e1_opposition')->nullable();
            $table->string('u10_e1_venue')->nullable();
            $table->string('u10_e1_start')->nullable();

            $table->string('u11_a1_homeoraway')->nullable();
            $table->string('u11_a1_opposition')->nullable();
            $table->string('u11_a1_venue')->nullable();
            $table->string('u11_a1_start')->nullable();

            $table->string('u11_b1_homeoraway')->nullable();
            $table->string('u11_b1_opposition')->nullable();
            $table->string('u11_b1_venue')->nullable();
            $table->string('u11_b1_start')->nullable();

            $table->string('u11_d_homeoraway')->nullable();
            $table->string('u11_d_opposition')->nullable();
            $table->string('u11_d_venue')->nullable();
            $table->string('u11_d_start')->nullable();

            $table->string('u11_e1_homeoraway')->nullable();
            $table->string('u11_e1_opposition')->nullable();
            $table->string('u11_e1_venue')->nullable();
            $table->string('u11_e1_start')->nullable();

            $table->string('u12_1_homeoraway')->nullable();
            $table->string('u12_1_opposition')->nullable();
            $table->string('u12_1_venue')->nullable();
            $table->string('u12_1_start')->nullable();

            $table->string('u12_4_homeoraway')->nullable();
            $table->string('u12_4_opposition')->nullable();
            $table->string('u12_4_venue')->nullable();
            $table->string('u12_4_start')->nullable();

            $table->string('u12_8_homeoraway')->nullable();
            $table->string('u12_8_opposition')->nullable();
            $table->string('u12_8_venue')->nullable();
            $table->string('u12_8_start')->nullable();

            $table->string('u14_4_homeoraway')->nullable();
            $table->string('u14_4_opposition')->nullable();
            $table->string('u14_4_venue')->nullable();
            $table->string('u14_4_start')->nullable();

            $table->string('u16_c_homeoraway')->nullable();
            $table->string('u16_c_opposition')->nullable();
            $table->string('u16_c_venue')->nullable();
            $table->string('u16_c_start')->nullable();

            $table->string('youths_homeoraway')->nullable();
            $table->string('youths_opposition')->nullable();
            $table->string('youths_venue')->nullable();
            $table->string('youths_start')->nullable();
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
        Schema::dropIfExists('new_fixtures');
    }
}
