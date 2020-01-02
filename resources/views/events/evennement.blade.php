@inject('date','App\Dossier\Ttt')

@extends('layaout/master')

@section('container')
  <h1>
    1er evenement
  </h1>
  <p><?php foreach ($event1 as $eve) {?>
    <li><?= $eve; ?></li>
    <?php } ?> 
  </p>
  <h1>
     2eme evenement
  </h1>
  <p><?php foreach ($event2 as $eve) {?>
      <li>{{$eve}}</li>
    <?php } ?> 
  </p>

 @if($date->bonjour())
 {{'cest le week end'}}
 @else
 {{'va bosser'}}
 @endif
      
@endsection
<!doctype html>