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
      <h6 align="center" class="txt-dark" style="font-size:15px;" ><i class="zmdi zmdi-account mr-10"></i>DIRECT SALE(FORM)</h6>
     <hr class="light-grey-hr"/>
   </div>
      <div class="col-lg-12">
          <div class="card">
             <div class="card-body">

              <form method="post" action="direct_sale_submit.php">
               <!-- row start -->
               <div class="row">
              
                              <div class="col-md-4" >
                                  <div class="form-group ">
                                    <label class="control-label mb-10">Select Coustomer</label>
                                    <select class="form-control" name="coustomer_name" id="coustomer_name">
                                      <option>Choose Me Please</option>
                                      <?php
                                  $sql="SELECT * FROM  coustomer_prusrty";
                                  $run=mysqli_query($conn,$sql);
                                  while($data=mysqli_fetch_assoc($run))
                                  {
                                    ?>
                                      <option value="<?php echo $data['coustomer_name'] ?>">
                                        <?php echo $data['coustomer_name'] ?>
                                      </option>
                                    <?php }?>

                                    </select>
                                 
                                    <span class="help-block"> </span>
                                  </div>
                                </div>
               
                                <div class="col-md-4">
                                  <div class="form-group ">
                                    <label class="control-label mb-10">Invoice No</label>
                                    <input type="text"  maxlength="50" name="invoice_number" id="invoice_number" class="form-control" >
                                    <span class="help-block"> </span>
                                  </div>
                                  </div>


                                

                                <div class="col-md-4">
                                  <div class="form-group ">
                                    <label class="control-label mb-10">Date</label>
                                    <input type="date"  maxlength="50" name="coustomer_date" id="coustomer_date" class="form-control" >
                                    <span class="help-block"> </span>
                                  </div>
                                </div>
                          </div>  
                          <br>

                    <div class="card" style="background:linear-gradient(to bottom, #00cc00 0%, #0033cc 100%);">
                    <div class="card-body">
                    <table width="80%" id="data_table_add_product">
                    <thead>
                      <tr>
                        <th style="text-align: left">ID</th>
                        <th style="text-align: left">Select Model</th>
                        <th style="text-align: left">Hsn Code</th>
                        <th style="text-align: left">Price</th>
                        <th style="text-align: left">Description</th>
                        <th style="text-align: left">Quantity</th>
                        <th style="text-align: left">CGST%</th>
                        <th style="text-align: left">SGST%</th>
                        <th style="text-align: left">Total Price</th>
                      </tr>
                    </thead>
                    <tbody >
                      <tr class="table-align" id="data_table_td_0">
                      <td>
                  <input type="text" style="text-align:center;width:40px;background-color: #212121;color:#fff;" name="sl_no[]" value="1" >
                      </td>
                        
                        <td>
                        <select style="width:120px;background-color: #212121;color:#fff;" name="select_model[]" id="select_model-1" class="select_model_clss">
                            <option value="">Select Company</option>
                          <?php
                           $sql1 = mysqli_query($conn,"SELECT * FROM `model`");
                  while($rowdata1 = mysqli_fetch_assoc($sql1))
                  {
                  ?>
                <option value="<?php echo $rowdata1['id']?>">
                <?php echo $rowdata1['model_name'] ?>
                                      </option>
                  <?php
                  }
                ?>
                          </select>
                          </td>
                          <td>
                           <input type="text" style="width:120px;background-color: #212121;color:#fff;" name="hsn_code[]" class="hsn_code_cls" id="hsn_code-1" >
                          </td>


                        <td>
                          <input type="text" style="width:100px;background-color: #212121;color:#fff;" name="model_price[]" class="model_price_clss" id="model_price-1">
                          </select>
                        </td>

                        <td>
                          <input type="text" style="width:100px;background-color: #212121;color:#fff;" name="description[]" class="description_cls" id="description-1" >
                        </td>

                         <td>
                          <input type="text" style="width:70px;background-color: #212121;color:#fff;" name="quantity[]" class="quantity_cls" id="quantity-1" >
                        </td>

                        <td>
                          <input type="text" style="width:70px;background-color: #212121;color:#fff;"  class="cgst_cls"  id="cgst-1"  name="cgst[]">
                        </td>

                        <td>
                          <input type="text" style="width:70px;background-color: #212121;color:#fff;"  class="sgst_cls"  id="sgst-1" name="sgst[]" >
                        </td>

                        <td>
                          <input type="text" style="width:100px;background-color: #212121;color:#fff;"  class="total_price_cls"  id="total_price-1" name="total_price[]" readonly>
                        </td>
                       
                        <td class="text-nowrap">
                          <a id="addrow-1" class="add-row mr-15" data-toggle="tooltip" data-original-title="I will Grow If You click Me"> 
                            <i class="fa fa-pencil   text-inverse m-r-10"></i>
                          </a> 
                      <a onClick="deleteRow(this);" data-toggle="tooltip" data-original-title="Delete"> <i class="fa fa-close  text-danger"></i> 
                      </a>
                             </td>
                      </tr>
                      <tr class="add_tr"></tr>
                    </tbody>
                  </table>
                  <br>
                  <br>


                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group ">
                        <label class="control-label mb-10">Total Amount to Pay</label>
                        <div class="input-group mb-15"> <span class="input-group-addon"><i class="fa fa-inr"></i></span>
                          <input type="text" style="width:60px;background-color: white;color:#fff;" name="pay_cost" id="tot_cost" class="form-control" placeholder="Total Amount" >
                        </div>
                        <span class="help-block"> </span> </div>
                    </div>
                  </div>
                  <div class="form-actions mt-10">
                    <button type="submit" name="submit" class="btn btn-success  mr-10"> Save</button>
                    <button type="reset" value="Reset" class="btn btn-default">Reset</button>
                  </div>
                </div>
              </div>
</form>


</div>
</div>
</div>
</div>


  
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
  var z=1;
  $(document).on('click', '.add-row', function()
  {
  z++;
 // var z1 = parseInt(z)+1;
 // alert(z1);

    var id = $(this).attr('id');
    // alert(id);

       $.ajax({
              type:"post",
              url:"get_modelname.php",
              data:{get_modelname:"get_modelname"},
              success:function(data){
                 // alert(data);
                $('#select_model-'+z).html(data);
               }
            });

   $('.add_tr').replaceWith('<tr class="table-align"id="data_table_td_'+z+'"><td><input type="text" style="text-align:center;width:40px;background-color: #212121;color:#fff;" name="sl_no[]" value="'+z+'"></td><td><select style="width:120px;background-color: #212121;color:#fff;" name="select_model[]" id="select_model-'+z+'" class="select_model_clss"></select></td></td><td><input type="text" style="width:120px;background-color: #212121;color:#fff;" name="hsn_code[]" class="hsn_code_cls" id="hsn_code-'+z+'"></td><td><input type="text" style="width:100px;background-color: #212121;color:#fff;" name="model_price[]" class="model_price_clss" id="model_price-'+z+'"></select></td><td><input type="text" style="width:100px;background-color: #212121;color:#fff;" name="description[]" class="description_cls" id="description-'+z+'" ></td><td><input type="text" style="width:70px;background-color: #212121;color:#fff;" name="quantity[]" class="quantity_cls" id="quantity-'+z+'" ></td><td><input type="text" style="width:70px;background-color: #212121;color:#fff;"  class="cgst_cls"  id="cgst-'+z+'"  name="cgst[]" ></td><td><input type="text" style="width:70px;background-color: #212121;color:#fff;"  class="sgst_cls"  id="sgst-'+z+'" name="sgst[]"></td><td><input type="text" style="width:100px;background-color: #212121;color:#fff;"  class="total_price_cls"  id="total_price-'+z+'" name="total_price[]" readonly></td><td class="text-nowrap"><a id="addrow-'+z+'" class="add-row mr-15" data-toggle="tooltip" data-original-title="I will Grow If You click Me"><i class="fa fa-pencil   text-inverse m-r-10"></i></a><a onClick="deleteRow(this);" data-toggle="tooltip" data-original-title="Delete"> <i class="fa fa-close  text-danger"></i></a></td></tr><tr class="add_tr"></tr>');
    return false;
  });

  $(document).on('change', '.select_model_clss', function()
            {
    var id = $(this).attr('id');
    // alert(id);

     var id_no=id.split('-');

     // alert(id_no);

     var select_model=$('#select_model-'+id_no[1]).val();
     // alert(select_model);


              jQuery.ajax
              ({
                type:"post",
                url:"ajax_get_hsn_price.php",
                dataType:"html", // Data type, HTML, json etc.
                data:{select_model:select_model},
                success:function(response)
                {
                  // alert(response);
                 var obj1 = jQuery.parseJSON(response);
                $('#hsn_code-'+id_no[1]).val(obj1[0].hsn_code);

                $('#model_price-'+id_no[1]).val(obj1[0].model_price);



                $(document).on('change', '.sgst_cls', function()
                {
                  var quantity=$('#quantity-'+id_no[1]).val();
                  // alert(quantity);
                  var cgst=$('#cgst-'+id_no[1]).val();

                  var sgst=$('#sgst-'+id_no[1]).val();

                  var model_price=$('#model_price-'+id_no[1]).val();

                  var total_into_quantity=parseInt(quantity)*parseInt(model_price);

                  // alert(total_into_quantity);

       var total_cgst_price=(parseInt(total_into_quantity)/100)*parseInt(cgst);

       // alert(total_cgst_price);

      var total_sgst_price=(parseInt(total_into_quantity)/100)*parseInt(sgst);

      // alert(total_sgst_price);

      var total_re=parseInt(total_into_quantity)+parseInt(total_cgst_price)+parseInt(total_sgst_price);

            $('#total_price-'+id_no[1]).val(total_re);


                var finalAmount = 0;
                for(var i=1;i<=z;i++)
                 {
                  var kire=parseFloat(($('#total_price-'+i).val()));
                   // alert(kire);
                            finalAmount = parseFloat(finalAmount)+kire;
                             // alert(finalAmount);
                 }
                             // exit();

                 // alert(finalAmount);
                  $('#tot_cost').val(Math.round(finalAmount));


               });

                }
              });
            });



  function deleteRow(row){
    var i=row.parentNode.parentNode;
      console.log(i); 
      $(i).remove();
}


</script>
</body>
</html>
