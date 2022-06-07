<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="assets/puja/css/bootstrap.min.css ">
    <link rel="stylesheet" href="assets/puja/css/style.css ">
    <link rel="stylesheet" href="assets/puja/css/media.css ">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css ">
    <link rel="stylesheet" href="assets/puja/css/owl-carousel.css ">
</head>
<body>
<?php 

$path="https://www.opengrowth.com/assets/puja/images/mentors/";

$json_array =json_decode('[{"img":"niraj.png","title":"Niraj Sharan","subtitle":"Founder (Aura Inc)","tags": ["Healthcare","Agrotech"],"color":"person1"},{"img":"rahul.png","title":"Rahul Krishna","subtitle":"Director (Carre4re Consulting)",
"tags": ["Employer branding","Talent management"],"color":"person2"},{"img":"vibhu.png","title":"Vibhu Srivastava","subtitle":"Data scientist",
"tags": ["Data science and analytics","Project management"],"color":"person3"},{"img":"shruti.png","title":"Shruti Swaroop","subtitle":"Founder (Embrace consulting)",
"tags": ["Diversity & Inclusion","Executive coaching"],"color":"person1"}
]');
?>

<!--popular team start-->
<section class="section-team bg-white mt-0">

    <div class="container team">
        <div class="row justify-content-center mb-3">
            <h1 class="heading-title text-primary">Our Popular Mentors</h1>
        </div>

        <div class="owl-carousel mt-5" id="popularMentors" >
            <?php
            foreach($json_array as $values) {
            ?>
			
			  <div class="item">
                <div class="team-single">
                    <div class="team-single-img">
                        <img src="<?php echo $path.$values->img ?>" class="<?php echo $values->color ?>">
                    </div>
                    <div class="team-single-content">
                        <h2 class="text-center text-primary">
                        <?php echo $values->title ?>
                        </h2>
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
    </div>

</section>
<!--popular team end-->

<script src="assets/puja/js/jquery.js"></script>
<script src="assets/puja/js/bootstrap.min.js"></script>
<script src="assets/puja/js/owl-carousel.js"></script>

<script>

    $("#popularMentors").owlCarousel({
        autoplay: false,
        rewind: true,
        margin: 20,
        responsiveClass: true,
        autoHeight: true,
        autoplayTimeout: 8000,
        smartSpeed: 800,
        nav: false,
        navText: ['<span class="fas fa-arrow-left "></span>','<span class="fas fa-arrow-right"></span>'],
        stagePadding: 100,
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

