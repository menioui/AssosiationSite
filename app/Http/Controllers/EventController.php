<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $actus = Events::orderBy('eventDate','desc')->get();
        return view('admin.actualites.index', ['actus' => $actus]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.actualites.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'actuName' => [
                    'required',
                    'max:512'
                ],
                'actuDesc' => [
                    'required'
                ],
                'actuDate' => [
                    'required'
                ],
                'actuHour' => [
                    'required'
                ],
                'actuShowDate' => [
                    'required'
                ]
            ]);

            $newEvent = new Events;
            $newEvent->eventName = $validatedData['actuName'];
            $newEvent->eventDesc = $validatedData['actuDesc'];
            $newEvent->eventDate = date("Y-m-d H:i", strtotime($validatedData['actuDate'] . ' ' .  $validatedData['actuHour']));
            $newEvent->eventShowDate = $request->input('actuShowDate');
            $newEvent->save();
    
            return redirect()->route('actus.index')->with('success', 'L\'actualité a correctement été créée');

        } catch (\Throwable $th) {

            dd($th);

            return redirect()->back()->with('alert', 'Une erreur est survenue :(');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        try {
            return view('admin.actualites.edit', ['actu' => Events::where('id', 'LIKE', $id)->get()[0]]);
            
        } catch (\Throwable $th) {

            return redirect()->back()->with('alert', 'Une erreur est survenue :(');
        }
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
        try {
            $validatedData = $request->validate([
                'actuName' => [
                    'required',
                    'max:512'
                ],
                'actuDesc' => [
                    'required'
                ],
                'actuDate' => [
                    'required'
                ],
                'actuHour' => [
                    'required'
                ],
            ]);

            $toUpEvent = Events::where('id', 'LIKE', $id)->get()[0];
            $toUpEvent->eventName = $validatedData['actuName'];
            $toUpEvent->eventDesc = $validatedData['actuDesc'];
            $toUpEvent->eventDate = date("Y-m-d H:i", strtotime($validatedData['actuDate'] . ' ' .  $validatedData['actuHour']));
            $toUpEvent->save();
    
            return redirect()->route('actus.index')->with('success', 'L\'actualité a correctement été modifiée');

        } catch (\Throwable $th) {

            dd($th);

            return redirect()->back()->with('alert', 'Une erreur est survenue :(');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            Events::where('id', $id)->delete();
            return redirect()->back()->with('success','Actualité supprimée avec succès!');

        } catch (\Throwable $th) {

            return redirect()->back()->with('alert','Une erreur est survenue');
        }
    }

    public function showByDay($date)
    {
        $events = Events::orderBy('eventDate','desc')->get();
        return view('events', ['events' => $events]);
    }
}
