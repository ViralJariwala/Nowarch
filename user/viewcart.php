<?php
    
    include('includes/subheader.php');
    include('includes/dbcon.php');
    $total_price=0;
    $res=mysqli_query($con,"select * from cart c, project p,categories cr where c.pid=p.pid and p.cid=cr.cid and c.uid=".$_SESSION['uid']);
    $i=0;
  
    // while($row=mysqli_fetch_assoc($res)){
    //     echo "<pre>";
    //     print_r($row);
    //     echo "</pre>";
    // }
?>
<!-- Projects section -->
<section class="section-padding2">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center mb-30 animate-box" data-animate-effect="fadeInUp">
                        <div class="section-subtitle">Your Cart</div>
                        <!-- <div class="section-title">Latest Project</div> -->
                    </div>
                </div>
                <?php
                     while($row=mysqli_fetch_assoc($res)){
                        $total_price= $total_price + $row['price'];
                        if(++$i%2!=0){                   
                ?>
                <div class="row">
                    <div class="col-md-12 mb-120 animate-box" data-animate-effect="fadeInUp">
                        <div class="projects2">
                            <figure>
                                <a href="project-page.html"><img src="img/slider/<?=$row['img']?>" alt=""></a>
                            </figure>
                            <div class="caption">
                                <div class="section-number">.0<?=$i?></div>
                                
                                <h6><?=$row["cname"]?> Design</h6>
                                <h6>Project : <?=$row["pname"]?></h6>
                                <h6>Price : <?=$row["price"]?></h6>
                                
                                
                                
                                <div class="butn-dark"><a href="removecart.php?pid=<?=$row["pid"]?>"><span>Remove Project <i class="ti-arrow-right"></i></span></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } else { ?>
                <div class="row">
                    <div class="col-md-12 mb-120 animate-box" data-animate-effect="fadeInUp">
                        <div class="projects2 left">
                            <figure>
                                <a href="project-page.html"><img src="img/slider/<?=$row['img']?>" alt=""></a>
                            </figure>
                            <div class="caption">
                                <div class="section-number">.0<?=$i?></div>
                                
                                <h6><?=$row["cname"]?> Design</h6>
                                <h6>Project : <?=$row["pname"]?></h6>
                                <h6>Price : <?=$row["price"]?></h6>
                                <!-- <h4>The Soft Villa, in Canada</h4>
                                <p>Architecture the inila duman aten elit finibus vivera malacus themone sen drudean seneice miuscibe noneten the fermen. Design architecture duiman nec a sene fermen.</p> -->
                                <div class="butn-dark"><a href="removecart.php?pid=<?=$row["pid"]?>"><span>Remove Project <i class="ti-arrow-right"></i></span></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } } ?>
                
               
            </div>
            <div class="col-md-12 text-center mb-60 mt-60 animate-box" data-animate-effect="fadeInUp">
                        <div class="section-subtitle">Total Amount :</div>
                        <div class="section-title"><?php echo $total_price; ?></div>
                        <div class="butn-dark mt-30 mb-30"><a href="payment.php?tp=<?=$total_price?>"><span>Place Order<i class="ti-arrow-right"></i></span></a></div>
            </div>
</section> 

 <?php
   
   include('includes/footer.php');
   include('includes/scripts.php');
   
?>