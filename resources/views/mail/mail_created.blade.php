@component('mail::message')
# Email Recived

You have revcieved an email from {{$email->name}} ({{$email->email}}). 

Their Message is as follows: 

{{$email->message}}

{{-- @component('mail::button', ['url' => ''])
Button Text
@endcomponent --}}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
