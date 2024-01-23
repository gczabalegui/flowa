<?php
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FileManagerController;
use App\Http\Controllers\AdministracionController;
use App\Http\Controllers\ComisionController;
use App\Http\Controllers\ProfesorController;
use App\Http\Controllers\ArchivoController;
use App\Http\Controllers\SecretariaController;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\MateriaController;
use App\Http\Controllers\CarreraController;

/*
|--------------------------------------------------------------------------
  
          Expand Down
          
            
    

          
          Expand Up
    
    @@ -66,5 +67,14 @@
  
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('filemanager', [FileManagerController::class, 'index']);
Route::get('/', function () {
    return view('welcome');
});
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
require __DIR__.'/auth.php';
Route::get('/', function () {
    return view('welcome');
});
Route::get('/administracion', [AdministracionController::class, 'index']);
Route::get('/comision', [ComisionController::class, 'index']);
Route::get('/profesor', [ProfesorController::class, 'index']);
Route::get('/secretaria', [SecretariaController::class, 'index']);
//Route::get('/materia', [MateriaController::class, 'index']);
Route::get('archivo-upload', [ ArchivoController::class, 'upload' ])->name('archivo.upload');
Route::post('archivo-store', [ ArchivoController::class, 'store' ])->name('archivo.upload.post');
/*
require __DIR__.'/administracion.php';
require __DIR__.'profesor.php';
require __DIR__.'/alumno.php';
*/

/* ACA LAS RUTAS PARA LAS COSAS DE ADMINISTRACION */
Route::get('/administracion/cargarplan', [ArchivoController::class, 'upload'])
    ->name('archivo.upload');

//CREAR UN USUARIO ADMINISTRATIVO
Route::get('/administracion/crearadministrativo', [AdministracionController::class, 'create'])
->name('crearadministrativo');

Route::post('/administracion/crearadministrativo', [AdministracionController::class, 'store'])
->name('crearadministrativo');

//FIN CREAR UN USUARIO ADMINISTRATIVO

//CREAR UN PLAN     
Route::get('/administracion/crearplan', [PlanController::class, 'create'])
    ->name('crearplan');

Route::post('/administracion/crearplan', [PlanController::class, 'store'])
    ->name('crearplan');

//FIN CREAR UN PLAN 

//CREAR UNA MATERIA  
Route::get('/administracion/crearmateria', [MateriaController::class, 'create'])
    ->name('crearmateria');

Route::post('/administracion/crearmateria', [MateriaController::class, 'store'])
    ->name('crearmateria');

//FIN CREAR UNA MATERIA 

//CREAR UNA CARRERA  
Route::get('/administracion/crearcarrera', [CarreraController::class, 'create'])
    ->name('crearcarrera');

Route::post('/administracion/crearcarrera', [CarreraController::class, 'store'])
    ->name('crearcarrera');

//FIN CREAR UNA CARRERA

//CREAR UN PROFESOR  
Route::get('/administracion/crearprofesor', [ProfesorController::class, 'createByAdmin'])
    ->name('crearprofesor');

Route::post('/administracion/crearprofesor', [ProfesorController::class, 'store'])
    ->name('crearprofesor');
//FIN CREAR UN PROFESOR

/*--------------------------------------------------------------------------------------------------------------------------------------*/
/*--------------------------------------------------------------------------------------------------------------------------------------*/
/*--------------------------------------------------------------------------------------------------------------------------------------*/

/* SECRETARIA ACADEMICA */

Route::get('/secretaria/crearprofesor', [ProfesorController::class, 'createBySec'])
    ->name('crearprofesor');

Route::post('/secretaria/crearprofesor', [ProfesorController::class, 'store'])
    ->name('crearprofesor');
