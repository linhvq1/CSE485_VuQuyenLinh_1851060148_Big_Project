<?php 
    session_start();
    include("./server/database/dbhandler.php");
    $admin = queryhandler("SELECT * FROM admin LIMIT 1","get");
    $social = queryhandler("SELECT * FROM social_media","get");
    $hobbie = queryhandler("SELECT * FROM hobbies","get");
    $skill = queryhandler("SELECT * FROM skill","get");
    $achie = queryhandler("SELECT * FROM achievement","get");
    $exper = queryhandler("SELECT * FROM experience","get");
    $typeP = queryhandler("SELECT * FROM type_portfolio","get");
    $pfo = queryhandler("SELECT * FROM portfolio","get");
    if(isset($_SESSION['send'])){
        
?>
  <div class="alert alert-Primary alert-dismissible text-center">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>SENT!</strong> Thank for your contribute!!!
  </div>
<?php   unset($_SESSION['send']);
    }
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
    <!-- carousel CSS-->
    <link rel="stylesheet" href="node_modules/owl.carousel/dist/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="node_modules/owl.carousel/dist/assets/owl.theme.default.min.css" />
  </head>
  <body>
    <section class="wrapper">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-5 col-lg-3 text-white sidebar background-blue">
                    <div class="col-md-12 mx-auto">
                        <figure class="profile-image mx-auto d-flex flex-column justify-content-center">
                            <img class="img-fluid rounded-circle" src="img/avatar/<?php echo $admin[0]['avatar']; ?>" alt="profile_pic">
                            <figcaption class="text-center"><small class="d-block"><?php echo explode(" ",$admin[0]['name_a'])[0] ?></small><?php echo explode(" ",$admin[0]['name_a'])[count(explode(" ",$admin[0]['name_a']))-1] ?></figcaption>
                        </figure>
                        <ul class="list-unstyled main-menu mt-5">
                        <li><a href="#about-me" class="font-weight-bold text-white"><i class="fa fa-user-tie"></i>About Me</a></li>
                        <li><a href="#experience" class="font-weight-bold text-white"><i class="fa fa-book"></i>Experience</a></li>
                        <li><a href="#portfolio" class="font-weight-bold text-white"><i class="fa fa-toolbox"></i>Portfolio</a></li>
                        <li><a href="#contact" class="font-weight-bold text-white"><i class="fa fa-envelope"></i>Contact</a></li>
                        </ul>
                        <ul class="list-unstyled list-inline mt-3 text-center">
                            <?php 
                                if(count($social)>0){
                                    foreach($social as $sm){
                            ?>
                            <li class= "list-inline-item"><a href="<?php echo $sm['link'] ?>" class="text-white"><i class="<?php echo $sm['icon'] ?>"></i></a></li>
                            <?php
                                    }
                                }
                            ?>
                        </ul>
                    </div>
                </div>
                <div id="about-me" data-simplebar class="col-12 col-sm-12 col-md-7 col-lg-9 content about-me active">
                    <div class="card about-me">
                        <h3 class="sideline font-weight-bold mb-2">About Me</h3>
                        <div class="font-weight-bold label title mb-2"><i class="fas fa-code"></i><?php echo $admin[0]['job'] ?></div>
                        <ul class="list-unstyled">
                            <li><h4 class="font-weight-bold mb-2"><?php echo $admin[0]['name_a'] ?></h4></li>
                            <li><i class="far fa-calendar-alt mr-2 title"></i><span><?php $dob = explode("-",$admin[0]['date_of_birth']);echo $dob[2].'/'.$dob[1].'/'.$dob[0]; ?></span></li>
                            <li><i class="fas fa-user mr-2 title"></i><span><?php echo $admin[0]['gender']; ?></span></li>
                        </ul>
                        <p>
                            <?php echo nl2br($admin[0]['about']); ?>
                        </p>
                        <h3 class="sideline font-weight-bold mb-3">Hobbies and Interests</h3>
                        <!-- carousel -->
                        <div class="owl-carousel lol owl-theme">
                            <?php
                                if(count($hobbie) >0){
                                    foreach($hobbie as $hb){
                            ?>
                            <div class="cc text-center mt-3">
                                <i class="text-primary <?php echo $hb['icon_h'] ?> mb-3"></i>
                                <h6 class="font-weight-bold"><?php echo $hb['name_h'] ?></h6>
                            </div>
                            <?php
                                    }
                                }
                            ?>
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
                            <?php 
                                if(count($skill)>0){
                                    foreach($skill as $sk){
                            ?>
                            <div class="row item w-100">
                                <div class="col-lg-3 card card--stats d-flex flex-row align-items-center">
                                    <i class="<?php echo $sk['icon_s']; ?> fs-2"></i>
                                    <h5 class="level-title text-wrapper ml-2 mt-1"><?php echo $sk['name_s']; ?></h5>
                                </div>
                                <div class="col-lg-9 progress mt-2 pl-0 pr-0 level-bar">
                                    <div class="progress-bar bg-<?php echo $sk['background']; ?>" role="progressbar" style="width: <?php echo $sk['progress']; ?>%" ></div>
                                </div>
                            </div>
                            <?php
                                    }
                                }
                            ?>
                        </div>
                    </div>
                    <!-- carousel -->
                    <div class="owl-carousel lolol owl-theme mt-4">
                        <?php 
                            if($achie >0){
                                foreach($achie as $achi){
                        ?>
                        <div class="card card--stats d-flex flex-row align-items-center">
                            <i class="text-primary <?php echo $achi['icon_achi']; ?>"></i>
                            <div class="text-wrapper">
                                <h5 class="font-weight-bold ml-3 mb-0"><?php echo $achi['name_achi']; ?></h5>
                                <p class="ml-3 mb-0"><?php echo $achi['label']; ?></p>
                            </div>
                        </div>
                        <?php
                                }
                            }
                        ?>
                    </div>
                </div>

                <div data-simplebar class="col-12 col-sm-12 col-md-7 col-lg-9 content experience " id="experience">
                    <div class="card">
                        <h3 class="font-weight-bold sideline mb-3">Experience</h3>
                        <div class="timeline">
                            <?php 
                                if(count($exper)>0){
                                    foreach($exper as $exp){
                            ?>
                            <div class="job row">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-3 job-date blue">
                                    <i class="far fa-calendar-alt mr-2"></i><?php $st = explode("-",$exp['start_time']);echo $st[2].'/'.$st[1].'/'.$st[0]; ?> - <?php $et = explode("-",$exp['end_time']);echo $et[2].'/'.$et[1].'/'.$et[0]; ?>
                                </div>
                                <div class="col-12 col-md-12 col-lg-9 job-description">
                                    <h6 class="font-weight-bold"><?php echo $exp['name_e']; ?></h6>
                                    <h6 class="blue"><?php echo $exp['label']; ?></h6>
                                    <p><?php echo $exp['detail']; ?></p>
                                </div>
                            </div>
                            <?php
                                    }
                                }
                            ?>
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
                        <li data-filter="1" class="list-inline-item"><i class="<?php echo $typeP[0]['icon']; ?>"></i> <?php echo $typeP[0]['name_t']; ?></li>
                        <li data-filter="2" class="list-inline-item"><i class="<?php echo $typeP[1]['icon']; ?>"></i><?php echo $typeP[1]['name_t']; ?></li>
                        <li data-filter="3" class="list-inline-item"><i class="<?php echo $typeP[2]['icon']; ?>"></i><?php echo $typeP[2]['name_t']; ?></li>
                    </ul>
                    <div class="row filter-container mt-3">
                        <?php 
                            if(count($pfo)>0){
                                foreach($pfo as $pf){
                        ?>
                        <div data-category="<?php echo $pf['id_t']; ?>" data-sort="value" class="col-md-3 filtr-item">
                            <figure class="figure mb-5">
                            <a href="img/portfolio/<?php echo $pf['image'] ?>" class="popup-link"><img class="img-fluid" src="img/portfolio/<?php echo $pf['image'] ?>" alt="Portfolio Images"></a>
                            <figcaption class="font-weight-bold figure-caption"><a href="<?php echo $pf['link'] ?>"><?php echo $pf['name_p'] ?></a></figcaption>
                            </figure>
                        </div>
                        <?php
                                }
                            }
                        ?>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-7 col-lg-9 content contact" data-simplebar id="contact">
                    <div class="row mt-5">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-5">
                            <h3 class="font-weight-bold sideline">Contact</h3>
                            <p>Is this website helpful to you? Please give us a like, or share your feedback to help us improve. Connect with us on Facebook and Twitter for the latest updates.</p>
                            <ul class="list-unstyled">
                                <li class="font-weight-bold"><a href="#"><i class="fas fa-envelope mr-2"></i><?php echo $admin[0]['email'] ?></a></li>
                                <li class="font-weight-bold"><a href="#"><i class="fas fa-phone mr-2"></i><?php echo $admin[0]['phone'] ?></a></li>
                                <li class="font-weight-bold"><a href="https://<?php echo $admin[0]['website']; ?>"><i class="fas fa-globe mr-2"></i>Mywebsite</a></li>
                                <li class="font-weight-bold"><a href="#"><i class="fas fa-map-marker-alt mr-2"></i><?php echo $admin[0]['address'] ?></a></li>
                            </ul>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-7">
                            <form action="./server/contact.php" method="post" class="card">
                                <div class="form-group">
                                    <label for="full-name label">Full Name</label>
                                    <input type="text" id="full-name" name="name" placeholder="Full Name" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="full-email label">Full Email</label>
                                    <input type="email" id="full-email" name="email" placeholder="Full email" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="full-message label">Full Message</label>
                                    <textarea type="message" row="5" id="full-message" name="message" placeholder="Full message" class="form-control"></textarea>
                                </div>
                                <button type="submit" name ="submit" class="btn btn-primary">Submit</button>
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
    
	
    <script>
        $(document).ready(function(){
            $('.owl-carousel.lol').owlCarousel({
                loop:true,
                margin:10,
                responsiveClass:true,
                responsive:{
                    0:{
                        items:2,
                        nav:true,                    
                    },
                    600:{
                        items:3,
                        nav:false
                    },
                    1000:{
                        items:6,
                        nav:true,
                        loop:false
                    }
                }
            });

            $('.owl-carousel.lolol').owlCarousel({
                loop:true,
                margin:10,
                responsiveClass:true,
                responsive:{
                    0:{
                        items:1,
                        nav:true,                    
                    },
                    600:{
                        items:2,
                        nav:false
                    },
                    1000:{
                        items:4,
                        nav:true,
                        loop:false
                    }
                }
            });
            $('.cc').css({
                fontSize: 30
            });
        });
    </script>
    <!-- Custom scripts for this template -->
    <script src="js/main.js"></script>
    <!-- carousel 2 js -->
    <script src="node_modules/jquery/dist/jquery.js"></script>
    <script src="node_modules/owl.carousel/dist/owl.carousel.min.js"></script>
</body>
</html>