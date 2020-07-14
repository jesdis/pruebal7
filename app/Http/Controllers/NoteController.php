<?php

namespace App\Http\Controllers;

use App\Note;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class NoteController extends Controller
{
    //
    public function index()
    {
        $notes = Note::all();

        return view('notes', ['notes' => $notes]);
    }

    public function create()
    {
        return view('add-note');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => ['required', 'min:3', Rule::unique('notes')],
            'content' => 'required',
        ]);

        $note = New Note();
        $note->title = $request->input('title');
        $note->content = $request->input('content');
        $note->save();

        return redirect()->route('notes');
    }

    public function edit($id)
    {
        $note = Note::findOrFail($id); 
        
        return view('edit-nota', compact('note'));
    }

    public function update(Request $request, $id)
    {
        $note = Note::findOrFail($id);

        $request->validate([
            'title' => ['required', 'min:3', Rule::unique('notes')->ignore($note)],
            'content' => 'required',
        ]);


        $note->title = $request->input("title");
        $note->content = $request->input("content");

        $note->save();

        return redirect()->route('notes');
        
    }

    public function destroy($id)
    {
        $note = Note::findOrFail($id);
        
        $note->delete();

        return redirect()->route('notes');
        
    }
}
