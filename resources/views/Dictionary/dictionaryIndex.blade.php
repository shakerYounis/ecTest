@extends('welcome')
@section('content')
    <div >
        <form method = "get" action = "{{route ('index')}}" >
            <label for = "search" >Filter</label >
            <input id = "search" name = "query" placeholder = "query here" >
        </form >
    </div >
    <div >
        <table >
            <thead >
                <tr >
                    <th >Dictionary</th >
                    <th >Term</th >
                    <th >Translations</th >
                </tr >
            </thead >
            <tbody >
                @foreach($dictionaries as $dictionary)
                    <tr>
                        <td>{{$dictionary->DictionaryName}}</td>
                        <td>{{$dictionary->TermName}}</td>
                        <td>{{$dictionary->TranslationName}}</td>
                    </tr>
                @endforeach
            </tbody >
        </table >
    </div >
@endsection
