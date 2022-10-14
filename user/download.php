<?php
    include('includes/subheader.php');   
    include('includes/dbcon.php');

    // echo '<script type="text/javascript">alert("Payment Done");</script>';
    $res=mysqli_query($con,"select * from project where pid=".$_REQUEST['pid'] );
    $pro=mysqli_fetch_assoc($res);

?>

<section class="section-padding2">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center mb-30 animate-box" data-animate-effect="fadeInUp">
                        <div class="section-subtitle">Your File</div>
                    </div>
                </div>
         
            </div>
            <div class="col-md-12 text-center mb-60 mt-60 animate-box" data-animate-effect="fadeInUp">
                        <div class="section-subtitle">Download Your File:</div>
                         <div class="section-title"><?=$pro['file']?> </div>
                        <div class="butn-dark mt-30 mb-30"><a href="filedownload.php?filename=<?=$pro['file']?>"><span>Download<i class="ti-arrow-right"></i></span></a></div>
            </div>
</section> 


<?php 
   include('includes/footer.php');
   include('includes/scripts.php');
   
?>