<?php

namespace App\Http\Controllers;

use App\Models\Dictionary;
use Illuminate\Http\Request;

class DictionaryController extends Controller
{
    public function Index ( Request $request )
    {
        $query = $request->input ('query');
        $dicQuery = Dictionary::query ();

        return view ( 'Dictionary.dictionaryIndex' );
    }
}
