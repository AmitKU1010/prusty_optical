<?php
include('includes/config.php');

  $select_model=$_POST['select_model'];


$result = mysqli_query($conn,"SELECT * FROM model WHERE id='$select_model'");   

while($row = mysqli_fetch_assoc($result))
    $test[] = $row;
print json_encode($test);

?>
