<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('pagina-home');

Route::get('/prodotti', function () {
    $pasta = config('db-pasta');

    $pasta_lunga = array_filter($pasta, function($element) {
        return $element['tipo'] == 'lunga';
    });

    $pasta_corta = array_filter($pasta, function($element) {
        return $element['tipo'] == 'corta';
    });
    
    $pasta_cortissima = array_filter($pasta, function($element) {
        return $element['tipo'] == 'cortissima';
    });


    $data = [
        'formati' => [
            'lunga' => $pasta_lunga,
            'corta' => $pasta_corta,
            'cortissima' => $pasta_cortissima
        ]
    ];
    return view('/products', $data);
})->name('pagina-prodotti');

Route::get('/dettaglio/{id}', function ($id) {

    $pasta = config('db-pasta');
    if(is_numeric($id) && $id >= 0 && $id < count($pasta)){
        $prodotto= $pasta[$id];

        $data= ['prodotto' => $prodotto];
    
        return view('dettaglio', $data);
    } else{
        abort('404');
    }



})->name('pagina-dettagli');

Route::get('/notizie', function () {
    return view('news');
})->name('pagina-notizie');
