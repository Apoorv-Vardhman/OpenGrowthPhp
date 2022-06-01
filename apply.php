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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/12.1.6/css/intlTelInput.css">
</head>
<body>
<?php
    include_once "header.php";
?>

<section class="apply-section">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-md-5">
                <form action="" method="post" class="apply-form">
                    <h3>Enter your details below</h3>
                    <div class="form-group input-bottom-margin">
                        <label>Full name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" placeholder="Full name" required>
                    </div>

                    <div class="form-group input-bottom-margin">
                        <label>Email <span class="text-danger">*</span></label>
                        <input type="email" class="form-control" placeholder="Enter Email address " required>
                    </div>

                    <div class="form-group input-bottom-margin">
                        <label>Phone Number <span class="text-danger">*</span></label>
                        <div class="input-group input-group-sm">
                            <input id="phone" type="tel" class="form-control w-100" required>
                        </div>
                    </div>

                    <div class="form-group input-bottom-margin">
                        <label>LinkedIn Profile Link <span class="text-danger">*</span></label>
                        <input type="url" class="form-control" placeholder="Enter Linkdln profile URL" required>
                    </div>

                    <div class="form-group input-bottom-margin">
                        <label>Gender <span class="text-danger">*</span></label>
                        <div>
                            <input type="radio" name="gender" value="Male" checked><span class="gender-span">Male</span>
                            <input type="radio" name="gender" value="Female"  ><span class="gender-span">Female</span>
                            <input type="radio" name="gender" value="Other" ><span class="gender-span">Other</span>
                        </div>
                    </div>

                    <div class="form-group input-bottom-margin">
                        <label>Date of Birth <span class="text-danger">*</span></label>
                        <input type="date" class="form-control" placeholder="dd-mm-yyyy" required>
                    </div>

                    <div class="form-group input-bottom-margin">
                        <label>Address <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" placeholder="Enter your address" required>
                    </div>

                    <div class="form-group input-bottom-margin">
                        <label>Choose your Intrest <span class="text-danger">*</span></label>
                        <div><input type="radio" name="interest"  checked ><span class="gender-span">Entrepreneurship</span></div>
                        <div><input type="radio" name="interest" ><span class="gender-span">Business Coach</span></div>
                        <div><input type="radio" name="interest" ><span class="gender-span">Industry Mentorship</span></div>
                        <div><input type="radio" name="interest" value="Career Counselling"><span class="gender-span">Career Counselling</span></div>
                        <div><input type="radio" name="interest" value="Create Webinars, Workshops etc."><span class="gender-span">Create Webinars, Workshops etc.</span></div>
                        <div><input type="radio" name="interest"  value="Others"><span class="gender-span">Others</span></div>

                    </div>

                    <div class="form-group input-bottom-margin">
                        <label>Who do you want to mentor? <span class="text-danger">*</span></label>
                        <div><input type="radio" name="mentor_do"  checked ><span class="gender-span">Students</span></div>
                        <div><input type="radio" name="mentor_do"  ><span class="gender-span">Entrepreneurs</span></div>
                        <div><input type="radio" name="mentor_do"  ><span class="gender-span">Professionals</span></div>
                    </div>

                    <div class="form-group input-bottom-margin">
                        <label>Select your industry <span class="text-danger">*</span></label>
                        <select class="form-control" required name="industry">
                            <option value="" selected>Choose</option>
                        </select>
                    </div>

                    <div class="form-group input-bottom-margin">
                        <label>If Others, please specify</label>
                        <select class="form-control" required name="industry">
                            <option value="Other Industry" selected>Other Industry</option>
                        </select>
                    </div>

                    <div class="form-group input-bottom-margin">
                        <label>Choose Domain Expertise (1st Preference) <span class="text-danger">*</span> </label>
                        <select class="form-control" required name="industry">
                            <option value="" selected>Choose</option>
                        </select>
                    </div>

                    <div class="form-group input-bottom-margin">
                        <label>Choose Domain Expertise (2nd Preference) <span class="text-danger">*</span> </label>
                        <select class="form-control" required name="industry">
                            <option value="" selected>Choose</option>
                        </select>
                    </div>

                    <div class="form-group input-bottom-margin">
                        <label>Choose Domain Expertise (3rd Preference) <span class="text-danger">*</span> </label>
                        <select class="form-control" required name="industry">
                            <option value="" selected>Choose</option>
                        </select>
                    </div>

                    <div class="form-group input-bottom-margin">
                        <label>Graduation (Mandatory) <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" placeholder="University/College" required>
                        <input type="text" class="form-control mt-3" placeholder="Degree" required>
                        <input type="text" class="form-control mt-3" placeholder="Passout Year" required>
                    </div>

                    <div class="form-group input-bottom-margin">
                        <label>Post Gradution </label>
                        <input type="text" class="form-control" placeholder="University/College" required>
                        <input type="text" class="form-control mt-3" placeholder="Degree" required>
                        <input type="text" class="form-control mt-3" placeholder="Passout Year" required>
                    </div>

                    <div class="form-group input-bottom-margin">
                        <label>Write a short bio about yourself <span class="text-danger">*</span> </label>
                        <textarea placeholder="Write about yourself..." class="form-control" required rows="5"></textarea>
                    </div>

                    <div class="form-group input-bottom-margin">
                        <label>Write a short bio about yourself <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" placeholder="Write about yourself..." required>
                    </div>

                    <div class="form-group">
                        <button type="submit" name="submit">Submit</button>
                    </div>

                    <div class="d-flex justify-content-center mt-4 account-margin">
                        Already have an account? <a href="" class="text-link">Login</a>
                    </div>

                </form>
            </div>
            <div class="col-md-6">
                <div class="apply-desc">
                    <img src="assets/images/apply-banner.png">
                    <h1>Be a Mentor</h1>
                    <div class="paragraph">
                        <p>Leave your information with us and we’ll get back to you.</p>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/12.1.6/js/intlTelInput.min.js"></script>
<script>
    $("#search_box").hide();
    $("#search").on('click',function () {
        $("#search").attr('style', 'display: none !important');
        //$("#search").hide();
        $("#search_box").show();

    })
    let telInput = $("#phone")

    // initialize
    telInput.intlTelInput({
        initialCountry: 'in',
        preferredCountries: ['us','gb','br','ru','cn','es','it'],
        autoPlaceholder: 'aggressive',
        separateDialCode: true,
        preventInvalidNumbers: true,
        utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/12.1.6/js/utils.js",
        geoIpLookup: function(callback) {
            fetch('https://ipinfo.io/json', {
                cache: 'reload'
            }).then(response => {
                if ( response.ok ) {
                    return response.json()
                }
                throw new Error('Failed: ' + response.status)
            }).then(ipjson => {
                callback(ipjson.country)
            }).catch(e => {
                callback('us')
            })
        }
    })

</script>
</body>
</html>
