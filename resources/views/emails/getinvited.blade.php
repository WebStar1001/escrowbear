@component('mail::message')
    Welcome!
    You received invitation code from Escrowbear
    You can register using this button
    @component('mail::button', ['url' => 'https://escrowbear.com/register?invite_code='.$details['invite_code']])
        Accept Invite
    @endcomponent
    Escrowbear.
@endcomponent
