<!--
#----------------------------------------------------------------------------
# Manikantha Surya Rakesh Oduri
# modur2
# CSC 368 - Final Project
# May 8, 2016
#----------------------------------------------------------------------------
-->
<?php

// Server Details

	$server_name = "localhost";
	$user_name = "modur2";
	$password = "Asdfg@123";
	$db_name = "modur2";

	$conn = mysql_connect($server_name,$user_name,$password); 
	$selectedDb = mysql_select_db($db_name,$conn);
	
	//listed all the add & edit form dropdown fields options as arrays
	
	$cr_name=array('Dbms'=>'DBMS',
				   'EDC' => 'EDC',
				   'PDC' => 'PDC',
				   'Radars' => 'Radars',
				   'Web' => 'Web Development');

	$department =array('MIS' => 'MIS',
					   'CS' => 'CS',
					   'PublicHealth' => 'Public Health'
					   );	
	$timings =array('2-0340' => '02:00pm - 03:40pm',
				    '6-0740' => '06:00pm - 07:40pm',
				    '4-0540' => '04:00pm - 05:40pm'
					   );	
	
	$day =array('Monday' => 'Monday',
				'Tuesday' => 'Tuesday',
				'Wednesday' => 'Wednesday',
				'Thursday' => 'Thursday'
			   );	
			   
	$term =array('Fall-15' => 'Fall 2015',
				'Spring-16' => 'Spring 2016',
			   );		   
	?>

