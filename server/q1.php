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

if ($result['idUser']) {
	array_push($data, $result['idUser']);
	array_push($data, $_POST['q1_info1']);
	array_push($data, $_POST['q1_info2']);
	array_push($data, $_POST['q1_info3']);
	array_push($data, $_POST['q1_info4']);
}

if ($email !== null) {
    $return = add_info_q1($data);
    $json = array ("result" => "success", "return" => $return);
} else {
    $json = array ("result" => "noUser", "return" => $return);
}
// session_destroy();
echo json_encode($json);

exit();
?>