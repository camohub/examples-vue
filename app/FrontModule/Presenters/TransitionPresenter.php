<?php

declare(strict_types=1);

namespace App\FrontModule\Presenters;

use App\Presenters\BasePresenter;


class TransitionPresenter extends BasePresenter
{


	public function actionDefault()
	{
		$this->template->categories = $this->orm->categories->findAll();
	}
}
