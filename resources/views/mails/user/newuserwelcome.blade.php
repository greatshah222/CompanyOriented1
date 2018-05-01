@component('mail::message')
Purchased Confirmed

Thankyou for the purchase.You will be notified when the food is ready.


@component('mail::button', ['url' => 'http://localhost/project1/CompanyOriented1/public/'])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
