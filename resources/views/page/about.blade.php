@inject('date','App\Dossier\Date')

@extends('layaout/master')

    @if($date::letemp())
        {{'il es lheur de dormir'}}
    @else
        {{'leve toi'}}
    @endif

@section('container')

      
@endsection

