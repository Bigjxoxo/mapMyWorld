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
    array_push($data, $_POST['q7_info1']);
    array_push($data, $_POST['q7_info2']);
    array_push($data, $_POST['q7_info3']);
    array_push($data, $_POST['q7_info4']);

    $return = add_info_q7($data);
    $json = array ("result" => "success", "return" => $return);
}

echo json_encode($json);
exit();
?>