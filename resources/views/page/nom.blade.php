@extends('layaout/master')

@section('container')
    <h1>
           Mon Nom
        </h1>
        <p><?= $monnom.' '.$monprenom; ?> </p>
        <h1>
           Ma Seur
        </h1>
        <p><?= $nomseur.' '.$prenomseur; ?> </p>
        <h1>
           Ma Mere
        </h1>
        <p><?= $nommere.' '.$prenommere; ?> </p>

     {{-- <!-- @if($date::letemp())
        {{'il es lheur de dormir'}}
    @else
        {{'leve toi'}}
    @endif-->--}} 
@endsection
