@component('mail::message')

    Dear Falco Admins

    You have new message from your website

    Details below



    Sendr name: {{ $details['name'] }}

    Sender email: {{ $details['email'] }}

    Sender subject: {{ $details['subject'] }}

    Sender message: {{ $details['message'] }}

    Time: {{ $details['created_at'] }}


    

@endcomponent
