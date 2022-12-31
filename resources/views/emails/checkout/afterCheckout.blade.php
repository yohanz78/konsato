@component('mail::message')
# Register Live Concert: {{$checkout->Event->title}}

Hi {{$checkout->User->name}}
<br>
Thank you for register on <b>{{$checkout->Event->title}}</b>, please see payment instruction by click the button below.

The body of your message.

@component('mail::button', ['url' => route('user.checkout.invoice' , $checkout->id)])
Get Invoice
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent