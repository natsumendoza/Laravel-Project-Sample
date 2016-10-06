<?php

namespace App\Http\Controllers;

use App\Card;
use DB;
use Illuminate\Http\Request;
use App\Http\Requests;

class CardsController extends Controller
{
    
	public function index() {

		$cards = Card::all();

		return view('cards.index', compact('cards'));

	}

	public function show(Card $card) {

		// FIRST way
		// $card = Card::with('notes.user')->find(1);

		// SECOND WAY
		// $card->load('notes.user');

		// return $card;


		return view('cards.show', compact('card'));

	}

}
