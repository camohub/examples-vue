<?php

namespace App\Model;

use App;
use App\Model\Orm\Orm;
use Nette\Security\Permission;
use Nette\Caching\Cache;


/**
 * Users management.
 */
class AuthorizatorFactory
{

	const CACHE_KEY = self::class;

	/** @var Cache  */
	protected $cache;

	/** @var Orm  */
	protected $orm;


	public function __construct( Cache $cache, Orm $orm)
	{
		$this->cache = $cache;
		$this->orm = $orm;
	}


	/**
	 * @return \Nette\Security\IAuthorizator
	 */
	public function create()
	{
		if( $permission = $this->cache->load(self::CACHE_KEY) ) return $permission;


		$permission = new Permission();

		/* zoznam uživateľských rolí */
		$permission->addRole('guest');
		$permission->addRole('registered');
		$permission->addRole('redactor', 'registered');
		$permission->addRole('admin', 'redactor');

		/* seznam zdrojů */
		$permission->addResource('comment');
		$permission->addResource('article');
		$permission->addResource('administration');
		$permission->addResource('user');
		$permission->addResource('category');
		$permission->addResource('product');
		$permission->addResource('image');

		/* registered oprávnenia */
		$permission->allow('registered', array('comment'), 'add');

		/* redactor oprávnenia */
		$permission->allow('redactor', array('administration'), 'view');
		$permission->allow('redactor', array('article', 'image', 'category'), 'add');
		$permission->allow('redactor', array('article', 'category', 'image'), 'edit');

		/* admin oprávnenia - na všetko */
		$permission->allow('admin', Permission::ALL, Permission::ALL);

		$this->cache->save(self::CACHE_KEY, $permission);

		return $permission;
	}

}
