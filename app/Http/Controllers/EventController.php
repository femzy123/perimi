<?php

namespace App\Http\Controllers;

use App\Eventcategory;
use App\Event;
use App\User;
use Illuminate\Http\Request;


class EventController extends Controller
{
    public function index()
    {
        $events = Event::orderBy('created_at')->paginate(8);

        return view('event.index')->with('events', $events);
    }

    public function show($id)
    {
        $event = Event::findOrFail($id);

        return view('event.show')->with('event', $event);
    }
}
