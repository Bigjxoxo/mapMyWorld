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
    array_push($data, $_POST['q6_info11']);
    array_push($data, $_POST['q6_info12']);
    array_push($data, $_POST['q6_info21']);
    array_push($data, $_POST['q6_info22']);
    array_push($data, $_POST['q6_info31']);
    array_push($data, $_POST['q6_info32']);
    array_push($data, $_POST['q6_info41']);
    array_push($data, $_POST['q6_info42']);
    array_push($data, $_POST['q6_info51']);
    array_push($data, $_POST['q6_info52']);
    array_push($data, $_POST['q6_info61']);
    array_push($data, $_POST['q6_info62']);
    array_push($data, $_POST['q6_info71']);
    array_push($data, $_POST['q6_info72']);

    $return = add_info_q6($data);
    $json = array ("result" => "success", "return" => $return);
}

echo json_encode($json);
exit();
?>
