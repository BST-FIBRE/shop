@component('mail::message')

{{-- Greeting --}}
@if (! empty($greeting))
# <h1>{{ $greeting }}</h1>
@else
# @lang('Bonjour !')
@endif

{{-- Intro Lines --}}
@foreach ($introLines as $line)
{{ $line }}
@endforeach

{{-- Action Button --}}
@isset($actionText)
<?php
    switch ($level) {
        case 'success':
        case 'error':
            $color = $level;
            break;
        default:
            $color = 'primary';
    }
?>
@component('mail::button', ['url' => $actionUrl, 'color' => $color])
{{ $actionText }}
@endcomponent
@endisset

{{-- Outro Lines --}}
@foreach ($outroLines as $line)
{{ $line }}

@endforeach

{{-- Salutation
@if (! empty($salutation))
{{ $salutation }}
@else
@lang('Regards'),<br>
{{ config('app.name') }}
@endif --}}

{{-- Subcopy --}}
@isset($actionText)
@slot('subcopy')
@lang(
    "Si vous rencontrez des problèmes avec le bouton \":actionText\" copier/coller le lien suivant dans votre navigateur\n".
    '',
    [
        'actionText' => $actionText,
    ]
) <span class="break-all">[{{ $displayableActionUrl }}]({{ $actionUrl }})</span>
@endslot
@endisset
@endcomponent
