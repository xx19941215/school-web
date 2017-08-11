<?php
require './Util.php';

$conn = new Util('mysql:dbname=homestead;host=127.0.0.1', 'homestead', 'secret');

$query = <<<EOL
SELECT * FROM homestead.task_756571;
EOL;

$citiesMap = [];
$i = 0;

foreach ($conn->conn->query($query) as $row) {
    if (!check_exist($row['city_id'], $citiesMap)) {
        $citiesMap[$i]['id'] = $row['city_id'];
        $citiesMap[$i]['name'] = $row['city_name'];
        $citiesMap[$i]['province_id'] = $row['province_id'];
        $citiesMap[$i]['created_at'] = $conn->microDate();
        $citiesMap[$i]['updated_at'] = $conn->microDate();
        $i++;
    }
}

$conn->pushDataToTable($conn->conn, $citiesMap, 'cities');

function check_exist($key, $arr)
{
    foreach ($arr as $a) {
        if (in_array($key, $a)) {
            return true;
        }
    }

    return false;
}