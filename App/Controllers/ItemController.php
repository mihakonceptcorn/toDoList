<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Core\Controller;

class ItemController extends Controller
{
    /**
     * @return void
     */
    public function showAction(): void
    {
        $item = [];
        if (isset($this->route['id'])) {
            $item = $this->model->getItem(($this->route['id']));
        }

        $this->view->render('Item Page', $item[0]);
    }

    /**
     * @return void
     */
    public function doneAction(): void
    {
        if (isset($_POST['done'])) {
            $this->model->markDone(($this->route['id']));
            $this->view->redirect('/');
        };
    }
}