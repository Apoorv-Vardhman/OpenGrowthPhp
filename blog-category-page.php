<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/media.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="assets/css/owl-carousel.css">
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
                                                <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s <span class="text-secondary">Read More...</span></p>
                                                <div class="row justify-content-end ">
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
                                                <div class="blog-author mt-3">
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

<section class="section-blog-option-3">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-8">
                <div class="row justify-content-center">
                    <div class="search-group flex-fill mr-hr-10 col-md-12" style="border: 1px solid #B7B7B7;box-shadow: none">
                        <input class="input-search" placeholder="Type here to search">
                        <i class="fas fa-search"></i>
                    </div>
                </div>
                <div class="row mt-3 all-cat">
                    <?php
                        for($i=0;$i<14;$i++)
                        { ?>
                            <div class="col-md-6 mt-3 pl-0 ">
                                <div class="blog-single padding-16 cat-shadow">
                                    <div class="blog-image">
                                        <img src="assets/images/blogs/blog1.png">
                                    </div>
                                    <div class="d-flex justify-content-between mt-3 mb-2">
                                        <p class="blog-text">Financials</p>
                                        <p class="blog-text">2 mins of Read | 30th April 2022</p>
                                    </div>
                                    <h4 class="text-primary">Inspiring Diverse, Inclusive & Impact-driven Entrepreneurship</h4>
                                    <div class="blog-action d-flex justify-content-between mt-4 pl-1 pr-1">
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
                    <?php    }
                    ?>
                </div>
                <div class="row mt-5 mb-5 justify-content-center">
                    <a href="" class="btn-primary btn br-8 cat-more">Show More</a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="pl-5">
                    <h2 class="blog-category-title">Categories</h2>
                    <table class="table table-borderless blog-categories">
                        <tr>
                            <td>Leadership</td>
                            <td>08</td>
                        </tr>
                        <tr>
                            <td>Digital Marketing</td>
                            <td>10</td>
                        </tr>
                        <tr>
                            <td>Interaction Design</td>
                            <td>12</td>
                        </tr>
                        <tr>
                            <td>Raise Capital</td>
                            <td>12</td>
                        </tr>
                        <tr>
                            <td>Startup Club</td>
                            <td>09</td>
                        </tr>
                        <tr>
                            <td>Leadership</td>
                            <td>08</td>
                        </tr>
                        <tr>
                            <td>Digital Marketing</td>
                            <td>10</td>
                        </tr>
                        <tr>
                            <td>Interaction Design</td>
                            <td>12</td>
                        </tr>
                        <tr>
                            <td>Raise Capital</td>
                            <td>12</td>
                        </tr>
                        <tr>
                            <td>Startup Club</td>
                            <td>09</td>
                        </tr>
                    </table>

                </div>
                <h2 class="blog-category-title-border">Must Read</h2>
                <div class="must-read-card">
                    <div class="row">
                        <div class="col-4 pr-0">
                            <img src="assets/images/read-1.png" class="h-100 br-8">
                        </div>
                        <div class="col-8">
                            <span>Financials</span>
                            <h2>Inspiring Diverse, Inclusive & Impact-driven Entrepreneurship</h2>
                            <div class="d-flex justify-content-between">
                                <span><img src="assets/images/icons/chat.svg"> 786 Comments </span>
                                <span class="mr-2"><img src="assets/images/icons/view.svg"> 4.6k </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="must-read-card">
                    <div class="row">
                        <div class="col-4 pr-0">
                            <img src="assets/images/read-2.png" class="h-100 br-8">
                        </div>
                        <div class="col-8">
                            <span>Financials</span>
                            <h2>Inspiring Diverse, Inclusive & Impact-driven Entrepreneurship</h2>
                            <div class="d-flex justify-content-between">
                                <span><img src="assets/images/icons/chat.svg"> 786 Comments </span>
                                <span class="mr-2"><img src="assets/images/icons/view.svg"> 4.6k </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="must-read-card">
                    <div class="row">
                        <div class="col-4 pr-0">
                            <img src="assets/images/read-3.png" class="h-100 br-8">
                        </div>
                        <div class="col-8">
                            <span>Financials</span>
                            <h2>Inspiring Diverse, Inclusive & Impact-driven Entrepreneurship</h2>
                            <div class="d-flex justify-content-between">
                                <span><img src="assets/images/icons/chat.svg"> 786 Comments </span>
                                <span class="mr-2"><img src="assets/images/icons/view.svg"> 4.6k </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="must-read-card">
                    <div class="row">
                        <div class="col-4 pr-0">
                            <img src="assets/images/read-1.png" class="h-100 br-8">
                        </div>
                        <div class="col-8">
                            <span>Financials</span>
                            <h2>Inspiring Diverse, Inclusive & Impact-driven Entrepreneurship</h2>
                            <div class="d-flex justify-content-between">
                                <span><img src="assets/images/icons/chat.svg"> 786 Comments </span>
                                <span class="mr-2"><img src="assets/images/icons/view.svg"> 4.6k </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="must-read-card">
                    <div class="row">
                        <div class="col-4 pr-0">
                            <img src="assets/images/read-2.png" class="h-100 br-8">
                        </div>
                        <div class="col-8">
                            <span>Financials</span>
                            <h2>Inspiring Diverse, Inclusive & Impact-driven Entrepreneurship</h2>
                            <div class="d-flex justify-content-between">
                                <span><img src="assets/images/icons/chat.svg"> 786 Comments </span>
                                <span class="mr-2"><img src="assets/images/icons/view.svg"> 4.6k </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="must-read-card">
                    <div class="row">
                        <div class="col-4 pr-0">
                            <img src="assets/images/read-3.png" class="h-100 br-8">
                        </div>
                        <div class="col-8">
                            <span>Financials</span>
                            <h2>Inspiring Diverse, Inclusive & Impact-driven Entrepreneurship</h2>
                            <div class="d-flex justify-content-between">
                                <span><img src="assets/images/icons/chat.svg"> 786 Comments </span>
                                <span class="mr-2"><img src="assets/images/icons/view.svg"> 4.6k </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="must-read-card">
                    <div class="row">
                        <div class="col-4 pr-0">
                            <img src="assets/images/read-1.png" class="h-100 br-8">
                        </div>
                        <div class="col-8">
                            <span>Financials</span>
                            <h2>Inspiring Diverse, Inclusive & Impact-driven Entrepreneurship</h2>
                            <div class="d-flex justify-content-between">
                                <span><img src="assets/images/icons/chat.svg"> 786 Comments </span>
                                <span class="mr-2"><img src="assets/images/icons/view.svg"> 4.6k </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="must-read-card">
                    <div class="row">
                        <div class="col-4 pr-0">
                            <img src="assets/images/read-2.png" class="h-100 br-8">
                        </div>
                        <div class="col-8">
                            <span>Financials</span>
                            <h2>Inspiring Diverse, Inclusive & Impact-driven Entrepreneurship</h2>
                            <div class="d-flex justify-content-between">
                                <span><img src="assets/images/icons/chat.svg"> 786 Comments </span>
                                <span class="mr-2"><img src="assets/images/icons/view.svg"> 4.6k </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="must-read-card">
                    <div class="row">
                        <div class="col-4 pr-0">
                            <img src="assets/images/read-3.png" class="h-100 br-8">
                        </div>
                        <div class="col-8">
                            <span>Financials</span>
                            <h2>Inspiring Diverse, Inclusive & Impact-driven Entrepreneurship</h2>
                            <div class="d-flex justify-content-between">
                                <span><img src="assets/images/icons/chat.svg"> 786 Comments </span>
                                <span class="mr-2"><img src="assets/images/icons/view.svg"> 4.6k </span>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>

    </div>
</section>

<?php
    include_once "footer.php";
?>
<script src="assets/js/jquery.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/owl-carousel.js"></script>
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
