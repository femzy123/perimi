<?php

namespace App\Http\Controllers;

use App\Eventcategory;
use App\Event;
use App\User;
use App\Category;
use App\Http\Requests\SearchRequest;
use Illuminate\Http\Request;
use App\Repositories\EventRepository;

class EventController extends Controller
{
    private $event;

    public function __construct(Event $event)
    {
        $this->event = new EventRepository($event);
    }

    public function index(Category $category)
    {
        $categories = $category->all();
        $events = Event::orderBy('created_at')->paginate(8);

        return view('event.index', compact('categories'))->with('events', $events);
    }

    public function show($id)
    {
        $event = Event::findOrFail($id);

        return view('event.show')->with('event', $event);
    }

    public function list(Request $request)
    {
        return $this->event->search($request);
    }

    public function search(SearchRequest $request)
    {
        $events = $this->event->search($request->validated());
        $categories = Eventcategory::all();

        return view('event.index', compact('events', 'categories'));
    }
}
