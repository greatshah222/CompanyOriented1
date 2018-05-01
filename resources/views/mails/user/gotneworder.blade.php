@component('mail::message')
# HURRAH! You got a order.

Check your Dashboard

@component('mail::button', ['url' => 'http://localhost/project1/CompanyOriented1/public/admin/orders'])
Dashboard
@endcomponent

Thanks,<br>
Bishal
@endcomponent
