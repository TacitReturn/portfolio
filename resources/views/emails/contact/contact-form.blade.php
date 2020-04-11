@component('mail::message')
    # Thank you for contact me,
    I'll try my best to get back to you in 2 - 3 business days excluding Saturdays.

    Name:{{$data['name']}}
    Email: {{$data['email']}}
    Subject: {{$data['subject']}}
    Message: {{$data['message']}}

@endcomponent
