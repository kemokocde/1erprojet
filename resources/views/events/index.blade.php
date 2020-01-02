@extends('layaout/master')

@section('container')
        <h1>
           travail
        </h1>
        <p> 
          @if($isTravail)
          {{"va te debrouller"}}
          @else
          {{"couche toi"}}
          @endif
        </p>
      
@endsection
@verbatim
{{'dd'}}
@endverbatim
@push('pied')
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
@endpush
