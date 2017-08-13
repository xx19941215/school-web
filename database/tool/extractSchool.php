<?php
require './Util.php';

$conn = new Util('mysql:dbname=homestead;host=127.0.0.1', 'homestead', 'secret');

$query = <<<EOL
SELECT * FROM homestead.task_756571;
EOL;

$schoolMap = [];
$i = 0;

foreach ($conn->conn->query($query) as $row) {
    $schoolMap[$i]['id'] = $row['id'];
    $schoolMap[$i]['district_id'] = $row['district_id'];
    $schoolMap[$i]['province_id'] = $row['province_id'];
    $schoolMap[$i]['city_id'] = $row['city_id'];
    $schoolMap[$i]['user_id'] = 1;
    $schoolMap[$i]['name'] = $row['name'];
    $schoolMap[$i]['slug'] = '';
    $schoolMap[$i]['school_type'] = $row['school_type'];
    $schoolMap[$i]['class_type'] = $row['class_type'];
    $schoolMap[$i]['full_name'] = $row['full_name'];
    $schoolMap[$i]['master'] = $row['master'];
    $schoolMap[$i]['accommodation'] = $row['accommodation'];
    $schoolMap[$i]['establishment_year'] = $row['establishment_year'];
    $schoolMap[$i]['entrance_way'] = $row['entrance_way'];
    $schoolMap[$i]['tel'] = $row['tel'];
    $schoolMap[$i]['test_type'] = $row['test_type'];
    $schoolMap[$i]['addr'] = $row['addr'];
    $schoolMap[$i]['special_admissions'] = $row['special_admissions'];
    $schoolMap[$i]['website'] = $row['website'];
    $schoolMap[$i]['content'] = $row['content'];
    // $schoolMap[$i]['published_at'] = $conn->microDate();
    // $schoolMap[$i]['created_at'] = $conn->microDate();
    // $schoolMap[$i]['updated_at'] = $conn->microDate();
    $i++;
}


$conn->pushDataToTable($conn->conn, $schoolMap, 'schools');

function check_exist($key, $arr)
{
    foreach ($arr as $a) {
        if (in_array($key, $a)) {
            return true;
        }
    }

    return false;
}