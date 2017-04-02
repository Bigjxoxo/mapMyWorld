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
    array_push($data, $_POST['q9_info11']);
    array_push($data, $_POST['q9_info12']);
    array_push($data, $_POST['q9_info13']);
    array_push($data, $_POST['q9_info14']);
    array_push($data, $_POST['q9_info21']);
    array_push($data, $_POST['q9_info22']);
    array_push($data, $_POST['q9_info23']);
    array_push($data, $_POST['q9_info24']);
    array_push($data, $_POST['q9_info31']);
    array_push($data, $_POST['q9_info32']);
    array_push($data, $_POST['q9_info33']);
    array_push($data, $_POST['q9_info34']);
    array_push($data, $_POST['q9_info41']);
    array_push($data, $_POST['q9_info42']);
    array_push($data, $_POST['q9_info43']);
    array_push($data, $_POST['q9_info44']);

    // add more rows - function check
    $return = add_info_q9($data);
    $json = array ("result" => "success", "return" => $return);
}

echo json_encode($json);
exit();
?>

