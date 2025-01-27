<?php


use App\Http\Controllers\FigureController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

/* Sima átadás */
/* Route::get('/teszt', function() {
    $x = 10;
    echo "A szám amit adtál az {$x}";
}); */
/* Paraméteres átadás */
/* Route::get('/teszt/{x}', function($x) {
    echo "A szám amit megadtál {$x}";
}); */

/* A kontroller funkciói egyesével */
//Route::get("/figurines", [FigureController::class, "index"])->name("figurines.index");
//Route::get("/figurines/create", [FigureController::class, "create"]);
//Route::get("/figurines/{figure}/edit", [FigureController::class, "edit"]);
//Route::get("/figurines/{figure}/show", [FigureController::class, "show"]);
//Route::post( "/figurines", [FigureController::class, "store"]);
//Route::put( "/figurines/{figure}", [FigureController::class, "update"]);
//Route::patch( "/figurines/{figure}", [FigureController::class, "update"]);
//Route::delete( "/figurines/{figure}", [FigureController::class, "destroy"]);

/* Összefogva a fentieket egyben */
//Route::resource("/figures", FigureController::class);
