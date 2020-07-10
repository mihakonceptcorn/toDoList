<?php

declare(strict_types=1);

namespace App\Core;

use App\Lib\Db;

abstract class Model
{
    protected $db;

    public function __construct()
    {
        $this->db = new Db();
    }
}