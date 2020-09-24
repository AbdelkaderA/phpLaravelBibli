@extends('layouts.app')

@section('content')
    
    <div>Livre emprunté</div>
    <div>
        {{-- @foreach ($books as $book)
        <div>{{$book->Titre}}</div>
        @endforeach --}}

        @foreach($emprunt as $element)
        <div>
            Numero adherent: {{$element->adherent_id}}
        </div>
        <div>
            Titre du livre: {{$element->Titre}}
        </div>
        <div>
            Date d'emprunt: {{$element->date_debut}}
        </div>
        <div>
            Date de retour prévu: {{$element->date_fin}}
        </div>
            
       
            
        @endforeach
    </div>

@endsection