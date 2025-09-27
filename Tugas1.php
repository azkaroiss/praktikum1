<?php
$data = array("nama"=>"Azka","umur"=>24);
echo "JSON Encode:<br>";
echo json_encode($data);
echo "<hr>";

$json = '{"nama":"Azka","umur":24}';

$obj = json_decode($json);
echo "Object: " . $obj->nama . " - " . $obj->umur . "<br>";

$arr = json_decode($json, true);
echo "Array: " . $arr["nama"] . " - " . $arr["umur"];
?>