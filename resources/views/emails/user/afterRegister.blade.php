@component('mail::message')
# Welcome

HI {{$user->name}}
<br>
Welcome to Konsato, your account has been created successfully. Now you can checkout your live concert events!

@component('mail::button', ['url' => route('login')])
Login Here
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent