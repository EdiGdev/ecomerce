@component('mail::message')
{{ __('Payment') }}: {{ $courseSale->payment_status }}

@component('mail::button', ['url' => 'https://wa.me/'.config('contact.whatsapp').''.$courseSale->number])
{{ __('For any questions or clarification, please contact us by WhatsApp.') }}
@endcomponent

{{ __('Thanks') }},<br>
{{ config('app.name') }}
@endcomponent
