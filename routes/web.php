<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

//tus php server routes
Route::any('/tus/{any?}', function () {
    $response = app('tus-server')->serve();

    return $response->send();
})->where('any', '.*');

//visitor routes
Route::get('/', 'VisitorController@index');
Route::get('/price', 'VisitorController@price')->name('price');
Route::get('/contact', 'VisitorController@contact')->name('contact');
Route::post('/contact', 'VisitorController@contactForm')->name('contact.form');
Route::get('/terms', 'VisitorController@terms')->name('terms');
Route::get('/privacy-policy', 'VisitorController@privacyPolicy')->name('privacy.policy');
Route::get('/about-us', 'VisitorController@aboutUs')->name('about');

Route::prefix('service')->name('service.')->group(function () {
    Route::get('clipping-path', 'VisitorController@service1')->name('service1');
    Route::get('color-variant', 'VisitorController@service2')->name('service2');
    Route::get('drop-shadow', 'VisitorController@service3')->name('service3');
    Route::get('ghost-mannequin', 'VisitorController@service4')->name('service4');
    Route::get('image-masking', 'VisitorController@service5')->name('service5');
    Route::get('jewelry-editing', 'VisitorController@service6')->name('service6');
    Route::get('photo-retouching', 'VisitorController@service7')->name('service7');
    Route::get('product-photo-editing', 'VisitorController@service8')->name('service8');
    Route::get('realestate-hdr', 'VisitorController@service9')->name('service9');
});

Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('auth', 'checkAdmin')->group(function () {
    Route::get('/', 'AdminController@index')->name('home');
    Route::get('settings', 'AdminController@settings')->name('settings');
    Route::post('settings', 'AdminController@updateSettings')->name('settings');
    Route::post('changePassword', 'AdminController@changePassword')->name('change.password');
    Route::resource('quotes', 'QuoteController')->except(['edit', 'update', 'create', 'store']);
    Route::post('download_zip', 'ZipController@createZip')->name('download_zip');
});

Route::namespace('User')->prefix('user')->name('user.')->middleware('auth', 'checkUser')->group(function () {
    Route::get('/', 'UserController@index')->name('home');
    Route::get('settings', 'UserController@settings')->name('settings');
    Route::post('settings', 'UserController@updateSettings')->name('settings');
    Route::post('changePassword', 'UserController@changePassword')->name('change.password');
    Route::get('quote', 'UserController@getQuote')->name('quote');
    Route::post('quote', 'UserController@saveQuote')->name('quote.store');

    Route::post('remove_file', 'UserController@removeFile');
});

Route::prefix('blog')->group(function () {
    Route::prefix('api')->group(function () {
        Route::get('posts', [\App\Http\Controllers\CanvasUiController::class, 'getPosts']);
        Route::get('posts/{slug}', [\App\Http\Controllers\CanvasUiController::class, 'showPost'])
             ->middleware('Canvas\Http\Middleware\Session');

        Route::get('tags', [\App\Http\Controllers\CanvasUiController::class, 'getTags']);
        Route::get('tags/{slug}', [\App\Http\Controllers\CanvasUiController::class, 'showTag']);
        Route::get('tags/{slug}/posts', [\App\Http\Controllers\CanvasUiController::class, 'getPostsForTag']);

        Route::get('topics', [\App\Http\Controllers\CanvasUiController::class, 'getTopics']);
        Route::get('topics/{slug}', [\App\Http\Controllers\CanvasUiController::class, 'showTopic']);
        Route::get('topics/{slug}/posts', [\App\Http\Controllers\CanvasUiController::class, 'getPostsForTopic']);

        Route::get('users/{id}', [\App\Http\Controllers\CanvasUiController::class, 'showUser']);
        Route::get('users/{id}/posts', [\App\Http\Controllers\CanvasUiController::class, 'getPostsForUser']);
    });

    Route::get('/{view?}', [\App\Http\Controllers\CanvasUiController::class, 'index'])
         ->where('view', '(.*)')
         ->name('blog');
});

// cache clear
Route::get('reboot', function () {
  Artisan::call('cache:clear');
	Artisan::call('view:clear');
	Artisan::call('route:clear');
	Artisan::call('config:cache');
	Artisan::call('view:cache');

	dd('Web site Refreshed!');
});

Route::get('storageLink', function () {
	Artisan::call('storage:link');

	dd('Storage linked!');
});
