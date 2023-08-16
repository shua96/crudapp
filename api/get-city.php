<?php

require_once('../crud/database.php');

$filter = $_GET['filter'] ?? null;
$sql = "SELECT DISTINCT `city` FROM `addresses` WHERE `province` LIKE '%$filter%'";

$result = query($sql);
$records = $result->fetch_all();
$arr = array_column($records, 0);

header("Content-type: application/json");
echo json_encode($arr);
