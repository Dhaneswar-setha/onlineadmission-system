<?php
$getid=$_GET['id'];
echo $getid;
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
$sql = "UPDATE `admisssion` SET `status` = 'accept' WHERE `admisssion`.`id` = $getid";

   $result = mysqli_query($conn,$sql);
    if($result){
        echo"<center><h1> The Addmission Form Is Accepted</h1></center>";
        
      }
      else{
          die("not update".mysqli_connect_error());
      }
?>
<br>

<br>

<a href="admin.php"><img src="photo/back1.png" style="    width: 145px;
    margin-left: 469px;"></a>

</body>
</html>
