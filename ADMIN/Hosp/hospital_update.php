<?php
include('connection.php');
if(isset($_POST['btn'])){
$hospital_name=$_POST['HOSPITAL_NAME'];
$hospital_loaction=$_POST['LOCATION'];
$hospital_contact=$_POST['CONTACT'];
$hospital_details=$_POST['DETAILS'];
$id=$_POST['ID'];
$q="update hospital set HOSPITAL_NAME='$hospital_name',LOCATION='$hospital_loaction',CONTACT='$hospital_contact',DETAILS='$hospital_details' where ID='$id'";
$res=mysqli_query($con,$q);
if($res){
    echo "<script>alert('Updated Successfully');window.location.href='hospital_show.php'</script>";
}
else{
    echo mysqli_error($con);
}
}


?>