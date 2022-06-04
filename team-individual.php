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
            <a href="" class="btn btn-info"><img src="assets/images/icons/back.svg"><span class="ml-2">Back to team page</span> </a>
        </div>
        <div class="row about-author-row">
            <div class="col-lg-4">
                <div class="author-img">
                    <img src="assets/images/author-2.png">
                </div>
            </div>
            <div class="col-lg-8">
                <div class="about-desc-author">
                    <h2>Jaideep Ahlawat</h2>
                    <h3>Chairman, OpenGrowth & Executive Chairman of MetricStream</h3>
                    <div class="mentor-social p-2">
                        <i class="fab fa-facebook primary-color"></i>
                        <i class="fab fa-twitter primary-color"></i>
                        <i class="fab fa-youtube primary-color"></i>
                        <i class="fab fa-linkedin primary-color"></i>
                    </div>
                    <h6>About</h6>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                    <h6>Why do we use it?</h6>
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>

                </div>
            </div>
        </div>
    </div>
</section>
<section class="team-section-1">
    <div class="container">
        <div class="row justify-content-center">
            <div class="heading-title-2">
                <h1 class="text-center">Other team member</h1>
            </div>
        </div>
        <div class="row mt-4">
            <?php
            for($i=0;$i<3;$i++)
            { ?>
                <div class="col-lg-4 col-xl-4 col-md-6">
                    <div class="team-card">
                        <div class="row">
                            <div class="col-5 pl-0 pr-0 position-relative">
                                <div class="team-card-img ">
                                    <img src="assets/images/sourav.png" class="w-100">
                                </div>
                            </div>
                            <div class="col-7 ml-0 pl-0">
                                <div class="team-card-desc">
                                    <h2>Jaideep Ahlawat</h2>
                                    <p class="mb-0">Chairman, OpenGrowth & Executive Chairman of MetricStream</p>
                                    <div class="social-links-team mt-2">
                                        <i class="fab fa-facebook"></i>
                                        <i class="fab fa-twitter"></i>
                                        <i class="fab fa-youtube"></i>
                                        <i class="fab fa-linkedin"></i>

                                    </div>
                                    <a class="text-link mt-3">Know More <i class="fas fa-arrow-right"></i> </a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php    }
            ?>
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
