<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Application;
use App\Models\Event;

class EventController extends Controller
{
    public function show($id){
        $event = Event::findOrFail($id);

        return view('event', [
            'event' => $event
            ]);
    }

    public function list(){
        $events = Event::with('applications')->get();
        return view('events', [
            'events' => $events
   ]);
}
}
