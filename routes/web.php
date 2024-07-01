<?php
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

// Route to display the form for creating a new contact
Route::get('/', [ContactController::class, 'create'])->name('contacts.create');

// Route to store a newly created contact in the database
Route::post('/contacts', [ContactController::class, 'store'])->name('contacts.store');

// Route to display a listing of all contacts
Route::get('/contacts', [ContactController::class, 'index'])->name('contacts.index');

// Route to display a specific contact by ID
Route::get('/contacts/{id}', [ContactController::class, 'show'])->name('contacts.show');

// Route to display the form for editing a specific contact by ID
Route::get('/contacts/{id}/edit', [ContactController::class, 'edit'])->name('contacts.edit');

// Route to update a specific contact by ID
Route::put('/contacts/{id}', [ContactController::class, 'update'])->name('contacts.update');

// Route to delete a specific contact by ID
Route::delete('/contacts/{id}', [ContactController::class, 'destroy'])->name('contacts.destroy');
