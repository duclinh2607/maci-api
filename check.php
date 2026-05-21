<?php
header("Content-Type: application/json");

$allowed = ["12345","VIP001","ADMIN999"];
$code = $_GET["code"] ?? "";

echo json_encode(["allowed" => in_array($code, $allowed)]);
?>
