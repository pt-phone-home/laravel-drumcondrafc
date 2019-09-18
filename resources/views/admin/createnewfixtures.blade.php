@extends('adminmaster')

@section('title')

@endsection

@section('content')
<section class="new_newsitem-intro">
        <h1>Add list of weekly fixtures</h1>
    </section>
    <section class="form-container">

            <form action="/admin/createnewfixtures" method="POST" class="contact-form article-form" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="week_start">Fixtures for Week Beginning:</label>
                    <input type="text" name="week_start" id="date" placeholder="E.g. 3rd Feb 2019"
                     required>
                </div>

                <div class="form-group">
                    <table class="fixtures-table">
                        <thead>
                            <tr>
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
                            <tr>
                                <td><strong>Saturday</strong></td>
                                {{-- Senior 1, Senior 2, U9 Emerald, U11 B - DONE --}}
                            </tr>
                            <tr>
                                <td></td>
                                <td>Senior 1 LSL</td>
                                <td><input type="text" name="senior1_homeoraway"></td>
                                <td><strong>Vs</strong></td>
                                <td><input type="text" name="senior1_opposition"></td>
                                <td><input type="text" name="senior1_venue"></td>
                                <td><input type="text" name="senior1_start"></td>

                            </tr>
                            <tr>
                                <td></td>
                                <td>Senior 2 UCL</td>
                                <td><input type="text" name="senior2_homeoraway"></td>
                                <td><strong>Vs</strong></td>
                                <td><input type="text" name="senior2_opposition"></td>
                                <td><input type="text" name="senior2_venue"></td>
                                <td><input type="text" name="senior2_start"></td>

                            </tr>
                            <tr>
                                <td></td>
                                <td>U9 Emerald</td>
                                <td><input type="text" name="u9_emerald_homeoraway"></td>
                                <td><strong>Vs</strong></td>
                                <td><input type="text" name="u9_emerald_opposition"></td>
                                <td><input type="text" name="u9_emerald_venue"></td>
                                <td><input type="text" name="u9_emerald_start"></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>U11 B</td>
                                <td><input type="text" name="u11_b_homeoraway"></td>
                                <td><strong>Vs</strong></td>
                                <td><input type="text" name="u11_b_opposition"></td>
                                <td><input type="text" name="u11_b_venue"></td>
                                <td><input type="text" name="u11_b_start"></td>
                            </tr>

                            <tr>
                                <td><strong> Sunday </strong></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>U8</td>
                                <td><input type="text" name="u8_homeoraway"></td>
                                <td><strong>Vs</strong></td>
                                <td><input type="text" name="u8_opposition"></td>
                                <td><input type="text" name="u8_venue"></td>
                                <td><input type="text" name="u8_start"></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>U9 Navy</td>
                                <td><input type="text" name="u9_navy_homeoraway"></td>
                                <td><strong>Vs</strong></td>
                                <td><input type="text" name="u9_navy_opposition"></td>
                                <td><input type="text" name="u9_navy_venue"></td>
                                <td><input type="text" name="u9_navy_start"></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>U9 Brown</td>
                                <td><input type="text" name="u9_brown_homeoraway"></td>
                                <td><strong>Vs</strong></td>
                                <td><input type="text" name="u9_brown_opposition"></td>
                                <td><input type="text" name="u9_brown_venue"></td>
                                <td><input type="text" name="u9_brown_start"></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>U10 </td>
                                <td><input type="text" name="u10_homeoraway"></td>
                                <td><strong>Vs</strong></td>
                                <td><input type="text" name="u10_opposition"></td>
                                <td><input type="text" name="u10_venue"></td>
                                <td><input type="text" name="u10_start"></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>U11 A1</td>
                                <td><input type="text" name="u11_a1_homeoraway"></td>
                                <td><strong>Vs</strong></td>
                                <td><input type="text" name="u11_a1_opposition"></td>
                                <td><input type="text" name="u11_a1_venue"></td>
                                <td><input type="text" name="u11_a1_start"></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>U11 B</td>
                                <td><input type="text" name="u11_b_homeoraway"></td>
                                <td><strong>Vs</strong></td>
                                <td><input type="text" name="u11_b_opposition"></td>
                                <td><input type="text" name="u11_b_venue"></td>
                                <td><input type="text" name="u11_b_start"></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>U11 C</td>
                                <td><input type="text" name="u11_c_homeoraway"></td>
                                <td><strong>Vs</strong></td>
                                <td><input type="text" name="u11_c_opposition"></td>
                                <td><input type="text" name="u11_c_venue"></td>
                                <td><input type="text" name="u11_c_start"></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>U11 D1</td>
                                <td><input type="text" name="u11_d1_homeoraway"></td>
                                <td><strong>Vs</strong></td>
                                <td><input type="text" name="u11_d1_opposition"></td>
                                <td><input type="text" name="u11_d1_venue"></td>
                                <td><input type="text" name="u11_d1_start"></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>U12 2</td>
                                <td><input type="text" name="u12_2_homeoraway"></td>
                                <td><strong>Vs</strong></td>
                                <td><input type="text" name="u12_2_opposition"></td>
                                <td><input type="text" name="u12_2_venue"></td>
                                <td><input type="text" name="u12_2_start"></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>U12 4</td>
                                <td><input type="text" name="u12_4_homeoraway"></td>
                                <td><strong>Vs</strong></td>
                                <td><input type="text" name="u12_4_opposition"></td>
                                <td><input type="text" name="u12_4_venue"></td>
                                <td><input type="text" name="u12_4_start"></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>U12 7</td>
                                <td><input type="text" name="u12_7_homeoraway"></td>
                                <td><strong>Vs</strong></td>
                                <td><input type="text" name="u12_7_opposition"></td>
                                <td><input type="text" name="u12_7_venue"></td>
                                <td><input type="text" name="u12_7_start"></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>U12 8</td>
                                <td><input type="text" name="u12_8_homeoraway"></td>
                                <td><strong>Vs</strong></td>
                                <td><input type="text" name="u12_8_opposition"></td>
                                <td><input type="text" name="u12_8_venue"></td>
                                <td><input type="text" name="u12_8_start"></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>U13 1</td>
                                <td><input type="text" name="u13_1_homeoraway"></td>
                                <td><strong>Vs</strong></td>
                                <td><input type="text" name="u13_1_opposition"></td>
                                <td><input type="text" name="u13_1_venue"></td>
                                <td><input type="text" name="u13_1_start"></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>U13 4</td>
                                <td><input type="text" name="u13_4_homeoraway"></td>
                                <td><strong>Vs</strong></td>
                                <td><input type="text" name="u13_4_opposition"></td>
                                <td><input type="text" name="u13_4_venue"></td>
                                <td><input type="text" name="u13_4_start"></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>U13 6</td>
                                <td><input type="text" name="u13_6_homeoraway"></td>
                                <td><strong>Vs</strong></td>
                                <td><input type="text" name="u13_6_opposition"></td>
                                <td><input type="text" name="u13_6_venue"></td>
                                <td><input type="text" name="u13_6_start"></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>U15 2</td>
                                <td><input type="text" name="u15_2_homeoraway"></td>
                                <td><strong>Vs</strong></td>
                                <td><input type="text" name="u15_2_opposition"></td>
                                <td><input type="text" name="u15_2_venue"></td>
                                <td><input type="text" name="u15_2_start"></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>U16 B</td>
                                <td><input type="text" name="u16_b_homeoraway"></td>
                                <td><strong>Vs</strong></td>
                                <td><input type="text" name="u16_b_opposition"></td>
                                <td><input type="text" name="u16_b_venue"></td>
                                <td><input type="text" name="u16_b_start"></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>U17 B1</td>
                                <td><input type="text" name="u17_b1_homeoraway"></td>
                                <td><strong>Vs</strong></td>
                                <td><input type="text" name="u17_b1_opposition"></td>
                                <td><input type="text" name="u17_b1_venue"></td>
                                <td><input type="text" name="u17_b1_start"></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>U19 LFA</td>
                                <td><input type="text" name="u19_lfa_homeoraway"></td>
                                <td><strong>Vs</strong></td>
                                <td><input type="text" name="u19_lfa_opposition"></td>
                                <td><input type="text" name="u19_lfa_venue"></td>
                                <td><input type="text" name="u19_lfa_start"></td>
                            </tr>

                        </tbody>
                    </table>
                </div>



                <button>Save</button>
                <a href="/admin">Go Back</a>
            </form>


    </section>
@endsection
