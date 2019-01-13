@if(session('mail'))
<div class="mail-message">
    {{session('mail')}}
</div>
@endif

@if(session('success'))
<div class="success-message">
    {{session('success')}}
</div>
@endif