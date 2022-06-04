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

<section class="team-banner-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="team-banner-img">
                    <img src="assets/images/team_banner.png" />
                </div>
            </div>
            <div class="col-md-6">
                <div class="team-banner-desc">
                    <h1 class="team-heading"><span>Our Team </span>at OpenGrowth</h1>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="team-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="heading-title-2">
                <h1 class="text-center">OUR TEAM</h1>
                <p>Our Coaches & Advisors</p>
            </div>
        </div>
        <div class="row">
            <?php
                for($i=0;$i<9;$i++)
                { ?>
                    <div class="col-lg-4 col-xl-4 col-md-6 mt-5">
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

<section class="team-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="heading-title-2">
                <h1 class="text-center">OUR TEAM</h1>
                <p>Our Entrepreneurs & Team Members</p>
            </div>
        </div>
        <div class="row">
            <?php
            for($i=0;$i<9;$i++)
            { ?>
                <div class="col-lg-4 col-xl-4 col-md-6 mt-5">
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

