<?php

namespace App\Http\Controllers;

use App\Models\NotariusQueue;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $notariusQueue = null;

        if ($request->hasCookie('notarius_uuid')) {

            $notariusQueue = NotariusQueue::query()
                ->where('uuid', $request->cookie('notarius_uuid'))->latest()->get();
        }

        return view('welcome')->with([
            'notariusQueue' => $notariusQueue
        ]);
    }


}
