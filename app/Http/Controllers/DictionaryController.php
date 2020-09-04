<?php

namespace App\Http\Controllers;

use App\Models\Dictionary;
use App\Models\Term;
use App\Models\Translation;
use Illuminate\Http\Request;

class DictionaryController extends Controller
{
    public function Index ( Request $request )
    {
        $queryString = $request->input ( 'query' );
        $dicQuery    = Dictionary::query ();
        $dicQuery->join ( "terms" , "dictionaries.id" , "=" , "terms.dictionary_id" )
                 ->join ( 'translations' , 'terms.id' , '=' , 'translations.term_id' );
        if ( $queryString != null && $queryString != '' )
        {
            $dicQuery->where ( 'dictionaries.name' , "like" , "%$queryString%" )
                     ->orWhere ( 'terms.name' , "like" , "%$queryString%" )
                     ->orWhere ( 'translations.name' , "like" , "%$queryString%" );
        }
        $dicQuery->select ( [
            'dictionaries.name as DictionaryName' ,
            'terms.name as TermName' ,
            'translations.name as TranslationName' ,
        ] );
        return view ( 'Dictionary.dictionaryIndex' , [ 'dictionaries' => $dicQuery->get () ] );
    }
}
