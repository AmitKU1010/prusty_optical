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
      <h6 align="center" class="txt-dark" style="font-size:15px;" ><i class="zmdi zmdi-account mr-10"></i>Add Model</h6>
     <hr class="light-grey-hr"/>
   </div>
      <div class="col-lg-12">
          <div class="card">
             <div class="card-body">
              <form method="post" action="model_submit.php">
               <!-- row start -->
               <div class="row">
              
                              <div class="col-md-4" >
                                  <div class="form-group ">
                                    <label class="control-label mb-10">Model Name</label>
                                    <input type="text"  maxlength="50"  name="model_name" id="model_name" class="form-control"  placeholder="Model Name">
                                    <span class="help-block"> </span>
                                  </div>
                                </div>
               

                                <div class="col-md-4" id="nighthalt_div">
                                  <div class="form-group ">
                                    <label class="control-label mb-10">HSN code</label>
                                    <input type="text"  maxlength="50" name="hsn_code" id="hsn_code" class="form-control"  placeholder="Price For Night Holt">
                                    <span class="help-block"> </span>
                                  </div>
                                </div>

                                 <div class="col-md-4">
                                  <div class="form-group ">
                                    <label class="control-label mb-10">Model Price </label>
                                    <input type="text"  maxlength="50" name="model_price" id="model_price" class="form-control"  placeholder="Model Price">
                                    <span class="help-block"> </span>
                                  </div>
                                </div>
                                </div>
                                
                                  <div class="form-actions mt-10">
                              <button type="submit" name="submit" class="btn btn-success  mr-10">Save</button>
                              <button type="reset" value="Reset" class="btn btn-default">Reset</button>
                              </div>
                              </div>
                               </div>
                               </div>
                              
                              </form>
                              <div class="row">
        <div class="col-lg-12">
          <div class="card text-white" style="background:linear-gradient(to bottom, #00cc00 0%, #0033cc 100%);">
            <div class="card-header"><i class="fa fa-table"></i>View Car Charges(Hotel)</div>
            <div class="card-body">
              <div class="table-responsive">
              <table id="example" class="table table-bordered">
                <thead>
                   <tr>
                              <th>#</th>
                              <th>Model Name</th>
                              <th>HSN Code</th>
                              <th>Model Price </th>
                              <th class="text-nowrap">Action</th>
                            </tr>
                </thead>
                <tbody>
                    <tr>
                    <?php

                    $sql = "SELECT * FROM  model";
                    $result = $conn->query($sql);

                    $i = 1;
                      // output data of each row
                      while($row = $result->fetch_assoc()) 
                      {     
                      ?>
                      <td><?php echo $i;?></td>
                      <td><?php echo $row["model_name"];?></td>
                      <td><?php echo $row["hsn_code"];?></td>
                      <td><?php echo $row["model_price"];?></td>

                      
                      
                  
                      <td class="text-nowrap">
                        <a href="edit_car_charges_hotel.php?eid=<?php echo $row['id']?>" class="mr-25" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>

                         <a href="delete_car_charges_hotel.php?eid=<?php echo $row['id']?>"  data-toggle="tooltip" data-original-title="Delete"> <i class="fa fa-close  text-danger"></i> </a> </td>
                      
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
