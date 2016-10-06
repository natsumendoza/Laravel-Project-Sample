<?php

namespace App\Http\Controllers;

use App\Note;
use App\Card;

use Illuminate\Http\Request;

use App\Http\Requests;

class NotesController extends Controller
{
    public function store(Request $request, Card $card) {

        $this->validate($request, [
            'body' => 'required|min:10',
            'email' => 'email|unique:users,email'
        ]);

        $note = new Note($request->all());
        $note->user_id = 1;

    	// FIRST WAY
    	// $note = new Note();
    	// $note->body = $request->body;
    	// $card->notes()->save($note);

    	// SECOND WAY
    	// $note = new Note(['body' => $request->body]);

    	// $card->notes()->save($note);

    	// THIRD WAY
    	// $card->notes()->save(
    	// 	new Note(['body' => $request->body])
    	// );

    	// FOURTH WAY
    	// $card->notes()->create([
    	// 	'body' => $request->body
    	// ]);

    	// FIFTH WAY
    	// $card->notes()->create($request->all());

    	// SIXTH WAY
    	// $card->addNote(
    	// 	new Note($request->all())
    	// );

        $card->addNote($note, 1);

    	return back();

    }

    public function edit(Note $note) {

    	return view('notes.edit', compact('note'));

    }

    public function update(Request $request, Note $note) {

    	$note->update($request->all());

    	return back();

    }
}
