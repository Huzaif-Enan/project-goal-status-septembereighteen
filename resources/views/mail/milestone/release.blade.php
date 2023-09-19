
@component('mail::message')
@component('mail::text', ['text' => $header])

@endcomponent
<br>

@component('mail::text', ['text' => $greet])

@endcomponent
<br>

@component('mail::text', ['text' => $body])

@endcomponent





@component('mail::text', ['text' => $content])

@endcomponent
@component('mail::text', ['text' => $remaining])

@endcomponent


@component('mail::button', ['url' => $url])
@lang('View') @lang('Milestone')
@endcomponent

@lang('email.regards'),<br>
{{ config('app.name') }}
@endcomponent
