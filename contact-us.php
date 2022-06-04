<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Single blog PAGE</title>
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

<section class="section-contact-banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 ">
                <div class="image">
                    <img src="assets/images/contact.png">
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <h1><span>Connecting people</span> with knowledge</h1>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="contact-form-card">
                    <h6>Ask anything</h6>
                    <form method="post">

                        <div class="input-group mb-4">
                            <div><img src="assets/images/apps.png"></div>
                            <select class="form-control" name="mentorship">
                                <option>Mentorship</option>
                                <option>Leadership</option>
                            </select>
                        </div>

                        <div class="input-group mb-4">
                            <div><img src="assets/images/user.png"></div>
                            <input class="form-control" placeholder="Name" type="text" required>
                        </div>

                        <div class="input-group mb-4">
                            <div><img src="assets/images/email.png"></div>
                            <input class="form-control" placeholder="Email" type="email" required>
                        </div>
                        <textarea rows="5" class="input-group" name="query" required placeholder="Write your Quary"></textarea>

                        <button type="submit" class="btn btn-primary">Send your Quary</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-map">
    <div class="container">
        <div class="row map-card align-items-center">
            <div class="col-md-4">
                <div class="row">
                    <div class="col-3 pl-3">
                        <div class="icon-container">
                            <img src="assets/images/icons/call.png">
                        </div>
                    </div>
                    <div class="col-9 d-flex align-items-center">
                        <p class="mb-0">(+91) 7070367779</p>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-3 pl-3">
                        <div class="icon-container">
                            <img src="assets/images/icons/location.png">
                        </div>
                    </div>
                    <div class="col-9 d-flex align-items-center">
                        <p class="mb-0">2100 Geng Road, Suite 210, Palo Alto CA, 94303</p>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-3 pl-3">
                        <div class="icon-container">
                            <img src="assets/images/icons/email.png">
                        </div>
                    </div>
                    <div class="col-9 d-flex align-items-center">
                        <p class="mb-0">Info@opengrowth.com</p>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <img src="assets/images/map.png">
            </div>
        </div>
    </div>
</section>

<section class="section-faq">
    <div class="container">
        <div class="row">
            <h6 class="faq-heading">Frequently Asked Questions</h6>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="faq-accordion accordion md-accordion" id="faqACD" role="tablist"  aria-multiselectable="true">
                    <!--1-->
                    <a class="text-decoration-none faq-accordion-bg d-flex justify-content-between align-items-center pv-5-pb-10" data-toggle="collapse" data-parent="#faqACD" href="#collapseOne1" aria-expanded="true" aria-controls="collapseOne1">
                        <h5 class="mb-0 filter-category align-items-center text-black pv-5-pb-10 faq-accordion-bg">
                            <i class="fas fa-angle-down rotate-icon mr-3"></i> Lorem Ipsum is simply dummy text
                        </h5>
                    </a>
                    <div id="collapseOne1" class="collapse show mt-1" role="tabpanel" aria-labelledby="headingOne1" data-parent="#faqACD">
                        <p class="faq-detail">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                    </div>
                    <!--2-->
                    <a class="text-decoration-none mt-3 faq-accordion-bg d-flex justify-content-between align-items-center pv-5-pb-10" data-toggle="collapse" data-parent="#faqACD" href="#collapseOne2" aria-expanded="true" aria-controls="collapseOne2">
                        <h5 class="mb-0 filter-category align-items-center text-black pv-5-pb-10 faq-accordion-bg">
                            <i class="fas fa-angle-down rotate-icon mr-3"></i> Lorem Ipsum is simply dummy text
                        </h5>
                    </a>
                    <div id="collapseOne2" class="collapse mt-1" role="tabpanel" aria-labelledby="headingOne1" data-parent="#faqACD">
                        <p class="faq-detail">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                    </div>

                    <!--3-->
                    <a class="text-decoration-none mt-3 faq-accordion-bg d-flex justify-content-between align-items-center pv-5-pb-10" data-toggle="collapse" data-parent="#faqACD" href="#collapseOne3" aria-expanded="true" aria-controls="collapseOne3">
                        <h5 class="mb-0 filter-category align-items-center text-black pv-5-pb-10 faq-accordion-bg">
                            <i class="fas fa-angle-down rotate-icon mr-3"></i> Lorem Ipsum is simply dummy text
                        </h5>
                    </a>
                    <div id="collapseOne3" class="collapse mt-1" role="tabpanel" aria-labelledby="headingOne1" data-parent="#faqACD">
                        <p class="faq-detail">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                    </div>

                    <!--4-->
                    <a class="text-decoration-none mt-3 faq-accordion-bg d-flex justify-content-between align-items-center pv-5-pb-10" data-toggle="collapse" data-parent="#faqACD" href="#collapseOne4" aria-expanded="true" aria-controls="collapseOne4">
                        <h5 class="mb-0 filter-category align-items-center text-black pv-5-pb-10 faq-accordion-bg">
                            <i class="fas fa-angle-down rotate-icon mr-3"></i> Lorem Ipsum is simply dummy text
                        </h5>
                    </a>
                    <div id="collapseOne4" class="collapse mt-1" role="tabpanel" aria-labelledby="headingOne1" data-parent="#faqACD">
                        <p class="faq-detail">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                    </div>

                    <!--5-->
                    <a class="text-decoration-none mt-3 faq-accordion-bg d-flex justify-content-between align-items-center pv-5-pb-10" data-toggle="collapse" data-parent="#faqACD" href="#collapseOne5" aria-expanded="true" aria-controls="collapseOne5">
                        <h5 class="mb-0 filter-category align-items-center text-black pv-5-pb-10 faq-accordion-bg">
                            <i class="fas fa-angle-down rotate-icon mr-3"></i> Lorem Ipsum is simply dummy text
                        </h5>
                    </a>
                    <div id="collapseOne5" class="collapse mt-1" role="tabpanel" aria-labelledby="headingOne1" data-parent="#faqACD">
                        <p class="faq-detail">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                    </div>

                    <!--6-->
                    <a class="text-decoration-none mt-3 faq-accordion-bg d-flex justify-content-between align-items-center pv-5-pb-10" data-toggle="collapse" data-parent="#faqACD" href="#collapseOne6" aria-expanded="true" aria-controls="collapseOne6">
                        <h5 class="mb-0 filter-category align-items-center text-black pv-5-pb-10 faq-accordion-bg">
                            <i class="fas fa-angle-down rotate-icon mr-3"></i> Lorem Ipsum is simply dummy text
                        </h5>
                    </a>
                    <div id="collapseOne6" class="collapse mt-1" role="tabpanel" aria-labelledby="headingOne1" data-parent="#faqACD">
                        <p class="faq-detail">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                    </div>

                </div>

            </div>
        </div>
    </div>
</section>

<section class="section-contact-ask">
    <div class="container">
        <div class="row contact-ask-card">
            <div class="col-lg-6">
                <img src="assets/images/contact-1.png">
            </div>
            <div class="col-lg-6">
                <div class="ask-desc">
                    <p>OpenGrowth Community</p>
                    <h2>Ask, Share, Discuss and Clear Your Problems</h2>
                    <span>Ask your doubts here with OpenGrowth community and get the answers by experts and other entrepreneur.</span>
                    <textarea required class="form-control" rows="7"  placeholder="Sample Question : Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book."></textarea>
                    <div class="row">
                        <div class="col-md-7">
                            <input class="form-control" name="email" type="email" placeholder="Email: loremipsum@gmail.com">
                        </div>
                        <div class="col-md-5 d-flex align-items-center">
                            <button type="submit" class="btn btn-secondary">Ask to expert</button>
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
<script src="assets/js/owl-carousel.js"></script>

</body>
</html>



