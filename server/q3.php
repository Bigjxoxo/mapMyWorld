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
    array_push($data, $_POST['q3_info11']);
    array_push($data, $_POST['q3_info12']);
    array_push($data, $_POST['q3_info21']);
    array_push($data, $_POST['q3_info22']);
    array_push($data, $_POST['q3_info31']);
    array_push($data, $_POST['q3_info32']);
    array_push($data, $_POST['q3_info41']);
    array_push($data, $_POST['q3_info42']);

    $return = add_info_q3($data);
    $json = array ("result" => "success", "return" => $return);
}

echo json_encode($json);
exit();
?>

