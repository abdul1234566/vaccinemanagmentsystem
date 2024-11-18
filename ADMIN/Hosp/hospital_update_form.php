<?php include('header.php');
include('connection.php');
$x=$_GET['id'];
$q="select * from hospital where ID='$x'";
$res=mysqli_query($con,$q);
$data=mysqli_fetch_assoc($res);
?>
<div class="container-fluid p-0">
<div class="row justify-content-center">
<div class="col-lg-12">
<div class="white_box mb_30">
<div class="box_header ">
<div class="main-title">
<h3 class="mb-0">Update Hospitals</h3>
</div>
</div>
<form>
<div class="mb-3">
<label class="form-label" for="exampleFormControlInput1">Hospital Name</label>
<input type="text" class="form-control" id="exampleFormControlInput1" name="HOSPITAL_NAME" value="<?php echo $data['HOSPITAL_NAME']?>">
<div class="mb-3">
<label class="form-label" for="exampleFormControlInput1">Location</label>
<input type="text" class="form-control" id="exampleFormControlInput1" name="LOCATION" value="<?php echo $data['LOCATION']?>">
<div class="mb-3">
<label class="form-label" for="exampleFormControlInput1">Contact</label>
<input type="text" class="form-control" id="exampleFormControlInput1" name="CONTACT" value="<?php echo $data['CONTACT']?>">

</div>
<button type="button" class="btn btn-primary form-control" name="btn">Update</button>
<?php include('footer.php') ?>