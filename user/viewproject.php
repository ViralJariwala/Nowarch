<?php
    include('includes/subheader.php');
    include('includes/dbcon.php');

    $res=mysqli_query($con,"select * from project p, categories c where c.cid=p.cid and c.cid=".$_REQUEST['catid']);
    

?>
<!-- Projects section -->
<section class="projects section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 mb-30">
                        <div class="section-number">.01</div>
                        <div class="section-subtitle">Portfolio</div>
                        <div class="section-title">Our Projects</div>
                    </div>
                </div>
                <div class="projects-carousel owl-theme owl-carousel">
                <?php while($pro=mysqli_fetch_assoc($res)){?>
                    <div class="projects-single">
                        <div class="projects-img"> <img src="/arch/user/img/uploaded_images/<?=$pro['img']?>" alt=""> </div>
                        <div class="projects-content">
                        <div class="projects-tagline"><?=$pro['cname']?> Design</div>
                            <div class="projects-title"><a href="project-page.php?proid=<?=$pro["pid"]?>"><?=$pro['pname']?></a></div>
                            <div class="projects-arrow"> <a href="project-page.php?proid=<?=$pro["pid"]?>"><span class="ti-arrow-right"></span></a> </div>
                        </div>
                    </div>
                    <?php } ?>
                  
                </div>
            </div>
</section>
<?php
   
   include('includes/footer.php');
   include('includes/scripts.php');
   
?>