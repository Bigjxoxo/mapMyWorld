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
    array_push($data, $_POST['q4_info1']);
    array_push($data, $_POST['q4_info2']);
    array_push($data, $_POST['q4_info3']);
    array_push($data, $_POST['q4_info4']);
    array_push($data, $_POST['q4_info5']);

    $return = add_info_q4($data);
    $json = array ("result" => "success", "return" => $return);
}

echo json_encode($json);
exit();
?>

