<?php
header("Content-Type: application/json");

// Danh sách mã được cấp quyền
$allowedCodes = [
    "V2175946"
];

// Lấy mã người dùng gửi lên
$code = $_GET["code"] ?? "";

// Kiểm tra
if(in_array($code, $allowedCodes)){
    echo json_encode(["allowed" => true]);
} else {
    echo json_encode(["allowed" => false]);
}
?>