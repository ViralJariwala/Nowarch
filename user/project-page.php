<?php
    include('includes/subheader.php');
    include('includes/dbcon.php');
    
    $res=mysqli_query($con,"select * from project p, categories c where c.cid=p.cid and p.pid=".$_REQUEST['proid'] );
    // $pro=mysqli_fetch_assoc($res);
    $id=$_REQUEST['proid'];
    $_SESSION['pid']=$id;
    

?>

<section class="project-page section-padding2">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <!-- Gallery -->
                        <div class="owl-carousel owl-theme">
                        <?php while($pro=mysqli_fetch_assoc($res)){
                            $_SESSION['amount']=$pro['price']?>
                            <div class="portfolio-item">
                                <img class="img-fluid" src="/arch/user/img/uploaded_images/<?=$pro['img']?>" alt="">
                            </div>
                            <!-- <div class="portfolio-item">
                                <img class="img-fluid" src="img/services/2.jpg" alt="">
                            </div>
                            <div class="portfolio-item">
                                <img class="img-fluid" src="img/services/3.jpg" alt="">
                            </div> -->
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-md-10">
                                <div class="project-bar">
                                    <div class="row justify-content-between align-items-center text-center text-lg-start">
                                        <div class="col-md-3 mb-15">
                                            <h5>Location</h5>
                                            <p><?=$pro['address']?></p>
                                        </div>
                                        <div class="col-md-3 mb-15">
                                            <h5>Service</h5>
                                            <p><?=$pro['cname']?></p>
                                        </div>
                                         <div class="col-md-3 mb-15">
                                            <h5>Price</h5>
                                            <p><?=$pro['price']?>₹</p>
                                        </div>
                                         <div class="col-md-3 mb-15">

                                         <div class="butn-dark mt-30 mb-30"><a href="../user/paytmkit/checkout.php?total_price=<?=$pro['price']?>"><span>BUY NOW </span></a></div>
                                           
                                        </div> 
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            
                <div class="row">
                    <div class="col-md-12 mt-30 mb-30">
                        <div class="section-subtitle"> <?=$pro['cname']?>Design</div>
                        <div class="section-title"><?=$pro['des']?></div>
                       
                         <!-- <ul class="about-list mt-30">
                                    <li>
                                        <div class="icon">
                                            <span class="ti-check"></span>
                                        </div>
                                        <div class="text">
                                            <p>Architecture the inila duman aten fermen.</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="ti-check"></span>
                                        </div>
                                        <div class="text">
                                            <p>The design architecture duiman finibus.</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="ti-check"></span>
                                        </div>
                                        <div class="text">
                                            <p>Placus udeane sene voice miss cuse aten.</p>
                                        </div>
                                    </li>
                                </ul> -->
                    </div>
                </div>
            </div>
        </section>
        <!-- Prev-Next Projects -->
        <!-- <div class="projects-prev-next mb-90">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="d-sm-flex align-items-center justify-content-between">
                            <div class="projects-prev-next-left">
                                <a href="project-page.html"> <i class="ti-arrow-left"></i> Previous Project</a>
                            </div> <a href="viewproject.php?pid=<?=$pro["cid"]?>"><i class="ti-layout-grid3-alt"></i></a>
                            <div class="projects-prev-next-right"> <a href="project-page.html">Next Project <i class="ti-arrow-right"></i></a> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->

<?php }
   
   include('includes/footer.php');
   include('includes/scripts.php');
   
?>