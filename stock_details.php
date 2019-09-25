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
      <h6 align="center" class="txt-dark" style="font-size:15px;" ><i class="zmdi zmdi-account mr-10"></i>Stock Details</h6>
     <hr class="light-grey-hr"/>
   </div>
      
       <div class="row">
        <div class="col-lg-12">
          <div class="card text-white" style="background:linear-gradient(to bottom, #00cc00 0%, #0033cc 100%);">
            <div class="card-header"><i class="fa fa-table"></i>Stock Details</div>
            <div class="card-body">
              <div class="table-responsive">
              <table id="example" class="table table-bordered">
                <thead>
                   <tr>
                             <th>Sl No</th>
                            <th>Model Name</th>
                            <th>HSN Code</th>
                            <th>Stock In</th>
                            <th>Stock Out</th>
                            <th>Available</th>


                            </tr>
                </thead>
                <tbody>
                    <tr>
                    <?php

                    $sql = "SELECT * FROM  stock_details";
                    $result = $conn->query($sql);

                    $i = 1;
                      // output data of each row
                      while($row = $result->fetch_assoc()) 
                      {     
                      ?>
                      <?php 
                       $sin=$row["stock_in"];
                       $sout=$row["stock_out"];
                       $total_ava=$sin-$sout;

                      ?>
                      <td><?php echo $i;?></td>
                      <td><?php echo $row["model_name"];?></td>
                      <td><?php echo $row["hsn_from_stock_details"];?></td>
                      <td><?php echo $row["stock_in"];?></td>
                      <td><?php echo $row["stock_out"];?></td>
                      <td><?php echo $total_ava;?></td>

                     
                      
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
