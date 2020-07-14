<?php

declare(strict_types=1);

namespace App\FrontModule\Presenters;

use App\Presenters\BasePresenter;


class ComponentsPresenter extends BasePresenter
{


	public function actionDefault()
	{
		$this->template->categories = $this->orm->categories->findAll();
	}
}
