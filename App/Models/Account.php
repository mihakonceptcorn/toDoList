<?php

declare(strict_types=1);

namespace App\Models;

use App\Core\Model;

class Account extends Model
{
    /**
     * @param string $name
     * @param string $pass
     * @return array
     */
    public function login(string $name, string $pass): array
    {
        $sql = 'SELECT
                    id
                FROM
                    users
                WHERE
                    name = :name AND
                    pass = :pass;';
        $params = ['name' => $name, 'pass' => $pass];
        $result = $this->db->query($sql, $params);
        if (count($result)) {
            $_SESSION['admin'] = true;
        };

        return $result;
    }
}