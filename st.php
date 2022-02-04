<?php
	session_start();
?>
   

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/admin.css">
    <style>
     body {
           
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            margin: 0px;



        }
    </style>
</head>
    <body >
    <?php  
		$name= $_SESSION['name'];
		$con = mysqli_connect("localhost","root","","project");
		$s="select * from document where id='$name'";
		$rs = mysqli_query($con,$s);
		
		while($t=mysqli_fetch_array($rs))
			{
			
	?>

        <div class="header">
            <img class="logo" src="photo/logo.png">
            <h1 id="hari" style="width: 90px;">Trident Academy Of Creative Technology</h1>
</div>
<button class="ktn"><a href="logout.php" style="text-decoration: none; color: white;">LOGOUT</a></button>
<div>

 </h1>
    </div>
    <table>
        
    
    <tr>
        <th class="mm" >Image</th>
       

</tr>

 <tr>
        <td><?php echo '<image src="'.$t['photo'].'" width="100" height="100">' ?></td>
        
       
       
      
</tr>

<?php
            }
?>
    
</table>



</body>
</html>