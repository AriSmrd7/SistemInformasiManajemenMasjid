<?php
function dbConnect(){
	$db=new mysqli("localhost","root","","db_masjid");
	return $db;
}
?>