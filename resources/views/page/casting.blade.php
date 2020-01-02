@extends('layaout/master')


@section('container')

@foreach($casting as $castings)
<h1> aujordhui {{$castings->dte}}</h1>
<h1>identifian {{$castings->id}}</h1>
<h1> identifian et nom {{$castings->Idnom}}</h1>
@endforeach
	
@endsection

