<?php

class Util
{
    public $conn;

    public function __construct($dsn, $user, $password)
    {
        try {
            $conn = new PDO($dsn, $user, $password);
            $this->conn = $conn;
            $this->conn->query('set names UTF8');
            echo "Connect to db ok! \n";
        } catch (PDOException $e) {
            echo "\n Error: " . $e->getMessage();
        }
    }


    public function pushDataToTable($conn, $data, $table) {
        $keys = '';
        $values = '';
        foreach ($data[1] as $k => $r) {
            $keys .= ', ' . $k;
        }
        $keys = trim(substr($keys, 1));
        $k = '';
        $conn->beginTransaction();
        foreach ($data as $k => $res) {
            foreach ($res as $k => $r) {
                $values .= ", '" . $r . "'";
            }
            $values = trim(substr($values, 1));
            $sql = "INSERT INTO $table ($keys) values ($values);";
            print_r($sql . "\n");
            $conn->exec($sql);
            $values = '';
        }
        $conn->commit();
    }

    public function microDate($time = null)
    {
        if (!$time) {
            $time = microtime(true);
        }

        $date = date_create_from_format('U.u', $time);
        return $date->format('Y-m-d\TH:i:s.u');
    }

}