<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

route::get('/cek-object', [MahasiswaController::class, 'cekObject']);

route::get('/insert', [MahasiswaController::class, 'insert']);
route::get('/mass-assignment', [MahasiswaController::class, 'massAssignment']);
route::get('/mass-assignment2', [MahasiswaController::class, 'massAssignment2']);

route::get('/update', [MahasiswaController::class, 'update']);
route::get('/update-whare', [MahasiswaController::class, 'updateWhere']);
route::get('/mass-update', [MahasiswaController::class, 'massUpdate']);

route::get('/delete', [MahasiswaController::class, 'delete']);
route::get('/destroy', [MahasiswaController::class, 'destroy']);
route::get('/mass-delete', [MahasiswaController::class, 'massDelete']);

route::get('/all', [MahasiswaController::class, 'all']);
route::get('/all-view', [MahasiswaController::class, 'allView']);
route::get('/get-where', [MahasiswaController::class, 'getWhere']);
route::get('/test-where', [MahasiswaController::class, 'testWhere']);
route::get('/first', [MahasiswaController::class, 'first']);
route::get('/find', [MahasiswaController::class, 'find']);
route::get('/latest', [MahasiswaController::class, 'latest']);
route::get('/limit', [MahasiswaController::class, 'limit']);
route::get('/skip-take', [MahasiswaController::class, 'skipTake']);

route::get('/soft-delete', [MahasiswaController::class, 'softDelete']);
route::get('/with-trashed', [MahasiswaController::class, 'withTrashed']);
route::get('/restore', [MahasiswaController::class, 'restore']);

route::get('/force-delete', [MahasiswaController::class, 'forceDelete']);