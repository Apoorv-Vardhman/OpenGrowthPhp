<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mentorship | OpenGrowth Leadership for all</title>
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
<section class="about-author-section">
    <div class="container">
        <div class="row back-author">
            <a href="" class="btn btn-info"><img src="assets/images/icons/back.svg"><span class="ml-2">Back to Blog Section</span> </a>
        </div>
        <div class="row about-author-row">
            <div class="col-lg-4">
                <div class="author-img">
                    <img src="assets/images/author-1.png">
                </div>
            </div>
            <div class="col-lg-8">
                <div class="about-desc-author">
                    <h2>Supriya Devnath</h2>
                    <h3>Book Review, Entrepreneurship In Action, Financials, Marketing, Social Entrepreneurship, Team Building</h3>
                    <div class="mentor-social p-2">
                        <i class="fab fa-facebook primary-color"></i>
                        <i class="fab fa-twitter primary-color"></i>
                        <i class="fab fa-youtube primary-color"></i>
                        <i class="fab fa-linkedin primary-color"></i>
                    </div>
                    <h6>About</h6>
                    <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                    <div class="row author-btn">
                        <button type="button" class="btn btn-primary">55 Posts</button>
                        <button type="button" class="btn btn-primary ml-3">155 Followers</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="blog-author-section">
    <div class="container">
        <div class="row mt-3 all-cat">
            <?php
            for($i=0;$i<14;$i++)
            { ?>
                <div class="col-md-4 mt-3 pl-0 ">
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
</section>
<?php
include_once "footer.php";
?>
<script src="assets/js/jquery.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/owl-carousel.js"></script>

</body>
</html>
