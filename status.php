








<?php
	session_start();
    $name= $_SESSION['name'];


    $conn = mysqli_connect("localhost","root","","project");
    
?>



     
    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/status.css">
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

<?php
$sql = "select * from `document` where name= '$name' ";
$query = mysqli_query($conn, $sql);

?>
 <?php
              
                while ($row = mysqli_fetch_array($query)) { ?>
                   
                        <td><?php echo '<img src="'. $row['photo'].'" widh="110" height="100" style="
                        margin-lef:50px;">'?></td>
                       
                        
                        
                    </tr>
                <?php
                  
                 } 
                ?>


    </div>
   
    <table border = "1">
            <tr>
            <th>ID</th>
           
        <th class="mm" >NAME</th>
        <th class="mm" >STATUS</th>
       
                
        <th class="mm" >SIGNUP DATE</th>

              
                

                <tbody>
                <?php

 
// $sql = "select * from document where 'id' ='$name' ";
      
      $sql="select * from admisssion where nameofapplicant='$name' ";
     
     
      $query = mysqli_query($conn, $sql);
           
     ?>
            <?php
                
                while ($t = mysqli_fetch_array($query)) 
                { 
                    // print_r($t);
                    ?>

                    <tr>
                    <td><?php echo $t['id'] ?></td>
                   
                    <td><?php echo $t['nameofapplicant'] ;?></td>
                    <td><?php echo $t['status'] ;?></td>

                        <td><?php echo $t['dt'] ;?></td>
                        
       
        
                      
                      
                        
                        
                    </tr>
                    
                <?php
                
                 } 
                ?>
                  
                 
            </tbody>
                
       




    
</table>

</body>
</html>