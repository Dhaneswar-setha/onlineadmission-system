<?php
$getid=$_GET['id'];
echo $getid;
?>
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
$sql="SELECT * FROM `admisssion`  WHERE `id` = $getid";
$rs=mysqli_query($conn,$sql)

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/show.css">
    <style>
     body {
            background-image: url('photo/viewb.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            margin: 0px;



        }
    </style>
</head>
    <body style="background-image:url('photo/viewb.jpg');">
        <div class="header">
            <img class="logo" src="photo/logo.png">
            <h1 id="hari" style="width: 90px;">Trident Academy Of Creative Technology</h1>
</div>
<br>
<br>
<br>

<table>
        
    
        <tr>
            <th class="mm" >NAME OF THE APPLICANT</th>
            <th class="mm" >Fatherhersoccupation</th>
            <th class="mm" >Mothersoccupation</th>
            <th class="mm" >ClassX_YrOfPassing</th>
            <th class="mm" >ClassX_Percentage</th>
            <th class="mm" >ClassXII_YrOfPassing</th>
            <th class="mm" >ClassXII_Percentage</th>
            <th class="mm" >Coursename</th>
            
    
    </tr>
    <?php while($t=mysqli_fetch_array($rs)) 
    {
        // print_r($t);
        
     ?>
     <tr>
     <td><?php echo $t['nameofapplicant'] ;?></td>
     <td><?php echo $t['fatherhersoccupation'] ;?></td>
     <td><?php echo $t['mothersoccupation'] ;?></td>
     <td><?php echo $t['ClassX_YrOfPassing'] ;?></td>
     <td><?php echo $t['ClassX_Percentage'] ;?></td>
            
    
    <td><?php echo $t['ClassXII_YrOfPassing'] ;?></td>
    <td><?php echo $t['ClassXII_Percentage'] ;?></td>
            
           
          
            <td><?php echo $t['coursename'] ;?></td>
          
    
          
    </tr>
    <?php
    }
    ?>
    </table>
    <br>
    <br>

    <br>

<a href="admin.php"><img src="photo/back1.png" style="    width: 145px;
    margin-left: 469px;"></a>

</body>
</html>