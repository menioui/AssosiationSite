<?php

namespace App\Http\Controllers;

use App\Content;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contents = Content::all();
        return view('admin.content.index', ['contents' => $contents]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function show(Content $content)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function edit($contentId)
    {
        try {
            return view('admin.content.edit', ['content' => Content::where('id', 'LIKE', $contentId)->get()[0]]);

        } catch (\Throwable $th) {

            return redirect()->back()->with('alert', 'Une erreur est survenue :(');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $contentId)
    {
        try {
            $validatedData = $request->validate([
                'contentTitle' => [
                    'required',
                    'max:512'
                ],
                'contentBody' => [
                    'required'
                ]
            ]);

            $toUpContent = Content::where('id', 'LIKE', $contentId)->get()[0];
            $toUpContent->contentTitle = $validatedData['contentTitle'];
            $toUpContent->contentContent = $validatedData['contentBody'];
            $toUpContent->save();
    
            return redirect()->route('content.index')->with('success', 'Le contenu a correctement été modifiée');

        } catch (\Throwable $th) {

            return redirect()->back()->with('alert', 'Une erreur est survenue :(');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function destroy(Content $content)
    {
        //
    }
}
