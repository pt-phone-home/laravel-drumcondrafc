@extends('adminmaster')

@section('title')
    Login
@endsection

@section('content')

<div class="login-container">

    <form action="/login" method="POST" class="">
        @csrf
        @include('inc.messages')
        <div class="form-group">
            <label for="email">Email: </label>
            <input type="email" name="email" id="email" placeholder="Enter Your Email" required>
        </div>
        <div class="form-group">
            <label for="password">Password: </label>
            <input type="password" name="password" id="password" placeholder="Enter Your Password" required>
        </div>
        <button>Login</button>
    </form>

</div>

<div class="push">
    
</div>

@endsection