@component('mail::message')
Hello {{$user->first_name}},

We understand it happens. Don't worry, we got you covered. Click the button below to reset your password.

@component('mail::button', ['url' => url('reset/password', ['token' => $user->remember_token])])
Reset your password
@endcomponent

In case you have any issues recovering your password, please contact us.

Thanks, <br/>
{{config('app.name')}}
    
@endcomponent
