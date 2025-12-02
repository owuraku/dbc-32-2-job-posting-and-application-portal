<x-mail::message>
# Hi {{ $name }},

Thank you for registering with Easy Jobs. We are excited to have you here.
Kindly click on the button to verify your email.
<x-mail::button :url="$url">
Verify Email
</x-mail::button>

<x-mail::panel>
You will not be able to use the application until you verify your email.
</x-mail::panel>

{{-- <x-mail::table>
| Laravel       | Table         | Example       |
| ------------- | :-----------: | ------------: |
| Col 2 is      | Centered      | $10           |
| Col 3 is      | Right-Aligned | $20           |
</x-mail::table> --}}

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
