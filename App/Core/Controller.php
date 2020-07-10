<?php

declare(strict_types=1);

namespace App\Core;

abstract class Controller
{
    /**
     * @var string
     */
    public $route;

    /**
     * @var View
     */
    public $view;

    /**
     * @var Model|null
     */
    public $model;

    /**
     * @var string
     */
    public $access;

    /**
     * @param array $route
     */
    public function __construct($route)
    {
        $this->route = $route;
        $this->access = $route['access'];
        if (!$this->checkAccess()) {
            View::errorCode(403);
        }
        $this->view = new View($route);
        $this->model = $this->loadModel($route['controller']);
    }

    /**
     * @return bool
     */
    private function checkAccess(): bool
    {
        $result = true;
        if ($this->access === 'admin' && !isset($_SESSION['admin'])) {
            $result = false;
        }

        return $result;
    }

    /**
     * @param string $name
     * @return Model
     */
    private function loadModel($name): Model
    {
        $model = null;
        $path = 'App\Models\\' . ucfirst($name);
        if (class_exists($path)) {
            $model =  new $path;
        }

        return $model;
    }
}
