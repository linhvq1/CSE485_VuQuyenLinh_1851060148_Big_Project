<?php
  require("./database/dbhandler.php");
  include("./config/path.php");
  session_start();
  if(!isset($_SESSION["login"])){
    header("location: ".constant("URL")."/server/");
  }
    $admin = queryhandler("SELECT * FROM admin LIMIT 1","get");
    $social = queryhandler("SELECT * FROM social_media","get");
    $hobbie = queryhandler("SELECT * FROM hobbies","get");
    $skill = queryhandler("SELECT * FROM skill","get");
    $achie = queryhandler("SELECT * FROM achievement","get");
    $exper = queryhandler("SELECT * FROM experience","get");
    $typeP = queryhandler("SELECT * FROM type_portfolio","get");
    $pfo = queryhandler("SELECT * FROM portfolio","get");
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link href="../fontawesome-free-5.12.0-web/css/all.css" rel="stylesheet">  
    </head>
  <body>
  <!-- <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span> -->

    
    <div class="wrapper">
        <?php include("./component/sidebar.php"); ?>
        <div id="body" class="active">
          <?php include("./component/nav.php"); ?>
          <div class="content mb-5">
            <div class="container">
              <div class="row">
                <div class="col-md-12 page-header">
                  <div class="page-pretitle">Overview</div>
                  <h2 class="page-title font-weight-bold">Dashboard</h2>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-2 mt-3">
                  <div class="card shadow">
                    <div class="content">
                      <div class="row">
                        <div class="col-sm-4">
                          <div class="icon-big text-center"><i class="fas fa-atom"></i></div>
                        </div>
                        <div class="col-sm-8">
                          <div class="detail">
                            <p class="detail-subtitle text-center">Skills</p>
                            <p class="number text-center"><?php echo count($skill); ?></p>
                          </div>
                        </div>
                      </div>
                      <div class="foooter">
                        <hr>
                        <div class="stats">
                          <i class="fas fa-info-circle"></i>
                          <a href="<?php echo constant("URL")."/server/page_item/skill.php"?>"> View Detail</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-2 mt-3">
                  <div class="card shadow">
                    <div class="content">
                      <div class="row">
                        <div class="col-sm-3">
                          <div class="icon-big text-center"><i class="fas fa-palette"></i></div>
                        </div>
                        <div class="col-sm-9">
                          <div class="detail">
                            <p class="detail-subtitle text-center">Hobbies</p>
                            <p class="number text-center"><?php echo count($hobbie); ?></p>
                          </div>
                        </div>
                      </div>
                      <div class="foooter">
                        <hr>
                        <div class="stats">
                          <i class="fas fa-info-circle"></i>
                          <a href="<?php echo constant("URL")."/server/page_item/hobbie.php"?>"> View Detail</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-2 mt-3">
                  <div class="card shadow">
                    <div class="content">
                      <div class="row">
                        <div class="col-sm-3">
                          <div class="icon-big text-center"><i class="fas fa-user-graduate"></i></div>
                        </div>
                        <div class="col-sm-9">
                          <div class="detail">
                            <p class="detail-subtitle text-center text-lg-left">Experiences</p>
                            <p class="number text-center"><?php echo count($exper); ?></p>
                          </div>
                        </div>
                      </div>
                      <div class="foooter">
                        <hr>
                        <div class="stats">
                          <i class="fas fa-info-circle"></i>
                          <a href="<?php echo constant("URL")."/server/page_item/experience.php"?>"> View Detail</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-2 mt-3">
                  <div class="card shadow">
                    <div class="content">
                      <div class="row">
                        <div class="col-sm-3">
                          <div class="icon-big text-center"><i class="fas fa-trophy"></i></div>
                        </div>
                        <div class="col-sm-9">
                          <div class="detail">
                            <p class="detail-subtitle text-center text-lg-left">achievement</p>
                            <p class="number text-center"><?php echo count($achie); ?></p>
                          </div>
                        </div>
                      </div>
                      <div class="foooter">
                        <hr>
                        <div class="stats">
                          <i class="fas fa-info-circle"></i>
                          <a href="<?php echo constant("URL")."/server/page_item/achievement.php"?>"> View Detail</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-2 mt-3">
                  <div class="card shadow">
                    <div class="content">
                      <div class="row">
                        <div class="col-sm-3">
                          <div class="icon-big text-center"><i class="fas fa-suitcase"></i></div>
                        </div>
                        <div class="col-sm-9">
                          <div class="detail">
                            <p class="detail-subtitle text-center">Portfolio</p>
                            <p class="number text-center"><?php echo count($pfo); ?></p>
                          </div>
                        </div>
                      </div>
                      <div class="foooter">
                        <hr>
                        <div class="stats">
                          <i class="fas fa-info-circle"></i>
                          <a href="<?php echo constant("URL")."/server/page_item/portfolio.php"?>"> View Detail</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-2 mt-3">
                  <div class="card shadow">
                    <div class="content">
                      <div class="row">
                        <div class="col-sm-3">
                          <div class="icon-big text-center"><i class="fas fa-satellite-dish"></i></div>
                        </div>
                        <div class="col-sm-9">
                          <div class="detail">
                            <p class="detail-subtitle text-center">Social media</p>
                            <p class="number text-center"><?php echo count($social); ?></p>
                          </div>
                        </div>
                      </div>
                      <div class="foooter">
                        <hr>
                        <div class="stats">
                          <i class="fas fa-info-circle"></i>
                          <a href="<?php echo constant("URL")."/server/page_item/social_media.php"?>"> View Detail</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="row">
                    <div class="col-md-6 mt-2">
                      <div class="card shadow">
                        <div class="content">
                          <div class="head ml-3 mt-3">
                            <h5 class="font-weight-bold mb-0">Skills & Proficiency</h5>
                            <p class="text-muted">there are my best skills</p>
                          </div>
                          <div class="canvas-wrapper">
                            <table class="table no-margin bg-lighter-grey">
                              <thead class="success text-center">
                                <tr>
                                  <th>Skill</th>
                                  <th>Progress</th>
                                  <th>Type</th>
                                </tr>
                              </thead>
                              <tbody class="text-center">
                                <?php
                                  if(count($skill)>0){
                                    foreach($skill as $sk){
                                ?>
                                <tr>
                                  <td><i class="<?php echo $sk['icon_s'] ?> mr-2 text-primary"></i><?php echo $sk['name_s'] ?></td>
                                  <td><?php echo $sk['progress'] ?>%</td>
                                  <td><?php echo $sk['type'] ?></td>
                                </tr>
                                <?php
                                    }
                                  }
                                ?>
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6 mt-2">
                      <div class="card shadow">
                        <div class="content">
                          <div class="head ml-3 mt-3">
                            <h5 class="font-weight-bold mb-0">Hobbies and Interests</h5>
                            <p class="text-muted">here are some hobbies and intestes</p>
                          </div>
                          <div class="canvas-wrapper">
                            <table class="table no-margin bg-lighter-grey">
                              <thead class="success">
                                <tr>
                                  <th class="text-left">icon</th>
                                  <th class="text-right">name</th>
                                </tr>
                              </thead>
                              <tbody>
                                <?php 
                                  if(count($hobbie)>0){
                                    foreach($hobbie as $hb){
                                ?>
                                <tr>
                                  <td class="text-left"><i class="text-primary <?php echo $hb['icon_h']; ?>"></i></td>
                                  <td class="text-right"><h6><?php echo $hb['name_h']; ?></h6></td>
                                </tr>
                                <?php
                                    }
                                  }
                                ?>
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 mt-2">
                  <div class="card shadow">
                    <div class="content">
                      <div class="head ml-3 mt-3">
                        <h5 class="font-weight-bold mb-0">Achievement</h5>
                        <p class="text-muted">here are some Achivement!</p>
                      </div>
                      <div class="canvas-wrapper">
                        <table class="table no-margin bg-lighter-grey">
                          <thead class="success">
                            <tr>
                              <th class="text-left">Name</th>
                              <th class="text-right">Detail</th>
                            </tr>
                          </thead>
                          <tbody class="text-center">
                            <?php 
                              if(count($achie)>0){
                                foreach($achie as $achi){
                            ?>
                            <tr>
                              <td class="text-left"><i class="text-primary <?php echo $achi['icon_achi'] ?> mr-2"></i><?php echo $achi['name_achi'] ?></td>
                              <td class="text-right"><h6><?php echo $achi['label'] ?></h6></td>
                            </tr> 
                            <?php
                                }
                              }
                            ?>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 mt-2">
                  <div class="card shadow">
                    <div class="content">
                      <div class="head ml-3 mt-3">
                        <h5 class="font-weight-bold mb-0">Social media</h5>
                        <p class="text-muted">there are some channel!!!</p>
                      </div>
                      <div class="canvas-wrapper">
                        <table class="table no-margin bg-lighter-grey">
                          <thead class="success">
                            <tr>
                              <th class="text-left">Name</th>
                              <th class="text-right">icon</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php 
                              if(count($social)>0){
                                foreach($social as $so){
                            ?>
                            <tr>
                              <td>
                              <?php echo $so['name_so'] ?><a href="<?php echo $so['link'] ?>" target="_blank"><i style="color:#2185d0" class="fas fa-link ml-2"></i></a>
                              </td>
                              <td class="text-right"><i class="text-primary <?php echo $so['icon'] ?> ml-2"></i></td>
                            </tr>
                            <?php
                                }
                              }
                            ?>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 mt-2">
                  <div class="card shadow">
                    <div class="content">
                      <div class="head ml-3 mt-3">
                        <h5 class="font-weight-bold mb-0">Portfolio</h5>
                        <p class="text-muted">there are my best portfolio</p>
                      </div>
                      <div class="canvas-wrapper">
                        <table class="table no-margin bg-lighter-grey">
                          <thead class="success">
                            <tr>
                              <th>Name</th>
                              <th class="text-right">Type</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php 
                              if(count($pfo)>0 and count($typeP)>0){
                                foreach($pfo as $pf){
                            ?>
                            <tr>
                              <td class="text-left"><?php echo $pf['name_p'] ?></td>
                              <td class="text-right"><?php $lol = queryhandler("SELECT name_t FROM type_portfolio WHERE id_t = (SELECT id_t FROM portfolio WHERE id_p = ?)","get",[$pf['id_t']]) ; echo $lol[0]['name_t']; ?></td>
                            </tr>
                            <?php
                                }
                              }
                            ?>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 mt-2">
                  <div class="card shadow">
                    <div class="content">
                      <div class="head ml-3 mt-3">
                        <h5 class="font-weight-bold mb-0">Experience</h5>
                        <p class="text-muted">there are my Experienc</p>
                      </div>
                      <div class="canvas-wrapper">
                        <table class="table no-margin bg-lighter-grey">
                          <thead class="success">
                            <tr>
                              <th class="text-left">Experience</th>
                              <th class="text-right">time</th>
                              </tr>
                          </thead>
                          <tbody>
                            <!-- <tr>
                              <td class="text-left">Web Developer Digital Agency</td>
                              <td class="text-right"><i class="far fa-calendar-alt mr-2"></i>02/14 - 07/15</td>
                            </tr>
                            <tr>
                              <td class="text-left">Web Developer Digital Agency</td>
                              <td class="text-right"><i class="far fa-calendar-alt mr-2"></i>02/14 - 07/15</td>
                            </tr>
                            <tr>
                              <td class="text-left">Web Developer Digital Agency</td>
                              <td class="text-right"><i class="far fa-calendar-alt mr-2"></i>02/14 - 07/15</td>
                            </tr>
                            <tr>
                              <td class="text-left">Web Developer Digital Agency</td>
                              <td class="text-right"><i class="far fa-calendar-alt mr-2"></i>02/14 - 07/15</td>
                            </tr>
                            <tr>
                              <td class="text-left">Web Developer Digital Agency</td>
                              <td class="text-right"><i class="far fa-calendar-alt mr-2"></i>02/14 - 07/15</td>
                            </tr>
                            <tr>
                              <td class="text-left">Web Developer Digital Agency</td>
                              <td class="text-right"><i class="far fa-calendar-alt mr-2"></i>02/14 - 07/15</td>
                            </tr>
                            <tr>
                              <td class="text-left">Web Developer Digital Agency</td>
                              <td class="text-right"><i class="far fa-calendar-alt mr-2"></i>02/14 - 07/15</td>
                            </tr>
                            <tr>
                              <td class="text-left">Web Developer Digital Agency</td>
                              <td class="text-right"><i class="far fa-calendar-alt mr-2"></i>02/14 - 07/15</td>
                            </tr>
                            <tr>
                              <td class="text-left">Web Developer Digital Agency</td>
                              <td class="text-right"><i class="far fa-calendar-alt mr-2"></i>02/14 - 07/15</td>
                            </tr> -->
                            <?php
                             if(count($exper)>0){
                               foreach($exper as $exp){
                            ?>
                            <tr>
                              <td class="text-left"><?php echo $exp['name_e'] ?></td>
                              <td class="text-right"><i class="far fa-calendar-alt mr-2"></i><?php $st = explode("-",$exp['start_time']);echo $st[2].'/'.$st[1].'/'.$st[0]; ?> - <?php $et = explode("-",$exp['end_time']);echo $et[2].'/'.$et[1].'/'.$et[0]; ?></td>
                            </tr>
                            <?php
                               }
                             }
                            ?>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../js/jquery-3.5.1.min.js"></script>
 <!-- Bootstrap core JavaScript -->
	<script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

	<!-- Plugin JavaScript -->
	<script src="../vendor/jquery-easing/jquery.easing.min.js"></script>  
    </body>
</html>