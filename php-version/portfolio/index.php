<?php
  require("config/constants.php");   // require means without this, this won't run
  $query = "SELECT * FROM home";
  $result = mysqli_query($db, $query);
  $home_data = mysqli_fetch_array($result);
  //echo $home_data['name'];
  //print_r($user_data);
  $query_2 = "SELECT * FROM about";
  $result_2 = mysqli_query($db, $query_2);
  $about_data = mysqli_fetch_array($result_2);
  //section data
  $query_6 = "SELECT * FROM section_contro";
  $result_6 = mysqli_query($db, $query_6);
  $section_control_info = mysqli_fetch_array($result_6);
  //print_r($section_control_info);
 // print($section_control_info['home_section']);

  

  // getting section data 
  $query_3 = "SELECT * FROM service";
  //making query for service 
  //$service_results = mysqli_query($db, $services);
  //getting service data as array
  //$service_data = mysqli_fetch_all($service_results, MYSQLI_ASSOC);   //it won't work
  //$service_data = mysqli_fetch_array($service_results);
   //make query and get results 
  $result_3 = mysqli_query($db, $query_3);
   //fetch the resulting rows as an array
  $service_datas = mysqli_fetch_all($result_3, MYSQLI_ASSOC);
   //free results from memory
 // mysqli_free_result($result_3);
   //close connection to the database 
  //mysqli_close($db);
  //print_r($service_datas); 
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $home_data['profile_name']; ?></title>
    <link rel="icon" href="images/logo.png" sizes="32x32" type="image/x-icon">
    <!--Google Material icons-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--Bootstrap CDN-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!--CSS-->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!--Header Design Start-->
    <header>
        <nav class="navbar navbar-expand-lg navigation-wrap">
            <div class="container">
              <a class="navbar-brand" href="#"><img src= "images/logo.jpg" height="80"></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                <i class= "fas fa-stream navbar-toggler-icon"></i>
              </button>
              <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                  <?php
                    if ($section_control_info['home_section']){
                  ?>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#home">Home</a>
                  </li>
                  <?php
                    } if ($section_control_info['about_section']){
                  ?>                 
                  <li class="nav-item">
                    <a class="nav-link" href="#about">About Us</a>
                  </li>
                  <?php
                    } if ($section_control_info['service_section']){
                  ?>
                  <li class="nav-item">
                    <a class="nav-link" href="#services">Services</a>
                  </li>
                  <?php
                    } if ($section_control_info['portfolio_section']){
                  ?>
                  <li class="nav-item">
                    <a class="nav-link" href="#portfolio">Portfolio</a>
                  </li>
                  <?php
                    } if ($section_control_info['contact_section']){
                  ?>
                  <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact</a>
                  </li>
                  <?php
                    } if ($section_control_info['blog_section']){
                  ?>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Blog</a>
                  </li>
                  <?php
                    }
                  ?>
                </ul>
              </div>
            </div>
          </nav>
    </header>
    <!--Header Design End-->

    <!--Top Banner Start-->
    <section id="home">
        <div class="container-fluid px-0 top-banner">
            <div class=" container">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-md-12 text-sec">
                        <h1> <?php echo $home_data['profile_name']; ?> </h1>
                        <h4><?php echo $home_data['profile_title']; ?></h4>
                        <div class= "mt-4">
                            <button class="main-btn">Hire Me </button>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-12 mb-lg-0 mb-5">
                        <div>
                            <img src="images/<?php echo $home_data['profile_pic']; ?>" class= "image-fluid" alt="picture" style="width:500px;height:500px;">
                        </div>  
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Top Banner End-->

    <!--About Section Start-->
    <section id="about">
      <div class="about-section wrapper">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-5 col-md-12 text-sec">
              <br>
              <br>
              <br>
              <br>
              <h1 class="text-end" style="padding:50px;"> <?php echo $about_data['title'] ?> </h1>
            </div>
            <div class="col-lg-5 col-md-12 mb-lg-0 mb-5 ">
              <p style="color: gray; text-align: justify;">
                <?php
                  echo $about_data['description_1'];
                ?>
              </p>
              <br>
              <p style="color: gray; text-align: justify;">
              <?php
                  echo $about_data['description_2'];
                ?>
              </p>
              <button class= "main-btn mt-4" style='margin-right:18px'> View Works</button>
              <button class= "secondary-btn mt-4" style='margin-right:18px'> Download CV</button>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--About Section End-->

    <!--Services Section Start-->
    <section id="services">
      <div class="services-section">
        <div class="container">
          <div class="row align-center ">
            <div class="d-flex justify-content-center">
              <h1 style="padding: 2.75rem;">Services</h1>
            </div>
            <div class="d-flex justify-content-center">
              <p style="color:gray;">
                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia 
                deserunt mollit anim id
              </p>
            </div>
            <div class="d-flex justify-content-center">
              <p style="color:gray;">
                est laborum. Sed ut perspiciatis unde omnis iste natur
              </p>
            </div>
          </div>
          <div class=" row pt-5">  <!-- from here -->
            <?php foreach($service_datas as $data){ ?>
              <div class="col-lg-6 col-md-6 mb-lg-0 mb-5" style="padding-top: 3rem; ">
                <div class="card bg-dark text-white">
                  <img src="images/services/<?php echo $data['bg_img']; ?>" alt="img" class="img-fluid card-img" style="filter: opacity(20%);">
                  <div class="card-img-overlay" style="padding: 3.545rem;">
                    <h2 class="card-title"><?php echo $data['service_name']; ?></h2>
                    <p class="card-text"  style="text-align:justify;"><?php echo $data['service_title'];?> </p>
                  </div>
                </div>
              </div>
              <?php }?>

          </div> 
          <!--bad jabe eita-->
           
        </div>
      </div>
    </section>
    <!--Services Section End-->

    <!--Portfolio Section Start-->
    <section id="portfolio">
      <div class="portfolio-section">
        <div class="container">
          <div class="row align-center">
            <div class="d-flex justify-content-center">
              <h1 style="padding: 2.75rem;">Latest Works</h1>
            </div>
            <div class="d-flex justify-content-center">
              <p style="color:gray;">
                Excepteur sint occaecat cupidatat non proident, sunt in culpa 
                qui officia deserunt mollit anim id
              </p>
            </div>
            <div class="d-flex justify-content-center">
              <p style="color:gray; padding-bottom: 2rem;">
                est laborum. Sed ut perspiciatis unde omnis iste natus
              </p>
            </div>
          </div>
          <div class="row">
            <div class="d-flex justify-content-center">
              <nav style="padding-bottom: 1.75rem;">
                <ul class="nav nav-pills justify-content-center">
                  <li class="nav-item">
                    <a href="#" class="nav-link try">All</a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link try">Branding Goals</a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link try">Photography</a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link try">True Perfection</a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link try">Web Design</a>
                  </li>
                </ul>
                
              </nav>
            </div>
          </div>
          
          <div class="container">
            <div class="row">
              <div class="col-6">
                <div class="portfolio-wrap">
                  <img src="images/portfolio/portfolio-1.jpg" class="img-fluid" style="height:430px; width:600px;" alt="">
                  <div class="portfolio-info">
                    <h4>Branding Goals1</h4>
                    <p>Branding Goal</p>
                  </div>
                </div>
              </div>
              <div class="col-6">
                <div class="row">
                  <div class="col-lg-6 col-md-12">
                    <div class="portfolio-wrap">
                      <img src="images/portfolio/portfolio-2.jpg" class="img-fluid" style="height:180px; width:280px;" alt="">
                      <div class="portfolio-info">
                        <h6 style="color:white;">Branding Goals2</h6>
                        <p>Branding Goal</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-12">
                    <div class="portfolio-wrap">
                      <img src="images/portfolio/portfolio-3.jpg" class="img-fluid" style="height:180px; width:280px;" alt="">
                      <div class="portfolio-info">
                        <h6 style="color:white;">Branding Goals3</h6>
                        <p>Branding Goal</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-6 col-md-12">
                    <div class="portfolio-wrap">
                      <img src="images/portfolio/portfolio-4.jpg" class="img-fluid" style="height:180px; width:280px;" alt="">
                      <div class="portfolio-info">
                        <h6 style="color:white;">Branding Goals4</h6>
                        <p>Branding Goal</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-12">
                    <div class="portfolio-wrap">
                      <img src="images/portfolio/portfolio-5.jpg" class="img-fluid" style="height:180px; width:280px;" alt="">
                      <div class="portfolio-info">
                        <h6 style="color:white;">Branding Goals5</h6>
                        <p>Branding Goal</p>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--Portfolio Section Start-->

    <!--Work experience Start-->
    <section>
      <div class="work-experince-section">
        <div class="container">
          <div class="row align-center">
            <div class="d-flex justify-content-center">
              <h1 style="padding: 2.75rem;">Work Experiences</h1>
            </div>
            <div class="d-flex justify-content-center">
              <p style="color:gray;">
                Excepteur sint occaecat cupidatat non proident, 
              sunt in culpa qui officia deserunt mollit anim id
              </p>
            </div>
            <div class="d-flex justify-content-center">
              <p style="color:gray; padding-bottom: 2rem;">
                est laborum. Sed ut perspiciatis unde omnis iste natus
              </p> 
            </div>
          </div>
          <?php
            $query_4 = "SELECT * FROM work_experience";
            $result_4 = mysqli_query($db, $query_4);
            $experience_dt = mysqli_fetch_array($result_4);
            //print_r($experience_dt);
          ?>
          <div class="row pt-5">
            <div class="col-lg-4 col-md-12 mb-lg-0 mb-5">
              <a href="#">
              <div class="card bg-dark mb-3" style="color: gray; border:1px solid gray;  padding: 2.25rem;">
                <div class="card-body">
                  <p style="color:gray;"><?php echo $experience_dt['duration']; ?></p>
                  <h5 class="card-title"><?php echo $experience_dt['position']; ?></h5>
                  <p style="color:gray;"><?php echo $experience_dt['organization']; ?></p>
                  <p class="card-text">
                  <?php echo $experience_dt['description']; ?>
                  </p>
                </div>
              </div>
            </a>
            </div>
            <div class="col-lg-4 col-md-12 mb-lg-0 mb-5">
              <a href="#">
              <div class="card bg-dark mb-3" style="color: gray; border:1px solid gray;  padding: 2.25rem;">
                <div class="card-body">
                  <p style="color:gray;">JUNE 2012-2016</p>
                  <h5 class="card-title">Product Designer</h5>
                  <p style="color:gray;">Adobe Inc.</p>
                  <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                     Nesciunt corrupti accusamus illo rem tempore facere eius asperiores hic quam
                      laboriosam repudiandae, magnam facilis repellendus modi quas minus. Recusandae, 
                      culpa tenetur?

                  </p>
                </div>
              </div>
            </a>
            </div>
            <div class="col-lg-4 col-md-12 mb-lg-0 mb-5">
              <a href="#">
              <div class="card bg-dark mb-3" style="color: gray; border:1px solid gray; padding: 2.25rem;">
                <div class="card-body">
                  <p style="color:gray;">JUNE 2012-2016</p>
                  <h5 class="card-title">Graphics Designer</h5>
                  <p style="color:gray;">Adobe Inc.</p>
                  <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                     Nesciunt corrupti accusamus illo rem tempore facere eius asperiores hic quam
                      laboriosam repudiandae, magnam facilis repellendus modi quas minus. Recusandae, 
                      culpa tenetur?

                  </p>
                </div>
              </div>
            </a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--Work experience End-->

    <!--Hire me section Start-->
    <section>
      <div class="hire-me-section">
        <div class="container">
          <div class="row align-center">
            <div class="d-flex justify-content-center">
              <h1 style="padding: 2.75rem;">Have You Any Project In Mind ?</h1>
            </div>
            <div class= "mt-4 d-flex justify-content-center">
              <button class="white-btn">Hire Me </button>
          </div>
          </div>
        </div>
      </div>
    </section>
    <!--Hire me section End-->
    <?php
      //making query
      $query_5 = "SELECT *FROM contact_info";
      //fetching data from database
      $result_5 = mysqli_query($db, $query_5);
      // get data as an array
      $contact_info = mysqli_fetch_array($result_5);
      ?>

    <!--Contact section Start -->
    <section id="contact">
      <div class="contact-section">
        <div class="container">
          <div class="row align-center">
            <div class="d-flex justify-content-center">
              <h1 style="padding: 2.75rem;">Contact Me</h1>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-5 d-flex align-items-stretch">
              <div class="info">
                <h5 style="color:rgb(240, 233, 233); padding-bottom: 1.25rem;">Contact info</h5>
                  <div class="address" style="padding-bottom:1.25rem;">
                  <i class="material-icons" style="color:gray;">room</i>
                  <span style="color:gray;"><?php echo $contact_info['location']; ?></span>
                  </div>
                  <div class="email" style="padding-bottom:1.25rem;">
                    <i style="color:gray;"class="material-icons">email</i>
                    <span style="color:gray;"><?php echo $contact_info['email']; ?></span>
                  </div>
                  <div class="phone" style="padding-bottom:1.25rem;">
                    <i style="color:gray;"class="material-icons">call</i>
                    <span style="color:gray;"><?php echo $contact_info['phone_1']; ?></span>
                    <br>
                    <p style="padding-left: 30px; color: gray;"><?php echo $contact_info['phone_2']; ?></p>
                  </div>
                  <div class="site" style="padding-bottom:1.25rem;">
                    <i style="color:gray;" class="material-icons">public</i>
                    <span style="color:gray;"><?php echo $contact_info['website']; ?></span>
                  </div>
                  <div style="padding-bottom:1.25rem;">
                    <h5 style="color:rgb(240, 233, 233);">Follow Me</h5>
                    <a href="#" class="fa fa-facebook" style="color:gray; padding-right:10px;"></a>
                    <a href="#" class="fa fa-twitter" style="color:gray; padding-right:10px;"></a>
                    <a href="#" class="fa fa-linkedin" style="color:gray; padding-right:10px;"></a>
                    <a href="#" class="fa fa-pinterest" style="color:gray; padding-right:10px;"></a>
                    <a href="#" class="fa fa-vimeo" style="color:gray; padding-right:10px;"></a>
                  </div>
              </div>
              </div>
              <div class="col-lg-7 ">
                <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                    <div class="row">
                      <div class="form-group" style="padding:1rem;">
                        <label for="name" style="color:gray;">NAME</label>
                        <input style="background-color:rgba(70, 69, 66, 0.671); border:none;" type="text" class="form-control" name="subject" id="subject" placeholder="Type Your Name" required>
                        </div>
                    <div class="form-group col-md-6" style="padding:1rem;">
                        <label for="name" style="color:gray;">PHONE NUMBER</label>
                        <input style="background-color:rgba(70, 69, 66, 0.671); border:none;" type="text" name="name" class="form-control" id="name" placeholder="Type your phone number" required>
                    </div>
                    <div class="form-group col-md-6" style="padding:1rem;">
                        <label for="name" style="color:gray;">EMAIL</label>
                        <input style="background-color:rgba(70, 69, 66, 0.671); border:none;" type="email" class="form-control" name="email" id="email" placeholder="Type your email address" required>
                    </div>
                    </div>
                    <div class="form-group" >
                    <label for="name" style="color:gray;">YOUR MESSAGE</label>
                    <textarea style="background-color:rgba(70, 69, 66, 0.671); border:none;" class="form-control" name="message" rows="10" placeholder="Type your message here" required></textarea>
                    </div>
                    <br>
                    <div>
                      <button class="main-btn" type="submit">Send Message</button>
                    </div>
                </form>
                </div>
          </div>
          <div class="row"  style="margin-top:12rem;">
            <div class="d-flex justify-content-center mb-4">
              <img src="images/logo.png" style="height:60px; width:60px;" alt="">
            </div>
            <div class="d-flex justify-content-center">
              <p style="color:gray;">
                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
              </p>
            </div>
            <div class="d-flex justify-content-center mb-4">
              <p style="color:gray;">
                deserunt mollit anim id est laborum.
              </p>
            </div>
            <div class="social-links d-flex justify-content-center">
              <a href="#"><i class="fa fa-facebook fa-lg"></i></a>
              <a href="#"><i class="fa fa-twitter fa-lg"></i></a>
              <a href="#"><i class="fa fa-linkedin fa-lg"></i></a>
              <a href="#"><i class="fa fa-google-plus fa-lg"></i></a>
              <a href="#"><i class="fa fa-vimeo fa-lg"></i></a>
          </div>
          </div>
        </div>
      </div>
    </section>
    <!--Contact Section End-->

    <!--Footer section Start-->
    <footer id="footer">
        <div class=" footer py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <p class="text-secondary">Copyright&copy; 2022 <strong>Tarek Aziz</strong></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--Footer section End-->

<!--Jave Script file -->
<script src="js/main.js"></script>
</body>
</html>