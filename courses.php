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
</head>
<body>
<?php
    include_once "header.php";
?>
<!--course search-->
<section class="section-course-search">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 br-8 bg-primary p-4">
                <h3 class="text-white text-center">Search Courses & Build your skills.</h3>
                <div class="row">
                    <div class="col-md-3 d-flex align-items-center col-sm-12">
                        <div class="bg-white br-8 w-100 text-center p-10">
                            <span class="text-primary fs-14">Categories</span>
                        </div>
                    </div>
                    <div class="col-md-9 sm-mt-10">
                        <form>
                            <div class="input-group br-8">
                                <div class="newsletter_input_group br-8">
                                    <input class="" placeholder="What do you want to learn?" name="email" type="text" required>
                                    <button type="submit" class="br-8">Search</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--course search end-->

<!--popular course -->
<section class="section-popular-course">
    <div class="container">
        <div class="row justify-content-center">
            <h3 class="text-primary">Most Popular Courses</h3>
            <div class="mentor-links text-center">
                <a href="" class="btn btn-outline-primary br-8">Categories</a>
                <a href="" class="btn btn-outline-primary br-8">Leadership</a>
                <a href="" class="btn btn-outline-primary br-8">Digital Marketing</a>
                <a href="" class="btn btn-outline-primary br-8">Interaction Design</a>
                <a href="" class="btn btn-outline-primary br-8">Raise Capital</a>
                <a href="" class="btn btn-outline-primary br-8">Financial</a>
            </div>
        </div>
    </div>
</section>
<!--popular course end-->

<!--featured courses-->
<section class="section-featured">
    <div class="container">
        <div class="row justify-content-center">
            <h3 class="text-primary text-center">Featured courses</h3>
        </div>
        <div class="row justify-content-center mt-3">
            <div class="col-md-10">
                <div class="featured-shadow bg-white featured-card">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="assets/images/course-fetaure.png">
                        </div>
                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-md-8">
                                    <h5 class="text-primary fs-20">Simple AI Learning for everybody</h5>
                                    <p class="paragraph-1 fs-12">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <div class="course-box-user d-flex justify-content-between align-items-center">
                                        <div class="course-box-user-detail d-flex align-items-center">
                                            <img src="assets/images/icons/person_icon.png" style="width: 40px;height: 40px">
                                            <p class="font-12">By Peter Scarsgard</p>
                                        </div>
                                    </div>
                                    <div class="rating mt-2">
                                        <span class="user-rating text-white fs-12">4.5 <i class="fas fa-star text-white fs-12"></i></span>
                                        <span class="paragraph-1 fs-12">114 Ratings, 40 Reviews</span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <span class="bg-grey1 br-8 pv-5-pb-10 text-grey1 fs-12 d-block text-center">System Design</span>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-lg-5 col-sm-12">
                                    <a href="" class="btn button-primary br-8 pv-5-pb-60">Enroll Now</a>
                                </div>
                                <div class="col-lg-6 col-sm-12 sm-mt-10">
                                    <a href="" class="btn button-secondary br-8 pv-5-pb-60">To Wishlist</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!--featured courses end-->

<!--all courses-->
<section class="section-all-courses">
    <div class="container">
        <div class="row justify-content-center">
            <h1 class="heading-title text-primary">All Courses</h1>
        </div>
        <div class="row mt-5">
            <?php
                for($i=0;$i<9;$i++)
                { ?>
                    <div class="col-md-6 col-lg-4 col-xl-4 col-12 mt-5">
                        <div class="courses-box">
                            <div class="course-box-image">
                                <img src="assets/images/courses.png" class="img-fluid" alt="image1">
                            </div>
                            <div class="course-box-user row align-items-center">
                                <div class="course-box-user-detail d-flex align-items-center col-lg-8">
                                    <img src="assets/images/icons/person_icon.png">
                                    <p class="font-12 fw-500">By Peter Scarsgard</p>
                                </div>

                                <div class="course-box-user-course col-lg-4 p-0">
                                    <span class="bg-grey1 br-8 pv-5-pb-10 text-grey1 fs-12 d-block">System Design</span>
                                </div>
                            </div>
                            <div class="course-box-content">
                                <h3 class ="text-dark-blue py-3 font-20">Simple Ai learning for everybody</h3>
                                <p class="text-grey font-12">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste error, nulla voluptatibus, provident sed hic illo quasi natus sunt nam rerum eius et, dolor nihil praesentium amet maxime quidem inventore.</p>

                            </div>
                            <div class="d-flex justify-content-between course-box-action">
                                <a href="" class="btn btn1 br-8">Enroll now</a>
                                <a href="" class="btn btn2 br-8">To wishlist</a>
                            </div>
                        </div>
                    </div>
             <?php   }
            ?>
        </div>
        <div class="row mt-5 justify-content-center ">
            <ul class="pagination mt-4">
                <li class="page-item">
                    <a class="page-link icon-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                        <span class="sr-only">Previous</span>
                    </a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link icon-link" href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                        <span class="sr-only">Next</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</section>
<!--all courses end-->

<?php
    include_once "footer.php"
?>
<script src="assets/js/jquery.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<script>
    $("#search_box").hide();
    $("#search").on('click',function () {
        $("#search").attr('style', 'display: none !important');
        //$("#search").hide();
        $("#search_box").show();

    })
</script>
</body>
</html>
