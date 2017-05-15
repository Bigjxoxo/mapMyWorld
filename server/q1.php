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
	array_push($data, $_POST['q1_info1']);
	array_push($data, $_POST['q1_info2']);
	array_push($data, $_POST['q1_info3']);
	array_push($data, $_POST['q1_info4']);
    $temp = 0; //a counter which indicates whether each value in $data exists or not
    for ($i = 0; $i<5; $i++)
    {
        if(check_var($data[$i])){  //$data[$i] exists
            $temp++;
        }
    }
    $return = null;
    if($temp == 5){ //all the value in $data exist
        $return = add_info_q1($data);
        $json = array ("result" => "success", "return" => $return);
    } else {
        $json = array ("result" => "missing value", "return" => $return);
    }
}
else{
    $json = array ("result" => "noUser", "return" => $return);
}
$temp = 0; //a counter which indicates whether each value in $data exists or not
for ($i = 0; $i<5; $i++)
{
   if(check_var($data[$i])){  //$data[$i] exists
       $temp++;
   }
}
$return = null;
if($temp == 5){ //all the value in $data exist
    if ($email !== null) {
        $return = add_info_q1($data);
        $json = array ("result" => "success", "return" => $return);
    } else {
        $json = array ("result" => "noUser", "return" => $return);
    }
}else{ //missing $data[$i], but it doesn't indicate which value is missing
    $json = array ("result" => "missing value", "return" => $return);
}

<<<<<<< HEAD

=======
>>>>>>> 57888822829c14b4acc0dc09fae1d17bdd9d7d93
/*
if ($email !== null) {
    $return = add_info_q1($data);
    $json = array ("result" => "success", "return" => $return);
} else {
    $json = array ("result" => "noUser", "return" => $return);
}
*/

// session_destroy();
echo json_encode($json);

exit();
?>