<?php

declare(strict_types=1);

namespace App\FrontModule\Presenters;

use App\Front\Components\DatagridTestControl;
use App\Front\Components\DatagridUsersControl;
use App\Front\Components\IDatagridTestControlFactory;
use App\Front\Components\IDatagridUsersControlFactory;
use App\Front\Components\ITestControlFactory;
use App\Front\Components\TestControl;
use App\Model\Orm\Orm;
use App\Presenters\BasePresenter;
use Nette\Database\Context;
use Tracy\Debugger;


class BabelBrowserifyPresenter extends BasePresenter
{


	public function actionDefault()
	{

	}
}
