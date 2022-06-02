<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog Main Page</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/media.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!--<link href="//cdn.muicss.com/mui-0.10.3/css/mui.min.css" rel="stylesheet" type="text/css" />
    <script src="//cdn.muicss.com/mui-0.10.3/js/mui.min.js"></script>-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
</head>
<body>

<?php
    include_once "header.php"
?>

<!--banner start-->
<section class="section-banner">
    <div class="container">
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
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s <span class="text-secondary">Read More...</span></p>
                                                    <div class="row justify-content-end">
                                                        <div class="col-lg-9 col-md-12">
                                                            <div class="blog-sidebar-action row">
                                                                <div class="col-md-3 pr-0 pl-0">
                                                                    <span><img src="assets/images/icons/share.svg" class="w-auto d-inline"> Share </span>
                                                                </div>
                                                                <div class="col-md-5 pr-0 pl-0">
                                                                    <span><img src="assets/images/icons/chat.svg" class="w-auto d-inline"> 786 Comments </span>
                                                                </div>
                                                                <div class="col-md-4 pl-1 pr-0">
                                                                    <span><img src="assets/images/icons/view.svg" class="w-auto d-inline"> 4.6k </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="blog-author">
                                                        <img src="assets/images/blogs/blog-writer.png">
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

<!--feature post-->
<section class="section-featured-post">
    <div class="container">
        <div class="row justify-content-center mt-3">
            <h1 class="heading-title text-primary text-uppercase mb-30">More Featured Posts.</h1>
        </div>
        <div>
            <div class="owl-slider">
                <div id="featuredCarousel" class="owl-carousel">
                    <?php
                    for($i=0;$i<4;$i++)
                    { ?>
                        <div class="item">
                            <div class="blog-feature-card">
                                <div class="row">
                                    <div class="col-4">
                                        <div class="blog-feature-card-img">
                                            <img src="assets/images/blogs/blog-feature-1.png">
                                        </div>
                                    </div>
                                    <div class="col-8">
                                        <div class="blog-sidebar-action row">
                                            <div class="col-lg-3 pr-0 pl-0">
                                                <span><img src="assets/images/icons/share.svg" class="w-auto d-inline"> <span class="ml-2">Share</span> </span>
                                            </div>
                                            <div class="col-lg-5 pr-0 pl-0">
                                                <span><img src="assets/images/icons/chat.svg" class="w-auto d-inline"> <span class="ml-2">786 Comments</span> </span>
                                            </div>
                                            <div class="col-lg-4 pl-1 pr-0">
                                                <span><img src="assets/images/icons/view.svg" class="w-auto d-inline"> <span class="ml-2">4.6k</span> </span>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <p class="blog-brand fs-14 p-0 m-0">Branding & Marketing</p>
                                            <h2 class="blog-topic p-0 mt-2">Developing Personal Brand on Social Media</h2>
                                            <div class="blog-author">
                                                <img src="assets/images/blogs/blog-writer.png">
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


<!--blog start-->
<section class="section-blog bg-light-hub pt-5 pb-5">
    <div class="container">
        <div class="row justify-content-center">
            <h1 class="heading-title text-primary text-uppercase">All Blogs</h1>
        </div>
        <div class="row mt-3 all-blog-btn">
            <div class="col-sm-2 mt-3">
                <a href="" class="btn btn-primary br-8 d-block">Featured</a>
            </div>
            <div class="col-sm-2 mt-3">
                <a href="" class="btn btn-outline-primary br-8 d-block">Leadership</a>
            </div>
            <div class="col-sm-2 mt-3">
                <a href="" class="btn btn-outline-primary br-8 d-block">Digital Marketing</a>
            </div>
            <div class="col-sm-2 mt-3">
                <a href="" class="btn btn-outline-primary br-8 d-block">Interaction Design</a>
            </div>
            <div class="col-sm-2 mt-3">
                <a href="" class="btn btn-outline-primary br-8 d-block">Raise Capital</a>
            </div>
            <div class="col-sm-2 mt-3">
                <a href="" class="btn btn-outline-primary br-8 d-block">Financial</a>
            </div>
            <div class="col-sm-2 mt-3">
                <a href="" class="btn btn-outline-primary br-8 d-block">Entrepreneurship</a>
            </div>
            <div class="col-sm-2 mt-3">
                <a href="" class="btn btn-outline-primary br-8 d-block">Management</a>
            </div>
            <div class="col-sm-2 mt-3">
                <a href="" class="btn btn-outline-primary br-8 d-block">User Interaction</a>
            </div>
            <div class="col-sm-2 mt-3">
                <a href="" class="btn btn-outline-primary br-8 d-block">Start Up Club</a>
            </div>
            <div class="col-sm-2 mt-3">
                <a href="" class="btn btn-outline-primary br-8 d-block">Market Trends</a>
            </div>
            <div class="col-sm-2 mt-3">
                <a href="" class="btn button-secondary br-8 d-block">View All <i class="fas fa-arrow-right"></i> </a>
            </div>
        </div>
        <div class="row mt-5">
            <?php
                for($i=0;$i<6;$i++){ ?>
                    <div class="col-md-4 sm-mt-10 mt-5">
                        <div class="blog-single">
                            <div class="blog-image">
                                <img src="assets/images/blogs/blog1.png">
                            </div>
                            <div class="d-flex justify-content-between mt-2 mb-2">
                                <p class="blog-text">Financials</p>
                                <p class="blog-text">2 mins of Read | 30th April 2022</p>
                            </div>
                            <h4 class="text-primary">Inspiring Diverse, Inclusive & Impact-driven Entrepreneurship</h4>
                            <div class="blog-action d-flex justify-content-between mt-4">
                                <div class="blog-share blog-action-text">
                                    <img src="assets/images/icons/share.svg" class="d-inline"> <span class="ml-2">Share</span>
                                </div>
                                <div class="blog-share blog-action-text">
                                    <img src="assets/images/icons/chat.svg" class="d-inline"> <span class="ml-2">Comment</span>
                                </div>
                                <div class="blog-share blog-action-text">
                                    <img src="assets/images/icons/view.svg" class="d-inline"> <span class="ml-2">4.6k</span>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php   }
            ?>
        </div>
    </div>
</section>
<!--blog end-->

<!--trending topic start-->
<section class="section-trending">
    <div class="container">
        <div class="row justify-content-center">
            <h1 class="heading-title text-primary text-uppercase">Trending Topics</h1>
        </div>
        <div class="row mt-5">
            <div class="col-lg-2 col-md-3 d-flex">
                <div class="trending-single" style="background: linear-gradient(180deg, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.7) 100%), url('assets/images/blogs/trending-1.png');">
                    <h6>Leadership</h6>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 d-flex">
                <div class="trending-single ml-2" style="background: linear-gradient(180deg, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.7) 100%), url('assets/images/blogs/trending-2.png');">
                    <h6>Interior Design</h6>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 d-flex">
                <div class="trending-single ml-2" style="background: linear-gradient(180deg, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.7) 100%), url('assets/images/blogs/trending-3.png');">
                    <h6>Financial</h6>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 d-flex">
                <div class="trending-single ml-2" style="background: linear-gradient(180deg, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.7) 100%), url('assets/images/blogs/trending-4.png');">
                    <h6>Entrepreneurship</h6>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 d-flex">
                <div class="trending-single ml-2" style="background: linear-gradient(180deg, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.7) 100%), url('assets/images/blogs/trending-5.png');">
                    <h6>Gardening</h6>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 d-flex">
                <div class="trending-single ml-2" style="background: linear-gradient(180deg, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.7) 100%), url('assets/images/blogs/trending-1.png');">
                    <h6>Leadership</h6>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-6 sm-mt-10">
                <div class="blog-single">
                    <div class="blog-image">
                        <img src="assets/images/blogs/blog1.png" class="w-100">
                    </div>
                    <div class="d-flex justify-content-between mt-2 mb-2">
                        <p class="blog-text">Financials</p>
                        <p class="blog-text">2 mins of Read | 30th April 2022</p>
                    </div>
                    <h4 class="text-primary">Inspiring Diverse, Inclusive & Impact-driven Entrepreneurship</h4>
                    <p class="fs-15 fw-400 mb-0">Lorem Ipsum is a very powerful application that runs online. There are virtually no platform boundaries when it comes to using figma because you can design within a web browser or using their desktop application made for windows and macs. Figma is similar to Sketch and Adobe XD but is the more powerful of the three when it comes to team collaboration and responsive, fast paced design. </p>
                    <span class="text-danger">Read More</span>
                    <div class="blog-action d-flex justify-content-between mt-4">
                        <div class="blog-share blog-action-text">
                            <img src="assets/images/icons/share.svg"> <span class="ml-2">Share</span>
                        </div>
                        <div class="blog-share blog-action-text">
                            <img src="assets/images/icons/chat.svg"> <span class="ml-2">Comment</span>
                        </div>
                        <div class="blog-share blog-action-text">
                            <img src="assets/images/icons/view.svg"> <span class="ml-2">4.6k</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <?php
                    for($i=0;$i<4;$i++)
                    { ?>
                        <div class="trending-sidebar mt-3">
                            <div class="row">
                                <div class="col-3 col-sm-3 col-lg-3">
                                    <img src="assets/images/blogs/blog3.png" class="w-100">
                                </div>
                                <div class="col-9 col-sm-9 col-lg-9">
                                    <div class="d-flex mr-2 mt-2 justify-content-between trending-topic">
                                        <span class="blog-brand">Financials</span>
                                        <span>2 mins of Read | 30th April 2022</span>
                                    </div>
                                    <h3 class="mt-2">Inspiring Diverse, Inclusive & Impact-driven Entrepreneurship</h3>
                                    <div class="blog-sidebar-action d-flex">
                                        <div class="col pl-1 pr-0">
                                            <img src="assets/images/icons/share.svg"> <span class="ml-2">Share</span>
                                        </div>
                                        <div class="col pl-1 pr-0">
                                            <img src="assets/images/icons/chat.svg"> <span class="ml-2">Comment</span>
                                        </div>
                                        <div class="col pl-1 pr-0">
                                            <img src="assets/images/icons/view.svg"> <span class="ml-2">4.6k</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                <?php    }
                ?>
            </div>
        </div>
        <hr class="hr1 mt-5"/>

    </div>
</section>
<!--trending topic end-->

<!--also read-->
<section class="section-also-read">
    <div class="container">
        <div class="row justify-content-center mt-5">
            <h1 class="heading-title text-primary text-uppercase">Also Read</h1>
        </div>
        <div class="row mt-5">
            <div class="col-lg-6">
                <div class="read-card" style="background: url('assets/images/blogs/blog-bg-1.png')">
                    <div class="banner-blog-card">
                        <div class="row">
                            <div class="col-md-5 d-flex align-items-center">
                                <p class="blog-brand fs-12 p-0 m-0 mb-0">Branding & Marketing</p>
                            </div>
                            <div class="col-md-7">
                                <div class="blog-sidebar-action row">
                                    <div class="col-lg-3 pr-0 pl-0">
                                        <span><img src="assets/images/icons/share.svg" class="w-auto d-inline"> <span class="ml-1">Share</span> </span>
                                    </div>
                                    <div class="col-lg-6 pr-0 pl-0 d-flex align-items-center">
                                        <img src="assets/images/icons/chat.svg"> <span class="ml-1">786 Comments</span>
                                    </div>
                                    <div class="col-lg-3 pl-1 pr-0 d-flex align-items-center">
                                        <img src="assets/images/icons/view.svg"> <span class="ml-1">4.6k</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <h2 class="blog-topic mt-2">Developing Personal Brand on Social Media</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s <span class="text-secondary">Read More...</span></p>

                        <div class="blog-author">
                            <img src="assets/images/blogs/blog-writer.png">
                            <div>
                                <h6>Supriya Devnath</h6>
                                <p>18 May 2022 • 4 min read</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="read-card-1">
                    <div class="banner-blog-card-1">
                        <div class="row">
                            <div class="col-md-5 d-flex align-items-center">
                                <p class="blog-brand fs-12 p-0 m-0 mb-0">Branding & Marketing</p>
                            </div>
                            <div class="col-md-7">
                                <div class="blog-sidebar-action row">
                                    <div class="col-lg-3 pr-0 pl-0">
                                        <span><img src="assets/images/icons/share.svg" class="w-auto d-inline"> <span class="ml-1">Share</span> </span>
                                    </div>
                                    <div class="col-lg-6 pr-0 pl-0 d-flex align-items-center">
                                        <img src="assets/images/icons/chat.svg"> <span class="ml-1">786 Comments</span>
                                    </div>
                                    <div class="col-lg-3 pl-1 pr-0 d-flex align-items-center">
                                        <img src="assets/images/icons/view.svg"> <span class="ml-1">4.6k</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h2 class="blog-topic mt-2">Developing Personal Brand on Social Media</h2>
                        <p class="fs-13">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s <span class="text-secondary">Read More...</span></p>

                        <div class="blog-author">
                            <img src="assets/images/blogs/blog-writer.png">
                            <div class="ml-2">
                                <h6 class="mb-0">Supriya Devnath</h6>
                                <p class="mb-0">18 May 2022 • 4 min read</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="read-card-1 read-card-mr">
                    <div class="banner-blog-card-1">
                        <div class="row">
                            <div class="col-md-5 d-flex align-items-center">
                                <p class="blog-brand fs-12 p-0 m-0 mb-0">Branding & Marketing</p>
                            </div>
                            <div class="col-md-7">
                                <div class="blog-sidebar-action row">
                                    <div class="col-lg-3 pr-0 pl-0">
                                        <span><img src="assets/images/icons/share.svg" class="w-auto d-inline"> <span class="ml-1">Share</span> </span>
                                    </div>
                                    <div class="col-lg-6 pr-0 pl-0 d-flex align-items-center">
                                        <img src="assets/images/icons/chat.svg"> <span class="ml-1">786 Comments</span>
                                    </div>
                                    <div class="col-lg-3 pl-1 pr-0 d-flex align-items-center">
                                        <img src="assets/images/icons/view.svg"> <span class="ml-1">4.6k</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h2 class="blog-topic mt-2">Developing Personal Brand on Social Media</h2>
                        <p class="fs-13">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s <span class="text-secondary">Read More...</span></p>

                        <div class="blog-author">
                            <img src="assets/images/blogs/blog-writer.png">
                            <div>
                                <h6>Supriya Devnath</h6>
                                <p>18 May 2022 • 4 min read</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <hr class="hr1 mt-5"/>
    </div>
</section>
<!--also read end-->

<section class="section-blog-remain mb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="card-4 card-4-br-b">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card-4-img">
                                <img src="assets/images/card-4-img.png">
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="row">
                                <div class="col-md-3 d-flex align-items-center">
                                    <p class="blog-brand fs-12 p-0 m-0 mb-0">Branding </p>
                                </div>
                                <div class="col-md-7">
                                    <div class="blog-sidebar-action row">
                                        <div class="col-lg-3 pr-0 pl-0">
                                            <span><img src="assets/images/icons/share.svg" class="w-auto d-inline"> <span class="ml-1">Share</span> </span>
                                        </div>
                                        <div class="col-lg-6 pr-0 pl-0 d-flex align-items-center">
                                            <img src="assets/images/icons/chat.svg"> <span class="ml-1">786 Comments</span>
                                        </div>
                                        <div class="col-lg-3 pl-1 pr-0 d-flex align-items-center">
                                            <img src="assets/images/icons/view.svg"> <span class="ml-1">4.6k</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h2>Developing Personal Brand on Social Media</h2>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy. <span class="text-secondary">Read More...</span> </p>
                            <div class="blog-author">
                                <img src="assets/images/blogs/blog-writer.png">
                                <div class="ml-2">
                                    <h6 class="mb-0">Supriya Devnath</h6>
                                    <p class="mb-0">18 May 2022 • 4 min read</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-4 card-4-br-b">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card-4-img">
                                <img src="assets/images/card-4-img.png">
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="row">
                                <div class="col-md-3 d-flex align-items-center">
                                    <p class="blog-brand fs-12 p-0 m-0 mb-0">Branding </p>
                                </div>
                                <div class="col-md-7">
                                    <div class="blog-sidebar-action row">
                                        <div class="col-lg-3 pr-0 pl-0">
                                            <span><img src="assets/images/icons/share.svg" class="w-auto d-inline"> <span class="ml-1">Share</span> </span>
                                        </div>
                                        <div class="col-lg-6 pr-0 pl-0 d-flex align-items-center">
                                            <img src="assets/images/icons/chat.svg"> <span class="ml-1">786 Comments</span>
                                        </div>
                                        <div class="col-lg-3 pl-1 pr-0 d-flex align-items-center">
                                            <img src="assets/images/icons/view.svg"> <span class="ml-1">4.6k</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h2>Developing Personal Brand on Social Media</h2>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy. <span class="text-secondary">Read More...</span> </p>
                            <div class="blog-author">
                                <img src="assets/images/blogs/blog-writer.png">
                                <div class="ml-2">
                                    <h6 class="mb-0">Supriya Devnath</h6>
                                    <p class="mb-0">18 May 2022 • 4 min read</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-4 ">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card-4-img">
                                <img src="assets/images/card-4-img.png">
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="row">
                                <div class="col-md-3 d-flex align-items-center">
                                    <p class="blog-brand fs-12 p-0 m-0 mb-0">Branding </p>
                                </div>
                                <div class="col-md-7">
                                    <div class="blog-sidebar-action row">
                                        <div class="col-lg-3 pr-0 pl-0">
                                            <span><img src="assets/images/icons/share.svg" class="w-auto d-inline"> <span class="ml-1">Share</span> </span>
                                        </div>
                                        <div class="col-lg-6 pr-0 pl-0 d-flex align-items-center">
                                            <img src="assets/images/icons/chat.svg"> <span class="ml-1">786 Comments</span>
                                        </div>
                                        <div class="col-lg-3 pl-1 pr-0 d-flex align-items-center">
                                            <img src="assets/images/icons/view.svg"> <span class="ml-1">4.6k</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h2>Developing Personal Brand on Social Media</h2>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy. <span class="text-secondary">Read More...</span> </p>
                            <div class="blog-author">
                                <img src="assets/images/blogs/blog-writer.png">
                                <div class="ml-2">
                                    <h6 class="mb-0">Supriya Devnath</h6>
                                    <p class="mb-0">18 May 2022 • 4 min read</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4" style="border-left: 2px solid #D0D0D0;">
                <h2 class="blog-recent-heading">Recent on Blog</h2>
                <div class="card-6 card-6-br">
                    <div class="row">
                        <div class="col-4">
                            <img src="assets/images/recent-card-5.png" class="h-100 br-12">
                        </div>
                        <div class="col-8 pl-0">
                            <div class="blog-sidebar-desc">
                                <p class="blog-brand">Branding</p>
                                <h2>Developing Personal Brand on Social Media</h2>
                            </div>
                            <div class="blog-sidebar-action row ml-1">
                                <div class="col-lg-3 pr-0 pl-0">
                                    <span><img src="assets/images/icons/share.svg" class="w-auto d-inline"> <span class="ml-1">Share</span> </span>
                                </div>
                                <div class="col-lg-6 pr-0 pl-0 d-flex align-items-center">
                                    <img src="assets/images/icons/chat.svg"> <span class="ml-1">786 Comments</span>
                                </div>
                                <div class="col-lg-3 pl-1 pr-0 d-flex align-items-center">
                                    <img src="assets/images/icons/view.svg"> <span class="ml-1">4.6k</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-6 card-6-br">
                    <div class="row">
                        <div class="col-4">
                            <img src="assets/images/recent-card-5.png" class="h-100 br-12">
                        </div>
                        <div class="col-8 pl-0">
                            <div class="blog-sidebar-desc">
                                <p class="blog-brand">Branding</p>
                                <h2>Developing Personal Brand on Social Media</h2>
                            </div>
                            <div class="blog-sidebar-action row ml-1">
                                <div class="col-lg-3 pr-0 pl-0">
                                    <span><img src="assets/images/icons/share.svg" class="w-auto d-inline"> <span class="ml-1">Share</span> </span>
                                </div>
                                <div class="col-lg-6 pr-0 pl-0 d-flex align-items-center">
                                    <img src="assets/images/icons/chat.svg"> <span class="ml-1">786 Comments</span>
                                </div>
                                <div class="col-lg-3 pl-1 pr-0 d-flex align-items-center">
                                    <img src="assets/images/icons/view.svg"> <span class="ml-1">4.6k</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-6 card-6-br">
                    <div class="row">
                        <div class="col-4">
                            <img src="assets/images/recent-card-5.png" class="h-100 br-12">
                        </div>
                        <div class="col-8 pl-0">
                            <div class="blog-sidebar-desc">
                                <p class="blog-brand">Branding</p>
                                <h2>Developing Personal Brand on Social Media</h2>
                            </div>
                            <div class="blog-sidebar-action row ml-1">
                                <div class="col-lg-3 pr-0 pl-0">
                                    <span><img src="assets/images/icons/share.svg" class="w-auto d-inline"> <span class="ml-1">Share</span> </span>
                                </div>
                                <div class="col-lg-6 pr-0 pl-0 d-flex align-items-center">
                                    <img src="assets/images/icons/chat.svg"> <span class="ml-1">786 Comments</span>
                                </div>
                                <div class="col-lg-3 pl-1 pr-0 d-flex align-items-center">
                                    <img src="assets/images/icons/view.svg"> <span class="ml-1">4.6k</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-6 card-6-br">
                    <div class="row">
                        <div class="col-4">
                            <img src="assets/images/recent-card-5.png" class="h-100 br-12">
                        </div>
                        <div class="col-8 pl-0">
                            <div class="blog-sidebar-desc">
                                <p class="blog-brand">Branding</p>
                                <h2>Developing Personal Brand on Social Media</h2>
                            </div>
                            <div class="blog-sidebar-action row ml-1">
                                <div class="col-lg-3 pr-0 pl-0">
                                    <span><img src="assets/images/icons/share.svg" class="w-auto d-inline"> <span class="ml-1">Share</span> </span>
                                </div>
                                <div class="col-lg-6 pr-0 pl-0 d-flex align-items-center">
                                    <img src="assets/images/icons/chat.svg"> <span class="ml-1">786 Comments</span>
                                </div>
                                <div class="col-lg-3 pl-1 pr-0 d-flex align-items-center">
                                    <img src="assets/images/icons/view.svg"> <span class="ml-1">4.6k</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-6 card-6-br">
                    <div class="row">
                        <div class="col-4">
                            <img src="assets/images/recent-card-5.png" class="h-100 br-12">
                        </div>
                        <div class="col-8 pl-0">
                            <div class="blog-sidebar-desc">
                                <p class="blog-brand">Branding</p>
                                <h2>Developing Personal Brand on Social Media</h2>
                            </div>
                            <div class="blog-sidebar-action row ml-1">
                                <div class="col-lg-3 pr-0 pl-0">
                                    <span><img src="assets/images/icons/share.svg" class="w-auto d-inline"> <span class="ml-1">Share</span> </span>
                                </div>
                                <div class="col-lg-6 pr-0 pl-0 d-flex align-items-center">
                                    <img src="assets/images/icons/chat.svg"> <span class="ml-1">786 Comments</span>
                                </div>
                                <div class="col-lg-3 pl-1 pr-0 d-flex align-items-center">
                                    <img src="assets/images/icons/view.svg"> <span class="ml-1">4.6k</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-6">
                    <div class="row">
                        <div class="col-4">
                            <img src="assets/images/recent-card-5.png" class="h-100 br-12">
                        </div>
                        <div class="col-8 pl-0">
                            <div class="blog-sidebar-desc">
                                <p class="blog-brand">Branding</p>
                                <h2>Developing Personal Brand on Social Media</h2>
                            </div>
                            <div class="blog-sidebar-action row ml-1">
                                <div class="col-lg-3 pr-0 pl-0">
                                    <span><img src="assets/images/icons/share.svg" class="w-auto d-inline"> <span class="ml-1">Share</span> </span>
                                </div>
                                <div class="col-lg-6 pr-0 pl-0 d-flex align-items-center">
                                    <img src="assets/images/icons/chat.svg"> <span class="ml-1">786 Comments</span>
                                </div>
                                <div class="col-lg-3 pl-1 pr-0 d-flex align-items-center">
                                    <img src="assets/images/icons/view.svg"> <span class="ml-1">4.6k</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="pb-5 pt-0 blog-main-footer-margin">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card-4 card-4-br-b">
                    <div class="row">
                        <div class="col-lg-4 pr-0 pl-0">
                            <div class="card-4-img">
                                <img src="assets/images/card-6.png">
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="row">
                                <div class="col-md-3 d-flex align-items-center">
                                    <p class="blog-brand fs-12 p-0 m-0 mb-0">Branding </p>
                                </div>
                                <div class="col-md-7">
                                    <div class="blog-sidebar-action row">
                                        <div class="col-lg-3 pr-0 pl-0">
                                            <span><img src="assets/images/icons/share.svg" class="w-auto d-inline"> <span class="ml-1">Share</span> </span>
                                        </div>
                                        <div class="col-lg-6 pr-0 pl-0 d-flex align-items-center">
                                            <img src="assets/images/icons/chat.svg"> <span class="ml-1">786 Comments</span>
                                        </div>
                                        <div class="col-lg-3 pl-1 pr-0 d-flex align-items-center">
                                            <img src="assets/images/icons/view.svg"> <span class="ml-1">4.6k</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h2>Developing Personal Brand on Social Media</h2>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy. <span class="text-secondary">Read More...</span> </p>
                            <div class="blog-author">
                                <img src="assets/images/blogs/blog-writer.png">
                                <div class="ml-2">
                                    <h6 class="mb-0">Supriya Devnath</h6>
                                    <p class="mb-0">18 May 2022 • 4 min read</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-4 card-4-br-b">
                    <div class="row">
                        <div class="col-lg-4 pr-0 pl-0">
                            <div class="card-4-img">
                                <img src="assets/images/card-6.png">
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="row">
                                <div class="col-md-3 d-flex align-items-center">
                                    <p class="blog-brand fs-12 p-0 m-0 mb-0">Branding </p>
                                </div>
                                <div class="col-md-7">
                                    <div class="blog-sidebar-action row">
                                        <div class="col-lg-3 pr-0 pl-0">
                                            <span><img src="assets/images/icons/share.svg" class="w-auto d-inline"> <span class="ml-1">Share</span> </span>
                                        </div>
                                        <div class="col-lg-6 pr-0 pl-0 d-flex align-items-center">
                                            <img src="assets/images/icons/chat.svg"> <span class="ml-1">786 Comments</span>
                                        </div>
                                        <div class="col-lg-3 pl-1 pr-0 d-flex align-items-center">
                                            <img src="assets/images/icons/view.svg"> <span class="ml-1">4.6k</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h2>Developing Personal Brand on Social Media</h2>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy. <span class="text-secondary">Read More...</span> </p>
                            <div class="blog-author">
                                <img src="assets/images/blogs/blog-writer.png">
                                <div class="ml-2">
                                    <h6 class="mb-0">Supriya Devnath</h6>
                                    <p class="mb-0">18 May 2022 • 4 min read</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-4">
                    <div class="row">
                        <div class="col-lg-4 pr-0 pl-0">
                            <div class="card-4-img">
                                <img src="assets/images/card-6.png">
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="row">
                                <div class="col-md-3 d-flex align-items-center">
                                    <p class="blog-brand fs-12 p-0 m-0 mb-0">Branding </p>
                                </div>
                                <div class="col-md-7">
                                    <div class="blog-sidebar-action row">
                                        <div class="col-lg-3 pr-0 pl-0">
                                            <span><img src="assets/images/icons/share.svg" class="w-auto d-inline"> <span class="ml-1">Share</span> </span>
                                        </div>
                                        <div class="col-lg-6 pr-0 pl-0 d-flex align-items-center">
                                            <img src="assets/images/icons/chat.svg"> <span class="ml-1">786 Comments</span>
                                        </div>
                                        <div class="col-lg-3 pl-1 pr-0 d-flex align-items-center">
                                            <img src="assets/images/icons/view.svg"> <span class="ml-1">4.6k</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h2>Developing Personal Brand on Social Media</h2>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy. <span class="text-secondary">Read More...</span> </p>
                            <div class="blog-author">
                                <img src="assets/images/blogs/blog-writer.png">
                                <div class="ml-2">
                                    <h6 class="mb-0">Supriya Devnath</h6>
                                    <p class="mb-0">18 May 2022 • 4 min read</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6" style="border-left: 2px solid #D0D0D0;">
                <div class="card-4 card-4-br-b">
                    <div class="row">
                        <div class="col-lg-4 pr-0 ">
                            <div class="card-4-img">
                                <img src="assets/images/card-6.png">
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="row">
                                <div class="col-md-3 d-flex align-items-center">
                                    <p class="blog-brand fs-12 p-0 m-0 mb-0">Branding </p>
                                </div>
                                <div class="col-md-7">
                                    <div class="blog-sidebar-action row">
                                        <div class="col-lg-3 pr-0 pl-0">
                                            <span><img src="assets/images/icons/share.svg" class="w-auto d-inline"> <span class="ml-1">Share</span> </span>
                                        </div>
                                        <div class="col-lg-6 pr-0 pl-0 d-flex align-items-center">
                                            <img src="assets/images/icons/chat.svg"> <span class="ml-1">786 Comments</span>
                                        </div>
                                        <div class="col-lg-3 pl-1 pr-0 d-flex align-items-center">
                                            <img src="assets/images/icons/view.svg"> <span class="ml-1">4.6k</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h2>Developing Personal Brand on Social Media</h2>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy. <span class="text-secondary">Read More...</span> </p>
                            <div class="blog-author">
                                <img src="assets/images/blogs/blog-writer.png">
                                <div class="ml-2">
                                    <h6 class="mb-0">Supriya Devnath</h6>
                                    <p class="mb-0">18 May 2022 • 4 min read</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-4 card-4-br-b">
                    <div class="row">
                        <div class="col-lg-4 pr-0 ">
                            <div class="card-4-img">
                                <img src="assets/images/card-6.png">
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="row">
                                <div class="col-md-3 d-flex align-items-center">
                                    <p class="blog-brand fs-12 p-0 m-0 mb-0">Branding </p>
                                </div>
                                <div class="col-md-7">
                                    <div class="blog-sidebar-action row">
                                        <div class="col-lg-3 pr-0 pl-0">
                                            <span><img src="assets/images/icons/share.svg" class="w-auto d-inline"> <span class="ml-1">Share</span> </span>
                                        </div>
                                        <div class="col-lg-6 pr-0 pl-0 d-flex align-items-center">
                                            <img src="assets/images/icons/chat.svg"> <span class="ml-1">786 Comments</span>
                                        </div>
                                        <div class="col-lg-3 pl-1 pr-0 d-flex align-items-center">
                                            <img src="assets/images/icons/view.svg"> <span class="ml-1">4.6k</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h2>Developing Personal Brand on Social Media</h2>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy. <span class="text-secondary">Read More...</span> </p>
                            <div class="blog-author">
                                <img src="assets/images/blogs/blog-writer.png">
                                <div class="ml-2">
                                    <h6 class="mb-0">Supriya Devnath</h6>
                                    <p class="mb-0">18 May 2022 • 4 min read</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-4">
                    <div class="row">
                        <div class="col-lg-4 pr-0 ">
                            <div class="card-4-img">
                                <img src="assets/images/card-6.png">
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="row">
                                <div class="col-md-3 d-flex align-items-center">
                                    <p class="blog-brand fs-12 p-0 m-0 mb-0">Branding </p>
                                </div>
                                <div class="col-md-7">
                                    <div class="blog-sidebar-action row">
                                        <div class="col-lg-3 pr-0 pl-0">
                                            <span><img src="assets/images/icons/share.svg" class="w-auto d-inline"> <span class="ml-1">Share</span> </span>
                                        </div>
                                        <div class="col-lg-6 pr-0 pl-0 d-flex align-items-center">
                                            <img src="assets/images/icons/chat.svg"> <span class="ml-1">786 Comments</span>
                                        </div>
                                        <div class="col-lg-3 pl-1 pr-0 d-flex align-items-center">
                                            <img src="assets/images/icons/view.svg"> <span class="ml-1">4.6k</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h2>Developing Personal Brand on Social Media</h2>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy. <span class="text-secondary">Read More...</span> </p>
                            <div class="blog-author">
                                <img src="assets/images/blogs/blog-writer.png">
                                <div class="ml-2">
                                    <h6 class="mb-0">Supriya Devnath</h6>
                                    <p class="mb-0">18 May 2022 • 4 min read</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
    include_once "footer.php"
?>
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
        navText: ['<span class="fas fa-arrow-left "></span>','<span class="fas fa-arrow-right"></span>'],
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
