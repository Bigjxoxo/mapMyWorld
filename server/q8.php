<?php
/*
 * Add answers entered by the user into DB.
 */
require "includes/defs.php";

//session_start();

$json;
$email = $_COOKIE['email'];
$data = array();

$result = check_user($email);

if ($result['idUser']) {
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
<<<<<<< HEAD
    $temp = 0; //a counter which indicates whether each value in $data exists or not
    for ($i = 0; $i<17; $i++)
    {
        if(check_var($data[$i])){  //$data[$i] exists
            $temp++;
        }
    }
    $return = null;
    if($temp == 17){ //all the value in $data exist
        $return = add_info_q8($data);
        $json = array ("result" => "success", "return" => $return);
    } else {
        $json = array ("result" => "missing value", "return" => $return);
    }
}
else{
    $json = array ("result" => "noUser", "return" => $return);
=======

    // add more rows - function check
}
$temp = 0; //a counter which indicates whether each value in $data exists or not
for ($i = 0; $i<17; $i++)
{
    if(check_var($data[$i])){  //$data[$i] exists
        $temp++;
    }
}
$return = null;
if($temp == 17){ //all the value in $data exist
    if ($email !== null) {
        $return = add_info_q8($data);
        $json = array ("result" => "success", "return" => $return);
    } else {
        $json = array ("result" => "noUser", "return" => $return);
    }
}else{ //missing $data[$i], but it doesn't indicate which value is missing
    $json = array ("result" => "missing value", "return" => $return);
>>>>>>> 57888822829c14b4acc0dc09fae1d17bdd9d7d93
}


echo json_encode($json);
exit();
?>

