

Route::resource('cruds', App\Http\Controllers\CrudController::class);

Route::resource('users', App\Http\Controllers\UsersController::class)->except('create', 'store');
