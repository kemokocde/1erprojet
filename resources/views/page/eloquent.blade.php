@extends('layaout/master')


@section('container')
@foreach($posts as $post)

<h1>{{$post->tel_im_v}}</h1>
@endforeach
      
@endsection

