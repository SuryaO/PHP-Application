<!--
#----------------------------------------------------------------------------
# Manikantha Surya Rakesh Oduri
# modur2
# CSC 368 - Final Project
# May 8, 2016
#----------------------------------------------------------------------------
-->
<?php

require 'db_info.php';

// Assigning Post data to variables.

$studentid=$_POST['studentid'];
$term=$_POST['term'];
$cr_name=$_POST['cr_name'];
$day=$_POST['day'];
$timings=$_POST['timings'];
$department=$_POST['department'];

// Inserting inputted data into database using Sql queries.

	$sql = "INSERT INTO registration(id,student_id,department,course,time,day,term)  VALUES ('','{$studentid}','{$department}','{$cr_name}','{$timings}','{$day}','{$term}')";
    	
	$result = mysql_query($sql);
	if($result){
		echo "New record is entered successfully <br/>";		
	}else{
		echo "Record Insertion Failed <br/>";
	}
	mysql_close($conn); 
	
	echo "<a href='index.php'>HOME PAGE</a>";

?>