<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Core\Controller;

class AdminController extends Controller
{
    /**
     * @return void
     */
    public function uploadAction():void
    {
        if (!empty($_FILES)) {
            if ($_FILES['todolist']['type'] !== 'text/plain') {
                $this->view->render('Upload list', ['error' => 'Wrong file format']);
            }
            $file = fopen($_FILES['todolist']['tmp_name'], "r");
            while (!feof($file)) {
                $str = fgets($file);
                $row = explode(';', $str);
                $category = $row[0];
                $timestamp = $row[1];
                $title = $row[2];
                $description = $row[3];
                $this->model->addItem($category, $timestamp, $title, $description);
            }
            fclose($file);

            $this->view->redirect('/');
        }

        $this->view->render('Upload list');
    }
}