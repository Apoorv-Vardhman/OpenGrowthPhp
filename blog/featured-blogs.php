<!doctype html>
<html lang="en">
<head>
	<link rel="stylesheet" href="assets/puja/css/bootstrap.min.css ">
    <link rel="stylesheet" href="assets/puja/css/style.css ">
    <link rel="stylesheet" href="assets/puja/css/media.css ">
	
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
</head>
<body>
<section class="section-featured-post">
    <div class="container" style="max-width: 1170px;">
        <div class="row justify-content-center mt-3">
            <h1 class="heading-title text-primary mb-30 newh1">More Featured Posts.</h1>
        </div>
        <div>
            <div class="owl-slider">
                <div id="featuredCarousel" class="owl-carousel">
                    <?php
                    for($i=0;$i<4;$i++)
                    { ?>
                        <div class="item">
                            <div class="blog-feature-card  mb-2 mt-2">
                                <div class="row">
                                    <div class="col-5" >
                                        <div class="blog-feature-card-img">
                                            <img src="assets/images/download.jpg" class="roundimg2" style="height:100%; width:auto;">
                                        </div>
                                    </div>
                                    <div class="col-7">
                                        <div class="blog-sidebar-action row">
                                            <div class="col-lg-3 pr-0 pl-0">
                                                <span><img src="assets/images/icons/share.svg" class="w-auto d-inline"> <span class="ml-1">Share</span> </span>
                                            </div>
                                            <div class="col-lg-6 pr-0 pl-0">
                                                <span><img src="assets/images/icons/chat.svg" class="w-auto d-inline"> <span class="ml-1">786 Comments</span> </span>
                                            </div>
                                            <div class="col-lg-3 pl-0 pr-0">
                                                <span><img src="assets/images/icons/view.svg" class="w-auto d-inline"> <span class="ml-1">4.6k</span> </span>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <p class="blog-brand fs-14 p-0 m-0">Branding & Marketing</p>
                                            <h2 class="blog-topic p-0 mt-2">Developing Personal Brand on Social Media</h2>
                                            <div class="blog-author">

                                                <img src="assets/images/blogs/trending-4.png" >

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
</section>
<!--feature post end-->


<script src="assets/puja/js/jquery.js"></script>
<script src="assets/puja/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script>

</script>
<script>
    $("#featuredCarousel").owlCarousel({
        autoplay: false,
        rewind: true,
        margin: 20,
        responsiveClass: true,
        autoHeight: true,
        autoplayTimeout: 8000,
        smartSpeed: 800,
        nav: true,
        navText: ['<span class="fas fa-arrow-left "></span>','<span class="fas fa-arrow-right"></span>'],
        responsive: {
            0: {
                items: 1
            },

            600: {
                items: 1
            },

            1024: {
                items: 2
            },

            1366: {
                items: 2
            }
        }
    });
</script>
</body>
</html>
