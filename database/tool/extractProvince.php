<?php
require './Util.php';

$conn = new Util('mysql:dbname=homestead;host=127.0.0.1', 'homestead', 'secret');

$query = <<<EOL
SELECT * FROM homestead.task_756571;
EOL;

$provinceMap = [];
$i = 0;

foreach ($conn->conn->query($query) as $row) {
    if (!check_exist($row['province_id'], $provinceMap)) {
        $provinceMap[$i]['id'] = $row['province_id'];
        $provinceMap[$i]['name'] = $row['province_name'];
        $provinceMap[$i]['created_at'] = $conn->microDate();
        $provinceMap[$i]['updated_at'] = $conn->microDate();
        $i++;
    }
}

$conn->pushDataToTable($conn->conn, $provinceMap, 'provinces');

function check_exist($key, $arr)
{
    foreach ($arr as $a) {
        if (in_array($key, $a)) {
            return true;
        }
    }

    return false;
}