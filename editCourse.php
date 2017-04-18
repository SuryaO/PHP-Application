<!--
#----------------------------------------------------------------------------
# Manikantha Surya Rakesh Oduri
# modur2
# CSC 368 - Final Project
# May 8, 2016
#----------------------------------------------------------------------------
-->
<?php
require 'db_info.php'; //to include external files

$id=$_GET['id']; 

	//query to fetch details based on student Id
	$sql = "select * from registration where student_id = {$id}";
	$result = mysql_query($sql);
	$row = mysql_fetch_assoc($result);

?>
<div align="center">
	<h1>Edit Course</h1>
	<form method="post" action="http://uisacad5.uis.edu/~modur2/updateCourse.php">						
				<div>
                    <label ><span>Student Id:  </span></label>                    
					<input type="text" name="studentid" value="<?php echo $row['student_id']?>" readonly="readonly">                  
                </div>
				<br />
				<br />
				<div>
                    <label ><span>Department Name</span></label>                    
                        <select name="department">
						<option value=""></option>

						<?php
						// foreach loop is used to access the key and value of an array
						// drop down Options are imported from db_info.php file
						foreach($department as $depkey => $depvalue){							
							// to display the db value in the dropdown or select fields in the form
							if($row['department'] == $depkey){
								$selected = 'selected';
							}
							else{
								$selected = '';
							}
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
							if($row['course'] == $crkey){
								$selected = 'selected';
							}
							else{
								$selected = '';
							}
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
							if($row['time'] == $timekey){
								$selected = 'selected';
							}
							else{
								$selected = '';
							}
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
							if($row['day'] == $daykey){
								$selected = 'selected';
							}
							else{
								$selected = '';
							}
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
							if($row['term'] == $termkey){
								$selected = 'selected';
							}
							else{
								$selected = '';
							}
							echo "<option value={$termkey} {$selected}>{$termvalue}</option>";
							}
						?>
					</select>
                </div>										
				<br />
				<br />
				<input type="submit" value="Submit">				
		</form>
	

<?php
echo "<br/><br/><a href='http://uisacad5.uis.edu/~modur2/index.php'>HOME PAGE</a>";
?>