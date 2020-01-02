@inject('date','App\Dossier\Date')

@extends('layaout/master')


@section('container')
	<form method="POST" action="{{ route('boutique.update', $boutique) }}">
  		{{ csrf_field() }}
  		{{ method_field('PUT') }}
		<div class="row">
            <div class="col-sm-6 col-md-6 col-lg-6">
              <div class="form-group has-primary">
                <label for="nom">Entré levenement</label>
                <input style="background-color: rgb(27,33,54);" type="text" name="nom" value="{{ old('nom') ? old('nom') : $boutique->nom }}" id="nom" placeholder="Champ Obligatoire" class="form-control">
                @if($errors)
                {!! $errors->first('nom', '<p class="nom">:message</p>') !!}
                @endif
              </div>

              <div class="form-group has-primary">
                <label for="desk">Entré la description</label>
                <textarea name="desk" placeholder="Champ Obligatoire" class="form-control" id="desk">{{ old('desk') ? old('desk') : $boutique->description }}</textarea>
                @if($errors)
                {!! $errors->first('desk', '<p class="url">:message</p>') !!}
                @endif
              </div>

            </div>
         </div>
         <input type="submit" value ="cree">
    </form>
      
@endsection

