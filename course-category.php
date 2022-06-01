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
    <!--<link href="//cdn.muicss.com/mui-0.10.3/css/mui.min.css" rel="stylesheet" type="text/css" />
    <script src="//cdn.muicss.com/mui-0.10.3/js/mui.min.js"></script>-->
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

<!--course design-->
<section class="section-design">
    <div class="container-fluid">
        <div class="row  pl-3 pr-3">
            <div class="d-flex align-items-center">
                <h3 class="text-grey2">Course</h3>
                <i class="fas fa-chevron-right ml-1 mr-1 right-arrow-color"></i>
                <h3 class="text-grey2">All Design Course</h3>
            </div>
        </div>
        <div class="row pl-3 pr-3">
            <hr class="hr1 w-100 m-0"/>
        </div>
        <div class="row mt-2 pl-3 pr-3">
            <div class="col-md-3">
                <button type="button" class="btn btn-outline-primary"><i class="fas fa-sliders-h"></i> Filter</button>
            </div>
            <div class="col-md-9">
                <div class="d-flex justify-content-end">
                    <label class="d-block fs-12">Sort By
                        <select class="category-choice">
                            <option>Most Popular</option>
                            <option>Lowest Price</option>
                        </select>
                    </label>
                </div>
            </div>
        </div>
        <div class="row mt-2 pl-3 pr-3">
            <div class="col-lg-2 col-md-3">
                <hr class="hr1" />
                <div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">
                    <a class="text-decoration-none" data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne1" aria-expanded="true" aria-controls="collapseOne1">
                        <h5 class="mb-0 d-flex justify-content-between filter-category align-items-center">
                            Topic <i class="fas fa-angle-down rotate-icon"></i>
                        </h5>
                    </a>
                    <div id="collapseOne1" class="collapse show mt-1" role="tabpanel" aria-labelledby="headingOne1" data-parent="#accordionEx">
                        <label class="d-block category-checkbox"><input type="checkbox" class="mr-1"> Lorem Ipsum</label>
                        <label class="d-block category-checkbox"><input type="checkbox" class="mr-1"> Lorem Ipsum</label>
                        <label class="d-block category-checkbox"><input type="checkbox" class="mr-1" > Lorem Ipsum</label>
                        <label class="d-block category-checkbox"><input type="checkbox" class="mr-1" > Lorem Ipsum</label>
                        <label class="d-block category-checkbox"><input type="checkbox" class="mr-1" > Lorem Ipsum</label>
                        <span class="fw-700 fs-12">Show More <i class="fas fa-angle-down rotate-icon"></i></span>
                    </div>
                    <hr class="hr1" />
                    <a class="text-decoration-none" data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne2" aria-controls="collapseOne2">
                        <h5 class="mb-0 d-flex justify-content-between filter-category align-items-center">
                            Video Duration <i class="fas fa-angle-up rotate-icon"></i>
                        </h5>
                    </a>
                    <div id="collapseOne2" class="collapse" role="tabpanel" aria-labelledby="headingOne2"
                         data-parent="#accordionEx">
                        <label class="d-block category-checkbox"><input type="checkbox" class="mr-1"> Lorem Ipsum</label>
                        <label class="d-block category-checkbox"><input type="checkbox" class="mr-1"> Lorem Ipsum</label>
                        <label class="d-block category-checkbox"><input type="checkbox" class="mr-1" > Lorem Ipsum</label>
                        <label class="d-block category-checkbox"><input type="checkbox" class="mr-1" > Lorem Ipsum</label>
                        <label class="d-block category-checkbox"><input type="checkbox" class="mr-1" > Lorem Ipsum</label>
                    </div>

                    <hr class="hr1" />
                    <a class="text-decoration-none" data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne3" aria-controls="collapseOne3">
                        <h5 class="mb-0 d-flex justify-content-between filter-category align-items-center">
                            Rating <i class="fas fa-angle-up rotate-icon"></i>
                        </h5>
                    </a>
                    <div id="collapseOne3" class="collapse" role="tabpanel" aria-labelledby="headingOne2"
                         data-parent="#accordionEx">
                        <label class="d-block category-checkbox"><input type="checkbox" class="mr-1"> Lorem Ipsum</label>
                        <label class="d-block category-checkbox"><input type="checkbox" class="mr-1"> Lorem Ipsum</label>
                        <label class="d-block category-checkbox"><input type="checkbox" class="mr-1" > Lorem Ipsum</label>
                        <label class="d-block category-checkbox"><input type="checkbox" class="mr-1" > Lorem Ipsum</label>
                        <label class="d-block category-checkbox"><input type="checkbox" class="mr-1" > Lorem Ipsum</label>
                    </div>


                    <hr class="hr1" />
                    <a class="text-decoration-none" data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne4" aria-controls="collapseOne4">
                        <h5 class="mb-0 d-flex justify-content-between filter-category align-items-center">
                            Subcategory <i class="fas fa-angle-up rotate-icon"></i>
                        </h5>
                    </a>
                    <div id="collapseOne4" class="collapse" role="tabpanel" aria-labelledby="headingOne2"
                         data-parent="#accordionEx">
                        <label class="d-block category-checkbox"><input type="checkbox" class="mr-1"> Lorem Ipsum</label>
                        <label class="d-block category-checkbox"><input type="checkbox" class="mr-1"> Lorem Ipsum</label>
                        <label class="d-block category-checkbox"><input type="checkbox" class="mr-1" > Lorem Ipsum</label>
                        <label class="d-block category-checkbox"><input type="checkbox" class="mr-1" > Lorem Ipsum</label>
                        <label class="d-block category-checkbox"><input type="checkbox" class="mr-1" > Lorem Ipsum</label>
                    </div>


                    <hr class="hr1" />
                    <a class="text-decoration-none" data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne5" aria-controls="collapseOne5">
                        <h5 class="mb-0 d-flex justify-content-between filter-category align-items-center">
                            Language <i class="fas fa-angle-up rotate-icon"></i>
                        </h5>
                    </a>
                    <div id="collapseOne5" class="collapse" role="tabpanel" aria-labelledby="headingOne2"
                         data-parent="#accordionEx">
                        <label class="d-block category-checkbox"><input type="checkbox" class="mr-1"> Lorem Ipsum</label>
                        <label class="d-block category-checkbox"><input type="checkbox" class="mr-1"> Lorem Ipsum</label>
                        <label class="d-block category-checkbox"><input type="checkbox" class="mr-1" > Lorem Ipsum</label>
                        <label class="d-block category-checkbox"><input type="checkbox" class="mr-1" > Lorem Ipsum</label>
                        <label class="d-block category-checkbox"><input type="checkbox" class="mr-1" > Lorem Ipsum</label>
                    </div>


                    <hr class="hr1" />
                    <a class="text-decoration-none" data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne6" aria-controls="collapseOne6">
                        <h5 class="mb-0 d-flex justify-content-between filter-category align-items-center">
                            Features <i class="fas fa-angle-up rotate-icon"></i>
                        </h5>
                    </a>
                    <div id="collapseOne6" class="collapse" role="tabpanel" aria-labelledby="headingOne2"
                         data-parent="#accordionEx">
                        <label class="d-block category-checkbox"><input type="checkbox" class="mr-1"> Lorem Ipsum</label>
                        <label class="d-block category-checkbox"><input type="checkbox" class="mr-1"> Lorem Ipsum</label>
                        <label class="d-block category-checkbox"><input type="checkbox" class="mr-1" > Lorem Ipsum</label>
                        <label class="d-block category-checkbox"><input type="checkbox" class="mr-1" > Lorem Ipsum</label>
                        <label class="d-block category-checkbox"><input type="checkbox" class="mr-1" > Lorem Ipsum</label>
                    </div>

                </div>
            </div>
            <div class="col-lg-10 col-md-9">
                <div class="row">
                    <div class="col-md-6 col-xl-4 col-lg-6 mt-5">
                        <div class="courses-box">
                            <div class="course-box-image">
                                <img src="assets/images/courses.png" class="img-fluid" alt="image1">
                            </div>
                            <div class="course-box-user row">
                                <div class="course-box-user-detail d-flex align-items-center col-lg-6">
                                    <img src="assets/images/icons/person_icon.png">
                                    <p class="font-12">By Peter Scarsgard</p>
                                </div>

                                <div class="course-box-user-course col-lg-6">
                                    <span class="person_skill">Brand Design</span>
                                </div>
                            </div>
                            <div class="course-box-content">
                                <h3 class ="text-dark-blue py-3 font-20">Simple Ai learning for everybody</h3>
                                <p class="text-grey font-12">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste error, nulla voluptatibus, provident sed hic illo quasi natus sunt nam rerum eius et, dolor nihil praesentium amet maxime quidem inventore.</p>

                            </div>
                            <div class="row justify-content-center course-box-action">
                                <div class="col-lg-6 col-md-12 col-sm-12 col-12 mt-1"><a href="" class="btn btn1 br-8">Enroll now</a></div>
                                <div class="col-lg-6 col-md-12 col-sm-12 col-12 mt-1"><a href="" class="btn btn2 br-8">To wishlist</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-4 col-lg-6 mt-5">
                        <div class="courses-box">
                            <div class="course-box-image">
                                <img src="assets/images/courses.png" class="img-fluid" alt="image1">
                            </div>
                            <div class="course-box-user row">
                                <div class="course-box-user-detail d-flex align-items-center col-lg-6">
                                    <img src="assets/images/icons/person_icon.png">
                                    <p class="font-12">By Peter Scarsgard</p>
                                </div>

                                <div class="course-box-user-course col-lg-6">
                                    <span class="person_skill">Brand Design</span>
                                </div>
                            </div>
                            <div class="course-box-content">
                                <h3 class ="text-dark-blue py-3 font-20">Simple Ai learning for everybody</h3>
                                <p class="text-grey font-12">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste error, nulla voluptatibus, provident sed hic illo quasi natus sunt nam rerum eius et, dolor nihil praesentium amet maxime quidem inventore.</p>

                            </div>
                            <div class="row justify-content-center course-box-action">
                                <div class="col-lg-6 col-md-12 col-sm-12 col-12 mt-1"><a href="" class="btn btn1 br-8">Enroll now</a></div>
                                <div class="col-lg-6 col-md-12 col-sm-12 col-12 mt-1"><a href="" class="btn btn2 br-8">To wishlist</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-4 col-lg-6 mt-5">
                        <div class="courses-box">
                            <div class="course-box-image">
                                <img src="assets/images/courses.png" class="img-fluid" alt="image1">
                            </div>
                            <div class="course-box-user row">
                                <div class="course-box-user-detail d-flex align-items-center col-lg-6">
                                    <img src="assets/images/icons/person_icon.png">
                                    <p class="font-12">By Peter Scarsgard</p>
                                </div>

                                <div class="course-box-user-course col-lg-6">
                                    <span class="person_skill">Brand Design</span>
                                </div>
                            </div>
                            <div class="course-box-content">
                                <h3 class ="text-dark-blue py-3 font-20">Simple Ai learning for everybody</h3>
                                <p class="text-grey font-12">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste error, nulla voluptatibus, provident sed hic illo quasi natus sunt nam rerum eius et, dolor nihil praesentium amet maxime quidem inventore.</p>

                            </div>
                            <div class="row justify-content-center course-box-action">
                                <div class="col-lg-6 col-md-12 col-sm-12 col-12 mt-1"><a href="" class="btn btn1 br-8">Enroll now</a></div>
                                <div class="col-lg-6 col-md-12 col-sm-12 col-12 mt-1"><a href="" class="btn btn2 br-8">To wishlist</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-4 col-lg-6 mt-5">
                        <div class="courses-box">
                            <div class="course-box-image">
                                <img src="assets/images/courses.png" class="img-fluid" alt="image1">
                            </div>
                            <div class="course-box-user row">
                                <div class="course-box-user-detail d-flex align-items-center col-lg-6">
                                    <img src="assets/images/icons/person_icon.png">
                                    <p class="font-12">By Peter Scarsgard</p>
                                </div>

                                <div class="course-box-user-course col-lg-6">
                                    <span class="person_skill">Brand Design</span>
                                </div>
                            </div>
                            <div class="course-box-content">
                                <h3 class ="text-dark-blue py-3 font-20">Simple Ai learning for everybody</h3>
                                <p class="text-grey font-12">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste error, nulla voluptatibus, provident sed hic illo quasi natus sunt nam rerum eius et, dolor nihil praesentium amet maxime quidem inventore.</p>

                            </div>
                            <div class="row justify-content-center course-box-action">
                                <div class="col-lg-6 col-md-12 col-sm-12 col-12 mt-1"><a href="" class="btn btn1 br-8">Enroll now</a></div>
                                <div class="col-lg-6 col-md-12 col-sm-12 col-12 mt-1"><a href="" class="btn btn2 br-8">To wishlist</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-4 col-lg-6 mt-5">
                        <div class="courses-box">
                            <div class="course-box-image">
                                <img src="assets/images/courses.png" class="img-fluid" alt="image1">
                            </div>
                            <div class="course-box-user row">
                                <div class="course-box-user-detail d-flex align-items-center col-lg-6">
                                    <img src="assets/images/icons/person_icon.png">
                                    <p class="font-12">By Peter Scarsgard</p>
                                </div>

                                <div class="course-box-user-course col-lg-6">
                                    <span class="person_skill">Brand Design</span>
                                </div>
                            </div>
                            <div class="course-box-content">
                                <h3 class ="text-dark-blue py-3 font-20">Simple Ai learning for everybody</h3>
                                <p class="text-grey font-12">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste error, nulla voluptatibus, provident sed hic illo quasi natus sunt nam rerum eius et, dolor nihil praesentium amet maxime quidem inventore.</p>

                            </div>
                            <div class="row justify-content-center course-box-action">
                                <div class="col-lg-6 col-md-12 col-sm-12 col-12 mt-1"><a href="" class="btn btn1 br-8">Enroll now</a></div>
                                <div class="col-lg-6 col-md-12 col-sm-12 col-12 mt-1"><a href="" class="btn btn2 br-8">To wishlist</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-4 col-lg-6 mt-5">
                        <div class="courses-box">
                            <div class="course-box-image">
                                <img src="assets/images/courses.png" class="img-fluid" alt="image1">
                            </div>
                            <div class="course-box-user row">
                                <div class="course-box-user-detail d-flex align-items-center col-lg-6">
                                    <img src="assets/images/icons/person_icon.png">
                                    <p class="font-12">By Peter Scarsgard</p>
                                </div>

                                <div class="course-box-user-course col-lg-6">
                                    <span class="person_skill">Brand Design</span>
                                </div>
                            </div>
                            <div class="course-box-content">
                                <h3 class ="text-dark-blue py-3 font-20">Simple Ai learning for everybody</h3>
                                <p class="text-grey font-12">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste error, nulla voluptatibus, provident sed hic illo quasi natus sunt nam rerum eius et, dolor nihil praesentium amet maxime quidem inventore.</p>

                            </div>
                            <div class="row justify-content-center course-box-action">
                                <div class="col-lg-6 col-md-12 col-sm-12 col-12 mt-1"><a href="" class="btn btn1 br-8">Enroll now</a></div>
                                <div class="col-lg-6 col-md-12 col-sm-12 col-12 mt-1"><a href="" class="btn btn2 br-8">To wishlist</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-4 col-lg-6 mt-5">
                        <div class="courses-box">
                            <div class="course-box-image">
                                <img src="assets/images/courses.png" class="img-fluid" alt="image1">
                            </div>
                            <div class="course-box-user row">
                                <div class="course-box-user-detail d-flex align-items-center col-lg-6">
                                    <img src="assets/images/icons/person_icon.png">
                                    <p class="font-12">By Peter Scarsgard</p>
                                </div>

                                <div class="course-box-user-course col-lg-6">
                                    <span class="person_skill">Brand Design</span>
                                </div>
                            </div>
                            <div class="course-box-content">
                                <h3 class ="text-dark-blue py-3 font-20">Simple Ai learning for everybody</h3>
                                <p class="text-grey font-12">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste error, nulla voluptatibus, provident sed hic illo quasi natus sunt nam rerum eius et, dolor nihil praesentium amet maxime quidem inventore.</p>

                            </div>
                            <div class="row justify-content-center course-box-action">
                                <div class="col-lg-6 col-md-12 col-sm-12 col-12 mt-1"><a href="" class="btn btn1 br-8">Enroll now</a></div>
                                <div class="col-lg-6 col-md-12 col-sm-12 col-12 mt-1"><a href="" class="btn btn2 br-8">To wishlist</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-4 col-lg-6 mt-5">
                        <div class="courses-box">
                            <div class="course-box-image">
                                <img src="assets/images/courses.png" class="img-fluid" alt="image1">
                            </div>
                            <div class="course-box-user row">
                                <div class="course-box-user-detail d-flex align-items-center col-lg-6">
                                    <img src="assets/images/icons/person_icon.png">
                                    <p class="font-12">By Peter Scarsgard</p>
                                </div>

                                <div class="course-box-user-course col-lg-6">
                                    <span class="person_skill">Brand Design</span>
                                </div>
                            </div>
                            <div class="course-box-content">
                                <h3 class ="text-dark-blue py-3 font-20">Simple Ai learning for everybody</h3>
                                <p class="text-grey font-12">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste error, nulla voluptatibus, provident sed hic illo quasi natus sunt nam rerum eius et, dolor nihil praesentium amet maxime quidem inventore.</p>

                            </div>
                            <div class="row justify-content-center course-box-action">
                                <div class="col-lg-6 col-md-12 col-sm-12 col-12 mt-1"><a href="" class="btn btn1 br-8">Enroll now</a></div>
                                <div class="col-lg-6 col-md-12 col-sm-12 col-12 mt-1"><a href="" class="btn btn2 br-8">To wishlist</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-4 col-lg-6 mt-5">
                        <div class="courses-box">
                            <div class="course-box-image">
                                <img src="assets/images/courses.png" class="img-fluid" alt="image1">
                            </div>
                            <div class="course-box-user row">
                                <div class="course-box-user-detail d-flex align-items-center col-lg-6">
                                    <img src="assets/images/icons/person_icon.png">
                                    <p class="font-12">By Peter Scarsgard</p>
                                </div>

                                <div class="course-box-user-course col-lg-6">
                                    <span class="person_skill">Brand Design</span>
                                </div>
                            </div>
                            <div class="course-box-content">
                                <h3 class ="text-dark-blue py-3 font-20">Simple Ai learning for everybody</h3>
                                <p class="text-grey font-12">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste error, nulla voluptatibus, provident sed hic illo quasi natus sunt nam rerum eius et, dolor nihil praesentium amet maxime quidem inventore.</p>

                            </div>
                            <div class="row justify-content-center course-box-action">
                                <div class="col-lg-6 col-md-12 col-sm-12 col-12 mt-1"><a href="" class="btn btn1 br-8">Enroll now</a></div>
                                <div class="col-lg-6 col-md-12 col-sm-12 col-12 mt-1"><a href="" class="btn btn2 br-8">To wishlist</a></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
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
<!--course design end-->

<?php
    include_once "footer.php";
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
