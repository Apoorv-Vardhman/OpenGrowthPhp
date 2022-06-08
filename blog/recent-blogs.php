<!doctype html>
<html lang="en">
<head>
  
	<link rel="stylesheet" href="assets/css/bootstrap.min.css ">
    <link rel="stylesheet" href="assets/css/style.css ">
    <link rel="stylesheet" href="assets/css/media.css ">
	
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!--<link href="//cdn.muicss.com/mui-0.10.3/css/mui.min.css" rel="stylesheet" type="text/css" />
    <script src="//cdn.muicss.com/mui-0.10.3/js/mui.min.js"></script>-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
</head>
<body>
<?php

   
  //      $article_list = fetch_article("","","0","20");

?>
<!--banner start-->
<section class="section-banner">
    <div class="container" style="max-width: 1250px;">
        <div class="row">
            <div class="col-md-12">
                <div class="owl-slider">
                    <div id="carousel" class="owl-carousel">
                        <?php
                        for($i=0;$i<3;$i++)
                        { ?>
                            <div class="item">
                                <div class="banner-single" style="background: url('assets/images/blog_banner.png');border-radius: 20px;">
                                    <div class="row">
                                        <div class="col-md-6">

                                        </div>
                                        <div class="col-md-6">
                                            <div class="banner-blog-card">
                                                <p class="blog-brand fs-14 p-0 m-0">Branding & Marketing</p>
                                                <h2 class="blog-topic mt-2">Developing Personal Brand on Social Media</h2>
                                                <p class="mb-0" style="text-align:justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s 
                                                    <span class="text-secondary">Read More...</span></p>
                                                <div class="row justify-content-end ">
                                                    <div class="col-lg-9 col-md-12">
                                                        <div class="blog-sidebar-action row">
                                                            <div class="col-md-3 pr-0 pl-0">
                                                                <span><img src="assets/images/icons/share.svg" class="w-auto d-inline">  &nbsp;  Share </span>
                                                            </div>
                                                            <div class="col-md-5 pr-0 pl-0">
                                                                <span><img src="assets/images/icons/chat.svg" class="w-auto d-inline">  &nbsp;  786 Comments </span>
                                                            </div>
                                                            <div class="col-md-4 pl-1 pr-0">
                                                                <span><img src="assets/images/icons/view.svg" class="w-auto d-inline">  &nbsp;  4.6k </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="blog-author mt-3">
                                                    <img src="assets/images/blogs/trending-4.png" class="roundimg">
                                                    <div>
                                                        <h6>Supriya Devnath</h6>
                                                        <p>18 May 2022 • 4 min read</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php    }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--banner end-->

<script src="assets/js/jquery.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script>

</script>
<script>
    $("#carousel").owlCarousel({
        autoplay: false,
        rewind: true,
        margin: 20,
        responsiveClass: true,
        autoHeight: true,
        autoplayTimeout: 2000,
        smartSpeed: 800,
        nav: true,
        navText: ['<img src="assets/images/icons/Vector 191.png">','<img src="assets/images/icons/Vector 190.png">'],
        responsive: {
            0: {
                items: 1
            },

            600: {
                items: 1
            },

            1024: {
                items: 1
            },

            1366: {
                items: 1
            }
        }
    });
</script>
</body>
</html>
