<?php


namespace App\Actions\Notarius;


use App\DTOs\NotariusQueueDTO;
use App\Models\NotariusQueue;

class CreateNotariusQueueAction
{
    public function execute(NotariusQueueDTO $data)
    {
        return NotariusQueue::create($data->toArray());
    }
}
