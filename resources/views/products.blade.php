@extends('layouts.app')

@section('title', 'Sezione prodotti della Molisana')


@section('content')
    <div class="container">
        <div class="box-cards">
            @foreach ($formati as $formato)
                <div class="box-item">
                    <img src="{{$formato['src']}}" alt="{{$formato['titolo']}}">
                    <div class="box-layer">
                        <a href="">{{$formato['titolo']}} - {{$formato['tipo']}}</a>
                    </div>
                </div>

            @endforeach

        </div>
    </div>
@endsection