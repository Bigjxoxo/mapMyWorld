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
    array_push($data, $_POST['q10_mon1']);
    array_push($data, $_POST['q10_mon2']);
    array_push($data, $_POST['q10_mon3']);

    array_push($data, $_POST['q10_tue1']);
    array_push($data, $_POST['q10_tue2']);
    array_push($data, $_POST['q10_tue3']);


    array_push($data, $_POST['q10_wed1']);
    array_push($data, $_POST['q10_wed2']);
    array_push($data, $_POST['q10_wed3']);


    array_push($data, $_POST['q10_thu1']);
    array_push($data, $_POST['q10_thu2']);
    array_push($data, $_POST['q10_thu3']);


    array_push($data, $_POST['q10_fri1']);
    array_push($data, $_POST['q10_fri2']);
    array_push($data, $_POST['q10_fri3']);


    array_push($data, $_POST['q10_sat1']);
    array_push($data, $_POST['q10_sat2']);
    array_push($data, $_POST['q10_sat3']);


    array_push($data, $_POST['q10_sun1']);
    array_push($data, $_POST['q10_sun2']);
    array_push($data, $_POST['q10_sun3']);


    $return = add_info_q10($data);
    $json = array ("result" => "success", "return" => $return);
}

echo json_encode($json);
exit();
?>

