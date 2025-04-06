<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function index()
{
    $events = Event::all();
    return view('events.index', compact('events'));
}
public function create(Event $event)
{
    return view('events.create', compact('event'));
}

public function store(Request $request)
{
    $validatedData = $request->validate([
        'title' => 'required',
        'foruser' => 'required|string',
        'description' => 'nullable',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        'start_time' => 'required|date',
        'end_time' => 'required|date|after:start_time'
    ]);

    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('event_images', 'public');
        $validatedData['image'] = $imagePath;
    }

    Event::create($validatedData);
    return redirect()->route('event.index');
}

public function edit(Event $event)
{
    return view('events.edit', compact('event'));
}

public function update(Request $request, Event $event)
{
    $validatedData = $request->validate([
        'title' => 'required',
        'description' => 'nullable',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        'start_time' => 'required|date',
        'end_time' => 'required|date|after:start_time'
    ]);

    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('event_images', 'public');
        $validatedData['image'] = $imagePath;
    }

    $event->update($validatedData);
    return redirect()->route('event.index');
}

public function destroy(Event $event)
{
    $event->delete();
    return redirect()->route('event.index');
}
public function getEvents()
{
    $events = Event::all()->map(function ($event) {
        return [
            'id'    => $event->id,
            'title' => $event->title,
            'start' => $event->start_time->toIso8601String(),
            'end'   => $event->end_time->toIso8601String(),
        ];
    });

    return response()->json($events);
}

}
