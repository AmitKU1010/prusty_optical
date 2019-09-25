<?php
  include('includes/config.php');

//$getid = $_GET['id'];

  if($_SERVER['REQUEST_METHOD'] == 'POST')
  {
    // insert to the database
    if(isset($_POST['submit']))
    {
        $supplier_name = $_POST['supplier_name'];
        $mobile_number = $_POST['mobile_number'];
        $gstin_number = $_POST['gstin_number'];

        $supplier_date = $_POST['supplier_date'];

        $add = $_POST['add'];





        $supplier_email = $_POST['supplier_email'];
        $supplier_pan_number = $_POST['supplier_pan_number'];
    

              

        $sql1 ="INSERT INTO supplier(`supplier_name`, `mobile_number`, `gstin_number`, `supplier_date`, `supplier_address`, `supplier_email`, `supplier_pan_number`) VALUES('$supplier_name','$mobile_number','$gstin_number','$supplier_date','$add','$supplier_email','$supplier_pan_number')";

        // exit();

        
        if ($conn->query($sql1) === TRUE) 
        {
           echo "<script>alert('Record Added successfully')</script>";

          echo "<script>window.location='add_supplier.php'</script>";
        }
         else 
        {
            echo "Error: " . $sql1 . "<br>" . $conn->error;
        }
    }
}
?>

