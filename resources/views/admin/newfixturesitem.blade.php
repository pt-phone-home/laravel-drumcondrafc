@extends('adminmaster')

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
                        <td>U8 Navy</td>
                        <td>{{$fixtures->u8_navy_homeoraway}}</td>
                        <td><strong>Vs</strong></td>
                        <td>{{$fixtures->u8_navy_opposition}}</td>
                        <td>{{$fixtures->u8_navy_venue}}</td>
                        <td>{{$fixtures->u8_navy_start}}</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>U10 D</td>
                        <td>{{$fixtures->u10d_homeoraway}}</td>
                        <td><strong>Vs</strong></td>
                        <td>{{$fixtures->u10d_opposition}}</td>
                        <td>{{$fixtures->u10d_venue}}</td>
                        <td>{{$fixtures->u10d_start}}</td>   
                    </tr>
                    <tr> 
                        <td></td>
                        <td>U15 B1</td>
                        <td>{{$fixtures->u15_b1_homeoraway}}</td>
                        <td><strong>Vs</strong></td>
                        <td>{{$fixtures->u15_b1_opposition}}</td>
                        <td>{{$fixtures->u15_b1_venue}}</td>
                        <td>{{$fixtures->u15_b1_start}}</td>
                    </tr>
                    <tr> 
                        <td></td>
                        <td>Seniors 1</td>
                        <td>{{$fixtures->seniors_1_homeoraway}}</td>
                        <td><strong>Vs</strong></td>
                        <td>{{$fixtures->seniors_1_opposition}}</td>
                        <td>{{$fixtures->seniors_1_venue}}</td>
                        <td><{{$fixtures->seniors_1_start}}</td>
                    </tr>
                    <tr> 
                        <td></td>
                        <td>Seniors 2</td>
                        <td>{{$fixtures->seniors_2_homeoraway}}</td>
                        <td><strong>Vs</strong></td>
                        <td>{{$fixtures->seniors_2_opposition}}</td>
                        <td>{{$fixtures->seniors_2_venue}}</td>
                        <td>{{$fixtures->seniors_2_start}}</td>
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
                        <td>U8 </td>
                        <td>{{$fixtures->u8_homeoraway}}</td>
                        <td><strong>Vs</strong></td>
                        <td>{{$fixtures->u8_opposition}}</td>
                        <td>{{$fixtures->u8_venue}}</td>
                        <td>{{$fixtures->u8_start}}</td>
                    </tr>
                    <tr> 
                        <td></td>
                        <td>U10 A</td>
                        <td>{{$fixtures->u10_a_homeoraway}}</td>
                        <td><strong>Vs</strong></td>
                        <td>{{$fixtures->u10_a_opposition}}</td>
                        <td>{{$fixtures->u10_a_venue}}</td>
                        <td>{{$fixtures->u10_a_start}}</td>
                    </tr>
                    <tr> 
                        <td></td>
                        <td>U10 B</td>
                        <td>{{$fixtures->u10_b_homeoraway}}</td>
                        <td><strong>Vs</strong></td>
                        <td>{{$fixtures->u10_b_opposition}}</td>
                        <td>{{$fixtures->u10_b_venue}}</td>
                        <td>{{$fixtures->u10_b_start}}</td>
                    </tr>
                    <tr> 
                        <td></td>
                        <td>U10 D</td>
                        <td>{{$fixtures->u10_d_homeoraway}}</td>
                        <td><strong>Vs</strong></td>
                        <td>{{$fixtures->u10_d_opposition}}</td>
                        <td>{{$fixtures->u10_d_venue}}</td>
                        <td>{{$fixtures->u10_d_start}}</td>
                    </tr>
                    <tr> 
                        <td></td>
                        <td>U10 E1</td>
                        <td>{{$fixtures->u10_e1_homeoraway}}</td>
                        <td><strong>Vs</strong></td>
                        <td>{{$fixtures->u10_e1_opposition}}</td>
                        <td>{{$fixtures->u10_e1_venue}}</td>
                        <td>{{$fixtures->u10_e1_start}}</td>
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
                        <td>U11 B1</td>
                        <td>{{$fixtures->u11_b1_homeoraway}}</td>
                        <td><strong>Vs</strong></td>
                        <td>{{$fixtures->u11_b1_opposition}}</td>
                        <td>{{$fixtures->u11_b1_venue}}</td>
                        <td>{{$fixtures->u11_b1_start}}</td>
                    </tr>
                    <tr> 
                        <td></td>
                        <td>U11 D</td>
                        <td>{{$fixtures->u11_d_homeoraway}}</td>
                        <td><strong>Vs</strong></td>
                        <td>{{$fixtures->u11_d_opposition}}</td>
                        <td>{{$fixtures->u11_d_venue}}</td>
                        <td>{{$fixtures->u11_d_start}}</td>
                    </tr>
                    <tr> 
                        <td></td>
                        <td>U11 E1</td>
                        <td>{{$fixtures->u11_e1_homeoraway}}</td>
                        <td><strong>Vs</strong></td>
                        <td>{{$fixtures->u11_e1_opposition}}</td>
                        <td>{{$fixtures->u11_e1_venue}}</td>
                        <td>{{$fixtures->u11_e1_start}}</td>
                    </tr>
                    <tr> 
                        <td></td>
                        <td>U12 1</td>
                        <td>{{$fixtures->u12_1_homeoraway}}</td>
                        <td><strong>Vs</strong></td>
                        <td>{{$fixtures->u12_1_opposition}}</td>
                        <td>{{$fixtures->u12_1_venue}}</td>
                        <td>{{$fixtures->u12_1_start}}</td>
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
                        <td>U12 8</td>
                        <td>{{$fixtures->u12_8_homeoraway}}</td>
                        <td><strong>Vs</strong></td>
                        <td>{{$fixtures->u12_8_opposition}}</td>
                        <td>{{$fixtures->u12_8_venue}}</td>
                        <td>{{$fixtures->u12_8_start}}</td>
                    </tr>
                    <tr> 
                        <td></td>
                        <td>U14 4</td>
                        <td>{{$fixtures->u14_4_homeoraway}}</td>
                        <td><strong>Vs</strong></td>
                        <td>{{$fixtures->u14_4_opposition}}</td>
                        <td>{{$fixtures->u14_4_venue}}</td>
                        <td>{{$fixtures->u14_4_start}}</td>
                    </tr>
                    <tr> 
                        <td></td>
                        <td>U16 C</td>
                        <td>{{$fixtures->u16_c_homeoraway}}</td>
                        <td><strong>Vs</strong></td>
                        <td>{{$fixtures->u16_c_opposition}}</td>
                        <td>{{$fixtures->u16_c_venue}}</td>
                        <td>{{$fixtures->u16_c_start}}</td>
                    </tr>
                    <tr> 
                        <td></td>
                        <td>Youths</td>
                        <td>{{$fixtures->youths_homeoraway}}</td>
                        <td><strong>Vs</strong></td>
                        <td>{{$fixtures->youths_opposition}}</td>
                        <td>{{$fixtures->youths_venue}}</td>
                        <td>{{$fixtures->youths_start}}</td>
                    </tr>
                </tbody>
                
            </table>

            <a href="/admin" class="btn">Back to admin</a>
    </div>

</section>
    
@endsection