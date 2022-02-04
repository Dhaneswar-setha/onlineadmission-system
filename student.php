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

?>
<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name=$_POST['name'];
    $dob=$_POST['dob'];
    $email = $_POST['email'];
    $mobile=$_POST['mobile'];
    $password = $_POST['password'];
    
      $s="select * from register where name='$name'";
      $result=mysqli_query($conn,$s);
      $num=mysqli_num_rows($result);
      echo $num;
      if($num==1){
          echo"<font color='red'>user already register try one other name</font>";
      }
      else{
        $sql = "INSERT INTO `register` ( `name`, `dob`, `email`, `mobile`, `password`, `dt`) VALUES ( '$name', '$dob', ' $email', '$mobile', '$password', current_timestamp());";

        $result = mysqli_query($conn,$sql);
     
         if($result){
            //  header("location:login.php");
            echo"sucess";
           }
           else{
               die("not inserted".mysqli_connect_error());
           }
      }
    
    
         
    }
    ?>


 <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto|Sriracha&display=swap" rel="stylesheet">
    <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
      
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
   
</head>

<body  style="background-image:url('photo/bg.jpg');background-color: rgb(99, 98, 96);">
     <div class="container-fluid">    
                <div class="row">
                  <div class="col-sm-12" >
                  <div class="header">
                      <img class="logo" src="photo/logo.png">
                      <h1 id="hari" style="width: 90px;">Trident Academy Of Creative Technology</h1>
    </div>
    
    </div> 
   
                        

    <marquee behavior="alternate" direction="left" vspace="100" style="margin-top: 30px;">

        
            <font color="red" size=10 style="background-color: yellow;"><b>Admission open for 2022-2023</b></font>

    </marquee>
    
    <div style="padding: -5px;">

        <div class="container" >
            <div  style="width: 520px;margin: auto;background-color: #4d4a4b9a; padding: 30px;">

               <div class="notify-badge" ><img  src="photo/logos.png" alt="Trident"></div>



                <form action="" method="post">
                    <input type="text" name="name" required="true"  placeholder="Enter your Name">
                    <input type="date" name="dob" required="true"  placeholder="Enter your DOB">
                    <input type="email" name="email" required="true" placeholder="Enter your Email Id">
                    <input type="text" name="mobile" required="true"  placeholder="Enter your mobile Number">
                    
                    <input type="password" class="form-control" name="password" placeholder="Password(min. 6 characters)" required="true" pattern=".{6,}">
                    <input type="password" name="cpassword"  required="true" placeholder="Enter your ConfirmPassword">
                    <div class="mona">
                        <button class="btn">SignUp</button> <button class="btn"><a href="login.php"
                                style="text-decoration: none; color: white;">Login</a></button>
                    </div>
                </form>
            </div>
        </div>

    </div>
</body>

</html> 
