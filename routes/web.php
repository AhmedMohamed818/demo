<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageControllor;
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

// Route::get('/', function () {
//     return view('welcome');
// });


//                routes page front user page
Route::get('/',[PageControllor::class,'home'] ) -> name('page.home');
Route::get('/model',[PageControllor::class,'model']  ) -> name('page.model');
Route::get('/Maintenance', [PageControllor::class,'Maintenance']) -> name('page.Maintenance');
Route::get('/info tboa', [PageControllor::class,'infotboa']) -> name('page.infotboa');
Route::get('/info sparepart', [PageControllor::class,'infosparepart']) -> name('page.infosparepart');
Route::get('/info rent', [PageControllor::class,'inforent']) -> name('page.inforent');
Route::get('/info oil',[PageControllor::class,'infooil'] ) -> name('page.infooil');
Route::get('/info maintenance',[PageControllor::class,'infomaintenance'] ) -> name('page.infomaintenance');
Route::get('/info car', [PageControllor::class,'infocar']) -> name('page.infocar');
Route::get('/detail ads', [PageControllor::class,'detailads']) -> name('page.detailads');
Route::get('/category sell', [PageControllor::class,'categorysell']) -> name('page.categorysell');
Route::get('/brand', [PageControllor::class,'brand']) -> name('page.brand');
Route::get('/ads', [PageControllor::class,'ads']) -> name('page.ads');
Route::get('/info use rcar', [PageControllor::class,'ads']) -> name('page.infoCarMaintenance');
Route::get('/changed details', [PageControllor::class,'ads']) -> name('page.ichanged');
Route::get('/ads view', [PageControllor::class,'ads']) -> name('page.viewer');





Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('email/verify',function(){
return view('auth.verify-email');
})->middleware(['auth'])->name('verification.notice');
