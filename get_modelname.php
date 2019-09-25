<?php 
  include('includes/config.php');

  if($_SERVER['REQUEST_METHOD'] == 'POST')
  {
    if($_POST['get_modelname']=="get_modelname"){
    echo('<option value="">select</option>');
    $sql = mysqli_query($conn,"SELECT * FROM `model` WHERE 1");
    while($rowdata = mysqli_fetch_assoc($sql)){
      echo('<option value="'.$rowdata['id'].'">'.$rowdata['model_name'].'</option>');
    }
  }
  }


?>