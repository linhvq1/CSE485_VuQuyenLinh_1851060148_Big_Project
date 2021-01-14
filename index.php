<?php 
    
    // See the password_hash() example to see where this came from.
    // $getNewPass = "1234";
    // $hashNewPass = password_hash($getNewPass, PASSWORD_DEFAULT);
    // echo $hashNewPass;
?> 
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="fontawesome-free-5.12.0-web/css/all.css" rel="stylesheet">
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet"> 
    <link rel="stylesheet" href="css/root.min.css">
    <link rel="stylesheet" href="vendor/simplebar/simplebar.css">
  </head>
  <body>
    <section class="wrapper">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-5 col-lg-3 text-white sidebar background-blue">
                    <div class="col-md-12 mx-auto">
                        <figure class="profile-image mx-auto d-flex flex-column justify-content-center">
                            <img class="img-fluid rounded-circle" src="img/unnamed.png" alt="profile_pic">
                            <figcaption class="text-center"><small class="d-block">Vu</small>Linh</figcaption>
                        </figure>
                        <ul class="list-unstyled main-menu mt-5">
                        <li><a href="#about-me" class="font-weight-bold text-white"><i class="fa fa-user-tie"></i>About Me</a></li>
                        <li><a href="#experience" class="font-weight-bold text-white"><i class="fa fa-book"></i>Experience</a></li>
                        <li><a href="#portfolio" class="font-weight-bold text-white"><i class="fa fa-toolbox"></i>Portfolio</a></li>
                        <li><a href="#contact" class="font-weight-bold text-white"><i class="fa fa-envelope"></i>Contact</a></li>
                        </ul>
                        <ul class="list-unstyled list-inline mt-3 text-center">
                            <li class= "list-inline-item"><a href="#" class="text-white"><i class="fab fa-facebook-f"></i></a></li>
                            <li class= "list-inline-item"><a href="#" class="text-white"><i class="fab fa-instagram"></i></a></li>
                            <li class= "list-inline-item"><a href="#" class="text-white"><i class="fab fa-youtube"></i></a></li>
                            <li class= "list-inline-item"><a href="#" class="text-white"><i class="fab fa-twitter"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div id="about-me" data-simplebar class="col-12 col-sm-12 col-md-7 col-lg-9 content about-me active">
                    <div class="card about-me">
                        <h3 class="sideline font-weight-bold mb-2">About Me</h3>
                        <div class="font-weight-bold label title mb-2"><i class="fas fa-code"></i>Web Deverloper - Designer</div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus nesciunt dignissimos possimus voluptatibus ad, cum nemo hic recusandae architecto voluptas consectetur nisi. Quas cupiditate vitae recusandae ex dolore amet ipsum!</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque, incidunt. Blanditiis sapiente similique tenetur vitae laudantium modi sed pariatur!</p>
                        <h3 class="sideline font-weight-bold mb-3">Hobbies and Interests</h3>
                        <div class="row interests mb-3">
                            <div class="col-4 col-md-4 col-lg-2 text-center mt-3">
                                <i class="text-primary fas fa-tree mb-3"></i>
                                <h6 class="font-weight-bold">Outdoors</h6>
                            </div>
                            <div class="col-4 col-md-4 col-lg-2 text-center mt-3">
                                <i class="text-primary fas fa-guitar mb-3"></i>
                                <h6 class="font-weight-bold">Guitar</h6>
                            </div>
                            <div class="col-4 col-md-4 col-lg-2 text-center mt-3">
                                <i class="text-primary fas fa-book mb-3"></i>
                                <h6 class="font-weight-bold">Books</h6>
                            </div>
                            <div class="col-4 col-md-4 col-lg-2 text-center mt-3">
                                <i class="text-primary fas fa-desktop mb-3"></i>
                                <h6 class="font-weight-bold">Computers</h6>
                            </div>
                            <div class="col-4 col-md-4 col-lg-2 text-center mt-3">
                                <i class="text-primary fas fa-gamepad mb-3"></i>
                                <h6 class="font-weight-bold">Games Dev</h6>
                            </div>
                            <div class="col-4 col-md-4 col-lg-2 text-center mt-3">
                                <i class="text-primary fas fa-plane mb-3"></i>
                                <h6 class="font-weight-bold">Travel</h6>
                            </div>
                        </div>
                        <h3 class="sideline font-weight-bold mb-3">Skills & Proficiency</h3>
                        <style>
                                .item .card{
                                    box-shadow: none;
                                    padding: 0px 15px 5px 15px;
                                    /* padding-left: 15px; */
                                }
                                @media (max-width: 992px) {
                                    .level-title{
                                        font-size: 15px;
                                    }
                                    .level-title-1{
                                        margin-left: 4px;
                                        font-size: 14px;
                                    }
                                }
                        </style>
                        <div class="skillset d-flex flex-column align-items-start">
                            <div class="row item w-100">
                                <div class="col-lg-3 card card--stats d-flex flex-row align-items-center">
                                    <i class="fab fa-ubuntu fs-2"></i>
                                    <h5 class="level-title level-title-1 text-wrapper ml-2 mt-1">OutSystems</h5>
                                </div>
                                <div class="col-lg-9 progress mt-2 pl-0 pr-0 level-bar">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 85%" ></div>
                                </div><!--//level-bar-->
                            </div><!--//item-->
                           
                            <div class="row item w-100">
                                <div class="col-lg-3 card card--stats d-flex flex-row align-items-center">
                                    <i class="fab fa-stack-overflow fs-2"></i>
                                    <h5 class="level-title text-wrapper ml-2 mt-1">MEAN Stack</h5>
                                </div>
                                <div class="col-lg-9 progress mt-2 pl-0 pr-0 level-bar">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 75%" ></div>
                                </div><!--//level-bar-->
                            </div><!--//item-->
                            <div class="row item w-100">
                                <div class="col-lg-3 card card--stats d-flex flex-row align-items-center">
                                    <i class="fab fa-windows fs-2"></i>
                                    <h5 class="level-title text-wrapper ml-2 mt-1">C#/C++</h5>
                                </div>
                                <div class="col-lg-9 progress mt-2 pl-0 pr-0 level-bar">
                                    <div class="progress-bar bg-secondary" role="progressbar" style="width: 80%" ></div>
                                </div><!--//level-bar-->
                            </div><!--//item-->
                            <div class="row item w-100">
                                <div class="col-lg-3 card card--stats d-flex flex-row align-items-center">
                                    <i class="fab fa-html5 fs-2"></i>
                                    <h5 class="level-title text-wrapper ml-2 mt-1">HTML5 &amp; CSS</h5>
                                </div>
                                <div class="col-lg-9 progress mt-2 pl-0 pr-0 level-bar">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 65%" ></div>
                                </div><!--//level-bar-->
                            </div><!--//item-->
                            <div class="row item w-100">
                                <div class="col-lg-3 card card--stats d-flex flex-row align-items-center">
                                    <i class="fab fa-python fs-2"></i>
                                    <h5 class="level-title text-wrapper ml-2 mt-1">Python</h5>
                                </div>
                                <div class="col-lg-9 progress mt-2 pl-0 pr-0 level-bar">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 80%" ></div>
                                </div><!--//level-bar-->
                            </div><!--//item-->
                            <div class="row item w-100">
                                <div class="col-lg-3 card card--stats d-flex flex-row align-items-center">
                                    <i class="fab fa-java fs-2"></i>
                                    <h5 class="level-title text-wrapper ml-2 mt-1">java</h5>
                                </div>
                                <div class="col-lg-9 progress mt-2 pl-0 pr-0 level-bar">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 70%" ></div>
                                </div><!--//level-bar-->
                            </div><!--//item-->
 
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-3">
                            <div class="card card--stats d-flex flex-row align-items-center">
                                <i class="text-primary fa fa-award ml-2"></i>
                                <div class="text-wrapper">
                                    <h5 class="font-weight-bold ml-3 mb-0">3 Years</h5>
                                    <p class="ml-3 mb-0">Work Experiences</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-3">
                            <div class="card card--stats d-flex flex-row align-items-center">
                                <i class="text-primary fa fa-users"></i>
                                <div class="text-wrapper">
                                    <h5 class="font-weight-bold ml-3 mb-0">30 Clients</h5>
                                    <p class="ml-3 mb-0">Satisfied</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-3">
                            <div class="card card--stats d-flex flex-row align-items-center">
                                <i class="text-primary fa fa-check-circle"></i>
                                <div class="text-wrapper">
                                    <h5 class="font-weight-bold ml-3 mb-0">15 Projects</h5>
                                    <p class="ml-3 mb-0">Delivered</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-3">
                            <div class="card card--stats d-flex flex-row align-items-center">
                                <i class="text-primary fa fa-wrench"></i>
                                <div class="text-wrapper">
                                    <h5 class="font-weight-bold ml-3 mb-0">10 Avaiable</h5>
                                    <p class="ml-3 mb-0">For Hire</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div data-simplebar class="col-12 col-sm-12 col-md-7 col-lg-9 content experience " id="experience">
                    <div class="card">
                        <h3 class="font-weight-bold sideline mb-3">Experience</h3>
                        <div class="timeline">
                            <div class="job row">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-3 job-date blue">
                                    <i class="far fa-calendar-alt mr-2"></i>02/14 - 07/15
                                </div>
                                <div class="col-12 col-md-12 col-lg-9 job-description">
                                    <h6 class="font-weight-bold">Web Developer Digital Agency</h6>
                                    <h6 class="blue">WordPress, HTML, SCSS, gulp.js, JavaScript, jQuery, React.js</h6>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In accusamus nostrum perspiciatis omnis consectetur pariatur veniam ad recusandae quos ipsum perferendis porro dolorum doloremque numquam voluptatibus ab laudantium, reprehenderit atque!</p>
                                </div>
                            </div>
                            <div class="job row">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-3 job-date blue">
                                    <i class="far fa-calendar-alt mr-2"></i>02/14 - 07/15
                                </div>
                                <div class="col-12 col-md-12 col-lg-9 job-description">
                                    <h6 class="font-weight-bold">Web Developer Digital Agency</h6>
                                    <h6 class="blue">WordPress, HTML, SCSS, gulp.js, JavaScript, jQuery, React.js</h6>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In accusamus nostrum perspiciatis omnis consectetur pariatur veniam ad recusandae quos ipsum perferendis porro dolorum doloremque numquam voluptatibus ab laudantium, reprehenderit atque!</p>
                                </div>
                            </div>
                            <div class="job row">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-3 job-date blue">
                                    <i class="far fa-calendar-alt mr-2"></i>02/14 - 07/15
                                </div>
                                <div class="col-12 col-md-12 col-lg-9 job-description">
                                    <h6 class="font-weight-bold">Web Developer Digital Agency</h6>
                                    <h6 class="blue">WordPress, HTML, SCSS, gulp.js, JavaScript, jQuery, React.js</h6>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In accusamus nostrum perspiciatis omnis consectetur pariatur veniam ad recusandae quos ipsum perferendis porro dolorum doloremque numquam voluptatibus ab laudantium, reprehenderit atque!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mt-5">
                        <h3 class="font-weight-bold sideline mb-3">Experience</h3>
                        <div class="timeline">
                            <div class="job row">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-3 job-date blue">
                                    <i class="far fa-calendar-alt mr-2"></i>02/14 - 07/15
                                </div>
                                <div class="col-12 col-md-12 col-lg-9 job-description">
                                    <h6 class="font-weight-bold">Web Developer Digital Agency</h6>
                                    <h6 class="blue">WordPress, HTML, SCSS, gulp.js, JavaScript, jQuery, React.js</h6>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In accusamus nostrum perspiciatis omnis consectetur pariatur veniam ad recusandae quos ipsum perferendis porro dolorum doloremque numquam voluptatibus ab laudantium, reprehenderit atque!</p>
                                </div>
                            </div>
                            <div class="job row">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-3 job-date blue">
                                    <i class="far fa-calendar-alt mr-2"></i>02/14 - 07/15
                                </div>
                                <div class="col-12 col-md-12 col-lg-9 job-description">
                                    <h6 class="font-weight-bold">Web Developer Digital Agency</h6>
                                    <h6 class="blue">WordPress, HTML, SCSS, gulp.js, JavaScript, jQuery, React.js</h6>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In accusamus nostrum perspiciatis omnis consectetur pariatur veniam ad recusandae quos ipsum perferendis porro dolorum doloremque numquam voluptatibus ab laudantium, reprehenderit atque!</p>
                                </div>
                            </div>
                            <div class="job row">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-3 job-date blue">
                                    <i class="far fa-calendar-alt mr-2"></i>02/14 - 07/15
                                </div>
                                <div class="col-12 col-md-12 col-lg-9 job-description">
                                    <h6 class="font-weight-bold">Web Developer Digital Agency</h6>
                                    <h6 class="blue">WordPress, HTML, SCSS, gulp.js, JavaScript, jQuery, React.js</h6>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In accusamus nostrum perspiciatis omnis consectetur pariatur veniam ad recusandae quos ipsum perferendis porro dolorum doloremque numquam voluptatibus ab laudantium, reprehenderit atque!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-12 col-md-7 col-lg-9 content portfolio text-center" data-simplebar id="portfolio">
                    <ul class="filter-controls list-unstyled-list-inline">
                        <li data-filter="all" class="list-inline-item"><i class="fas fa-list-ul"></i> All Items</li>
                        <li data-filter="1" class="list-inline-item"><i class="fas fa-code"></i> Development</li>
                        <li data-filter="2" class="list-inline-item"><i class="fas fa-paint-brush"></i> Design</li>
                        <li data-filter="3" class="list-inline-item"><i class="fas fa-camera"></i>Photography</li>
                    </ul>
                    <div class="row filter-container mt-3">
                        <div data-category="1" data-sort="value" class="col-md-3 filtr-item">
                            <figure class="figure mb-5">
                            <a href="img/portfolio/Sample1.jpg" class="popup-link"><img class="img-fluid" src="img/portfolio/Sample1.jpg" alt="Portfolio Images"></a>
                            <figcaption class="font-weight-bold figure-caption">Figcaption goes here</figcaption>
                            </figure>
                        </div>
                        <div data-category="2" data-sort="value" class="col-md-3 filtr-item">
                            <figure class="figure mb-5">
                            <a href="img/portfolio/Sample2.jpg" class="popup-link"><img class="img-fluid" src="img/portfolio/Sample2.jpg" alt="Portfolio Images"></a>
                            <figcaption class="font-weight-bold figure-caption">Figcaption goes here</figcaption>
                            </figure>
                        </div>
                        <div data-category="3" data-sort="value" class="col-md-3 filtr-item">
                            <figure class="figure mb-5">
                            <a href="img/portfolio/Sample3.jpg" class="popup-link"><img class="img-fluid" src="img/portfolio/Sample3.jpg" alt="Portfolio Images"></a>
                            <figcaption class="font-weight-bold figure-caption">Figcaption goes here</figcaption>
                            </figure>
                        </div>
                        <div data-category="1" data-sort="value" class="col-md-3 filtr-item">
                            <figure class="figure mb-5">
                            <a href="img/portfolio/Sample1.jpg" class="popup-link"><img class="img-fluid" src="img/portfolio/Sample1.jpg" alt="Portfolio Images"></a>
                            <figcaption class="font-weight-bold figure-caption">Figcaption goes here</figcaption>
                            </figure>
                        </div>
                        <div data-category="2" data-sort="value" class="col-md-3 filtr-item">
                            <figure class="figure mb-5">
                            <a href="img/portfolio/Sample2.jpg" class="popup-link"><img class="img-fluid" src="img/portfolio/Sample2.jpg" alt="Portfolio Images"></a>
                            <figcaption class="font-weight-bold figure-caption">Figcaption goes here</figcaption>
                            </figure>
                        </div>
                        <div data-category="3" data-sort="value" class="col-md-3 filtr-item">
                            <figure class="figure mb-5">
                            <a href="img/portfolio/Sample3.jpg" class="popup-link"><img class="img-fluid" src="img/portfolio/Sample3.jpg" alt="Portfolio Images"></a>
                            <figcaption class="font-weight-bold figure-caption">Figcaption goes here</figcaption>
                            </figure>
                        </div>
                        <div data-category="1" data-sort="value" class="col-md-3 filtr-item">
                            <figure class="figure mb-5">
                            <a href="img/portfolio/Sample1.jpg" class="popup-link"><img class="img-fluid" src="img/portfolio/Sample1.jpg" alt="Portfolio Images"></a>
                            <figcaption class="font-weight-bold figure-caption">Figcaption goes here</figcaption>
                            </figure>
                        </div>
                        <div data-category="2" data-sort="value" class="col-md-3 filtr-item">
                            <figure class="figure mb-5">
                            <a href="img/portfolio/Sample2.jpg" class="popup-link"><img class="img-fluid" src="img/portfolio/Sample2.jpg" alt="Portfolio Images"></a>
                            <figcaption class="font-weight-bold figure-caption">Figcaption goes here</figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-7 col-lg-9 content contact" data-simplebar id="contact">
                    <div class="row mt-5">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-5">
                            <h3 class="font-weight-bold sideline">Contact</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi praesentium repellat unde doloribus pariatur eaque! Nostrum magni doloribus, eveniet amet, deleniti quidem iure labore, dolore quod placeat nulla dolor corporis.</p>
                            <ul class="list-unstyled">
                                <li class="font-weight-bold"><a href="#"><i class="fas fa-envelope mr-2"></i>myemailexample@gmail.com</a></li>
                                <li class="font-weight-bold"><a href="#"><i class="fas fa-phone mr-2"></i>0123456789</a></li>
                                <li class="font-weight-bold"><a href="#"><i class="fas fa-globe mr-2"></i>http://website.com</a></li>
                                <li class="font-weight-bold"><a href="#"><i class="fas fa-map-marker-alt mr-2"></i>Ha Noi, Viet Nam</a></li>
                            </ul>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-7">
                            <form action="#" class="card">
                                <div class="form-group">
                                    <label for="full-name label">Full Name</label>
                                    <input type="text" id="full-name" placeholder="Full Name" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="full-email label">Full Email</label>
                                    <input type="email" id="full-email" placeholder="Full email" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="full-message label">Full Message</label>
                                    <textarea type="message" row="5" id="full-message" placeholder="Full message" class="form-control"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.5.1.min.js"></script>
 <!-- Bootstrap core JavaScript -->
	<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

	<!-- Plugin JavaScript -->
	<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

	<script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

	<!--Simplebar -->
	<script src="vendor/simplebar/simplebar.min.js"></script>

	<!-- Filterisr -->
	<script src="vendor/filterisr/jquery.filterizr.min.js"></script>

	<!-- Custom scripts for this template -->
    <script src="js/main.js"></script>

</body>
</html>