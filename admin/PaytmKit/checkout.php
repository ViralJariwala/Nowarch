<?php
 //$total_price= $_GET['total_price'];
 ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Merchant Check Out Page</title>

<meta name="GENERATOR" content="Evrsoft First Page">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css" rel="stylesheet" />
</head>

<form method="post" action="pgRedirect.php">
 <!--<table border="1">
  <tbody>
   <tr>
    <th>S.No</th>
    <th>Label</th>
    <th>Value</th>
   </tr>
   <tr>
    <td>1</td>
    <td><label>ORDER_ID :*</label></td>
    <td><input id="ORDER_ID" tabindex="1" maxlength="20"
               size="20" name="ORDER_ID" autocomplete="off"
        value="<?php //echo  "ORDS" . rand(10000,99999999)?>"></td>
   </tr>
   <tr>
    <td>2</td>
    <td><label>CUSTID :*</label></td>
    <td><input type="hidden" id="CUST_ID" tabindex="2" maxlength="12" 
               size="12" name="CUST_ID" autocomplete="off" 
               value="CUST001"></td>
   </tr>
   <tr>
    <td>3</td>
    <td><label>INDUSTRY_TYPE_ID :*</label></td>
    <td><input type="hidden" id="INDUSTRY_TYPE_ID" tabindex="4" maxlength="12" 
               size="12" name="INDUSTRY_TYPE_ID" autocomplete="off" 
               value="Retail"></td>
   </tr>
   <tr>
    <td>4</td>
    <td><label>Channel :*</label></td>
    <td><input type="hidden" id="CHANNEL_ID" tabindex="4" maxlength="12"
        size="12" name="CHANNEL_ID" autocomplete="off" 
               value="WEB"></td>
   </tr>
   <tr>
    <td>5</td>
    <td><label>TXN_AMOUNT :*</label></td>
    <td><input title="TXN_AMOUNT" tabindex="10"
        type="text" name="TXN_AMOUNT" value="1"></td>
   </tr>
   <tr>
    <td></td>
    <td></td>
    <td><input value="CheckOut" type="submit" onclick=""></td>
   </tr>
  </tbody>
 </table>-->

<div class="container" style="padding-top:100px;">
    <div class="col-xs-6 col-xs-offset-3">
        <div class="panel panel-default">
            <div style="background-color: #000000; color:#fff" class="panel-heading">
                <h3 class="text-center">Paytm Payment Gateway </h3>
            </div>
            <div class="panel-body">
            <form action="pgRedirect.php" method="post">
        <input type="hidden" id="CUST_ID" name="CUST_ID" value="CUST001">
          <input type="hidden" id="INDUSTRY_TYPE_ID" name="INDUSTRY_TYPE_ID" value="Retail">
          <input type="hidden"  id="CHANNEL_ID" name="CHANNEL_ID" value="WEB">
                <div class="form-group">
          
                  <?php
          $conn=mysqli_connect("localhost","root","");
          mysqli_select_db($conn,"arch");
          ?>

          <label>Order ID:</label>
                    <input type="text" class="form-control" id="ORDER_ID" name="ORDER_ID" size="20" maxlength="20" autocomplete="off" 

tabindex="2" value="<?php echo  "ORDER" . rand(10000,99999999)?>">
                </div>
               
                <div class="form-group">
          <label>Amount to Pay:</label>
                    <input type="text" class="form-control" id="TXN_AMOUNT" name="TXN_AMOUNT" autocomplete="off" tabindex="3" 
              value="70">
                </div>
                <div class="form-group">
                    <input type="submit" name="submit" value="CheckOut" class="btn btn-success btn-lg" style="background-color:#0000FF; margin-left: 37%;">
                </div>
            </form>
            </div>
        </div>
    </div>
</div>

</form>