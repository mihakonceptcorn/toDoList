<?php


namespace App\Models;


use App\Core\Model;

class Item extends Model
{
    /**
     * @param int $id
     * @return array
     */
    public function getItem(int $id): array
    {
        $sql = 'SELECT
                    category, timestamp, title, description
                FROM
                    todo_list
                WHERE
                    id = :id;';

        return $this->db->query($sql, ['id' => $id]);
    }

    /**
     * @param $id
     * @return void
     */
    public function markDone(int $id): void
    {
        $sql = 'UPDATE
                    todo_list
                SET is_done = 1
                WHERE
                   id = :id;';

        $this->db->query($sql, ['id' => $id]);
    }
}