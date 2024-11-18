<?php include ('header.php');
include('connection.php');
$id=$_GET['id'];
$q="SELECT users.USERNAME,child_details.CHILD_NAME,hospital.HOSPITAL_NAME,vaccine_detail.VACCINE_NAME,appointment.DATE,
appointment.STATUS,appointment.TIME,appointment.REMARKS FROM `appointment` join users on users.ID=appointment.USER_ID_FK join 
child_details on child_details.ID=appointment.CHILD_ID_FK join hospital on hospital.ID=appointment.HOSPITAL_ID_FK join
 vaccine_detail on vaccine_detail.ID=appointment.VACCINE_ID_FK where USERNAME='$id'";
$res=mysqli_query($con,$q);
$q1="select * from appointment";
$res1=mysqli_query($con,$q1);
$data1=mysqli_fetch_assoc($res1);
?>
<section class="st-shape-wrap" id="contact">
      <div class="st-shape1"><img src="assets/img/shape/contact-shape1.svg" alt="shape1"></div>
      <div class="st-shape2"><img src="assets/img/shape/contact-shape2.svg" alt="shape2"></div>
      <div class="st-height-b120 st-height-lg-b80"></div>
      <div class="container">
      <div class="st-section-heading st-style1">
            <h2 class="st-section-heading-title">Appointments</h2>
          <div class="st-seperator">
            <div class="st-seperator-left wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s"></div>
            <div class="st-seperator-center"><img src="assets/img/icons/favicon.png" alt="icon"></div>
            <div class="st-seperator-right wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s"></div>
          </div>
          <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Parent Name</th>
                        <th>Child Name</th>
                        <th>Hospital</th>
                        <th>Vaccine</th>
                        <th>Date</th>
                        <th>Status</th>
                        <th>Time</th>
                        <th>Remarks</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($data=mysqli_fetch_assoc($res)) { ?>
                    <tr>
                        <td><?php echo $data['USERNAME']?></td>
                        <td><?php echo $data['CHILD_NAME']?></td>
                        <td><?php echo $data['HOSPITAL_NAME']?></td>
                        <td><?php echo $data['VACCINE_NAME']?></td>
                        <td><?php echo $data['DATE']?></td>
                        <td><?php echo $data['STATUS']?></td>
                        <td name="time_id"><?php echo $data['TIME']?></td>
                        <td><?php echo $data['REMARKS']?></td>
                        <td><a href="user_app_delete.php?id=<?php echo $data1['ID']?>" class="btn btn-danger " >Delete </a></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
      <div class="st-height-b120 st-height-lg-b80"></div>
    </section>
<?php include ('footer.php') ?>