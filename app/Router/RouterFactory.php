<?php

declare(strict_types=1);

namespace App\Router;

use App\Model\Services\LangsService;
use Kdyby\Translation\Translator;
use Nette;
use Nette\Application\Routers\Route;
use Nette\Application\Routers\RouteList;
use Tracy\Debugger;


final class RouterFactory
{
	use Nette\StaticClass;

	public static function createRouter( Translator $t ): RouteList
	{
		$router = new RouteList();

		$router[] = $frontRouter = new RouteList('Front');

		$frontRouter->addRoute('<presenter>[/<action>][/<id>]', [
			'presenter' => [
				Route::VALUE => 'Default',
				Route::PATTERN => 'default',
			],
			'action' => [
				Route::VALUE => 'default',
			],
			'id' => [
				Route::PATTERN => '.+'
			]
		]);

		return $router;
	}

}
