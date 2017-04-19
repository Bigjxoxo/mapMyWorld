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
    array_push($data, $_POST['q6_info81']);
    array_push($data, $_POST['q6_info82']);
    array_push($data, $_POST['q6_info91']);
    array_push($data, $_POST['q6_info92']);

    $j = 101;
    $m = 0;
    while($_POST['q6_info'.$j]){ //check if any new tabs are added
        array_push($data,$_POST['q6_info'.$j]);
        array_push($data,$_POST['q6_info'.$j+1]);
        $j = $j + 9;
        $m++;
    }

    $temp = 0; //a counter which indicates whether each value in $data exists or not
    for ($i = 0; $i<19+$m; $i++)
    {
        if(check_var($data[$i])){  //$data[$i] exists
            $temp++;
        }
    }
    $return = null;
    if($temp == 19+$m){ //all the value in $data exist
        $return = add_info_q6($data);
        $json = array ("result" => "success", "return" => $return);
    } else {
        $json = array ("result" => "missing value", "return" => $return);
    }
}
else{
    $json = array ("result" => "noUser", "return" => $return);
}



echo json_encode($json);
exit();
?>
