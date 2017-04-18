<!--
#----------------------------------------------------------------------------
# Manikantha Surya Rakesh Oduri
# modur2
# CSC 368 - Final Project
# May 8, 2016
#----------------------------------------------------------------------------
-->

<head>
	<title>Course Registration Form</title>
</head>
<?php
require 'db_info.php';
?>
<div align="center">
	<h1>Course Registration </h1>
	<form method="post" action="courseRegistration.php">						
				<div>
                    <label ><span>Student Id:  </span></label>                    
					<input type="text" name="studentid" value="">                  
                </div>
				<br />
				<br />
				<div>
                    <label ><span>Department Name</span></label>                    
                        <select name="department">
						<option value=""></option>
						<?php 
						//a foreach loop is used to access key and value of an array
						// drop down Options are imported from db_info.php file
						foreach($department as $depkey => $depvalue){						
							echo "<option value={$depkey} {$selected}>{$depvalue}</option>";
							}
						?>
					</select>
                </div>
				<br />
				<br />
				<div>
                    <label ><span>Course Name</span></label>                    
					<select name="cr_name">
						<option value=""></option>
						<?php foreach($cr_name as $crkey => $crvalue){							
							echo "<option value={$crkey} {$selected}>{$crvalue}</option>";
							}
						?>
					</select>
                </div>
				<br />
				<br />				
				<div>
                    <label ><span>Timings</span></label>                    
					<select name="timings">
						<option value=""></option>
						<?php foreach($timings as $timekey => $timevalue){						
							echo "<option value={$timekey} {$selected}>{$timevalue}</option>";
							}
						?>
					</select>
                </div>
				<br />
				<br />
				<div>
                    <label ><span>Day</span></label>                    
					<select name="day">
						<option value=""></option>
						<?php foreach($day as $daykey => $dayvalue){							
							echo "<option value={$daykey} {$selected}>{$dayvalue}</option>";
							}
						?>
					</select>
                </div>						
				<br />
				<br />
				<div>
                    <label><span>Term</span></label>                    
					<select name="term">
					<option value=""></option>
						<?php foreach($term as $termkey => $termvalue){							
							echo "<option value={$termkey} {$selected}>{$termvalue}</option>";
							}
						?>
					</select>
                </div>										
				<br />
				<br />
				<input type="submit" value="Submit">				
	
		</form>
	</div>

<?php
echo "<a href='index.php'>HOME PAGE</a>";
?>