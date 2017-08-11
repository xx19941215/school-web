<?php
require './Util.php';

$conn = new Util('mysql:dbname=homestead;host=127.0.0.1', 'homestead', 'secret');

$query = <<<EOL
SELECT * FROM homestead.task_756571;
EOL;

$districtsMap = [];
$i = 0;

foreach ($conn->conn->query($query) as $row) {
    if (!$row['district_id']) {
        continue;
    }

    if (!check_exist($row['district_id'], $districtsMap)) {
        $districtsMap[$i]['id'] = $row['district_id'];
        $districtsMap[$i]['name'] = $row['district_name'];
        $districtsMap[$i]['city_id'] = $row['city_id'];
        $districtsMap[$i]['created_at'] = $conn->microDate();
        $districtsMap[$i]['updated_at'] = $conn->microDate();
        $i++;
    }
}

$conn->pushDataToTable($conn->conn, $districtsMap, 'districts');

function check_exist($key, $arr)
{
    foreach ($arr as $a) {
        if (in_array($key, $a)) {
            return true;
        }
    }

    return false;
}