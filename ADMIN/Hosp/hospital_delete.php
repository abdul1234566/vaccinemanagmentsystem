<?php
include('connection.php');
$x=$_GET['ID'];
$q="delete from hospital where pro_id='$x'";
$res=mysqli_query($con,$q);
if($res){
    echo "<script>alert('Delete Succesfully');window.location.href='hospital_show.php'</script>";
}
else{
    echo mysqli_error($con);
}


?>