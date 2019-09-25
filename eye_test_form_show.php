<?php 
  include('includes/config.php');
  error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <?php include('includes/header.php')?>
</head>
<body>
 <div id="wrapper">
<?php include('includes/sidebar.php')?>
<!--Start topbar header-->
<?php include('includes/topnav.php')?>
<!--End topbar header-->
<div class="clearfix"></div>
  <div class="content-wrapper">
    <div class="container-fluid">

   <div class="form-body">
      <h6 align="center" class="txt-dark" style="font-size:15px;" ><i class="zmdi zmdi-account mr-10"></i>View Eye Test Form</h6>
     <hr class="light-grey-hr"/>
   </div>
                              <div class="row">
        <div class="col-lg-12">
          <div class="card text-white" style="background:linear-gradient(to bottom, #00cc00 0%, #0033cc 100%);">
            <div class="card-header"><i class="fa fa-table"></i>View Eye Test Form</div>
            <div class="card-body">
              <div class="table-responsive">
              <table id="example" class="table table-bordered">
                <thead>
                   <tr>
                          <th>sl no</th>
                          <th>Name</th>
                          <th>Age</th>
                          <th>Address</th>
                          <th>D.L.SPH</th>
                          <th>D.L.Vision</th>
                          <th>D.R.SPH</th>
                          <th>D.R.Vision</th>
                          <th>R.L.Vision</th>
                          <th>R.R.Vision</th>
                          
                          <th>Action</th>
                          </tr>
                </thead>
                <tbody>
                    <tr>
                    <?php

                    $sql = "SELECT * FROM  eyetest_report_one";
                    $result = $conn->query($sql);

                    $i = 1;
                      // output data of each row
                      while($row = $result->fetch_assoc()) 
                      {     
                      ?>
                            <td><?php echo $i; ?></td>
                            <td><?php echo $row['patientname']; ?></td>
                            <td><?php echo $row['age'];?></td>
                            <td><?php echo $row['address'];?></td>
                            <td><?php echo $row['d_l_sph'];?></td>
                            <td><?php echo $row['d_l_vision'];?></td>
                            <td><?php echo $row['d_r_sph'];?></td>
                            
                            <td><?php echo $row['d_r_vision'];?></td>
                            <td><?php echo $row['r_l_vision'];?></td>
                            <td><?php echo $row['r_r_vision'];?></td>


                      
                      
                  
                     <td>
                              <a href="patient-report.php?printid=<?php echo $row['id']; ?>" target="_blank" title="Print Without GST">
                                <i class="fa fa-print" aria-hidden="true"></i>
                              </a>&nbsp;
                              <a href="patient_report_without_gst.php?printid=<?php echo $row['id']; ?>" target="_blank" title="Print With GST">
                                <i class="fa fa-inr" aria-hidden="true"></i>
                              </a>&nbsp;
                              <!-- <a href="order-form.php?patientid=<?php echo $v1['id']; ?>" target="_blank">
                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                              </a> -->
                            </td>
                      
                        <?php
                        $i++;
                          echo "</tr>";
                        }
                      ?>
                    </tr>
                </tbody>
            </table>
            </div>
            </div>
          </div>
        </div>
      </div><!-- End Row-->
      <div class="clearfix"></div>
      <br>
      <!-- Table End -->
      <!--End Dashboard Content-->
    </div>
    <!-- End container-fluid-->
    
  </div><!--End content-wrapper-->
  
  <!--Start footer-->
  <?php include('includes/footer.php')?>

  <!--End footer-->
  
  <!--start color switcher-->
   <div class="right-sidebar">
    <div class="switcher-icon">
      <i class="zmdi zmdi-settings zmdi-hc-spin"></i>
    </div>
    <div class="right-sidebar-content">

      <p class="mb-0">Gaussion Texture</p>
      <hr>
      
      <ul class="switcher">
        <li id="theme1"></li>
        <li id="theme2"></li>
        <li id="theme3"></li>
        <li id="theme4"></li>
        <li id="theme5"></li>
        <li id="theme6"></li>
      </ul>

      <p class="mb-0">Gradient Background</p>
      <hr>
      
      <ul class="switcher">
        <li id="theme7"></li>
        <li id="theme8"></li>
        <li id="theme9"></li>
        <li id="theme10"></li>
        <li id="theme11"></li>
        <li id="theme12"></li>
      </ul>
      
     </div>
   </div>
  <!--end color cwitcher-->
   
  </div><!--End wrapper-->

  <!-- Bootstrap core JavaScript-->
<?php include('includes/footerjs.php')?>
<script>




</script>
</body>
</html>
