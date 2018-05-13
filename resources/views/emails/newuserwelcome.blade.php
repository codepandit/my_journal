@component('mail::message')
# Welcome to My Journal

Hope you have fun.

@component('mail::button', ['url' => '/home'])
Home
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
