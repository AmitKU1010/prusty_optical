<?php
  include('includes/config.php');
if(isset($_POST['submit']))
{
	// echo "xxcvxc";
 $supplier_name = $_POST['supplier_name'];

 $invoice_number = $_POST['invoice_number'];

 $supplier_date = $_POST['supplier_date'];

 $pay_cost = $_POST['pay_cost'];

 // ($_POST['hsn_code']); 

 $count = count($_POST['hsn_code']);
 // output 3


$sql="INSERT INTO `purchase_form_one`(`supplier_name`, `invoice_number`, `supplier_date`,`total_cost`)
 VALUES ('$supplier_name','$invoice_number','$supplier_date','$pay_cost')";

  if ($conn->query($sql) === TRUE)
   {
   $last_id = mysqli_insert_id($conn);

  

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


       $sql3 ="INSERT INTO purchase_form_two (`purchase_form_one_id`, `select_model`, `hsn_code`, `model_price`, `description`, `quantity`, `cgst`, `sgst`, `total_price`)

             VALUES ('$last_id', '$select_model', '$hsn_code', '$model_price' ,'$description','$quantity','$cgst','$sgst','$total_price')";

            $conn->query($sql3);

       $sql4="SELECT * FROM stock_details WHERE hsn_from_stock_details='$hsn_code'";
       $run1=mysqli_query($conn,$sql4);
       $rowd=mysqli_fetch_assoc($run1);
       
       $hsn_from_stock_details=$rowd['hsn_from_stock_details'];

       $stock_in_from_stocktable=$rowd['stock_in'];


        // $hsn_code;

       if($hsn_code==$hsn_from_stock_details)
       {
      

        $update_quantity=$stock_in_from_stocktable+$quantity;
        //$update_quantity= 2000+2000;


  $sqlfive="UPDATE  stock_details SET stock_in='$update_quantity'
  WHERE hsn_from_stock_details='$hsn_code'";
  mysqli_query($conn,$sqlfive);

       }
       else
       {
      // echo "me else";
$sqlsix="INSERT INTO `stock_details`(`model_name`, `hsn_from_stock_details`, `stock_in`, `stock_out`, `available`)
 VALUES ('$select_model','$hsn_code','$quantity','','')";

  mysqli_query($conn,$sqlsix);

       } 

          }
        
          echo "<script>alert('Record Added successfully')</script>";

          echo "<script>window.location='purchase.php'</script>";

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