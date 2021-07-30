<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{

    public function index(){
        $events = Event::all(); // all é o metodo que retorna todos os eventos 
    
        return view('welcome', ["events" => $events]);
    }

    public function create(){
        return view('events.create');
    }

    public function store(Request $request){
        $event = new Event;
        
        $event->title = $request->title;
        $event->city = $request->city;
        $event->private = $request->private;
        $event->description = $request->description;

        $event->save(); //Salve evento no banco de dados

        return redirect('/')->with('msg', 'Evento criado com sucesso!');
    }
}
