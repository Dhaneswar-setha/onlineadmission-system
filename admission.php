
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
    $applicationnumber=$_POST['applicationnumber'];
    $nameofapplicant=$_POST['nameofapplicant'];
    $fathersname = $_POST['fathersname'];
    $fatherhersoccupation=$_POST['fatherhersoccupation'];
    $mothersname = $_POST['mothersname'];
    $mothersoccupation =$_POST['mothersoccupation'];
    $gender =$_POST['gender'];
    $religion =$_POST['religion'];
    $nationality=$_POST['nationality'];
    $address =$_POST['address'];
    
    $state =$_POST['state'];
    $coursetype =$_POST['coursetype'];
    $coursename =$_POST['coursename'];
    $ClassX_Board=$_POST ['ClassX_Board'];
    $ClassX_Percentage=$_POST['ClassX_Percentage'];
    $ClassX_YrOfPassing =$_POST['ClassX_YrOfPassing'];
    $ClassXII_Board=$_POST['ClassXII_Board'];
    $ClassXII_Percentage=$_POST['ClassXII_Percentage'];
    $ClassXII_YrOfPassing=$_POST['ClassXII_YrOfPassing'];


    $sql = "INSERT INTO `admisssion` ( `applicationnumber`, `nameofapplicant`, `fathersname`, `fatherhersoccupation`, `mothersname`, `mothersoccupation`, `gender`, `religion`, `nationality`, `address`, `city`, `state`, `coursetype`, `coursename`, `ClassX_Board`, `ClassX_Percentage`, `ClassX_YrOfPassing`, `ClassXII_Board`, `ClassXII_Percentage`, `ClassXII_YrOfPassing`, `dt`,`status`) VALUES ('$applicationnumber', '$nameofapplicant', '$fathersname', '$fatherhersoccupation', '$mothersname', '$mothersoccupation', '$gender', '$religion', '$nationality', '$address', '$city', '$state', '$coursetype', '$coursename', '$ClassX_Board', '$ClassX_Percentage', '$ClassX_YrOfPassing', '$ClassXII_Board', '$ClassXII_Percentage', '$ClassXII_YrOfPassing', current_timestamp(),'applied');";

   $result = mysqli_query($conn,$sql);
    if($result){
        


        header("location:view.php");
      }
      else{
          die("not inserted".mysqli_connect_error());
      }
    }
    ?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Roboto|Sriracha&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="css/ad.css">
    

    <title>Document</title>

</head>
     <body >
        <form id="adform" action="" method="post">
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
            
             <br>
             <br>
            <div id="dmid" class="container-fluid">  
                
                 <div class="row">
                    <div class="col-sm-12">
                        <font style="color:white; margin-left:520px; font-family: Verdana; width:100%; font-size:30px;">
                        <b>ADMISSION FORM</b> </font>
                      </div>
                 </div>
                
             </div>
            
            <table class="frmtbl">
                
                <tr border="1" class="hdrow">
                    
                 </tr>       
                 
                
                  
                  <tr>
                  
                    <td> <font style="font-family: Verdana;">Application Number</font>  </td>
                    <td colspan="3"> <input type="text" class="form-control"  name="applicationnumber" placeholder="Application Number" required="true" >
                   
                  </tr>
                  
                  <tr>
                    <td><font style="font-family: Verdana;"> Name of the Applicant</font></td>
                    <td  colspan="3"> <input type="text" class="form-control"  name="nameofapplicant" required="true" > </td>
                   </tr>
                 
                  <tr>
                
                  <tr>
                    <td><font style="font-family: Verdana;"> Father's Name</font></td>
                    <td  colspan="3"> <input type="text" class="form-control"  name="fathersname" required="true" > </td>
                   </tr>
                 
                  <tr>
                    <td> <font style="font-family: Verdana;">Father's Occupation</font></td>
                    <td> <input type="text"  class="form-control" name="fatherhersoccupation" required="true" > </td>
                  
                    
                  </tr>
                
                <tr>
                    <td> <font style="font-family: Verdana;">Mother's Name</font> </td>
                    <td colspan="3"> <input type="text" class="form-control" id="umname" name="mothersname" required="true" ></td>
                </tr>
                
                <tr>
                    <td> <font style="font-family: Verdana;">Mother's Occupation</font></td>
                    <td> <input type="text"  class="form-control" name="mothersoccupation" required="true" > </td>
                    
                    
                </tr>
                
                
                
                <tr>
                    <td> <font style="font-family: Verdana;">Gender </font>
                    <td><input type="radio" id="gen" name="gender" value="Male"><font style="font-family: Verdana;">Male</font>
                     <input type="radio" id="gen" name="gender"  value="Female"><font style="font-family: Verdana;">Female </font></td>       
                    
                </tr>
                
                <tr>
                    <td><font style="font-family: Verdana;">  Address</font>
                    
                          
                          <td><textarea id="address" required="true" rows="2" cols="1" name="address"></textarea></td>
                        </td>
                        <tr>
                    <td> <font style="font-family: Verdana;">State</font></td>
                    <td> <input type="text"  class="form-control" name="state" required="true" > </td>
                </tr>
               
                <tr>
                    <td><font style="font-family: Verdana;"> Nationality</font>
                    <td><input type="text"  class="form-control" name="nationality" required="true"></td>
                    
                </tr> 
                <tr>
                <td><font style="font-family: Verdana;"> Religion</font>
                    <td><input type="text"  class="form-control" name="religion" required="true"></td>
                </tr> 
                <tr>
                     <td><font style="font-family: Verdana;">Course Type</font></td>
                     <td><select class="course" name="coursetype">
                         <option>--------------------Select--------------------</option>
                         <option>Regular</option>
                         <option>DISTANCE</option>
                         </select>
                     </td>
                     
                </tr>  
               
            
               
               
               <tr>
                    <td><font style="font-family: Verdana;">CourseName</font></td>
                    <td><select class="course" name="coursename">
                         <option>--------------------Select--------------------</option>
                         <option>MBA</option>
                         <option>MCA</option>
                         <option>B.TECH</option>
                         <option>B .SC</option>
                         <option>BIOTECH</option>

                         
                         </select>
                     </td>
               </tr>
               <td>ACADEMICQUALIFICATION <br /><br /><br /><br /><br /><br /><br /></td>

<td>
    <table>

        <tr>
            <td align="center"><b>Sl.No.</b></td>
            <td align="center"><b>Examination</b></td>
            <td align="center"><b>Board</b></td>
            <td align="center"><b>Percentage</b></td>
            <td align="center"><b>Year of Passing</b></td>
        </tr>

        <tr>
            <td>1</td>
            <td>Class X</td>
            <td><input class="form-control" type="text" required="true" name="ClassX_Board" maxlength="30" /></td>
            <td><input class="form-control" type="text" required="true" name="ClassX_Percentage" maxlength="30" /></td>
            <td><input class="form-control" type="text" required="true" name="ClassX_YrOfPassing" maxlength="30" /></td>
        </tr>

        <tr>
            <td>2</td>
            <td>Class XII</td>
            <td><input class="form-control" type="text" required="true" name="ClassXII_Board" maxlength="30" /></td>
            <td><input class="form-control" type="text" required="true" name="ClassXII_Percentage" maxlength="30" /></td>
            <td><input class="form-control" type="text" required="true" name="ClassXII_YrOfPassing" maxlength="30" /></td>
        </tr>
    </table>
</td>
</tr>
  <tr>
         <td colspan="4">
              <center><input  class="btn" id="frmnext" name="submit" type="submit"> </center>
                                </td>
                           </tr>
                       </table>
          
                       
                            
            
                       
                  </form>
            </body>
</html>
