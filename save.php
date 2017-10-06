<?php
include("config.php");
	$jo = $_POST["job_order"];
	$requested_by = $_POST["requested_by"];
	$office = $_POST["office"];
	$school = $_POST["school"];

	$issue_cat = $_POST["issue_cat"];
	$issues = $_REQUEST["issues"];

	$main_issue = $_POST["main_issue"];
	$other_issue = $_POST["other_issue"];
	$client = $_POST["client"];


	$requestDate = date("Y-m-d H:i:s");

$sql = "INSERT INTO tbl_techassist (fld_id, fld_jobOrder, fld_requestBy,fld_issue,fld_issueCat,fld_status,fld_deleted,fld_office,fld_school,fld_requestDate,fld_description,fld_otherissue,fld_client)
	VALUES ('', '$jo', '$requested_by','$issues','$issue_cat','0','0','$office','$school','$requestDate','$main_issue','$other_issue','$client')";

	if (mysqli_query($conn, $sql)) {
	    echo "New record created successfully!";
	    echo "Job order: " .$jo."\n Request :".$requested_by."\n Office: ".$office;
		echo "\nSchool: " .$school."\n Category:".$issue_cat."\n issues: ".$issues;
	} else {
	    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}





	mysqli_close($conn);
	

?>