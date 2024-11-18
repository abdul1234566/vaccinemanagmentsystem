<?php include('header.php');
include('connection.php');
$q="select * from hospital";
$res=mysqli_query($con,$q);
?>
<div class="main_content_iner ">
<div class="container-fluid p-0">
<div class="row justify-content-center">
<div class="col-12">
<div class="QA_section">
<div class="white_box_tittle list_header">
<h4>Table</h4>
<div class="box_right d-flex lms_block">
<div class="serach_field_2">
<div class="search_inner">
<form Active="#">
<div class="search_field">
<input type="text" placeholder="Search content here...">
</div>
<button type="submit"> <i class="ti-search"></i> </button>
</form>
</div>
</div>
<div class="add_button ms-2">
<a href="#" data-bs-toggle="modal" data-bs-target="#addcategory" class="btn_1">Add New</a>
</div>
</div>
</div>
<div class="QA_table mb_30">

<table class="table lms_table_active">
<thead>
<tr>
<th scope="col">Id</th>
<th scope="col">Hospital Name</th>
<th scope="col">Location</th>
<th scope="col">Contact</th>
<th scope="col">Image</th>
<th scope="col">Details</th>
<th scope="col">Update</th>
<th scope="col">Delete</th>
</tr>
</thead>
<tbody>
<?php while($data=mysqli_fetch_assoc($res)) { ?>
<tr>
<td><?php echo $data['ID']?></td>
<td><?php echo $data['HOSPITAL_NAME']?></td>
<td><?php echo $data['LOCATION']?></td>
<td><?php echo $data['CONTACT']?></td>
<td><img src="<?php echo $data['HOSPITAL_PIC']?>" height=100/></td>
<td><?php echo $data['DETAILS']?></td>
<td><a href="hospital_update_form.php?id=<?php echo $data['ID']?>">Update</a></td>
<td><a href="hospital_delete.php?id=<?php echo $data['ID']?>">Delete</a></td>
</tr>
<?php } ?>
</tbody>
<?php include('footer.php') ?>