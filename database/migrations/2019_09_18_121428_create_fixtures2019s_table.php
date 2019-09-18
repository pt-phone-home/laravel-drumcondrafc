<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFixtures2019sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fixtures2019s', function (Blueprint $table) {
            $table->increments('id');
            $table->string('week_start');
            // Saturday
            //Senior 1 LSL
            $table->text('senior1_homeoraway')->nullable();
            $table->text('senior1_opposition')->nullable();
            $table->text('senior1_venue')->nullable();
            $table->text('senior1_start')->nullable();

            // Senior 2 UCL
            $table->text('senior2_homeoraway')->nullable();
            $table->text('senior2_opposition')->nullable();
            $table->text('senior2_venue')->nullable();
            $table->text('senior2_start')->nullable();
            // U9 Emerald
            $table->text('u9_emerald_homeoraway')->nullable();
            $table->text('u9_emerald_opposition')->nullable();
            $table->text('u9_emerald_venue')->nullable();
            $table->text('u9_emerald_start')->nullable();
            // U11 B
            $table->text('u11_b_homeoraway')->nullable();
            $table->text('u11_b_opposition')->nullable();
            $table->text('u11_b_venue')->nullable();
            $table->text('u11_b_start')->nullable();

            // Sunday

            // U8     ( will be a new team no color yet)
            $table->text('u8_homeoraway')->nullable();
            $table->text('u8_opposition')->nullable();
            $table->text('u8_venue')->nullable();
            $table->text('u8_start')->nullable();
            // U9 NAVY
            $table->text('u9_navy_homeoraway')->nullable();
            $table->text('u9_navy_opposition')->nullable();
            $table->text('u9_navy_venue')->nullable();
            $table->text('u9_navy_start')->nullable();
            // U9 BROWN
            $table->text('u9_brown_homeoraway')->nullable();
            $table->text('u9_brown_opposition')->nullable();
            $table->text('u9_brown_venue')->nullable();
            $table->text('u9_brown_start')->nullable();
            // U10.    ( will be a new team but no list yet)
            $table->text('u10_homeoraway')->nullable();
            $table->text('u10_opposition')->nullable();
            $table->text('u10_venue')->nullable();
            $table->text('u10_start')->nullable();
            // U11A1
            $table->text('u11_a1_homeoraway')->nullable();
            $table->text('u11_a1_opposition')->nullable();
            $table->text('u11_a1_venue')->nullable();
            $table->text('u11_a1_start')->nullable();
            // U11B
            $table->text('u11_b1_homeoraway')->nullable();
            $table->text('u11_b1_opposition')->nullable();
            $table->text('u11_b1_venue')->nullable();
            $table->text('u11_b1_start')->nullable();
            // U11C
            $table->text('u11_c_homeoraway')->nullable();
            $table->text('u11_c_opposition')->nullable();
            $table->text('u11_c_venue')->nullable();
            $table->text('u11_c_start')->nullable();
            // U11D1
            $table->text('u11_d1_homeoraway')->nullable();
            $table->text('u11_d1_opposition')->nullable();
            $table->text('u11_d1_venue')->nullable();
            $table->text('u11_d1_start')->nullable();
            // U12-2
            $table->text('u12_2_homeoraway')->nullable();
            $table->text('u12_2_opposition')->nullable();
            $table->text('u12_2_venue')->nullable();
            $table->text('u12_2_start')->nullable();
            // U12-4
            $table->text('u12_4_homeoraway')->nullable();
            $table->text('u12_4_opposition')->nullable();
            $table->text('u12_4_venue')->nullable();
            $table->text('u12_4_start')->nullable();
            // U12-7
            $table->text('u12_7_homeoraway')->nullable();
            $table->text('u12_7_opposition')->nullable();
            $table->text('u12_7_venue')->nullable();
            $table->text('u12_7_start')->nullable();
            // U12-8
            $table->text('u12_8_homeoraway')->nullable();
            $table->text('u12_8_opposition')->nullable();
            $table->text('u12_8_venue')->nullable();
            $table->text('u12_8_start')->nullable();
            // U13-1
            $table->text('u13_1_homeoraway')->nullable();
            $table->text('u13_1_opposition')->nullable();
            $table->text('u13_1_venue')->nullable();
            $table->text('u13_1_start')->nullable();
            // U13-4
            $table->text('u13_4_homeoraway')->nullable();
            $table->text('u13_4_opposition')->nullable();
            $table->text('u13_4_venue')->nullable();
            $table->text('u13_4_start')->nullable();
            // U13-6
            $table->text('u13_6_homeoraway')->nullable();
            $table->text('u13_6_opposition')->nullable();
            $table->text('u13_6_venue')->nullable();
            $table->text('u13_6_start')->nullable();
            // U15-2
            $table->text('u15_2_homeoraway')->nullable();
            $table->text('u15_2_opposition')->nullable();
            $table->text('u15_2_venue')->nullable();
            $table->text('u15_2_start')->nullable();
            // U16B
            $table->text('u16_b_homeoraway')->nullable();
            $table->text('u16_b_opposition')->nullable();
            $table->text('u16_b_venue')->nullable();
            $table->text('u16_b_start')->nullable();
            // U17B1
            $table->text('u17_b1_homeoraway')->nullable();
            $table->text('u17_b1_opposition')->nullable();
            $table->text('u17_b1_venue')->nullable();
            $table->text('u17_b1_start')->nullable();
            // U19 LFA
            $table->text('u19_lfa_homeoraway')->nullable();
            $table->text('u19_lfa_opposition')->nullable();
            $table->text('u19_lfa_venue')->nullable();
            $table->text('u19_lfa_start')->nullable();

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
        Schema::dropIfExists('fixtures2019s');
    }
}