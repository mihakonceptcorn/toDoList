<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Core\Controller;
use App\Lib\Db;

class MainController extends Controller
{
    /**
     * @return void
     */
    public function indexAction(): void
    {
        $list = $this->model->getList();

        $this->view->render('Home Page', ['list' => $list]);
    }
}