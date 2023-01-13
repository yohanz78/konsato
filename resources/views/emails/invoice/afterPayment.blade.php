@component('mail::message')
# Invoice Event: {{$checkout->Event->title}}

Hi {{$checkout->User->name}}!
<br>
Congratulations, you are registered to {{$checkout->Event->title}} event!

Here is your Qr Code to access the event:
<br>
<pre style="display: flex; justify-content: center;">
    {{ $checkout->qrcode }}
</pre>

Contact Support: <br>
Whatsapp    :   +62 851-2345-6789 <br>
Email       :   cs@konsato.com <br>
{{-- @component('mail::button', ['url' => route('')])
Contact Support
@endcomponent --}}
<br>
Thanks for using our service!<br>
Best regards,
{{ config('app.name') }}
@endcomponent
