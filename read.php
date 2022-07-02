<?php
require_once "db.php";

$sql = "SELECT `id`, `title`, `content` FROM `board`";

if(isset($_GET["id"])) {
    $sql = $sql . " WHERE `id` = " . $_GET["id"];
}

$db_result = mysqli_query($db_link, $sql);

$response_data = array();

if($db_result) {
    if(mysqli_num_rows($db_result) > 0) {
        while ($row = mysqli_fetch_assoc($db_result)) {
            $response_data[] = $row;
        }   
    } else {
        $response_data["message"] = "no data";
    }
} else {
    $response_data["message"] = mysqli_error($db_link);
}

mysqli_free_result($db_result);

header("Content-Type: application/json");
echo json_encode($response_data);
?>
