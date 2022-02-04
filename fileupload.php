<?php
include('config.php');
if (!isset($_FILES['document']['temp_name']))
{
    echo "error";
}
$file=$_FILES['photo'] ['temp_name'];
$image=addcslashes(file_get_contents($_FILES['photo']['temp_name']));
$imagename=addcslashes($_FILES['photo']['name']);
move_uploaded_file($_FILES['photo']['temp_name'],"document/".$_FILES['photo']['name']);
$location="document".$_FILES['photo']['name'];
$sql=mysqli_query("insert into uploaddoc (document) values ('$location')");
?>