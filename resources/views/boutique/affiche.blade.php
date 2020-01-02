@inject('date','App\Dossier\Date')

@extends('layaout/master')


@section('container')
<!-- <div>{{ session()->get('cle')}}</div> -->
	@if(session()->has('notification.cle'))
	<!-- <div class="alert alert-{{ session()->get('notification.type')}}">{{ session()->get('notification.cle')}}</div -->
		<div class="alert alert-{{ session('notification.type')}}">{{ session('notification.cle')}}</div>
	@endif
	@foreach($events as $event)
	<a href="{{ route('boutique.show', $event )}}"> 
		<h1> {!! $event->nom !!} {!! $event->description !!} </h1>
	</a>
	@endforeach
	<div style="">{{ $events->Links() }}</div>
	<a href="{{ route('boutique.create') }}"> Ajouter> </a>
      
@endsection

