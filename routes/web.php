<?php

use App\Http\Controllers\FinanzasController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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
    Route::get('/users',[UserController::class,'index'])->name('users.index');
});
/*     Route::get('prueva', function(){
        $proveedor = new Proveedor;
        $proveedor->nombre = 'marcos';
        $proveedor->dirección = 'Socopó';
        $proveedor->telefono = '04122409690';
        $proveedor->save();
        return $proveedor;

    }); */
    Route::get('/proveedor',[ProveedorController::class,'index'])->name('proveedor.index');
    Route::get('/proveedor/create',[ProveedorController::class,'create'])->name('proveedor.create');
    Route::post('/proveedor', [ProveedorController::class,'store'])->name('proveedor.store');
    Route::get('/proveedor/{proveedor}/edit', [ProveedorController::class, 'edit'])->name('proveedor.edit');
    Route::put('/proveedor/{proveedor}', [ProveedorController::class, 'update'])->name('proveedor.update');
    Route::delete('/proveedor/{proveedor}', [ProveedorController::class, 'destroy'])->name('proveedor.destroy');
    

    Route::get('/finanzas', [FinanzasController::class,'index'])->name('finanzas.index');

require __DIR__.'/auth.php';
