@extends('layaout/master')


@section('container')
@foreach($posts as $post)

<h1>{!! $calculchmbr($post)!!}</h1>
<h1>{{ $calcultlt($post)}}</h1>
@endforeach
      
@endsection

