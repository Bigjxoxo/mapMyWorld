<?php
/*
 * Add answers entered by the user into DB.
 */
require "includes/defs.php";

session_start();

$json;
$email = $_SESSION['currentUser'];
$data = array();

$result = check_user($email);

if ($result['idUser']){
    array_push($data, $result['idUser']);
    array_push($data, $_POST['q8_info11']);
    array_push($data, $_POST['q8_info12']);
    array_push($data, $_POST['q8_info13']);
    array_push($data, $_POST['q8_info14']);
    array_push($data, $_POST['q8_info21']);
    array_push($data, $_POST['q8_info22']);
    array_push($data, $_POST['q8_info23']);
    array_push($data, $_POST['q8_info24']);
    array_push($data, $_POST['q8_info31']);
    array_push($data, $_POST['q8_info32']);
    array_push($data, $_POST['q8_info33']);
    array_push($data, $_POST['q8_info34']);
    array_push($data, $_POST['q8_info41']);
    array_push($data, $_POST['q8_info42']);
    array_push($data, $_POST['q8_info43']);
    array_push($data, $_POST['q8_info44']);

    // add more rows - function check
    $return = add_info_q8($data);
    $json = array ("result" => "success", "return" => $return);
}

echo json_encode($json);
exit();
?>

