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
<?php 

$path="https://www.opengrowth.com/assets/images/mentors/";

$json_array =json_decode('[{"img":"niraj.png","title":"Niraj Sharan","subtitle":"Founder (Aura Inc)","tags": ["Healthcare","Agrotech"],"color":"person1"},{"img":"rahul.png","title":"Rahul Krishna","subtitle":"Director (Carre4re Consulting)",
"tags": ["Employer branding","Talent management"],"color":"person2"},{"img":"vibhu.png","title":"Vibhu Srivastava","subtitle":"Data scientist",
"tags": ["Data science and analytics","Project management"],"color":"person3"},{"img":"shruti.png","title":"Shruti Swaroop","subtitle":"Founder (Embrace consulting)",
"tags": ["Diversity & Inclusion","Executive coaching"],"color":"person1"}
]');
?>
<!--banner start-->
<section class="section-banner">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-sm-12">
                <img src="assets/images/apply-banner.svg" alt="banner " class="w-auto">
            </div>
            <div class="col-lg-6 col-sm-12">
                <h1 class="heading-1"><span class="learn">Meet our </span>Worldclass mentors</h1>
                <p class="paragraph-1">Take your business to the next level. Learn from the top industry professionals who are redefining the concept of mentorship through holistic coaching.</p>
                <div class="row justify-content-center">
                    <div class="search-group flex-fill mr-hr-10">
                        <input class="input-search" placeholder="Search Mentors">
                        <i class="fas fa-search"></i>
                    </div>
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
                    <h2>Are you a mentor material?</h2>
					 <div class="form-group input-bottom-margin">
                        <label>If your answer is YES  to each of these - <span class="text-danger">*</span></label>
						

                        <div><input type="checkbox" name="interest"  checked ><span class="gender-span ml-3" >Ask questions to the mentee rather than assuming</span></div>
                        <div><input type="checkbox" name="interest" ><span class="gender-span ml-3">Develop trust with the mentee</span></div>
                        <div><input type="checkbox" name="interest" ><span class="gender-span ml-3">Research for the personalized resources for mentees</span></div>
                        <div><input type="checkbox" name="interest" value="Career Counselling"><span class="gender-span ml-3">Share the success and failure stories as well</span></div>
						
						 <label>Then go ahead and apply for the mentorship.<span class="text-danger">*</span></label>
						 
                    </div>
                    <div class="mt-4">
                        <a href="" class="btn btn-primary br-8">Apply For Mentorship </a>
                    </div>
                </div>

            </div>
            <div class="col-md-6 sm-mt-20">
                <div class="owl-carousel" id="mentorApply">
                    <div class="item">
                        <div class="design-img">
                            <img src="assets/images/apply-banner-2.png">
                        </div>
                    </div>

                    <div class="item">
                        <div class="design-img">
                            <img src="assets/images/apply-banner-2.png">
                        </div>
                    </div>

                    <div class="item">
                        <div class="design-img">
                            <img src="assets/images/apply-banner-2.png">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--design end-->



<!--team start-->
<section class="section-team mt-0 bg-white" >

    <div class="container team">
        <div class="row justify-content-center">
            <h1 class="heading-title text-primary">Our Mentor And Coaches</h1>
        </div>
        <div class="row mt-3">
            <div class="col-12">
                <p class="text-center text-grey">College & bookish knowledge doesn’t prepare you for real-world and challenges of start ups.<br> Opengrowth, co-creates programs with top industry professionals who can help you get years ahead in your career.</p>
            </div>
        </div>

        <div class="row mb-100 justify-content-center">
			<?php
            foreach($json_array as $values) {
            ?>
			<div class="col-md-4 mt-5 sm-mt-10 sm-ml-10 sm-mr-10">
                <div class="team-single">
                    <div class="team-single-img">
                        <img src="<?php echo $path.$values->img ?>" class="<?php echo $values->color ?>">
                    </div>
                    <div class="team-single-content">
                        <h2 class="text-center text-primary"><?php echo $values->title ?></h2>
                        <p><?php echo $values->subtitle ?></p>
                        <div class="d-flex justify-content-center">
                            <span class="person_skill"><?php echo $values->tags[0] ?></span>
                            <span class="person_skill"><?php echo $values->tags[1] ?></span>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>

           

        </div>

        <div class="row justify-content-between coach-our">
            <div class="col-md-4">
                <a href="" class="btn btn-primary br-8">Show More</a>
            </div>
            <div class="col-md-5">
                <ul class="pagination">
                    <li><span class="active">1</span></li>
                    <li><span>2</span></li>
                    <li><span>3</span></li>
                    <li><span>4</span></li>
                    <li><span>5</span></li>
                    <li><span>6</span></li>
                    <li><span>7</span></li>
                    <li><span>8</span></li>
                </ul>
            </div>

        </div>

    </div>

</section>
<!--team end-->


<section class="section-goal">
    <div class="container">
        <div class="row grow-t">
            <div class="col-md-8">
                <h1>Goal based packages </h1>
                <p>Now, you don’t have to treasure hunt the various mentorship programs. We have customized every package according to your needs. Book a 1:1 session with our mentor today.</p>
            </div>
            <div class="col-md-4">
                <a href="" class="btn btn-primary">View All Packages</a>
            </div>
        </div>

        <div class="owl-slider mt-5">
            <div id="featuredCarousel" class="owl-carousel">
                <?php
                    for($i=0;$i<5;$i++)
                    { ?>
                        <div class="item">
                            <div class="blog-single">
                                <div class="blog-image">
                                    <img src="assets/images/goal-1.png">
                                </div>
                                <div class="d-flex grow-tag mt-3 mb-2">
                                    <span>Students</span>
                                    <span>Professionals</span>
                                </div>
                                <h4 class="grow-title">Developing Strategy to Manage Startup Finances</h4>
                                <p class="grow-para">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                <a href="" class="btn btn-primary grow-btn">Enroll Now @ ₹ 4999 Only</a>
                            </div>
                        </div>
                 <?php   }
                ?>
            </div>
        </div>


    </div>
</section>


<!--popular team start-->
<?php require 'popular-mentor.php' ?>

<!--popular team end-->

<!--apply mentor start-->
<section class="section-apply-process">
    <div class="container  br-t-1 br-b-1">

        <div class="row justify-content-center">
            <h1 class="heading-title text-primary">Why are our mentors so unique? </h1>
        </div>
      
        <div class="row mb-100">
            <div class="col-md-3">
                <div class="process-single">
                    <div class="text-center">
                        <h1>01</h1>
                    </div>
                    <h2>Initial application</h2>
                    <p>Get interactive and productive sessions with our mentor.</p>
                </div>
            </div>

            <div class="col-md-3">
                <div class="process-single">
                    <div class="text-center">
                        <h1>02</h1>
                    </div>
                    <h2>Initial application</h2>
                    <p>Gain fresh perspectives on the particular industry that your business belongs to.</p>
                </div>
            </div>

            <div class="col-md-3">
                <div class="process-single">
                    <div class="text-center">
                        <h1>03</h1>
                    </div>
                    <h2>Practical assessment</h2>
                    <p>Receive the personalized solutions to your business query</p>
                </div>
            </div>

            <div class="col-md-3">
                <div class="process-single">
                    <div class="text-center">
                        <h1>04</h1>
                    </div>
                    <h2>Final interview</h2>
                    <p>Experience the exclusive diversity of knowledge through our mentor.</p>
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
                            <div class="mentor-say-card-content pl-3 pr-5">
                                <p>“Opengrowth has changed my life. It’s allowed me to follow my passion and become a teacher I love to see my students succeed and hear them say they’ve learned more, quicker, from my courses than they did in college. It’s so humbling.”</p>
                                <h3 class="mb-0">Supriya Devnath Developer </h3>
                                <h5 class="">(Android Speciality)</h5>
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
                            <div class="mentor-say-card-content pl-3 pr-5">
                                <p>“Opengrowth has changed my life. It’s allowed me to follow my passion and become a teacher I love to see my students succeed and hear them say they’ve learned more, quicker, from my courses than they did in college. It’s so humbling.”</p>
                                <h3 class="mb-0">Supriya Devnath Developer </h3>
                                <h5 class="">(Android Speciality)</h5>
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
                            <div class="mentor-say-card-content pl-3 pr-5">
                                <p>“Opengrowth has changed my life. It’s allowed me to follow my passion and become a teacher I love to see my students succeed and hear them say they’ve learned more, quicker, from my courses than they did in college. It’s so humbling.”</p>
                                <h3 class="mb-0">Supriya Devnath Developer </h3>
                                <h5 class="">(Android Speciality)</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>
<!--mentor say end-->

<!--gate started-->
<section class="section-get-started">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-10">
                <div class="get-started">
                    <div class="row align-items-end mentorship-start">
                        <div class="col-md-2 ">
                            <img src="assets/images/persona-m-1.png" style="">
                        </div>
                        <div class="col-md-10 mb-2 mt-2">
                            <h3>Time to give back and <span>change the world </span></h3>
                            <p class="fs-14 fw-500 text-white">Everything keeps changing with time - that’s constant. And this is what we want our community of enthusiastic entrepreneurs to understand. We want them to evolve with time and strengthen their community.</p>
                            <a href="" class="btn btn-secondary fs-14 border-0">Read More <i class="fas fa-arrow-right"></i> </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--get started end-->
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
        margin: 10,
        responsiveClass: true,
        autoHeight: true,
        autoplayTimeout: 8000,
        smartSpeed: 800,
        nav: false,
        navText: ['<span class="fas fa-arrow-left "></span>','<span class="fas fa-arrow-right"></span>'],
        items: 1,
        stagePadding: 150
    });

    $("#mentorApply").owlCarousel({
        autoplay: false,
        rewind: true,
        margin: 10,
        responsiveClass: true,
        autoHeight: true,
        autoplayTimeout: 3000,
        smartSpeed: 800,
        navText: ['<span class="fas fa-arrow-left "></span>','<span class="fas fa-arrow-right"></span>'],
        items: 1,
        pagination:false,
        navigation:true
    });
    $("#featuredCarousel").owlCarousel({
        autoplay: false,
        rewind: true,
        margin: 10,
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
                items: 3
            },

            1366: {
                items: 3
            }
        }
    });

</script>
<script>

    $("#popularMentors").owlCarousel({
        autoplay: false,
        rewind: true,
        margin: 20,
        responsiveClass: true,
        autoHeight: true,
        autoplayTimeout: 8000,
        smartSpeed: 800,
        loop:false,
        nav: false,
        navText: ['<span class="fas fa-arrow-left "></span>','<span class="fas fa-arrow-right"></span>'],
        responsive: {
            0: {
                items: 1
            },

            600: {
                items: 2
            },

            1024: {
                items: 3
            },

            1366: {
                items: 3
            }
        }
    });
</script>
</body>
</html>

