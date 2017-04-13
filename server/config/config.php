<?php

//Connect To Database

function db_connect ()
{
	try
	{
		$dbc = new PDO("mysql:host=localhost;dbname=mma", 'root', 'root');
		return ($dbc);
	}
	catch (PDOException $e)
	{
		print ("Could not connect to server.\n");
		print ("getMessage(): " . $e->getMessage () . "\n");
	}
}
function db_close()
{
	$dbc = NULL;
}

?>
