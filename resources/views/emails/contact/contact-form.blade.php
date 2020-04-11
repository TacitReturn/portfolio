@component('mail::message')
    # Thanks for contacting me,

    I'll try my best to get back to you in 2-3 business days (excluding Saturday).

    If you'd like to view some of the code I'm currently working on, you can get a more in dept
    look on my GitHub profile, I update projects there more frequently before they're pushed to
    my portfolio.

    @component('mail::button', ['url' => 'https://github.com/TacitReturn'])
        GitHub Profile
    @endcomponent
@endcomponent
