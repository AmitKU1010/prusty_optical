<?php
  include('includes/config.php');

//$getid = $_GET['id'];

  if($_SERVER['REQUEST_METHOD'] == 'POST')
  {
    // insert to the database
    if(isset($_POST['submit']))
    {
        $coustomer_name = $_POST['coustomer_name'];
        $mobile_number = $_POST['mobile_number'];

        $coustomer_date = $_POST['coustomer_date'];

        $add = $_POST['add'];

        $coustomer_email = $_POST['coustomer_email'];

    

              

        $sql1 ="INSERT INTO coustomer_prusrty (`coustomer_name`, `mobile_number`, `coustomer_date`, `coustomer_address`, `coustomer_email`) VALUES('$coustomer_name','$mobile_number','$coustomer_date','$add','$coustomer_email')";

        // exit();

        
        if ($conn->query($sql1) === TRUE) 
        {
           echo "<script>alert('Record Added successfully')</script>";

          echo "<script>window.location='add_coustomer.php'</script>";
        }
         else 
        {
            echo "Error: " . $sql1 . "<br>" . $conn->error;
        }
    }
}
?>

