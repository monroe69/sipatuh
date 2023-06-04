<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\cetak\CetakController;
use App\Http\Controllers\ContohController;
use App\Http\Controllers\Admink3Controller;
use App\Http\Controllers\divisi\Bogork3Controller;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\divisi\Padangk3Controller;
use App\Http\Controllers\Safetik3Controller;
use App\Http\Controllers\divisi\Jakartak3Controller;
use App\Http\Controllers\PenerapanController;
use Modules\K3\Http\Controllers\K3Controller;
use App\Http\Controllers\DaftarakunController;
use App\Http\Controllers\cetak\CetakpadangController;
use App\Http\Controllers\Penerapank3Controller;
use App\Http\Controllers\Reportingk3Controller;
use App\Http\Controllers\AuditdiajukanController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Comunicationk3Controller;
use App\Http\Controllers\rekap\AdminrekapbogorController;
use App\Http\Controllers\PengajuandiajukanController;
use App\Http\Controllers\PengajuandirevisiController;
use App\Http\Controllers\cetak\CetakjakartaController;
use Modules\Keamanan\Http\Controllers\KeamananController;
use Modules\Lingkungan\Http\Controllers\LingkunganController;

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
    return redirect('/login');
});

Route::middleware('auth')->controller(UserController::class)->prefix('user')->group(function ()
{
    Route::get('/','index')->name('user');
    
    Route::get('/create','create')->name('user/create');

    
    
    Route::get('/edit/{id}', 'edit')->name('user/edit')->where('id','[0-9]+');
    
    Route::post('/update', 'update')->name('user/update')->where('id','[0-9]+');

    Route::get('/destroy/{id}', 'destroy')->name('user/destroy')->where('id','[0-9]+');


});

Route::middleware('auth')->controller(ProfileController::class)->prefix("profile")->group(function (){
   
    Route::get('/edit','edit')->name('profile/edit');

    Route::post('/update','update')->name('profile/update');

    Route::post('/updatePassword','updatePassword')->name('profile/updatePassword');

});

Route::middleware('auth')->controller(RoleController::class)->prefix("role")->group(function (){

Route::get('/', 'index')->name('role');

Route::get('/create', 'create')->name('role/create');

Route::post('/store', 'store')->name('role/store');

Route::get('/edit/{id}', 'edit')->name('role/edit')->where('id','[0-9]+');

Route::post('/update', 'update')->name('role/update')->where('id','[0-9]+');

Route::get('/destroy/{id}', 'destroy')->name('role/destroy')->where('id','[0-9]+');

});


Route::middleware('auth')->controller(CategoryController::class)->prefix("category")->group(function (){

    Route::get('/', 'index')->name('category');
    
    Route::get('/create', 'create')->name('category/create');
    
    Route::post('/store', 'store')->name('category/store');
    
    Route::get('/edit/{id}', 'edit')->name('category/edit')->where('id','[0-9]+');
    
    Route::post('/update', 'update')->name('category/update')->where('id','[0-9]+');
    
    Route::get('/destroy/{id}', 'destroy')->name('category/destroy')->where('id','[0-9]+');
    
});

Auth::routes();
Route::resource('/daftar', DaftarakunController::class  );
Route::resource('/pengajuandiajukan', PengajuandiajukanController::class  );
// Route::resource('/pengajuandirevisi', PengajuandirevisiController::class  );
Route::resource('/auditdiajukan', AuditdiajukanController::class  );
Route::resource('/bogork3', Bogork3Controller::class  );
Route::resource('/padangk3', Padangk3Controller::class  );
Route::resource('/jakartak3', Jakartak3Controller::class  );
Route::resource('/penerapan', Penerapank3Controller::class  );
Route::resource('/safeti', Safetik3Controller::class  );
Route::resource('/comunication', Comunicationk3Controller::class  );
Route::resource('/reporting', Reportingk3Controller::class  );
// Route::resource('/contoh', ContohController::class  );
Route::resource('/dashboardk3', Admink3Controller::class );
Route::get('k3::index', [K3Controller::class, 'index'])->name('k3');
Route::get('keamanan::index', [KeamananController::class, 'index'])->name('keamanan');
Route::get('lingkungan::index', [LingkunganController::class, 'index'])->name('lingkungan');
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/cetakpdfbogor', [CetakController::class, 'index'])->name('cetakpdfbogor');
Route::get('/cetakpdfjakarta', [CetakjakartaController::class, 'index'])->name('cetakpdfjakarta');
Route::get('/cetakpdfpadang', [CetakpadangController::class, 'index'])->name('cetakpdfpadang');
Route::get('/rekapdatabogor', [AdminrekapbogorController::class, 'index'])->name('rekapdatabogor');
