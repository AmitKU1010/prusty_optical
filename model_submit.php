<?php
  include('includes/config.php');

//$getid = $_GET['id'];

  if($_SERVER['REQUEST_METHOD'] == 'POST')
  {
    // insert to the database
    if(isset($_POST['submit']))
    {
        $model_name = $_POST['model_name'];
        $hsn_code = $_POST['hsn_code'];
        $model_price = $_POST['model_price'];
              

        $sql1 ="INSERT INTO model(model_name,hsn_code,model_price) VALUES('$model_name','$hsn_code','$model_price')";

        
        if ($conn->query($sql1) === TRUE) 
        {
           echo "<script>alert('Record Added successfully')</script>";

          echo "<script>window.location='add_model.php'</script>";
        }
         else 
        {
            echo "Error: " . $sql1 . "<br>" . $conn->error;
        }
    }
}
?>

