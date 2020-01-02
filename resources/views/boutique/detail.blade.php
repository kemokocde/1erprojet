@inject('date','App\Dossier\Date')

@extends('layaout/master')


@section('container')
	<h1> {{ $boutique->nom }} </h1> 
	<p> {!! $boutique->description !!} </p>
	<a href="{{ route('boutique.edit', $boutique) }}"><button class="btn btn-success">Modifier</button> </a>
	<a href="{{ route('boutique.destroy', $boutique) }}" data-method='DELETE' data-confirm='ete vous sur'>suprimer </a>
	<form 
	method="POST" 
	action="{{ route('boutique.destroy', $boutique) }}"
	onsubmit="return confirm('ete vous sur')">
  		{{ csrf_field() }}
  		{{ method_field('DELETE') }}
		
         <input  class="btn btn-danger" type="submit" value ="suprimer">
    </form>
	<a href="{{ route('boutique.index') }}"><button class="btn btn-success"> tout les evenement</button> </a>
      
@endsection

