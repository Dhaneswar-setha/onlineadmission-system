<?php
	session_start();
?>
<html>
<head>
	<link rel="stylesheet" href="css/view.css">
	<style>
     body {
           
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            margin: 0px;



        }
    </style>
</head>
<body style="background-image:url('photo/simple.jpeg');">
	<center><h1><u>MY FORM</u></h1></center>
	<?php  
		$name= $_SESSION['name'];
		$con = mysqli_connect("localhost","root","","project");
		$s="select * from admisssion where nameofapplicant='$name' ";
		$rs = mysqli_query($con,$s);
		
		while($t=mysqli_fetch_array($rs))
			{
			
	?>
		<table border=1 cellspacing=0 style="text-align: center;"   >
        <tr>
			<th>ID</th>
			<td><?php echo $t['id'];?></td>
		</tr>
        <tr>
			<th>ApplicationNumber</th>
			<td><?php echo $t['applicationnumber'];?></td>
		</tr>
		<tr>
			<th>NameofApplicant</th>
			<td><?php echo $t['nameofapplicant'];?></td>
		</tr>
		<tr>
			<th>Father's Name</th>
			<td><?php echo $t['fathersname'];?></td>
		</tr>
		<tr>
			<th>Father's Occupation</th>
			<td><?php echo $t['fatherhersoccupation'];?></td>
		</tr>
		
		<tr>
			<th>Mother's Name</th>
			<td><?php echo $t['mothersname'];?></td>
		</tr>
		<tr>
			<th>Mother's Occuption</th>
			<td><?php echo $t['mothersoccupation'];?></td>
		</tr>
		
		<tr>
			<th>Gender</th>
			<td><?php echo $t['gender'];?></td>
		</tr>
        <tr>
			<th>Address</th>
			<td><?php echo $t['address'];?></td>
		</tr>
        <tr>
			<th>State</th>
			<td><?php echo $t['state'];?></td>
		</tr>
        <tr>
			<th>Religion</th>
			<td><?php echo $t['religion'];?></td>
		</tr>
        <tr>
			<th>Nationality</th>
			<td><?php echo $t['nationality'];?></td>
		</tr>
		<tr>
			<th>Course Type</th>
			<td><?php echo $t['coursetype'];?></td>
		</tr>
		<tr>
			<th>Course Name</th>
			<td><?php echo $t['coursename'];?></td>
		</tr>
		<tr>
			<th>10th Board</th>
			<td><?php echo $t['ClassX_Board'];?></td>
		</tr>
        <tr>
			<th>10th percent</th>
			<td><?php echo $t['ClassX_Percentage'];?></td>
		</tr>
        
		<tr>
			<th>10th YOP</th>
			<td><?php echo $t['ClassX_YrOfPassing'];?></td>
		</tr>
		
		
		<tr>
			<th>12th Board</th>
			<td><?php echo $t['ClassXII_Board'];?></td>
		</tr>
        <tr>
			<th>12th Percent</th>
			<td><?php echo $t['ClassXII_Percentage'];?></td>
		</tr>
		<tr>
			<th>12th YOP</th>
			<td><?php echo $t['ClassXII_YrOfPassing'];?></td>
		</tr>
		
		
		
		
		<?php
			}
		?>
	</table>
	<br>
	<br>
	<br>
	<a href="home.php"><input type="button" class="btn" value="Done"></a>
</body>
</html>