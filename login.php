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
if($_SERVER["REQUEST_METHOD"] == "POST"){
   
  $name=$_POST['name'];
    $password = $_POST['password']; 

     
    $sql = "Select * from register where name='$name' AND password='$password'";
    
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if ($num == 1){
        $_SESSION['name']=$name;
    
      header("location:home.php");;
            }
            else{
                echo " error " ;
            }
       
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto|Sriracha&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/login.css">
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
<body>
<div  style="width: 520px;  margin: auto;background-color: #4d4a4b9a; padding: 30px;">

   
    <div class="container">
        <img src="photo/llogo.png" class="img" >
     
    <p>Enter your Valid Email and Password </p>
        
        <form action="login.php" method="post">
         
            <input type="text" name="name"  placeholder="Enter your Name">
            <input type="password" name="password" id="password" placeholder="Enter your Password">
            
            <button class="btn">Login</button> 
        </form>
    </div>
    </div>
    
    
</body>
</html>