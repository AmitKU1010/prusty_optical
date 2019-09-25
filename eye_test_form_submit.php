<?php
  include('includes/config.php');
if(isset($_POST['submit']))
{
	// echo "xxcvxc";

$total_price_one = $_POST['total_price_one'];

$charges_of_glass = $_POST['charges_of_glass'];

$tax = $_POST['tax'];

$advance = $_POST['advance'];

$balance = $_POST['balance'];


 print_r($_POST['hsn_code']); 

  $patientname = $_POST['patientname'];

 $contact_number = $_POST['contact_number'];

 $address = $_POST['address'];

 $patient_date = $_POST['patient_date'];

 $bill_no = $_POST['bill_no'];

 $age = $_POST['age'];



$d_l_sph = $_POST['d_l_sph'];
$d_l_cyl = $_POST['d_l_cyl'];
$d_l_axis = $_POST['d_l_axis'];
$d_l_vision = $_POST['d_l_vision'];

$d_r_sph = $_POST['d_r_sph'];
$d_r_cyl = $_POST['d_r_cyl'];
$d_r_axis = $_POST['d_r_axis'];
$d_r_vision = $_POST['d_r_vision'];

$r_l_sph = $_POST['r_l_sph'];
$r_l_cyl = $_POST['r_l_cyl'];
$r_l_axis = $_POST['r_l_axis'];
$r_l_vision = $_POST['r_l_vision'];

$r_r_sph = $_POST['r_r_sph'];
$r_r_cyl = $_POST['r_r_cyl'];
$r_r_axis = $_POST['r_r_axis'];
$r_r_vision = $_POST['r_r_vision'];




$sql="INSERT INTO `eyetest_report_one`(`bill_no`,`patientname`,`age`,`contact_number`, `address`, `patient_date`, `d_l_sph`, `d_l_cyl`, `d_l_axis`, `d_l_vision`, `d_r_sph`, `d_r_cyl`, `d_r_axis`, `d_r_vision`, `r_l_sph`, `r_l_cyl`, `r_l_axis`, `r_l_vision`, `r_r_sph`, `r_r_cyl`, `r_r_axis`, `r_r_vision`, `total_price_one`, `charges_of_glass`, `tax`, `advance`, `balance`)
 VALUES ('$bill_no','$patientname','$age','$contact_number', '$address', '$patient_date', '$d_l_sph', '$d_l_cyl', '$d_l_axis', '$d_l_vision', '$d_r_sph', '$d_r_cyl', '$d_r_axis', '$d_r_vision', '$r_l_sph', '$r_l_cyl', '$r_l_axis', '$r_l_vision', '$r_r_sph', '$r_r_cyl', '$r_r_axis', '$r_r_vision', '$total_price_one', '$charges_of_glass', '$tax', '$advance', '$balance')";

  if ($conn->query($sql) === TRUE)
   {
   $last_id = mysqli_insert_id($conn);

 $count = count($_POST['hsn_code']);
  

    for($i=0;$i<$count;$i++)
          {
            $select_model_id = $_POST['select_model'][$i];

          $sf="SELECT * FROM model WHERE id='$select_model_id'";
           $run=mysqli_query($conn,$sf);
           $fet=mysqli_fetch_assoc($run);

           $select_model=$fet['model_name'];


            $hsn_code = $_POST['hsn_code'][$i];

           $model_price = $_POST['model_price'][$i];

           $description = $_POST['description'][$i];

           $quantity = $_POST['quantity'][$i];

           $cgst = $_POST['cgst'][$i];

           $sgst = $_POST['sgst'][$i];

           $total_price = $_POST['total_price'][$i];


       $sql3 ="INSERT INTO eyetest_report_two (`eye_test_form_one_id`, `select_model`, `hsn_code`, `model_price`, `description`, `quantity`, `cgst`, `sgst`, `total_price`)

             VALUES ('$last_id', '$select_model', '$hsn_code', '$model_price' ,'$description','$quantity','$cgst','$sgst','$total_price')";
           
            $conn->query($sql3);

          }
          // exit();

          echo "<script>alert('Record Added successfully')</script>";

          echo "<script>window.location='eye_test.php'</script>";

        } 
         else 
        {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
           
}

?>


}
}
?>