@inject('date','App\Dossier\Date')

@extends('layaout/master')

  

@section('container')
<a href="{{ route('resulta_p', [$shortened])}}">
	{{ route('resulta_p', [$shortened])}}

</a>
      
@endsection

