<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;
use Carbon\Carbon;

class EventController extends Controller
{
    public function index()
    {
        return response()->json(Event::all());
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'date' => 'required|date',
        ]);

        $event = Event::create($request->all());
        return response()->json($event, 201);
    }

    public function show(Event $event)
    {
        return response()->json($event);
    }

    public function update(Request $request, Event $event)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'date' => 'required|date',
        ]);

        $event->update($request->all());
        return response()->json($event);
    }

    public function destroy(Event $event)
    {
        $event->delete();
        return response()->json(null, 204);
    }

    public function today()
    {
        $today = Carbon::today()->toDateString();
        return response()->json(Event::where('date', $today)->get());
    }

    public function future()
    {
        return response()->json(Event::where('date', '>', Carbon::today())->orderBy('date','asc')->get());
    }

    public function past()
    {
        return response()->json(Event::where('date', '<', Carbon::today())->orderBy('date','desc')->get());
    }
}
