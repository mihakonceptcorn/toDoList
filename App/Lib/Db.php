<?php

declare(strict_types=1);

namespace App\Lib;

use PDO;

class Db
{
    /**
     * @var PDO
     */
    private $db;

    public function __construct()
    {
        $dbConfig = require_once 'App/Config/db.php';
        $this->db = new PDO(
            'mysql:host='.$dbConfig['host'].';dbname='.$dbConfig['dbname'], $dbConfig['user'], $dbConfig['pass']
        );
    }

    /**
     * @param string $sql
     * @param array $params
     * @return array
     */
    public function query(string $sql, array $params = []): array
    {
        $query = $this->db->prepare($sql);
        if(!empty($params)) {
            foreach ($params as $key => $val) {
                $query->bindValue(':'.$key, $val);
            }
        }
        $query->execute();

        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
}
