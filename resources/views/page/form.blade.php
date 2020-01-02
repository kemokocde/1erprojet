 @extends('layaout/master')


@section('container')
<form method="POST" action="{{ route('modification_p') }}">
  {{ csrf_field() }}
<div class="row">
            <div class="col-sm-6 col-md-6 col-lg-6">
              <div class="form-group has-primary">
                <label for="Idcmid">Entré l'url</label>
                <input style="background-color: rgb(27,33,54);" type="text" name="url" value="{{ old('url') }}" id="url" placeholder="Champ Obligatoire" class="form-control">
                @if($errors)
                {!! $errors->first('url', '<p class="url">:message</p>') !!}
                @endif
              </div>
            </div>
          </div>
          <input type="submit" value ="valide">
        </form>
    
  
@endsection

