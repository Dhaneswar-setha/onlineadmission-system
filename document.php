<?php
session_start();
$conn = mysqli_connect("localhost","root","","project");
if($conn){
    // echo"connected";
}
else{
    echo"not connected";
}

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name=$_POST['name'];
    $photo='photo';
    $image = addslashes(file_get_contents($_FILES['photo']['tmp_name']));
    $imagename=addslashes($_FILES['photo']['name']);
    move_uploaded_file($_FILES['photo']['tmp_name'],"image/".$_FILES['photo']['name']);
    $location="image/".$_FILES['photo']['name'];

    $identityproof='identityproof';
    $image = addslashes(file_get_contents($_FILES['identityproof']['tmp_name']));
    $imagename=addslashes($_FILES['identityproof']['name']);
    move_uploaded_file($_FILES['identityproof']['tmp_name'],"image/".$_FILES['identityproof']['name']);
    $identityproof="image/".$_FILES['identityproof']['name'];

    $signature='signature' ;
    $image = addslashes(file_get_contents($_FILES['signature']['tmp_name']));
    $imagename=addslashes($_FILES['signature']['name']);
    move_uploaded_file($_FILES['signature']['tmp_name'],"image/".$_FILES['signature']['name']);
    $signature="image/".$_FILES['signature']['name'];


    $xmarksheet='xmarksheet';
    $image = addslashes(file_get_contents($_FILES['xmarksheet']['tmp_name']));
    $imagename=addslashes($_FILES['xmarksheet']['name']);
    move_uploaded_file($_FILES['xmarksheet']['tmp_name'],"image/".$_FILES['xmarksheet']['name']);
    $xmarksheet="image/".$_FILES['xmarksheet']['name'];



 $xiimarksheet='xiimarksheet';
 $image = addslashes(file_get_contents($_FILES['xiimarksheet']['tmp_name']));
 $imagename=addslashes($_FILES['xiimarksheet']['name']);
 move_uploaded_file($_FILES['xiimarksheet']['tmp_name'],"image/".$_FILES['xiimarksheet']['name']);
 $xiimarksheet="image/".$_FILES['xiimarksheet']['name'];



    $sql="INSERT INTO `document` (`name`, `photo`,`identityproof`,`signature`,`xmarksheet`,`xiimarksheet`)
     VALUES ('$name', '$location','$identityproof','$signature','$xmarksheet','$xiimarksheet')";
    $exe=mysqli_query($conn,$sql);

    if($exe){
        echo"inserted";
    }
    else{
        echo"not ";
    }



}


?>





<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <link type="text/css" rel="stylesheet" href="css/dc.css"></link>
        
      
       
    </head>
    <body style="background-image:url('photo/dc.jpg');">
        <form id="docup" enctype="multipart/form-data" name="docup" action="document.php" method="post">
            <div class="container-fluid">    
                <div class="row">
                  <div class="col-sm-12">
                  <div class="header">
                      <img class="logo" src="photo/logo.png"   >
                      <h1 id="hari" style="width: 90px;">Trident Academy Of Creative Technology</h1>
    </div>
                  </div>
                 </div>    
             </div>
             <h1 style=" text-align: center; font-size:36px; font-family: fantasy; background-color: chartreuse;"> Upload Your Documents</h1>
            <div class="container" style="margin-left:100px;">
            <div  style="width: 520px;  margin: auto;background-color: #4d4a4b9a; padding: 30px;">
            <table class="table table-striped" >
                           
                            <tbody>
                            <tr>
                                 <td>Name </td>
                                 <td><input type="text"  name="name" ><br>
                                     </td>
                            </tr> 
                            <tr>
                                 <td>Photo </td>
                                 <td><input type="file"  name="photo" ><br>
                                     </td>
                            </tr> 
                            <tr>
                                <td>
                                    Identity Proof
                                </td>
                            
                                 <td>
                                    <input type="file"  name="identityproof"><br>
                                 
                                </td>
                            </tr> 
                            <tr>
                                <td>
                                    Signature
                                </td>
                            
                                 <td>
                                    <input type="file"  name="signature"><br>
                                 
                                </td>
                            </tr>
                            
                             <tr>
                                <td>10th Mark Sheet</td>
                                <td>
                                     <input type="file"  name="xmarksheet"><br>
                                     
                                 </td>
                             </tr>
                             
                             <tr>
                                 <td>
                                     12th Mark Sheet
                                 </td>
                             
                            
                                 <td>
                                     <input type="file"  name="xiimarksheet"><br>
                                     
                                 </td>
                             </tr>
                            
                            
                           
                           </tbody>
                       </table>
                       <input type="submit"  name="fpicup" class="toggle btn btn-primary">
        </div>
           
                               
                           
                         
                  </div>
            </div>
        </form>
    </body>
</html>
