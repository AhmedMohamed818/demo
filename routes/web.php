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
Route::get('/model/{brandNames}',[PageControllor::class,'model']  ) -> name('page.model');
Route::get('/model2/{brandNames}',[PageControllor::class,'model2']  ) -> name('page.model2');
Route::get('/Maintenance', [PageControllor::class,'Maintenance']) -> name('page.Maintenance');
Route::get('/info tboa/{brandNames}', [PageControllor::class,'infotboa']) -> name('page.infotboa');
Route::post('/info tboa/{brandNames}', [PageControllor::class,'insertTboaAds']) -> name('page.infotboa');
Route::get('/info sparepart/{brandNames}', [PageControllor::class,'infosparepart']) -> name('page.infosparepart');
Route::post('/info sparepart/{brandNames}', [PageControllor::class,'insertSparepartsAds']) -> name('page.infosparepart');
Route::get('/info rent/{modelNames}', [PageControllor::class,'inforent']) -> name('page.inforent');
Route::post('/info rent/{modelNames}', [PageControllor::class,'insertRentAds']) -> name('page.inforent');
Route::get('/info oil',[PageControllor::class,'infooil'] ) -> name('page.infooil');
Route::get('/info maintenance',[PageControllor::class,'infomaintenance'] ) -> name('page.infomaintenance');
Route::get('/info car/{modelNames}', [PageControllor::class,'infocar']) -> name('page.infocar');
Route::post('/info car/{modelNames}', [PageControllor::class,'sellCarAds']) -> name('page.infocar');
Route::get('/detail ads/{username}', [PageControllor::class,'detailads']) -> name('page.detailads');
Route::get('/category sell', [PageControllor::class,'categorysell']) -> name('page.categorysell');
Route::get('/brand', [PageControllor::class,'brand']) -> name('page.brand');
Route::get('/brand2', [PageControllor::class,'brand2']) -> name('page.brand2');
Route::get('/brand3', [PageControllor::class,'brand3']) -> name('page.brand3');
Route::get('/brand4', [PageControllor::class,'brand4']) -> name('page.brand4');
Route::get('/ads', [PageControllor::class,'ads']) -> name('page.ads');
Route::get('/info user car', [PageControllor::class,'infousercar']) -> name('page.infoCarMaintenance');
Route::get('/changed details', [PageControllor::class,'changeddetails']) -> name('page.ichanged');
Route::get('/ads view', [PageControllor::class,'adsviews']) -> name('page.viewer');
Route::get('/new cars ads', [PageControllor::class,'newcarads']) -> name('page.newcarads');
Route::get('/used cars ads', [PageControllor::class,'usedcarads']) -> name('page.usedcarads');
Route::get('/spareparts ads', [PageControllor::class,'sparepartads']) -> name('page.sparepartads');
Route::get('/tboa ads', [PageControllor::class,'tboaads']) -> name('page.tboaads');
Route::get('/rent cars ads', [PageControllor::class,'rentcarads']) -> name('page.rentcarads');





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
