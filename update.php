<?php
require_once "db.php";

$response_data = array();

if(isset($_POST["id"]) && isset($_POST["title"]) && isset($_POST["content"])) {
    $sql = "UPDATE `billboard` SET `title` = '" . $_POST["title"] . "', `content` = '" . $_POST["content"] . "' WHERE `id` = " . $_POST["id"];

    $db_result = mysqli_query($db_link, $sql);

    if($db_result) {
        $response_data["message"] = "success";
    } else {
        $response_data["message"] = mysqli_error($db_link);
    }
} else {
    $response_data["message"] = "no id or title or content data";
}

header("Content-Type: application/json");
echo json_encode($response_data);
?>