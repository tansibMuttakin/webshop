@component('mail::message')
# Shop activation request

Please activate the shop. Here are the shop details.

Shop Name: {{$shop->name}}
<br>
Shop Owner: {{$shop->owner->name}}
<br>
Shop description: {{$shop->description}}

@component('mail::button', ['url' => url('/admin/shops')])
Manage Shops
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
