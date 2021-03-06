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
    include_once "header.php";
?>
<!--banner start-->
<section class="section-banner">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 col-sm-12">
                <img src="assets/images/apply-banner.svg" alt="banner " class="w-auto">
            </div>
            <div class="col-md-5 col-sm-12">
                <h1 class="heading-1"><span class="learn">Want to become</span> a mentor? </h1>
                <p class="paragraph-1">Come teach with us and become an instructor and change lives — including your own</p>
                <div class="">
                    <a href="" class="btn btn-primary br-8">Get Started</a>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <h1 class="heading-reason">So many reasons to start</h1>
        </div>
        <div class="row mt-3">
            <div class="col-lg-4 col-md-6">
                <div class="reason-card row">
                    <div class="col-lg-4 col-md-5 pl-0 pr-0">
                        <img src="assets/images/icons/apply-1.svg">
                    </div>
                    <div class="col-lg-8 col-md-7">
                        <h2>Teach your way</h2>
                        <p>Publish the course you want, in the way you want, and always have of control your own content.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="reason-card row">
                    <div class="col-lg-4 col-md-5 pr-0">
                        <img src="assets/images/icons/apply-2.svg">
                    </div>
                    <div class="col-lg-8 col-md-7">
                        <h2>Inspire learners</h2>
                        <p>Teach what you know and help learners explore their interests, gain new skills, and advance their careers.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="reason-card row">
                    <div class="col-lg-4 col-md-5 pr-0">
                        <img src="assets/images/icons/apply-3.svg">
                    </div>
                    <div class="col-lg-8 col-md-7">
                        <h2>Get rewarded</h2>
                        <p>Expand your professional network, build your expertise, and earn money on each paid enrollment.</p>                    </div>
                </div>
            </div>

        </div>
    </div>

</section>
<!--banner end-->

<!--design start-->
<section class="section-design bg-white">
    <div class="container">
        <div class="row">
            <div class="col-md-6  d-flex align-items-center">
                <div class="design-content">
                    <h2>Design and create your online course today</h2>
                    <p class="mt-3">Create more compelling online content with this instructional design practices from teaching and learning experts.</p>
                    <div class="mt-4">
                        <a href="" class="btn btn-primary br-8">Watch Full Video <i class="fas fa-play"></i> </a>
                    </div>
                </div>

            </div>
            <div class="col-md-6">
                <div class="design-img">
                    <img src="assets/images/apply-banner-2.png">
                </div>
            </div>
        </div>
    </div>
</section>
<!--design end-->

<!--team start-->
<section class="section-team bg-white mt-0 pb-4">

    <div class="container team">
        <div class="row justify-content-center mb-50">
            <h1 class="heading-title text-primary">Our Mentors</h1>
        </div>

        <div class="row">
            <?php
                for($i=0;$i<9;$i++)
                { ?>
                    <div class="col-lg-4 mt-5">
                        <div class="card-7">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 pl-3 pr-0">
                                    <img src="assets/images/card-7-1.png">
                                </div>
                                <div class="col-lg-8 col-md-8 d-flex align-items-center">
                                    <div class="desc">
                                        <h2 class="mb-1">Sai Ganesh</h2>
                                        <p class="mb-1">Brand Head, Dunzo</p>
                                        <div class="card-7-tag">
                                            <span>System Design</span>
                                            <span>Basic Design</span>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
             <?php   }
            ?>
        </div>
    </div>

</section>
<!--team end-->

<!--apply mentor start-->
<section class="section-apply-process">
    <div class="container  br-t-1 br-b-1">

        <div class="row justify-content-center">
            <h1 class="heading-title text-primary">How to apply as a mentor</h1>
        </div>
        <div class="row mt-3 mt-3 justify-content-center">
            <div class="col-md-10">
                <p>Through lots of trial and error, we’ve established a comprehensive four-step application process to help us to identify the individuals who will flourish as growth mentors.</p>
            </div>
        </div>
        <div class="row mb-100">
            <div class="col-md-3">
                <div class="process-single">
                    <div class="text-center">
                        <h1>01</h1>
                    </div>
                    <h2>Initial application</h2>
                    <p>We invite applicants capable of mentoring to a friendly video chat. We'll get to know each other, discuss why you're joining, and make sure that our core values align, at least somewhat.</p>
                </div>
            </div>

            <div class="col-md-3">
                <div class="process-single">
                    <div class="text-center">
                        <h1>02</h1>
                    </div>
                    <h2>Initial application</h2>
                    <p>It’s free and easy to apply. Just fill out our application form, which includes an analysis of social profiles, work history and track record</p>
                </div>
            </div>

            <div class="col-md-3">
                <div class="process-single">
                    <div class="text-center">
                        <h1>03</h1>
                    </div>
                    <h2>Practical assessment</h2>
                    <p>If you get this far, we'll have you complete a related case assessment. The goal of this to understand your problem solving approaches and the kind of strategies you will provide a mentee.</p>
                </div>
            </div>

            <div class="col-md-3">
                <div class="process-single">
                    <div class="text-center">
                        <h1>04</h1>
                    </div>
                    <h2>Final interview</h2>
                    <p>If you make it this far, you must be great at what you do. You'll jump on a call with the founder of Growthmentor to reaffirm everything, forge a real relationship, and get onboarded personally.</p>
                </div>
            </div>


        </div>
    </div>
</section>
<!--apply mentor end-->

<!--mentor say-->
<section class="section-mentor-say mt-5">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <h1 class="heading-title text-primary fs-30">What our mentors say</h1>
        </div>
        <div class="owl-carousel" id="mentorSays">
            <div class="item">
                <div class="mentor-say-card">
                    <div class="row ">
                        <div class="col-sm-3 position-relative">
                            <div class="mentor-say-card-img ml-3">
                                <img src="assets/images/mentor.png" class="w-auto">
                            </div>

                        </div>
                        <div class="col-sm-9">
                            <div class="mentor-say-card-content pl-3 pt-5 pr-5">
                                <p>“Opengrowth has changed my life. It’s allowed me to follow my passion and become a teacher I love to see my students succeed and hear them say they’ve learned more, quicker, from my courses than they did in college. It’s so humbling.”</p>
                                <h3 class="mb-0">Supriya Devnath Developer </h3>
                                <h5 class="pb-4">(Android Speciality)</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="mentor-say-card">
                    <div class="row ">
                        <div class="col-sm-3 position-relative">
                            <div class="mentor-say-card-img ml-3">
                                <img src="assets/images/mentor.png" class="w-auto">
                            </div>

                        </div>
                        <div class="col-sm-9">
                            <div class="mentor-say-card-content pl-3 pt-5 pr-5">
                                <p>“Opengrowth has changed my life. It’s allowed me to follow my passion and become a teacher I love to see my students succeed and hear them say they’ve learned more, quicker, from my courses than they did in college. It’s so humbling.”</p>
                                <h3  class="mb-0">Supriya Devnath Developer </h3>
                                <h5 class="pb-4">(Android Speciality)</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="mentor-say-card">
                    <div class="row ">
                        <div class="col-sm-3 position-relative">
                            <div class="mentor-say-card-img ml-3">
                                <img src="assets/images/mentor.png" class="w-auto">
                            </div>

                        </div>
                        <div class="col-sm-9">
                            <div class="mentor-say-card-content pl-3 pt-5 pr-5">
                                <p>“Opengrowth has changed my life. It’s allowed me to follow my passion and become a teacher I love to see my students succeed and hear them say they’ve learned more, quicker, from my courses than they did in college. It’s so humbling.”</p>
                                <h3  class="mb-0">Supriya Devnath Developer </h3>
                                <h5 class="pb-4">(Android Speciality)</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="row justify-content-center  mt-5">
            <div class="col-md-8">
                <div class="become-mentor">
                    <h1 class="heading-title text-primary fs-30 text-center">Become an Mentor today</h1>
                    <p class="text-center mt-2">Join one of the world’s largest online learning marketplaces.</p>
                    <a href="" class="mt-3 btn btn-primary">Book a Session</a>
                    <span class="d-block text-center">Have any more questions about OpenGrowth mentor mentorship?<br> Write to us at hello@opengrowth.com and we'll be in touch!</span>
                </div>
            </div>
        </div>
    </div>
</section>
<!--mentor say end-->

<?php
    include_once "footer.php";
?>
<script src="assets/js/jquery.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/owl-carousel.js"></script>

<script>

    $("#mentorSays").owlCarousel({
        autoplay: false,
        rewind: true,
        margin: 20,
        responsiveClass: true,
        autoHeight: true,
        autoplayTimeout: 8000,
        smartSpeed: 800,
        nav: false,
        navText: ['<span class="fas fa-arrow-left "></span>','<span class="fas fa-arrow-right"></span>'],
        items: 1,
        stagePadding: 150
    });
</script>
</body>
</html>
