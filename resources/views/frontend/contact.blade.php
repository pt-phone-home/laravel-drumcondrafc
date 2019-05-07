@extends('frontmaster')

@section('title')
Contact - Drumcondra A.F.C
@endsection

@section('content')

<div class="contact-header">
        <h1>Contact Information</h1>
        <i class="fas fa-phone-square"></i>
    </div>


    <div class="contact-info">

        

        <div class="contact-info-form">
                
            <div class="contact-info-form-container">
                <h1>Contact form</h1>

                <form method="POST" class="contact-form" action="/contact">
                    @csrf

                   @if ($errors->count() > 0)
                    <ul>
                        @foreach ($errors->all() as $err)
                        <li style="list-style: none; font-size: 1.6rem; color: red;">
                            {{$err}}
                        </li>
                        @endforeach
                    </ul>
                  @endif
                    
                    @include('inc.messages')

                    <div class="form-group">
                        <label for="name">Name:</label>
                    <input type="text" placeholder="Your Name" id="name" name="name"
                    required value="{{old('name')}}">
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" placeholder="Your Email" name="email" id="email" 
                    required value="{{old('email')}}">
                    </div>
                    <div class="form-group">
                        <label for="teamName">Team Name: (Optional)</label>
                    <input type="text" name="teamName" id="teamName" value="{{old('teamName')}}">
                    </div>
                    <div class="form-group">
                        <label for="message" class="message-label">Message:</label>
                    <textarea name="message" id="message" cols="30" rows="10" placeholder="Write your message here" required>{{old('message')}}</textarea>
                    </div>
                    <div class="form-group">
                            <label for="ReCaptcha"> Please check the box below before sending message </label>
                            {!! NoCaptcha::renderJs(array('required' => 'required')) !!}
                            {!! NoCaptcha::display() !!}
                    </div>
                    <input type="submit" value="Send" class="submit">
                    

                </form>
            </div>
        </div>
        <div class="contact-info-contact">
            <h1>Contact Details</h1>
            <div class="member">
                <div class="member-pic">
                    <img src="/images/frank_connolly.png" class="avatar-lg" alt="">
                </div>
                <h3>Frank Connolly (Chair)</h3>
                <h3> 086 833 1909</h3>
            </div>
            <div class="member">
                <div class="member-pic">
                    <img src="/images/brian_martin.jpg" class="avatar-lg" alt="">
                </div>
                <h3>Brian Martin (Schoolboy Secretary)</h3>
                <h3> 087 744 3583</h3>
            </div>
            <h4 class="contact_email">Email:
                <span>jacintadrumcondra1@gmail.com</span>
            </h4>


        </div>
    </div>
@endsection