<!--
#----------------------------------------------------------------------------
# Manikantha Surya Rakesh Oduri
# modur2
# CSC 368 - Final Project
# May 8, 2016
#----------------------------------------------------------------------------
-->
<html>
	<head>
		<title>Courses</title>
	</head>

	<body>
		<h1> Welcome ! Namasthe </h1>
		<p> 
			This is the project which will add, display and Edit the college course schedules.<br>
			It will be done through insert, select and Update queries 
		</p>		
		<button type="button" onclick="redirect('addCollegecourse.php');">ADD</button>
		<br /><br />
		<button type="button" onclick="redirect('displayInfo.php')">DISPLAY</button>
	</body>
</html>

<script type= "text/javascript">
function redirect(url){
	window.location=url;
}
</script>
