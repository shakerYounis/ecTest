@extends('welcome')
@section('content')
    <div >
        <form method = "get" action = "{{route ('index')}}" class="mt-5 mb-5" >
            <div class = "form-group" >
                <label for = "search" >Filter</label >
                <input id = "search" class = "form-control" name = "query" placeholder = "query here" >
            </div >
            <button type = "submit" class = "btn btn-primary " >Submit</button >
        </form >
    </div >


    <div >
        <table class = "table table-striped" >
            <thead >
                <tr >
                    <th scope = "col" >Dictionary</th >
                    <th scope = "col" >Term</th >
                    <th scope = "col" >Translations</th >
                </tr >
            </thead >
            <tbody >
                @foreach($dictionaries as $dictionary)
                    <tr >
                        <td >{{$dictionary->DictionaryName}}</td >
                        <td >{{$dictionary->TermName}}</td >
                        <td >{{$dictionary->TranslationName}}</td >
                    </tr >
                @endforeach
            </tbody >
        </table >
    </div >
@endsection
