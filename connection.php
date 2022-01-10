<?php
   $db = new mysqli("localhost","root","","ticket"); 
   	if(!$db){
		die("Error: Can't connect to database");
	}
?>