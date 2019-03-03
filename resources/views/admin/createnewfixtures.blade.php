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
                            </tr>
                            <tr>
                                {{-- <td></td>
                                <td>U8 Navy</td>
                                <td><input type="text" name="u8_navy_homeoraway"></td>
                                <td><strong>Vs</strong></td>
                                <td><input type="text" name="u8_navy_opposition"></td>
                                <td><input type="text" name="u8_navy_venue"></td>
                                <td><input type="text" name="u8_navy_start"></td> --}}

                            </tr>
                            <tr>
                                <td></td>
                                <td>U10 D</td>
                                <td><input type="text" name="u10d_homeoraway"></td>
                                <td><strong>Vs</strong></td>
                                <td><input type="text" name="u10d_opposition"></td>
                                <td><input type="text" name="u10d_venue"></td>
                                <td><input type="text" name="u10d_start"></td>
                                
                            </tr>
                            <tr> 
                                <td></td>
                                <td>U15 B1</td>
                                <td><input type="text" name="u15_b1_homeoraway"></td>
                                <td><strong>Vs</strong></td>
                                <td><input type="text" name="u15_b1_opposition"></td>
                                <td><input type="text" name="u15_b1_venue"></td>
                                <td><input type="text" name="u15_b1_start"></td>
                            </tr>
                            <tr> 
                                <td></td>
                                <td>Seniors 1</td>
                                <td><input type="text" name="seniors_1_homeoraway"></td>
                                <td><strong>Vs</strong></td>
                                <td><input type="text" name="seniors_1_opposition"></td>
                                <td><input type="text" name="seniors_1_venue"></td>
                                <td><input type="text" name="seniors_1_start"></td>
                            </tr>
                            <tr> 
                                <td></td>
                                <td>Seniors 2</td>
                                <td><input type="text" name="seniors_2_homeoraway"></td>
                                <td><strong>Vs</strong></td>
                                <td><input type="text" name="seniors_2_opposition"></td>
                                <td><input type="text" name="seniors_2_venue"></td>
                                <td><input type="text" name="seniors_2_start"></td>
                            </tr>

                            <tr>
                                <td><strong> Sunday </strong></td>
                            </tr>
                            {{-- <tr> 
                                <td></td>
                                <td>U8 </td>
                                <td><input type="text" name="u8_homeoraway"></td>
                                <td><strong>Vs</strong></td>
                                <td><input type="text" name="u8_opposition"></td>
                                <td><input type="text" name="u8_venue"></td>
                                <td><input type="text" name="u8_start"></td>
                            </tr> --}}
                            <tr> 
                                <td></td>
                                <td>U10 A</td>
                                <td><input type="text" name="u10_a_homeoraway"></td>
                                <td><strong>Vs</strong></td>
                                <td><input type="text" name="u10_a_opposition"></td>
                                <td><input type="text" name="u10_a_venue"></td>
                                <td><input type="text" name="u10_a_start"></td>
                            </tr>
                            <tr> 
                                <td></td>
                                <td>U10 B</td>
                                <td><input type="text" name="u10_b_homeoraway"></td>
                                <td><strong>Vs</strong></td>
                                <td><input type="text" name="u10_b_opposition"></td>
                                <td><input type="text" name="u10_b_venue"></td>
                                <td><input type="text" name="u10_b_start"></td>
                            </tr>
                            <tr> 
                                <td></td>
                                <td>U10 D</td>
                                <td><input type="text" name="u10_d_homeoraway"></td>
                                <td><strong>Vs</strong></td>
                                <td><input type="text" name="u10_d_opposition"></td>
                                <td><input type="text" name="u10_d_venue"></td>
                                <td><input type="text" name="u10_d_start"></td>
                            </tr>
                            <tr> 
                                <td></td>
                                <td>U10 E1</td>
                                <td><input type="text" name="u10_e1_homeoraway"></td>
                                <td><strong>Vs</strong></td>
                                <td><input type="text" name="u10_e1_opposition"></td>
                                <td><input type="text" name="u10_e1_venue"></td>
                                <td><input type="text" name="u10_e1_start"></td>
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
                                <td>U11 B1</td>
                                <td><input type="text" name="u11_b1_homeoraway"></td>
                                <td><strong>Vs</strong></td>
                                <td><input type="text" name="u11_b1_opposition"></td>
                                <td><input type="text" name="u11_b1_venue"></td>
                                <td><input type="text" name="u11_b1_start"></td>
                            </tr>
                            <tr> 
                                <td></td>
                                <td>U11 D</td>
                                <td><input type="text" name="u11_d_homeoraway"></td>
                                <td><strong>Vs</strong></td>
                                <td><input type="text" name="u11_d_opposition"></td>
                                <td><input type="text" name="u11_d_venue"></td>
                                <td><input type="text" name="u11_d_start"></td>
                            </tr>
                            <tr> 
                                <td></td>
                                <td>U11 E1</td>
                                <td><input type="text" name="u11_e1_homeoraway"></td>
                                <td><strong>Vs</strong></td>
                                <td><input type="text" name="u11_e1_opposition"></td>
                                <td><input type="text" name="u11_e1_venue"></td>
                                <td><input type="text" name="u11_e1_start"></td>
                            </tr>
                            <tr> 
                                <td></td>
                                <td>U12 1</td>
                                <td><input type="text" name="u12_1_homeoraway"></td>
                                <td><strong>Vs</strong></td>
                                <td><input type="text" name="u12_1_opposition"></td>
                                <td><input type="text" name="u12_1_venue"></td>
                                <td><input type="text" name="u12_1_start"></td>
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
                                <td>U12 8</td>
                                <td><input type="text" name="u12_8_homeoraway"></td>
                                <td><strong>Vs</strong></td>
                                <td><input type="text" name="u12_8_opposition"></td>
                                <td><input type="text" name="u12_8_venue"></td>
                                <td><input type="text" name="u12_8_start"></td>
                            </tr>
                            <tr> 
                                <td></td>
                                <td>U14 4</td>
                                <td><input type="text" name="u14_4_homeoraway"></td>
                                <td><strong>Vs</strong></td>
                                <td><input type="text" name="u14_4_opposition"></td>
                                <td><input type="text" name="u14_4_venue"></td>
                                <td><input type="text" name="u14_4_start"></td>
                            </tr>
                            <tr> 
                                <td></td>
                                <td>U16 C</td>
                                <td><input type="text" name="u16_c_homeoraway"></td>
                                <td><strong>Vs</strong></td>
                                <td><input type="text" name="u16_c_opposition"></td>
                                <td><input type="text" name="u16_c_venue"></td>
                                <td><input type="text" name="u16_c_start"></td>
                            </tr>
                            <tr> 
                                <td></td>
                                <td>Youths</td>
                                <td><input type="text" name="youths_homeoraway"></td>
                                <td><strong>Vs</strong></td>
                                <td><input type="text" name="youths_opposition"></td>
                                <td><input type="text" name="youths_venue"></td>
                                <td><input type="text" name="youths_start"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            
            
            
                <button>Save</button>
                <a href="/admin">Go Back</a>
            </form>
        

    </section>
@endsection