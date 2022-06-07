<script src="assets/js/jquery.js"></script>
<header>
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light bg-white">
            <button class="navbar-toggler btn-left" type="button" data-toggle="collapse" data-target="#navbarMobile" aria-controls="navbarMobile" aria-expanded="false" aria-label="Toggle navigation" id="navbarToggler">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse nav-fill w-100" id="nav-left">
                <ul class="nav navbar-nav nav-fill w-100">
                    <li class="nav-item">
                        <a class="nav-link active" href="#"><i class="far fa-user-circle"></i> Login</a>
                    </li>
                    <li class="nav-item px-0">
                        <a class="nav-link" href="#">About Us</a>
                    </li>
                    <li class="nav-item  px-0">
                        <a class="nav-link" href="#">Mentorship</a>
                    </li>
                    <li class="nav-item px-0">
                        <a class="nav-link" href="#">Resources</a>
                    </li>
                </ul>
            </div>

            <div class="mx-auto px-0"><a class="" href="#">
                    <img src="assets/images/logo.png" class="company-logo">
                </a></div>

            <div class="collapse navbar-collapse nav-fill w-100" id="nav-right">

                <ul class="nav navbar-nav nav-fill w-100">
                    <li class="nav-item px-0">
                        <a class="nav-link" href="#">Webinar</a>
                    </li>
                    <li class="nav-item px-0">
                        <a class="nav-link" href="#">Courses</a>
                    </li>
                    <li class="nav-item d-flex align-items-center" id="search">
                        <i class="fas fa-search"></i>


                    </li>

                    <li class="nav-item" id="search_box" style="display: none">
                        <div class="search-box">
                            <i class="fas fa-search"></i>
                            <input class="search-txt" type="text" name="" placeholder="Search">
                        </div>
                    </li>

                    <li class="nav-item" id="applyMentor">
                        <a class="btn btn-outline-dark br-8 " type="submit">Apply as mentor</a>
                    </li>
                </ul>

            </div>

        </nav>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="collapse ml-3" id="navbarMobile">
            <ul class="nav navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="#"><i class="far fa-user-circle"></i> Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Mentorship</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Resources</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">Webinar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Courses</a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-outline-dark" type="submit">Apply as mentor</a>
                </li>
            </ul>
        </div>
    </nav>
</header>

<script>
    $("#search_box").hide();
    $("#search").on('click',function () {
        $("#search").attr('style', 'display: none !important');
        //$("#search").hide();
        $("#search_box").show();
        $("#applyMentor").hide();

    })
</script>
