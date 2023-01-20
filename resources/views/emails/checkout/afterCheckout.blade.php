@component('mail::message')
# Register Live Concert: {{$checkout->Event->title}}

Hi {{$checkout->User->name}}
<br>
Thank you for register on <b>{{$checkout->Event->title}}</b>, please see payment instruction by click the button below.

@component('mail::button', ['url' => route('user.dashboard')])
Dashboard
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent