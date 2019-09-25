<?php
  include('includes/config.php');
require_once("includes/numbertowords.php");
$id = $_GET['printid'];
error_reporting(0);
?>
<!DOCTYPE html>
<!-- saved from url=(0050)http://localhost/zenithschool/admission/copy/pdf/1 -->
<html lang="en" class="gr__localhost">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- CSRF Token -->
<meta name="csrf-token" content="TeQGiKbNzkPkQ0U6GBoK5v5dt4gUj64VMbJSpYai">
<title>S.PRUSTY OPTICALS</title>
<!-- Tell the browser to be responsive to screen width -->
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<!-- Bootstrap 3.3.7 -->
<link rel="stylesheet" href="./Zenith School_files/bootstrap.min.css">
</head>
<body class="hold-transition skin-blue sidebar-mini" data-gr-c-s-loaded="true">
<section class="content">
  <!-- title row -->
  <style>
    .cf_heading{
        font-weight: bold;
        color: blue;
		
    }
	.table-align th{
	text-align: center;
	height: 30px;
}
.table-align td{
	text-align: center;
	height: 30px;
}
</style>
  <div class="pageprint" style="border: 1px solid">
   <table width="100%">
   	<tr>
   		<td width="10%"><center><img src="logo.jpeg" height="100px" width="100px"></center></td>
   		<td width="65%"><center>
      <div style="color:red; font-size:25px">S. PRUSTY OPTICALS <br>
        COMPUTERISED EYE TESTING &amp; CONTACT LENS CENTRE
        <br>
        Plot No.-551, Jagamara Chhak, New Road, BBSR
        </div>
    </center></td>
   		<td width="25%" style="color:red; font-size:25px">Cell: 9861454770</td>
   	</tr>
   </table>
    
    <table width="100%">
      <tr>
        
      </tr>
    </table>
  <?php $sql = mysqli_query($conn,"SELECT * FROM `eyetest_report_one` WHERE `id`='$id' LIMIT 1");
    $rowdata = mysqli_fetch_assoc($sql);
    {
    ?>
    <table width="100%">
      <tr>
        <td width="70%" style="border: 1px solid; border-radius: 5px"><h3 style="text-transform: capitalize; padding: 15px ">Name: <?php echo($rowdata['patientname']) ?> <br>
            <br>
            Address: <?php echo $rowdata['address'] ?>
            <!-- <br><br>
  				contact no: <?php //echo $rowdata['code'] ?> -->
          </h3></td>
        <td width="30%" style="border: 1px solid; margin-left: 2px"><h3 style="text-transform: capitalize; padding: 15px "> Contact No: <?php echo $rowdata['contact_number']; ?><br>
            <br>
            Date: <?php echo $rowdata['patient_date']; ?> </h3></td>
      </tr>
    </table>
    <?php } ?>
  
    <span>
    <center>
      <h4 style="color:red">PRESCRIPTION FOR GLASSES</h4>
    </center>
    </span>
    <table class="table-align" style="border: 1px solid;margin-bottom: 5px; margin-top: 5px" width="100%">
      <thead >
        <tr>
          <th colspan="5" style="text-align:center">LEFT</th>
          <th colspan="4" style="text-align:center">RIGHT</th>
        </tr>
        <tr>
          <th>RX</th>
          <th>SPH</th>
          <th>CYL</th>
          <th>AXIS</th>
          <th>VISION</th>
          <th>SPH</th>
          <th>CYL</th>
          <th>AXIS</th>
          <th>VISION</th>
        </tr>
      </thead>
      <tr>
        <td >Distance</td>
        <td><?php echo $rowdata['d_l_sph']; ?></td>
        <td><?php echo $rowdata['d_l_cyl']; ?></td>
        <td><?php echo $rowdata['d_l_axis']; ?></td>
        <td><?php echo $rowdata['d_l_vision']; ?></td>
        <td><?php echo $rowdata['d_r_sph']; ?></td>
        <td><?php echo $rowdata['d_r_cyl']; ?></td>
        <td><?php echo $rowdata['d_r_axis']; ?></td>
        <td><?php echo $rowdata['d_r_vision']; ?></td>
      </tr>
      <tr>
        <td >Reading</td>
        <td><?php echo $rowdata['r_l_sph']; ?></td>
        <td><?php echo $rowdata['r_l_cyl']; ?></td>
        <td><?php echo $rowdata['r_l_axis']; ?></td>
        <td><?php echo $rowdata['r_l_vision']; ?></td>
        <td><?php echo $rowdata['r_r_sph']; ?></td>
        <td><?php echo $rowdata['r_r_cyl']; ?></td>
        <td><?php echo $rowdata['r_r_axis']; ?></td>
        <td><?php echo $rowdata['r_r_vision']; ?></td>
      </tr>
    </table>


            <?php 
            $one=$rowdata['charges_of_glass']+$rowdata['total_price_one'];
            $advance=$rowdata['advance'];

           


            $final=$one-$advance;




            ?>
    <table width="100%">
      <tr>
        <td width="50%" style="border: 1px solid; border-radius: 5px"><h3 style="text-transform: capitalize; padding: 15px ">Frame Name: <?php echo $rowdata['ipd']; ?><br>
            Types Of Lens: <?php echo $rowdata['bridge']; ?><br>
            Delivery Date: <?php echo $rowdata['remark']; ?> <br><br><br>
			Signature</h3></td>
        <td width="30%" style="border: 1px solid; margin-left: 2px"><h3 style="text-transform: capitalize; padding: 15px "> 
          Total &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs. <?php echo $rowdata['total_price_one']; ?><br>
            Charges of Glass &nbsp;&nbsp; Rs. <?php echo $rowdata['charges_of_glass']; ?><br>
           
			
			Advance &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs. <?php echo $rowdata['advance']; ?><br>
			Balance &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs. <?php echo $final; ?> </h3></td>
      </tr>
    </table>
	<table width="100%">
      <tr>
        <td width="80%" style="border: 1px solid; border-radius: 5px"><h3 style="text-transform: capitalize; padding: 15px ">
          <ul>
          	<li>Date Of Delivery..........................Time..............</li>
          	<li>
          		NB.:
          		<ol>
          			<li>Order Valid For One Month</li>
          			<li>Articles once sold are not returnable.</li>
          			<li>Tax Extra</li>
          		</ol>
          	</li>
          </ul>
         </td>
        <td width="30%" style="border: 1px solid; margin-left: 2px"><h3 style="text-transform: capitalize; padding: 15px ">E.& O.E<br><br><br><br><br>Signature</td>
      </tr>
    </table>
  </div>
  <style>
	  span.productdesc {
    font-size: 20px;
    padding-left: 20px;
}
	  .productdesc1 {
    height: 30px;
    font-size: 20px;
    margin-top: 5px;
    padding: 10px;
    background: #f2ebeb;
    margin-left: 5px;
    border-radius: 5px;
	width: 60%
}
	   .productdesc11 {
    height: 30px;
    font-size: 20px;
    margin-top: 5px;
    padding: 10px;
    background: #f2ebeb;
    margin-left: 5px;
    border-radius: 5px;
	width: 30%
}
</style>
</section>
<script src="./Zenith School_files/jquery.min.js.download"></script>
</body>
</html>
