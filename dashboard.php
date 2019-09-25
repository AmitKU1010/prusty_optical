<?php 
  include('includes/header.php');
  include('includes/session.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <?php include('includes/header.php')?>
   <style type="text/css">
    .switcher-icon{
      visibility: visible;
    }
  </style>
</head>

<body>

   <!-- start loader -->
   <div id="pageloader-overlay" class="visible incoming"><div class="loader-wrapper-outer"><div class="loader-wrapper-inner"><div class="loader"></div></div></div></div>
   <!-- end loader --><!-- Start wrapper-->
 <div id="wrapper">

<?php include('includes/sidebar.php')?>
<!--Start topbar header-->
<?php include('includes/topnav.php')?>
<!--End topbar header-->


<div class="clearfix"></div>
      <!--Start Dashboard Content-->

     <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Dashboard
      </h1>
     
    </section>
    <!-- <center><img src="assets\images\logo.png" height="200px" width="200px"></center> -->
    <br>
    <center><span style="font-size: 50px; color: blue">WEL-COME<br>TO<br>PRUSTY OPTICALS</span></center><br>
    <section class="content">
      <div class="row">
        <section class="col-lg-7 connectedSortable">
        </section>
      </div>
    </section>
  </div>
  </div>
  </div>


     </div><!--End Row-->

	
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
</body>
</html>
