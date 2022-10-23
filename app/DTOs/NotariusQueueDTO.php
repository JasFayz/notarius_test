<?php


namespace App\DTOs;


use App\Http\Requests\CreateNotariusRequest;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;
use Spatie\LaravelData\Data;

class NotariusQueueDTO extends Data
{
    public function __construct(
        public string $first_name,
        public string $last_name,
        public string $email,
        public Carbon $date,
        public string $service_type,
        public ?string $uuid
    )
    {
    }

    public static function fromRequest(CreateNotariusRequest $request)
    {

        return new self(
            first_name: $request->get('first_name'),
            last_name: $request->get('last_name'),
            email: $request->get('email'),
            date: Carbon::make($request->get('date')),
            service_type: $request->get('service_type'),
            uuid: $request->hasCookie('notarius_uuid') ?
                $request->cookie('notarius_uuid') : Str::uuid()->toString()
        );
    }
}
