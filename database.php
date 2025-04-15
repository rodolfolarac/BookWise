<?php

class DB

{
    private $db;

    public function __construct($config)
    {


        $connectionString = $config['driver'] . ':' . $config['database'];

        $this->db = new PDO($connectionString);
    }

    public function query($query, $class = null, $params = [])
    {
        $prepare = $this->db->prepare($query);
        if ($class) {
            $prepare->setfetchMode(PDO::FETCH_CLASS, $class);
        }
        $prepare->execute($params);
        return $prepare;
    }
}

$database = new DB($config['database']);
