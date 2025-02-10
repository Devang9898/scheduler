<x-mail::message>
# Daily Count Report

Total Number of users for Today: {{$count}}

<x-mail::button :url="''">
Button Text
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
