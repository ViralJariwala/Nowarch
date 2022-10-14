<!DOCTYPE html>
<html>
<head>
  <title>Payment Receipt</title>
<link rel="stylesheet" type="text/css" href="receipt.css">
</head>
<body>
  <center><h1>Dynamic Events</h1></center>
  <center>
<div class="email-container row">
  <div class="col-sm-6 blue z-depth-2">
    <img src="images/paytm.png" height="200px" width="200px">
    <h2 class="brand--subHeading"><font size="5">Payment Receipt</font></h2>
  </div>
  <div class="col-sm-6 white z-depth-2">
    <p><img src="images/v1.gif" align="right" height="50px" width="50px"></p>
    <br>
    <p align="left" class="textRight header">
      <script> document.write(new Date().toLocaleDateString()); </script></p>
    <div class="divider"></div>
   <?php
header("Pragma: no-cache");
header("Cache-Control: no-cache");
header("Expires: 0");

// following files need to be included
require_once("./lib/config_paytm.php");
require_once("./lib/encdec_paytm.php");

$paytmChecksum = "";
$paramList = array();
$isValidChecksum = "FALSE";

$paramList = $_POST;
$paytmChecksum = isset($_POST["CHECKSUMHASH"]) ? $_POST["CHECKSUMHASH"] : ""; //Sent by Paytm pg

//Verify all parameters received from Paytm pg to your application. Like MID received from paytm pg is same as your application�s MID, TXN_AMOUNT and ORDER_ID are same as what was sent by you to Paytm PG for initiating transaction etc.
$isValidChecksum = verifychecksum_e($paramList, PAYTM_MERCHANT_KEY, $paytmChecksum); //will return TRUE or FALSE string.

if($isValidChecksum == "TRUE") 
{
  echo "<b>Checksum matched and following are the transaction details:</b>" . "<br/>";
  if ($_POST["STATUS"] == "TXN_SUCCESS") 
  {
    echo "<b>Transaction status is success</b>" . "<br/>";
    //Process your transaction here as success transaction.
    //Verify amount & order id received from Payment gateway with your application's order id and amount.
  }
  else 
  {
    echo "<b>Transaction status is failure</b>" . "<br/>";
  }

  if (isset($_POST) && count($_POST)>0 )
  { 
    foreach($_POST as $paramName => $paramValue) 
    {
      if($paramName!="CHECKSUMHASH"){
        echo "<br/>" . $paramName . " = " . $paramValue;
      }
    }
  }
}
else 
{
  echo "<b>Checksum mismatched.</b>";
  //Process transaction as suspicious.
}

?>
  </div>
</div>
</center>

</body>
</html>




