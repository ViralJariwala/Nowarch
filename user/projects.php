<?php
    include('includes/subheader.php');	
    include('includes/dbcon.php');	


    $sel2=mysqli_query($con,"select * from categories");
    $i=0;
	
	
?>

 <!-- Projects section -->
 <section class="section-padding2">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center mb-30 animate-box" data-animate-effect="fadeInUp">
                        <div class="section-subtitle">Our Projects</div>
                        <div class="section-title">Latest Project</div>
                    </div>
                </div>
                <?php
                    while($cat=mysqli_fetch_assoc($sel2)){
                        if(++$i%2!=0){                   
                ?>
                <div class="row">
                    <div class="col-md-12 mb-120 animate-box" data-animate-effect="fadeInUp">
                        <div class="projects2">
                            <figure>
                                <a href="project-page.html"><img src="img/slider/1.jpg" alt=""></a>
                            </figure>
                            <div class="caption">
                                <div class="section-number">.0<?=$i?></div>
                                <h6><?=$cat["cname"]?></h6>
                                
                                <div class="butn-dark"><a href="viewproject.php?catid=<?=$cat["cid"]?>"><span>View project <i class="ti-arrow-right"></i></span></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } else { ?>
                <div class="row">
                    <div class="col-md-12 mb-120 animate-box" data-animate-effect="fadeInUp">
                        <div class="projects2 left">
                            <figure>
                                <a href="project-page.html"><img src="img/slider/2.jpg" alt=""></a>
                            </figure>
                            <div class="caption">
                                <div class="section-number">.0<?=$i?></div>
                                <h6><?=$cat["cname"]?></h6>
                                <!-- <h4>The Soft Villa, in Canada</h4>
                                <p>Architecture the inila duman aten elit finibus vivera malacus themone sen drudean seneice miuscibe noneten the fermen. Design architecture duiman nec a sene fermen.</p> -->
                                <div class="butn-dark"><a href="viewproject.php?catid=<?=$cat["cid"]?>"><span>View project <i class="ti-arrow-right"></i></span></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } } ?>
                
               
            </div>
</section> 

<?php
   
   include('includes/footer.php');
   include('includes/scripts.php');
   
?>