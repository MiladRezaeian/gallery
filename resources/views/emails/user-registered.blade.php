<x-mail::message>
# Your account has been created.

Your account has been created.

<x-mail::button :url="''">
Open website
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
