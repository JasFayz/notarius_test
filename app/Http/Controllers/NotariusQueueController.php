<?php

namespace App\Http\Controllers;

use App\Actions\Notarius\CreateNotariusQueueAction;
use App\DTOs\Notarius\CreateNotariusQueueDTO;
use App\DTOs\NotariusQueueDTO;
use App\Http\Requests\CreateNotariusRequest;
use App\Models\NotariusQueue;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Cookie;

class NotariusQueueController extends Controller
{
    public function store(CreateNotariusRequest $request, CreateNotariusQueueAction $createNotariusQueueAction)
    {
        try {
            $notariusQueue = $createNotariusQueueAction
                ->execute(NotariusQueueDTO::fromRequest($request));

            Cookie::queue('notarius_uuid', $notariusQueue->uuid);
            alert()->success('Success', $notariusQueue->first_name);
            return redirect()->route('index');
        } catch (\Exception $exception) {
            alert()->error('Error', $exception->getMessage());
            return back();
        }
    }
}
