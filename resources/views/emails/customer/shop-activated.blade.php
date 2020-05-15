@component('mail::message')
# Cogratulations!
Your shop if active now.

@component('mail::button', ['url' => route('shops.show', $shop->id)])
visit your shop
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
