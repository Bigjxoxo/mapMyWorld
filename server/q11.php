<?php
/*
 * Add answers entered by the user into DB.
 */
require "includes/defs.php";

session_start();

$json;
$email = $_COOKIE['email'];
$data = array();

$result = check_user($email);

if ($result['idUser']){
    array_push($data, $result['idUser']);
    array_push($data, $_POST['q11_info']);
    array_push($data, $_POST['q12_info']);
    array_push($data, $_POST['q13_info']);


    $return = add_info_q11($data);
    $json = array ("result" => "success", "return" => $return);
}

echo json_encode($json);
exit();
?>

