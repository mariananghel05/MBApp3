<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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
    return redirect('/presentation/index.html');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

        //admin routes
        Route::middleware('role:Admin')->group(function(){
            Route::get('/classes/add', function(){return view('classes.add');})->name('classes.add');
        
        });
        //director routes
        Route::middleware('role:Director')->group(function(){
        
        });
        //Accounting routes
        Route::middleware('role:Accounting')->group(function(){
        
        });
        //Secretary routes
        Route::middleware('role:Secretary')->group(function(){
           
        });
        //Teacher routes
        Route::middleware('role:Teacher')->group(function(){
    
        });
        //Student routes
        Route::middleware('role:Student')->group(function(){
    
        });
                //admin routes
                Route::middleware('role:1')->group(function(){
        
                });
                //director routes and higher
                Route::middleware('role:2')->group(function(){
                
                });
                //Accounting routes and higher
                Route::middleware('role:3')->group(function(){
                
                });
                //Secretary routes and higher
                Route::middleware('role:4')->group(function(){
                   
                });
                //Teacher routes and higher
                Route::middleware('role:5')->group(function(){
                    Route::get('/classes', function(){return view('classes.view');})->name('classes.view');
                });
                //Student routes and higher
                Route::middleware('role:6')->group(function(){
            
                });
});



require __DIR__.'/auth.php';
