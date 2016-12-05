<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Auth;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'isadmin'], ['except' => ['index', 'show']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $events = Event::orderBy('id', 'desc')->paginate(10);

        return view('events.index', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('events.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,
        [
            'title' => 'required|min:6',
            'content' => 'required|min:10'
        ],
        [
            'title.required' => 'titre requis',
            'title.min' => 'le titre de doit faire au moins 6 caractères',

            'content.required' => 'contenu requis',
            'content.min' => 'le contenu doit faire au moins 10 caractères'
        ]);

        //enregistrer le formulaire de creation
        $event = new event;
        $input = $request->input();
        $input['user_id'] = Auth::user()->id;

        $event->fill($input)->save();
        return redirect()
            ->route('event.index')
            ->with('success', 'événement publié');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $event =  Event::findOrFail($id);

        return view('events.show', compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $event = Event::findOrFail($id);

        return view('events.edit', compact('event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,
            [
                'title' => 'required|min:6',
                'content' => 'required|min:10'
            ],
            [
                'title.required' => 'Titre requis',
                'title.min' => 'Le titre doit contenir au moins 6 caractères',

                'content.required' => 'Contenu requis',
                'content.min' => 'L\'article doit contenir au moins 10 caractères'
            ]);

        $event = Event::findOrFail($id);
        $input = $request->input();
        $event->fill($input)->save();

        return redirect()
            ->route('event.index', $id)
            ->with('success', 'L\'événement a bien été mis à jour');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = Event::findOrFail($id);

        $event->delete();

        return redirect()
            ->route('event.index')
            ->with('success', 'L\'événément a bien été supprimé');
    }
}
