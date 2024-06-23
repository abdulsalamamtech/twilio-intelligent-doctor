<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;

Route::get('/', function () {
    return view('welcome');
});


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';






Route::get('/', function(){
    return view('frontend.index');
});





Route::middleware('auth')->group(function () {
    Route::prefix('dashboard')->group(function () {

        Route::get('/', function () {
            return view('frontend.dashboard');
        })->name('dashboard');

        Route::resource('category', CategoryController::class);
        Route::resource('expenses', ExpenseController::class);

    });
});


Route::get('all', function (){

    $ri = random_int(1, 10);
    $user = User::where('id', $ri)->first();

    $user->load(['expenses.category']);
    // $cat = Category::with(['user', 'expenses'])->get();
    // $exp = Expense::with(['user', 'category'])->get();;

    // $data  = ['category' => $cat ?? [], 'expenses' => $exp ?? []];
    // return $data;
    return $user;

});
