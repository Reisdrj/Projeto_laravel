<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Event;

class EventController extends Controller
{
    public function index() {

        $events = Event::all();

        return view('homepage', ['events' => $events]);
    }

    public function create(){
        return view('events.criar_eventos');
    }

    public function store(Request $request) {
        
        $event = new Event;

        $event->Name = $request->Name;
        $event->Description = $request->Description;
        $event->City = $request->City;
        $event->Private = $request->Private;
        $event->Date = $request->Date;

        $event->save();

        return redirect('/')->with('msg', 'Evento criado com sucesso');

    }

    public function show($id) {
        
        $event = Event::findOrFail($id);

        return view('events.show', ['event' => $event]);

    }

    public function subscribe($id) {

        $event = Event::findOrFail($id);

        $event->Participants += 1;

        $event->save();

        return redirect('/');

    }

}
