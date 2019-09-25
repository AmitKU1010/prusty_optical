<?php 
  include('includes/config.php');
  // error_reporting(0);
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
      <h6 align="center" class="txt-dark" style="font-size:15px;" ><i class="zmdi zmdi-account mr-10"></i>EYE TEST(FORM)</h6>
     <hr class="light-grey-hr"/>
   </div>
      <div class="col-lg-12">
          <div class="card">
             <div class="card-body">
              <form method="post" action="eye_test_form_submit.php">
               <!-- row start -->
               <div class="row">
              
              
                                <div class="col-md-3">
                                  <div class="form-group ">
                                    <label class="control-label mb-10">Bill No.</label>
                                    <input type="text"  maxlength="50" name="bill_no" id="bill_no" class="form-control" >
                                    <span class="help-block"> </span>
                                  </div>
                                  </div>

                                <div class="col-md-3">
                                  <div class="form-group ">
                                    <label class="control-label mb-10">Name</label>
                                    <input type="text"  maxlength="50" name="patientname" id="patientname" class="form-control" >
                                    <span class="help-block"> </span>
                                  </div>
                                  </div>

                                  <div class="col-md-3">
                                  <div class="form-group ">
                                    <label class="control-label mb-10">Age.</label>
                                    <input type="text"  maxlength="50" name="age" id="age" class="form-control" >
                                    <span class="help-block"> </span>
                                  </div>
                                  </div>

                                   <div class="col-md-3">
                                  <div class="form-group ">
                                    <label class="control-label mb-10">Contact Number</label>
                                    <input type="text"  maxlength="50" name="contact_number" id="contact_number" class="form-control" >
                                    <span class="help-block"> </span>
                                  </div>
                                  </div>


                                   <div class="col-md-3">
                                  <div class="form-group ">
                                    <label class="control-label mb-10">Address</label>
                                    <input type="text"  maxlength="50" name="address" id="address" class="form-control" >
                                    <span class="help-block"> </span>
                                  </div>
                                  </div>

                                <div class="col-md-3">
                                  <div class="form-group ">
                                    <label class="control-label mb-10">Date</label>
                                    <input type="date"  maxlength="50" name="patient_date" id="patient_date" class="form-control" >
                                    <span class="help-block"> </span>
                                  </div>
                                </div>
                          </div>  
                          <div>

                           <h6 class="txt-dark capitalize-font"><i class="zmdi zmdi-account mr-10"></i>Prescription For Glasses</h6>
                          <hr class="light-grey-hr"/>
                          <div>
                            
                            <table>
                              <thead style="background:linear-gradient(to bottom left, #00ff00 0%, #ffffcc 94%);">
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
                                <td style="background:linear-gradient(to bottom left, #00ff00 0%, #ffffcc 94%);">Distance</td>
                                <td><input type="text"  name="d_l_sph"  class="form-control"  placeholder="SPH"></td>
                                <td><input type="text"  name="d_l_cyl"  class="form-control"  placeholder="CYL"></td>
                                <td><input type="text"  name="d_l_axis"  class="form-control"  placeholder="AXIS"></td>
                                <td><input type="text"  name="d_l_vision"  class="form-control"  placeholder="VISION"></td>
                                <td><input type="text"  name="d_r_sph"  class="form-control"  placeholder="SPH"></td>
                                <td><input type="text"  name="d_r_cyl"  class="form-control"  placeholder="CYL"></td>
                                <td><input type="text"  name="d_r_axis"  class="form-control"  placeholder="AXIS"></td>
                                <td><input type="text"  name="d_r_vision"  class="form-control"  placeholder="VISION"></td>
                              </tr>
                              <tr>
                                <td style="background:linear-gradient(to bottom left, #00ff00 0%, #ffffcc 94%);">Reading</td>
                                <td><input type="text"  name="r_l_sph"  class="form-control"  placeholder="SPH"></td>
                                <td><input type="text"  name="r_l_cyl"  class="form-control"  placeholder="CYL"></td>
                                <td><input type="text"  name="r_l_axis"  class="form-control"  placeholder="AXIS"></td>
                                <td><input type="text"  name="r_l_vision"  class="form-control"  placeholder="VISION"></td>
                                <td><input type="text"  name="r_r_sph"  class="form-control"  placeholder="SPH"></td>
                                <td><input type="text"  name="r_r_cyl"  class="form-control"  placeholder="CYL"></td>
                                <td><input type="text"  name="r_r_axis"  class="form-control"  placeholder="AXIS"></td>
                                <td><input type="text"  name="r_r_vision"  class="form-control"  placeholder="VISION"></td>
                              </tr>
                            </table>
                          </div>
                         



                    <div class="card" style="background:linear-gradient(to bottom, #00cc00 0%, #0033cc 100%);">
                    <div class="card-body">
                    <table width="80%">
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
                  <br>
                           <div class="row">

                              <div class="col-md-3">
                              <div class="form-group " >
                                <label class="control-label mb-10" style="color:#fff;">Total Price</label>
                                <input type="text"  name="total_price_one" style="background-color:white;color:#fff;" class="form-control"  placeholder="Charges of Frames" id="total_price_one">
                                <span class="help-block"> </span> </div>
                            </div>

                            <div class="col-md-3">
                              <div class="form-group ">
                                <label class="control-label mb-10" style="color:#fff;">Charges Of Glass.</label>
                                <input type="text"  name="charges_of_glass" style="background-color:white;color:#fff;"  class="form-control"  placeholder="Charges of Frames" id="charges_of_glass">
                                <span class="help-block"> </span> </div>
                            </div>


                            
                            <div class="col-md-3">
                              <div class="form-group ">
                                <label class="control-label mb-10" style="color:#fff;">Tax</label>
                                <input type="text"  name="tax"  class="form-control"  style="background-color:white;color:#fff;" placeholder="Total" id="tax">
                                <span class="help-block"> </span> </div>
                            </div>
                                                        
                           <div class="col-md-3">
                              <div class="form-group ">
                                <label class="control-label mb-10" style="color:#fff;">Advance Rs.</label>
                                <input type="text"  name="advance" style="background-color:white;color:#fff;"  class="form-control"  placeholder="Advance" id="advance">
                                <span class="help-block"> </span> </div>
                            </div>
                          <div class="col-md-3">
                              <div class="form-group ">
                                <label class="control-label mb-10" style="color:#fff;">Balance Rs.</label>
                                <input type="text"  name="balance"  class="form-control" style="background-color:white;color:#fff;"   placeholder="Balance" id="balance">
                                <span class="help-block"> </span> </div>
                            </div>
                          </div>

                           <div class="form-actions mt-10" align="center">
              <button type="submit" class="btn btn-success  mr-10" name="submit"> Save</button>
              <button type="reset" value="Reset" class="btn btn-default">Reset</button>
            </div>
              
</div>
</div>
</div>
</div>
</form>




    
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
                  $('#total_price_one').val(Math.round(finalAmount));

               });

                $(document).on('change', '#advance', function()
                {
                  var one=$('#total_price_one').val();

                  var two=$('#charges_of_glass').val();

                  var onetwo=parseInt(one)+parseInt(two);

                  alert(onetwo);

                  var middle=$('#tax').val();

                  var tax_total=parseInt(onetwo/100)*parseInt(middle);
                  alert(tax_total);


                  var three=$('#advance').val();


                  var all_total=parseInt(onetwo)+parseInt(tax_total)-parseInt(three);

                  var four=$('#balance').val(all_total);

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