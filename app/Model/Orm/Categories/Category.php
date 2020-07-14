<?php

namespace App\Model\Orm;


use App\Presenters\BasePresenter;
use Nextras\Orm\Entity\Entity;
use Nextras\Orm\Relationships\ManyHasMany;
use Nextras\Orm\Relationships\OneHasMany;


/**
 * @property int                              $id                 {primary}
 * @property Category|NULL                    $parent             {m:1 Category::$allCategories}
 * @property OneHasMany|Category[]            $allCategories      {1:m Category::$parent, orderBy=[priority=ASC], cascade=[persist, remove]}
 * @property OneHasMany|Category[]            $adminCategories    {virtual}
 * @property OneHasMany|Category[]            $categories         {virtual}
 * @property string                           $title
 * @property int                              $priority           {default 1}
 * @property int                              $status             {default 1}
 */
class Category extends Entity
{
	const STATUS_PUBLISHED = 1;
	const STATUS_UNPUBLISHED = 2;
	const STATUS_DELETED = 3;


	public function getterCategories()
	{
		return $this->allCategories->get()->findBy(['status' => self::STATUS_PUBLISHED]);
	}


	public function getterAdminCategories()
	{
		return $this->allCategories->get()->findBy(['status!=' => self::STATUS_DELETED]);
	}

}