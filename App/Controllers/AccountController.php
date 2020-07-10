<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Core\Controller;
use App\Core\View;

class AccountController extends Controller
{
    /**
     * @return void
     */
    public function loginAction(): void
    {
        if (isset($_POST['login']) && isset($_POST['password'])) {
            if ($this->model->login($_POST['login'], $_POST['password'])) {
                $_SESSION['admin'] = true;
                $this->view->redirect('/');
            }
        }
        $this->view->render('Login Page');
    }

    /**
     * @return void
     */
    public function logoutAction(): void
    {
        if (isset($_POST['logout'])) {
            unset($_SESSION['admin']);
            $this->view->redirect('/');
        }
    }
}