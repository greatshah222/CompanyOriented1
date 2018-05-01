@component('mail::message')
FOOD READY


You can visit us to pickup your food.
Your total Order Price is {{$order->total}}

@component('mail::button', ['url' => 'http://localhost/project1/CompanyOriented1/public/'])
Our Website link
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
