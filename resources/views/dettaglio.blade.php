@extends('layouts.app')

@section('title', $prodotto['titolo'] . 'pasta Molisana')

@section('content')
    <div class="container">
        <div class="box-details">
            <div class="box-title">
                <h1>{{$prodotto['titolo']}}</h1>
            </div>
            <div class="box-info">
                <img src="{{$prodotto['src-h']}}" alt="{{$prodotto['titolo']}}">
                <img src="{{$prodotto['src-p']}}" alt="{{$prodotto['titolo']}}">
            </div>
            <div class="box-info-text p-20">
                <p>{!!$prodotto['descrizione']!!}</p>
            </div>

            <div class="box-icon-general p-20">
                <div class="box-icon">
                    <i class="fas fa-info"></i>
                    <p>{!!$prodotto['tipo']!!}</p>
                </div>
                <div class="box-icon">
                    <i class="fas fa-clock"></i>
                    <p>{!!$prodotto['cottura']!!}</p>
                </div>
                <div class="box-icon">
                    <i class="fas fa-balance-scale"></i>
                    <p>{!!$prodotto['peso']!!}</p>
                </div>
            </div>
        </div>
    </div>
@endsection