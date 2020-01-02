@extends('layaout/master')


@section('container')
{{$events->count()}}
@foreach($events as $event)
	<h1> {{$event}} </h1>
	<h1> {{$event->prenom}} </h1>
	<h1>
		<!-- 1er methode
		{{$event->dte}} -->

		 <!-- 2eme methode 
		{{ (new dateTime($event->dte))->format('d/m/t H:i') }}  -->
		
		<!-- 3eme methode  declarer dans app//event 
			protected $dates = ['dte'];-->
		{{ $event->dte->format('d/m/t H:i') }} 
		

	</h1>
@endforeach
      
@endsection

