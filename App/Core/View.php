<?php

declare(strict_types=1);

namespace App\Core;

class View
{
    /**
     * @var string
     */
    private $path;

    /**
     * @var array
     */
    private $route;

    /**
     * @var string
     */
    private $layout = 'default';

    /**
     * @param array $route
     */
    public function __construct(array $route)
    {
        $this->route = $route;
        $this->path = $route['controller'] . '/' . $route['action'];
    }

    /**
     * @param string $title
     * @param array $params
     */
    public function render(string $title, array $params = [])
    {
        if (file_exists('App/Views/' . $this->path . '.php')) {
            ob_start();
            require_once 'App/Views/' . $this->path . '.php';
            $content = ob_get_clean();
            require_once 'App/Views/Layouts/' . $this->layout . '.php';
        } else {
            echo 'View not found' . $this->path;
        }
    }

    /**
     * @param string $url
     * @return void
     */
    public function redirect(string $url): void
    {
        header('location:' . $url);
    }

    /**
     * @param $code
     * @return void
     */
    public static function errorCode($code): void
    {
        http_response_code($code);
        require_once 'App/Views/Errors/' . $code . '.php';
    }
}