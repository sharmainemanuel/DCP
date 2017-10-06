<?php
include("../config.php");
  $sql = "SELECT fld_jobOrder FROM tbl_techassist ORDER BY fld_id DESC LIMIT 1;";
  $result=mysqli_query($conn,$sql);
    if (!$result) {
      die("Error: Data not found..");
    }
    $array =array();
    if(mysqli_num_rows($result) > 0){
      while($rows = mysqli_fetch_assoc($result)){
        array_push($array, $rows);
      }
    }
    echo json_encode($array); 

  mysqli_close($conn);
  

?>
