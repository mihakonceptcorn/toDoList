<?php

declare(strict_types=1);

namespace App\Models;

use App\Core\Model;

class Admin extends Model
{
    /**
     * @param string $category
     * @param string $timestamp
     * @param string $title
     * @param string $description
     * @return void
     */
    public function addItem(string $category, string $timestamp, string $title, string $description): void
    {
        $sql = 'INSERT INTO todo_list (category, timestamp, title, description)
                VALUES(:category, :timestamp, :title, :description);';
        $params = [
            'category' => $category,
            'timestamp' => $timestamp,
            'title' => $title,
            'description' => $description
        ];
        $this->db->query($sql, $params);
    }
}