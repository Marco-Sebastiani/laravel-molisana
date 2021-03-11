@extends('layouts.app')

@section('title', 'Sezione prodotti della Molisana')


@section('content')
    <div class="container">

        @foreach ($formati as $K => $formato)
            <h2 class="title-product">{{$K}}</h2>
            <div class="box-cards">
                @foreach ($formato as $Key =>$item)
                    <div class="box-item">
                        <img src="{{$item['src']}}" alt="{{$item['titolo']}}">
                        <div class="box-layer">
                            <a href="{{route('pagina-dettagli', ['id' => $Key])}}">{{$item['titolo']}} - {{$item['tipo']}}</a>
                        </div>
                    </div>
                @endforeach
            </div>
        @endforeach


    </div>
@endsection