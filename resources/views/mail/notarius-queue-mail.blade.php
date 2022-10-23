<x-mail::message>
    # Notarius Registration
    First Name - {{ $notariusQueue->first_name }}
    Last Name - {{ $notariusQueue->last_name }}
    Email - {{ $notariusQueue->email }}
    Service - {{ \App\Support\Enum\ServiceTypeEnum::all()[$notariusQueue->service_type] }}

    You have been registered on notarius at
    {{ \Illuminate\Support\Carbon::parse($notariusQueue->date)->format('d-m-Y') }}
    {{ \Illuminate\Support\Carbon::parse($notariusQueue->date)->format('H:i') }}

    Thanks,
    {{ config('app.name') }}
</x-mail::message>
