@extends('adminmaster')

@section('title')

@endsection

@section('content')
<section class="new_newsitem-intro">
        <h1>Edit list of weekly fixtures</h1>
    </section>
    <section class="form-container">

            <form action="/admin/fixtures/{{$fixtures->id}}" method="POST" class="contact-form article-form" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="week_start">Fixtures for Week Beginning:</label>
                    <input type="text" name="week_start" id="date" placeholder="E.g. 3rd Feb 2019"
                required value="{{$fixtures->week_start}}">
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
                                <td></td>
                                <td>U8 Navy</td>
                                <td><input type="text" name="u8_navy_homeoraway" value="{{$fixtures->u8_navy_homeoraway}}"></td>
                                <td><strong>Vs</strong></td>
                                <td><input type="text" name="u8_navy_opposition" value="{{$fixtures->u8_navy_opposition}}"></td>
                                <td><input type="text" name="u8_navy_venue" value="{{$fixtures->u8_navy_venue}}"></td>
                                <td><input type="text" name="u8_navy_start" value="{{$fixtures->u8_navy_start}}"></td>

                            </tr>
                            <tr>
                                <td></td>
                                <td>U10 D</td>
                            <td><input type="text" name="u10d_homeoraway" value="{{$fixtures->u10d_homeoraway}}"></td>
                                <td><strong>Vs</strong></td>
                                <td><input type="text" name="u10d_opposition" value="{{$fixtures->u10d_opposition}}"></td>
                                <td><input type="text" name="u10d_venue" value="{{$fixtures->u10d_venue}}"></td>
                                <td><input type="text" name="u10d_start" value="{{$fixtures->u10d_start}}"></td>
                                
                            </tr>
                            <tr> 
                                <td></td>
                                <td>U15 B1</td>
                            <td><input type="text" name="u15_b1_homeoraway" value="{{$fixtures->u15_b1_homeoraway}}"></td>
                                <td><strong>Vs</strong></td>
                                <td><input type="text" name="u15_b1_opposition" value="{{$fixtures->u15_b1_opposition}}"></td>
                                <td><input type="text" name="u15_b1_venue" value="{{$fixtures->u15_b1_venue}}"></td>
                                <td><input type="text" name="u15_b1_start" value="{{$fixtures->u15_b1_start}}"></td>
                            </tr>
                            <tr> 
                                <td></td>
                                <td>Seniors 1</td>
                                <td><input type="text" name="seniors_1_homeoraway" value="{{$fixtures->seniors_1_homeoraway}}"></td>
                                <td><strong>Vs</strong></td>
                                <td><input type="text" name="seniors_1_opposition" value="{{$fixtures->seniors_1_opposition}}" ></td>
                                <td><input type="text" name="seniors_1_venue" value="{{$fixtures->seniors_1_venue}}"  ></td>
                                <td><input type="text" name="seniors_1_start" value="{{$fixtures->seniors_1_start}}" ></td>
                            </tr>
                            <tr> 
                                <td></td>
                                <td>Seniors 2</td>
                                <td><input type="text" name="seniors_2_homeoraway" value="{{$fixtures->seniors_2_homeoraway}}"></td>
                                <td><strong>Vs</strong></td>
                                <td><input type="text" name="seniors_2_opposition" value="{{$fixtures->seniors_2_opposition}}"></td>
                                <td><input type="text" name="seniors_2_venue" value="{{$fixtures->seniors_2_venue}}"></td>
                                <td><input type="text" name="seniors_2_start" value="{{$fixtures->seniors_2_start}}"></td>
                            </tr>

                            <tr>
                                <td><strong> Sunday </strong></td>
                            </tr>
                            <tr> 
                                <td></td>
                                <td>U8 Navy (Sunday)</td>
                                <td><input type="text" name="u8_homeoraway" value="{{$fixtures->u8_homeoraway}}"></td>
                                <td><strong>Vs</strong></td>
                                <td><input type="text" name="u8_opposition" value="{{$fixtures->u8_opposition}}"></td>
                                <td><input type="text" name="u8_venue" value="{{$fixtures->u8_venue}}"></td>
                                <td><input type="text" name="u8_start" value="{{$fixtures->u8_start}}"></td>
                            </tr>
                            <tr> 
                                <td></td>
                                <td>U10 A1</td>
                                <td><input type="text" name="u10_a_homeoraway" value="{{$fixtures->u10_a_homeoraway}}"></td>
                                <td><strong>Vs</strong></td>
                                <td><input type="text" name="u10_a_opposition" value="{{$fixtures->u10_a_opposition}}"></td>
                                <td><input type="text" name="u10_a_venue" value="{{$fixtures->u10_a_venue}}"></td>
                                <td><input type="text" name="u10_a_start" value="{{$fixtures->u10_a_start}}"></td>
                            </tr>
                            <tr> 
                                <td></td>
                                <td>U10 B</td>
                                <td><input type="text" name="u10_b_homeoraway" value="{{$fixtures->u10_b_homeoraway}}"></td>
                                <td><strong>Vs</strong></td>
                                <td><input type="text" name="u10_b_opposition" value="{{$fixtures->u10_b_opposition}}"></td>
                                <td><input type="text" name="u10_b_venue" value="{{$fixtures->u10_b_venue}}"></td>
                                <td><input type="text" name="u10_b_start" value="{{$fixtures->u10_b_start}}"></td>
                            </tr>
                            <tr> 
                                <td></td>
                                <td>U10 C1</td>
                                <td><input type="text" name="u10_d_homeoraway" value="{{$fixtures->u10_d_homeoraway}}"></td>
                                <td><strong>Vs</strong></td>
                                <td><input type="text" name="u10_d_opposition" value="{{$fixtures->u10_d_opposition}}"></td>
                                <td><input type="text" name="u10_d_venue" value="{{$fixtures->u10_d_venue}}"></td>
                                <td><input type="text" name="u10_d_start" value="{{$fixtures->u10_d_start}}"></td>
                            </tr>
                            <tr> 
                                <td></td>
                                <td>U10 E1</td>
                                <td><input type="text" name="u10_e1_homeoraway" value="{{$fixtures->u10_e1_homeoraway}}"></td>
                                <td><strong>Vs</strong></td>
                                <td><input type="text" name="u10_e1_opposition" value="{{$fixtures->u10_e1_opposition}}"></td>
                                <td><input type="text" name="u10_e1_venue" value="{{$fixtures->u10_e1_venue}}"></td>
                                <td><input type="text" name="u10_e1_start" value="{{$fixtures->u10_e1_start}}"></td>
                            </tr>
                            <tr> 
                                <td></td>
                                <td>U11 A1</td>
                                <td><input type="text" name="u11_a1_homeoraway" value="{{$fixtures->u11_a1_homeoraway}}"></td>
                                <td><strong>Vs</strong></td>
                                <td><input type="text" name="u11_a1_opposition" value="{{$fixtures->u11_a1_opposition}}"></td>
                                <td><input type="text" name="u11_a1_venue" value="{{$fixtures->u11_a1_venue}}"></td>
                                <td><input type="text" name="u11_a1_start" value="{{$fixtures->u11_a1_start}}"></td>
                            </tr>
                            <tr> 
                                <td></td>
                                <td>U11 B1</td>
                                <td><input type="text" name="u11_b1_homeoraway" value="{{$fixtures->u11_b1_homeoraway}}"></td>
                                <td><strong>Vs</strong></td>
                                <td><input type="text" name="u11_b1_opposition" value="{{$fixtures->u11_b1_opposition}}"></td>
                                <td><input type="text" name="u11_b1_venue" value="{{$fixtures->u11_b1_venue}}"></td>
                                <td><input type="text" name="u11_b1_start" value="{{$fixtures->u11_b1_start}}"></td>
                            </tr>
                            <tr> 
                                <td></td>
                                <td>U11 D</td>
                                <td><input type="text" name="u11_d_homeoraway" value="{{$fixtures->u11_d_homeoraway}}"></td>
                                <td><strong>Vs</strong></td>
                                <td><input type="text" name="u11_d_opposition" value="{{$fixtures->u11_d_opposition}}"></td>
                                <td><input type="text" name="u11_d_venue" value="{{$fixtures->u11_d_venue}}"></td>
                                <td><input type="text" name="u11_d_start" value="{{$fixtures->u11_d_start}}"></td>
                            </tr>
                            <tr> 
                                <td></td>
                                <td>U11 E1</td>
                                <td><input type="text" name="u11_e1_homeoraway" value="{{$fixtures->u11_e1_homeoraway}}"></td>
                                <td><strong>Vs</strong></td>
                                <td><input type="text" name="u11_e1_opposition" value="{{$fixtures->u11_e1_opposition}}"></td>
                                <td><input type="text" name="u11_e1_venue" value="{{$fixtures->u11_e1_venue}}"></td>
                                <td><input type="text" name="u11_e1_start" value="{{$fixtures->u11_e1_start}}"></td>
                            </tr>
                            <tr> 
                                <td></td>
                                <td>U12 1</td>
                                <td><input type="text" name="u12_1_homeoraway" value="{{$fixtures->u12_1_homeoraway}}"></td>
                                <td><strong>Vs</strong></td>
                                <td><input type="text" name="u12_1_opposition" value="{{$fixtures->u12_1_opposition}}"></td>
                                <td><input type="text" name="u12_1_venue" value="{{$fixtures->u12_1_venue}}"></td>
                                <td><input type="text" name="u12_1_start" value="{{$fixtures->u12_1_start}}"></td>
                            </tr>
                            <tr> 
                                <td></td>
                                <td>U12 4</td>
                                <td><input type="text" name="u12_4_homeoraway" value="{{$fixtures->u12_4_homeoraway}}"></td>
                                <td><strong>Vs</strong></td>
                                <td><input type="text" name="u12_4_opposition" value="{{$fixtures->u12_4_opposition}}"></td>
                                <td><input type="text" name="u12_4_venue" value="{{$fixtures->u12_4_venue}}"></td>
                                <td><input type="text" name="u12_4_start" value="{{$fixtures->u12_4_start}}"></td>
                            </tr>
                            <tr> 
                                <td></td>
                                <td>U12 8</td>
                                <td><input type="text" name="u12_8_homeoraway" value="{{$fixtures->u12_8_homeoraway}}"></td>
                                <td><strong>Vs</strong></td>
                                <td><input type="text" name="u12_8_opposition" value="{{$fixtures->u12_8_opposition}}"></td>
                                <td><input type="text" name="u12_8_venue" value="{{$fixtures->u12_8_venue}}"></td>
                                <td><input type="text" name="u12_8_start" value="{{$fixtures->u12_8_start}}"></td>
                            </tr>
                            <tr> 
                                <td></td>
                                <td>U14 4</td>
                                <td><input type="text" name="u14_4_homeoraway" value="{{$fixtures->u14_4_homeoraway}}"></td>
                                <td><strong>Vs</strong></td>
                                <td><input type="text" name="u14_4_opposition" value="{{$fixtures->u14_4_opposition}}"></td>
                                <td><input type="text" name="u14_4_venue" value="{{$fixtures->u14_4_venue}}"></td>
                                <td><input type="text" name="u14_4_start" value="{{$fixtures->u14_4_start}}"></td>
                            </tr>
                            <tr> 
                                <td></td>
                                <td>U16 C</td>
                                <td><input type="text" name="u16_c_homeoraway" value="{{$fixtures->u16_c_homeoraway}}"></td>
                                <td><strong>Vs</strong></td>
                                <td><input type="text" name="u16_c_opposition" value="{{$fixtures->u16_c_opposition}}"></td>
                                <td><input type="text" name="u16_c_venue" value="{{$fixtures->u16_c_venue}}"></td>
                                <td><input type="text" name="u16_c_start" value="{{$fixtures->u16_c_start}}"></td>
                            </tr>
                            <tr> 
                                <td></td>
                                <td>Youths</td>
                                <td><input type="text" name="youths_homeoraway" value="{{$fixtures->youths_homeoraway}}"></td>
                                <td><strong>Vs</strong></td>
                                <td><input type="text" name="youths_opposition" value="{{$fixtures->youths_opposition}}"></td>
                                <td><input type="text" name="youths_venue" value="{{$fixtures->youths_venue}}"></td>
                                <td><input type="text" name="youths_start" value="{{$fixtures->youths_start}}"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            
            
            
                <button>Update</button>
                <a href="/admin">Go Back</a>
            </form>
        

    </section>
@endsection