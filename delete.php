<?php
require_once "db.php";

$response_data = array();

if(isset($_GET["id"])) {
    $sql = "DELETE FROM `board` WHERE `id` = " . $_GET["id"];

    $db_result = mysqli_query($db_link, $sql);

    if($db_result) {
        $response_data["message"] = "success";
    } else {
        $response_data["message"] = mysqli_error($db_link);
    }
} else {
    $response_data["message"] = "no id data";
}

header("Content-Type: application/json");
echo json_encode($response_data);
?>
