<?php
include("../config.php");

	$user = $_GET["username"];
	$pass = $_GET["password"];
  	
	//echo $user. " ".$pass;
	  $sql = "SELECT * FROM tbl_user WHERE fld_user = '$user' and fld_pass = '$pass'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
     
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         echo "success";
          $myuser = $row['fld_user'];
	               // header("location: welcome.php");
      }else {
         $error = "error";
         echo $error;
      }
?>
