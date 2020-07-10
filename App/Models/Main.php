<?php

declare(strict_types=1);

namespace App\Models;

use App\Core\Model;

class Main extends Model
{
    /**
     * @return array
     */
    public function getList(): array
    {
        return $this->db->query(
            'SELECT id, category, title, timestamp FROM todo_list WHERE is_done = :is_done',
            ['is_done' => 0]
        );
    }
}