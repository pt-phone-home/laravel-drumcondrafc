@extends('frontmaster')

@section('title')

@endsection

@section('content')
<section class="fixtures-item-container">
    <div class="fixtures-item">
            <h1 class="fixtures-item_heading">Weekly fixtures for {{$fixtures->week_start}}</h1>

            <table class="fixtures-item-table">
                <thead class="fixtures-item-table_head">
                    <tr class="fixtures-item-table_header">
                        <td> Day </td>
                        <td> Team </td>
                        <td> Home/Away </td>
                        <td> V's </td>
                        <td> Oposition </td>
                        <td> Venue </td>
                        <td> Start Time </td>
                    </tr>
                </thead>

                <tbody>
                    <tr class="fixtures-item-table_day">
                        <td><strong>Saturday</strong></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Senior 1 LSL</td>
                        <td>{{$fixtures->senior1_homeoraway}}</td>
                        <td><strong>Vs</strong></td>
                        <td>{{$fixtures->senior1_opposition}}</td>
                        <td>{{$fixtures->senior1_venue}}</td>
                        <td>{{$fixtures->senior1_start}}</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Senior 2 UCL</td>
                        <td>{{$fixtures->senior2_homeoraway}}</td>
                        <td><strong>Vs</strong></td>
                        <td>{{$fixtures->senior2_opposition}}</td>
                        <td>{{$fixtures->senior2_venue}}</td>
                        <td>{{$fixtures->senior2_start}}</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>U9 Emerald</td>
                        <td>{{$fixtures->u9_emerald_homeoraway}}</td>
                        <td><strong>Vs</strong></td>
                        <td>{{$fixtures->u9_emerald_opposition}}</td>
                        <td>{{$fixtures->u9_emerald_venue}}</td>
                        <td>{{$fixtures->u9_emerald_start}}</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>U11 B</td>
                        <td>{{$fixtures->u11_b_homeoraway}}</td>
                        <td><strong>Vs</strong></td>
                        <td>{{$fixtures->u11_b_opposition}}</td>
                        <td>{{$fixtures->u11_b_venue}}</td>
                        <td>{{$fixtures->u11_b_start}}</td>
                    </tr>

                    <tr class="fixtures-item-table_day">
                        <td><strong> Sunday </strong></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>U8</td>
                        <td>{{$fixtures->u8_homeoraway}}</td>
                        <td><strong>Vs</strong></td>
                        <td>{{$fixtures->u8_opposition}}</td>
                        <td>{{$fixtures->u8_venue}}</td>
                        <td>{{$fixtures->u8_start}}</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>U9 Navy</td>
                        <td>{{$fixtures->u9_navy_homeoraway}}</td>
                        <td><strong>Vs</strong></td>
                        <td>{{$fixtures->u9_navy_opposition}}</td>
                        <td>{{$fixtures->u9_navy_venue}}</td>
                        <td>{{$fixtures->u9_navy_start}}</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>U9 Brown</td>
                        <td>{{$fixtures->u9_brown_homeoraway}}</td>
                        <td><strong>Vs</strong></td>
                        <td>{{$fixtures->u9_brown_opposition}}</td>
                        <td>{{$fixtures->u9_brown_venue}}</td>
                        <td>{{$fixtures->u9_brown_start}}</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>U10</td>
                        <td>{{$fixtures->u10_homeoraway}}</td>
                        <td><strong>Vs</strong></td>
                        <td>{{$fixtures->u10_opposition}}</td>
                        <td>{{$fixtures->u10_venue}}</td>
                        <td>{{$fixtures->u10_start}}</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>U11 A1</td>
                        <td>{{$fixtures->u11_a1_homeoraway}}</td>
                        <td><strong>Vs</strong></td>
                        <td>{{$fixtures->u11_a1_opposition}}</td>
                        <td>{{$fixtures->u11_a1_venue}}</td>
                        <td>{{$fixtures->u11_a1_start}}</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>U11 B</td>
                        <td>{{$fixtures->u11_b_homeoraway}}</td>
                        <td><strong>Vs</strong></td>
                        <td>{{$fixtures->u11_b_opposition}}</td>
                        <td>{{$fixtures->u11_b_venue}}</td>
                        <td>{{$fixtures->u11_b_start}}</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>U11 C</td>
                        <td>{{$fixtures->u11_c_homeoraway}}</td>
                        <td><strong>Vs</strong></td>
                        <td>{{$fixtures->u11_c_opposition}}</td>
                        <td>{{$fixtures->u11_c_venue}}</td>
                        <td>{{$fixtures->u11_c_start}}</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>U11 D1</td>
                        <td>{{$fixtures->u11_d1_homeoraway}}</td>
                        <td><strong>Vs</strong></td>
                        <td>{{$fixtures->u11_d1_opposition}}</td>
                        <td>{{$fixtures->u11_d1_venue}}</td>
                        <td>{{$fixtures->u11_d1_start}}</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>U12 2</td>
                        <td>{{$fixtures->u12_2_homeoraway}}</td>
                        <td><strong>Vs</strong></td>
                        <td>{{$fixtures->u12_2_opposition}}</td>
                        <td>{{$fixtures->u12_2_venue}}</td>
                        <td>{{$fixtures->u12_2_start}}</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>U12 4</td>
                        <td>{{$fixtures->u12_4_homeoraway}}</td>
                        <td><strong>Vs</strong></td>
                        <td>{{$fixtures->u12_4_opposition}}</td>
                        <td>{{$fixtures->u12_4_venue}}</td>
                        <td>{{$fixtures->u12_4_start}}</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>U12 7</td>
                        <td>{{$fixtures->u12_7_homeoraway}}</td>
                        <td><strong>Vs</strong></td>
                        <td>{{$fixtures->u12_7_opposition}}</td>
                        <td>{{$fixtures->u12_7_venue}}</td>
                        <td>{{$fixtures->u12_7_start}}</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>U12 8</td>
                        <td>{{$fixtures->u12_8_homeoraway}}</td>
                        <td><strong>Vs</strong></td>
                        <td>{{$fixtures->u12_8_opposition}}</td>
                        <td>{{$fixtures->u12_8_venue}}</td>
                        <td>{{$fixtures->u12_8_start}}</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>U13 1</td>
                        <td>{{$fixtures->u13_1_homeoraway}}</td>
                        <td><strong>Vs</strong></td>
                        <td>{{$fixtures->u13_1_opposition}}</td>
                        <td>{{$fixtures->u13_1_venue}}</td>
                        <td>{{$fixtures->u13_1_start}}</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>U13 4</td>
                        <td>{{$fixtures->u13_4_homeoraway}}</td>
                        <td><strong>Vs</strong></td>
                        <td>{{$fixtures->u13_4_opposition}}</td>
                        <td>{{$fixtures->u13_4_venue}}</td>
                        <td>{{$fixtures->u13_4_start}}</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>U13 6</td>
                        <td>{{$fixtures->u13_6_homeoraway}}</td>
                        <td><strong>Vs</strong></td>
                        <td>{{$fixtures->u13_6_opposition}}</td>
                        <td>{{$fixtures->u13_6_venue}}</td>
                        <td>{{$fixtures->u13_6_start}}</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>U15 2</td>
                        <td>{{$fixtures->u15_2_homeoraway}}</td>
                        <td><strong>Vs</strong></td>
                        <td>{{$fixtures->u15_2_opposition}}</td>
                        <td>{{$fixtures->u15_2_venue}}</td>
                        <td>{{$fixtures->u15_2_start}}</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>U16 B</td>
                        <td>{{$fixtures->u16_b_homeoraway}}</td>
                        <td><strong>Vs</strong></td>
                        <td>{{$fixtures->u16_b_opposition}}</td>
                        <td>{{$fixtures->u16_b_venue}}</td>
                        <td>{{$fixtures->u16_b_start}}</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>U17 B1</td>
                        <td>{{$fixtures->u17_b1_homeoraway}}</td>
                        <td><strong>Vs</strong></td>
                        <td>{{$fixtures->u17_b1_opposition}}</td>
                        <td>{{$fixtures->u17_b1_venue}}</td>
                        <td>{{$fixtures->u17_b1_start}}</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>U19 LFA</td>
                        <td>{{$fixtures->u19_lfa_homeoraway}}</td>
                        <td><strong>Vs</strong></td>
                        <td>{{$fixtures->u19_lfa_opposition}}</td>
                        <td>{{$fixtures->u19_lfa_venue}}</td>
                        <td>{{$fixtures->u19_lfa_start}}</td>
                    </tr>

                </tbody>

            </table>

            <a href="/fixtures" class="btn">Back to Fixtures</a>
    </div>

</section>

@endsection
