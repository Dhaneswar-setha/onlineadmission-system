<?php
session_start();

?>



<?php

$server="localhost";
$username='root';
$password="";
$database="project";
$conn=mysqli_connect($server,$username,$password,$database);
if($conn){
    // echo"Sucess";

}
else{
    die("Error".mysqli_connect_error());
}
$sql="SELECT * FROM `admisssion`";
$rs=mysqli_query($conn,$sql)

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
            background-image: url('photo/loginbg.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            margin: 0px;



        }
    </style>
</head>
    <body style="background-image:url('photo/bg1.jpg');">
        <div class="header">
            <img class="logo" src="photo/logo.png">
            <h1 id="hari" style="width: 90px;">Trident Academy Of Creative Technology</h1>
</div>
<button class="ktn"><a href="logout.php" style="text-decoration: none; color: white;">LOGOUT</a></button>
<div>
    <h1 id="babu">Welcome Admin==><?php
echo  $_SESSION['name'];
?> </h1>
    </div>
    <table>
        
    
    <tr>
        <th class="mm" >ID</th>
        <th class="mm" >APPLICATION NO.</th>
        <th class="mm" >NAME</th>
        <th class="mm" >Gender</th>
        <th class="mm" >STATUS</th>
        <th class="mm" >SIGNUP DATE</th>
        <th class="mm" colspan="3" >ACTION</th>

</tr>
<?php while($t=mysqli_fetch_array($rs)) 
{
    // print_r($t);
    
 ?>
 <tr>
        <td><?php echo $t['id'] ;?></td>
        
        <td><?php echo $t['applicationnumber'] ;?></td>
        <td><?php echo $t['nameofapplicant'] ;?></td>
        <td><?php echo $t['gender'] ;?></td>
        <td><?php echo $t['status'] ;?></td>
        <td><?php echo $t['dt'] ;?></td>
        <td><a href="accept.php?id=<?php echo $t['id'] ;?>"><img src="photo/1222.png" style="width: 50px;"></a></td>
        <td><a href="reject.php?id=<?php echo $t['id'] ;?>"><img src="photo/w1.png" style="width: 60px;"></a></td>
        <td><a href="show.php?id=<?php echo $t['id'] ;?>"><img src="photo/90.png" style="width: 60px;"></a></td>

      
</tr>
<?php
}
?>

    
</table>



</body>
</html>
