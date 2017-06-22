<?php
  $username = $_POST["username"];
  $password = $_POST["password"];
 
  
    if(!$username){
		echo '11111';
	  }
  $arruse = array("admin", "test", "manager");
  $arrpsw = array("123456", "456789", "abcdefg") 
	if (in_array($username, $arruse)) {
		echo '{"statu":1, "message":"exist"}';
	} else {
		echo '{"statu":0, "message":"not exist"}';
		
	}
	
	
?>