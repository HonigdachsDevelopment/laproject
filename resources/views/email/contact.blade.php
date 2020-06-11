@component('mail::message')
    # New contact message
    {{ $subject }}
    Someone submitted a contact form

    @component('mail::panel')
        {{ $message }}
    @endcomponent

    @component('mail::button', ['url' =>  route('contact')])
        Reply to this mail
    @endcomponent
    Thanks,<br>
    {{ config('app.name') }}
@endcomponent
