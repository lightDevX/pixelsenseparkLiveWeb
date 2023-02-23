<?php

namespace App\Providers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use TusPhp\Tus\Server as TusServer;
use Illuminate\Support\ServiceProvider;

class TusServiceProvider extends ServiceProvider
{
	/**
	 * Register services.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->singleton('tus-server', function ($app) {
			$server = new TusServer('redis');

			$path = false;
			if (Auth::check()) {
				$path = 'public/quotes/' . Auth::id();
			}
			if (!file_exists($path)) {
				Storage::makeDirectory($path);
			}

			$server->setApiPath('/tus')->setUploadDir($path ? storage_path('app/' . $path) : storage_path('app/public/quotes'));

			return $server;
		});
	}

	/**
	 * Bootstrap services.
	 *
	 * @return void
	 */
	public function boot()
	{
		//
	}
}
