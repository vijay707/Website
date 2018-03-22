<!DOCTYPE html>
<html lang="zxx">
    <head>
        <title>Department Of Computer Applications</title>
        <!-- for-mobile-apps -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="kgcas, bca, BCA, Coimbatore, saravanampatti, kgisl, KGCAS, KGISL, Vijayakumar, Bachelor of computer applications, Department of computer applications" />
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
            function hideURLbar(){ window.scrollTo(0,1); } </script>
        <!-- //for-mobile-apps -->
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />

        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <link rel="stylesheet" type="text/css" href="css/zoomslider.css" />

        <link rel="stylesheet" href="css/lightbox.css">
        <!-- carousel slider -->  
        <link href="css/owl.carousel.css" rel="stylesheet" type="text/css" media="all"> 
        <!-- //carousel slider -->
        <link href="css/font-awesome.css" rel="stylesheet"> 
        <script type="text/javascript" src="js/modernizr-2.6.2.min.js"></script>
        <script src="js/jquery-2.2.3.min.js"></script>
        <script src="js/bootstrap.js"></script>
        <!--/web-fonts-->
        <link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i" rel="stylesheet">
        <!--//web-fonts-->
    </head>
    <body>
        <!--/banner-bottom-->
        <div class="w3_agilits_banner_bootm">
            <div class="w3_agilits_inner_bottom">
                <div class="wthree_agile_login">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                       <!-- <li><a href="home.php">Profile</a></li>-->
                        <?php 
                        
                            session_start();
                            if(isset($_SESSION['name']) && !empty($_SESSION['name'])) {
                        ?>
                        <li>
                            <a href="home.php"><?php echo $_SESSION['name'];?></a>
                        </li>
                            <li><a href="logout.php">Logout</a></li>
                        <?php
                            }else{
                        ?>
                        <li><a href="login.php">Login</a></li>
                        <li><a href="register.php">Register</a></li>                        
                        <?php } ?>
                    </ul>
                </div>

            </div>
        </div>
        <!--//banner-bottom-->
        <!--/banner-section-->
        <div id="demo-1" data-zs-src='["images/b1.jpg","images/6.jpg","images/lib.jpg","images/b3.jpg","images/lab.jpg"]' data-zs-overlay="dots">
            <div class="demo-inner-content">
                <!--/header-w3l-->
                <div class="header-w3-agileits" id="home">
                    <div class="inner-header-agile">	
                        <nav class="navbar navbar-default">
                            <div class="navbar-header">
                                <button type="button"  class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <h1><a  href="index.php"><span class="letter">B</span>CA </a></h1>
                            </div>
                            <!-- navbar-header -->

                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav">
                                    <li class="active"><a href="index.php">Home</a></li>
                                    <li><a href="#about" class="scroll">About</a></li>
                                    <li><a href="#agileits-services" class="scroll">Services</a></li>
                                    <li><a href="#portfolio" class="scroll">gallery</a></li>
                                    <li><a href="#team" class="scroll">Team</a></li>
                                    <li><a href="#testimonials" class="scroll" >Testimonials</a></li>
                                    <li><a href="#contact" class="scroll">contact</a></li>
                                </ul>
                            </div>

                            <div class="clearfix"> </div>	
                        </nav>
                    </div> 

                </div>
                <!--//header-w3l-->
                <!--/banner-info-->
                <div class="baner-info">
                    <h4>The best learning institution</h4>
                    <h3><span>w</span>elcome to our <span>d</span>epartment</h3>
                    <p><h4>Department of Computer Applications </h4></p>
                </div>
                <!--/banner-ingo-->		
            </div> 
        </div>
        <!--/banner-section-->
        <!--about -->
        <div id="about" class="wthree-about w3ls-section">
            <div class="container">
                <div class="agileits-banner-grids text-center">
                    <div class="banner-bottom-girds">
                        <div class="agileits-banner-grid bg-w3ls-active">
                            <span class="fa fa-university banner-icon" aria-hidden="true"></span>
                            <h4>Academics</h4>
                            <p>Education is not the filling of a pail, but the lighting of a fire is Education</p>
                            <a class="hvr-rectangle-out w3_play_icon1" href="#" data-toggle="modal" data-target="#myModal"> read more</a>
                        </div>
                        <div class="agileits-banner-grid">
                            <span class="fa fa-tags banner-icon" aria-hidden="true"></span>
                            <h4>Goal</h4>
                            <p>Life isn't about finding yourself.Life is about creating yoursels</p>
                            <a class="hvr-rectangle-out w3_play_icon1" href="#" data-toggle="modal" data-target="#myModal"> read more</a>
                        </div>
                        <div class="clearfix"></div>
                    </div>		
                </div>	
                <h2 class="w3ls-title">about us</h2>
                <h5>KG College of Arts and Science,<br>Department Of Computer Applications</h5>
                <div class="col-md-7  w3ls-about-left">
                    <p style="text-align: justify;">Bachelor in Computer Application (BCA) is an undergraduate degree course in computer applications. With the rapid growth of IT industry in India, the demand of computer professional is increasing day by day. This increasing growth of IT industry has created a lot of opportunities for the computer graduates.Bachelor in Computer Application (BCA) is one of the popular courses among the students who want to make their career in the IT (Information Technology) field. The duration of the course is 3 years and divided into 6 semesters. It comprises of the subjects like database, networking, data structure, core programming languages like ‘C’ and ‘java’. This course provides a lot of opportunities to the students who are interested in computer field and wants to work in the IT sector as programmer or software developer.  </p>
                    <p style="text-align: justify;" class="about-bottom">The demand of IT professionals is increasing not only in India but also in abroad. After the completion of the course, the student can find a job in reputed IT companies like IBM, Oracle, Infosys, and Google. The student can work as a system engineer, junior programmer, web developer or as a system administrator. This field provides you ample opportunities to make your career not only in private sector but also in the public sector. The government organization like NIC, Indian Army, Indian Air Force and India Navy also recruit large number of computer professionals for their IT department.</p>
                </div>
                <div class="col-md-5 w3ls-row">
                    <div class="col-md-6 col-sm-6 wthree-about-left">
                        <img src="images/about2.jpg" class="img-responsive" alt=""/>
                    </div>
                    <div class="col-md-6 col-sm-6 w3ls-row alert wthree-about-right">
                        <img src="images/clg2.jpg" class="img-responsive" alt=""/>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="clearfix"> </div>
                <div class="stats-info agileits-w3layouts">
                    <div class="col-sm-3 col-xs-3 stats-grid">
                        <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='324' data-delay='.5' data-increment="1">524</div>
                        <div class="stats-img stat2">
                            <p>students</p>
                        </div>
                    </div>
                    <div class="col-sm-3 col-xs-3 stats-grid">
                        <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='200' data-delay='.5' data-increment="1">18</div>
                        <div class="stats-img stat2">
                            <p>staffs</p>
                        </div>
                    </div>
                    <div class="col-sm-3 col-xs-3 stats-grid stat1">
                        <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='156' data-delay='.5' data-increment="1">156</div>
                        <div class="stats-img stat2">
                            <p>Awards</p>
                        </div>
                    </div>
                    <div class="col-sm-3 col-xs-3 stats-grid stat1">
                        <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='156' data-delay='.5' data-increment="1">856</div>
                        <div class="stats-img stat2">
                            <a href="placement.php" target="_blank"><p>placement</p></a>
                        </div>
                    </div><br>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!-- //about -->
        <!--services-->
        <div class="agileits-services w3ls-section" id="agileits-services" >
            <div class="container">
                <h3 class="w3ls-title">services </h3>
                <div class="agileits-services-row">
                    <div class="col-md-3 col-sm-6 agileits-services-grids">
                        <span class="glyphicon glyphicon-stats effect-1" aria-hidden="true"></span>
                        <h4>Analytics</h4>
                        <!--<p>Itaque earum rerum hic tenetur a sapiente delectus 
                            reiciendis maiores alias consequatur aut</p>-->
                    </div>
                    <div class="col-md-3 col-sm-6 agileits-services-grids">
                        <span class="glyphicon glyphicon-user effect-1" aria-hidden="true"></span>
                        <h4>Custom Plans</h4>
                        <!--<p>Itaque earum rerum hic tenetur a sapiente delectus 
                            reiciendis maiores alias consequatur aut</p>-->
                    </div>
                    <div class="col-md-3 col-sm-6 agileits-services-grids">
                        <span class="glyphicon glyphicon-list-alt effect-1" aria-hidden="true"></span>
                        <h4>Monitoring</h4>
                        <!--<p>Itaque earum rerum hic tenetur a sapiente delectus 
                            reiciendis maiores alias consequatur aut</p>-->
                    </div>
                    <div class="col-md-3 col-sm-6 agileits-services-grids">
                        <a href="notes.php"><span class="glyphicon glyphicon-check effect-1" aria-hidden="true"></span></a>
                        <a href="notes.php"><h4>Exams</h4></a>
                        <!--<p>Itaque earum rerum hic tenetur a sapiente delectus 
                            reiciendis maiores alias consequatur aut</p>-->
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
        <!--//agileits-services-->
        <!--portfolio-->
        <div id="portfolio" class="portfolio w3ls-section">
            <div class="container">
                <h3 class="w3ls-title">gallery</h3>
                <div class="sap_tabs">			
                    <div id="horizontalTab">
                        <ul class="resp-tabs-list">
                            <li class="resp-tab-item"><span>All</span></li>
                            <li class="resp-tab-item"><span>Sports</span></li>
                            <li class="resp-tab-item"><span>Laboratory</span></li>
                            <li class="resp-tab-item"><span>Interiors</span></li>
                            <li class="resp-tab-item"><span>Department</span></li>					
                        </ul>	
                        <div class="clearfix"> </div>	
                        <div class="resp-tabs-container">
                            <div class="tab-1 resp-tab-content">
                                <div class="col-md-3 portfolio-grids">
                                    <a href="images/g1.jpg" data-lightbox="example-set" data-title="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen.">
                                        <img src="images/g1.jpg" class="img-responsive zoom-img" alt="Error"/>
                                        <div class="b-wrapper">
                                            <h5>BCA</h5>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 portfolio-grids">
                                    <a href="images/g2.jpg" data-lightbox="example-set" data-title="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen.">
                                        <img src="images/g2.jpg" class="img-responsive zoom-img" alt="Error"/>
                                        <div class="b-wrapper">
                                            <h5>BCA</h5>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 portfolio-grids">
                                    <a href="images/g3.jpg" data-lightbox="example-set" data-title="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen.">
                                        <img src="images/g3.jpg" class="img-responsive zoom-img" alt="Error"/>
                                        <div class="b-wrapper">
                                            <h5>BCA</h5>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 portfolio-grids">
                                    <a href="images/g8.jpg" data-lightbox="example-set" data-title="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen.">
                                        <img src="images/g8.jpg" class="img-responsive zoom-img" alt="Error"/>
                                        <div class="b-wrapper">
                                            <h5>BCA</h5>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 portfolio-grids">
                                    <a href="images/g5.jpg" data-lightbox="example-set" data-title="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen.">
                                        <img src="images/g5.jpg" class="img-responsive zoom-img" alt="Error"/>
                                        <div class="b-wrapper">
                                            <h5>BCA</h5>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 portfolio-grids">
                                    <a href="images/g6.jpg" data-lightbox="example-set" data-title="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen.">
                                        <img src="images/g6.jpg" class="img-responsive zoom-img" alt="Error"/>
                                        <div class="b-wrapper">
                                            <h5>BCA</h5>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 portfolio-grids">
                                    <a href="images/g4.jpg" data-lightbox="example-set" data-title="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen.">
                                        <img src="images/g4.jpg" class="img-responsive zoom-img" alt="Error"/>
                                        <div class="b-wrapper">
                                            <h5>BCA</h5>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 portfolio-grids">
                                    <a href="images/g7.jpg" data-lightbox="example-set" data-title="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen.">
                                        <img src="images/g7.jpg" class="img-responsive zoom-img" alt="Error"/>
                                        <div class="b-wrapper">
                                            <h5>BCA</h5>
                                        </div>
                                    </a>
                                </div>
                                <div class="clearfix"> </div>
                            </div>		
                            <div class="tab-1 resp-tab-content">
                                <div class="col-md-3 portfolio-grids">
                                    <a href="images/g8.jpg" data-lightbox="example-set" data-title="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen.">
                                        <img src="images/g8.jpg" class="img-responsive zoom-img" alt="Error"/>
                                        <div class="b-wrapper">
                                            <h5>BCA</h5>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 portfolio-grids">
                                    <a href="images/g4.jpg" data-lightbox="example-set" data-title="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen.">
                                        <img src="images/g4.jpg" class="img-responsive zoom-img" alt="Error"/>
                                        <div class="b-wrapper">
                                            <h5>BCA</h5>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 portfolio-grids">
                                    <a href="images/g5.jpg" data-lightbox="example-set" data-title="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen.">
                                        <img src="images/g5.jpg" class="img-responsive zoom-img" alt="Error"/>
                                        <div class="b-wrapper">
                                            <h5>BCA</h5>
                                        </div>
                                    </a>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            <div class="tab-1 resp-tab-content">
                                <div class="col-md-3 portfolio-grids">
                                    <a href="images/g3.jpg" data-lightbox="example-set" data-title="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen.">
                                        <img src="images/g3.jpg" class="img-responsive zoom-img" alt="Error"/>
                                        <div class="b-wrapper">
                                            <h5>BCA</h5>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 portfolio-grids">
                                    <a href="images/g1.jpg" data-lightbox="example-set" data-title="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen.">
                                        <img src="images/g1.jpg" class="img-responsive zoom-img" alt="Error"/>
                                        <div class="b-wrapper">
                                            <h5>BCA</h5>
                                        </div>
                                    </a>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            <div class="tab-1 resp-tab-content">
                                <div class="col-md-3 portfolio-grids">
                                    <a href="images/g5.jpg" data-lightbox="example-set" data-title="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen.">
                                        <img src="images/g5.jpg" class="img-responsive zoom-img" alt="Error"/>
                                        <div class="b-wrapper">
                                            <h5>BCA</h5>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 portfolio-grids">
                                    <a href="images/g6.jpg" data-lightbox="example-set" data-title="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen.">
                                        <img src="images/g6.jpg" class="img-responsive zoom-img" alt="Error"/>
                                        <div class="b-wrapper">
                                            <h5>BCA</h5>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 portfolio-grids">
                                    <a href="images/g4.jpg" data-lightbox="example-set" data-title="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen.">
                                        <img src="images/g4.jpg" class="img-responsive zoom-img" alt="Error"/>
                                        <div class="b-wrapper">
                                            <h5>BCA</h5>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 portfolio-grids">
                                    <a href="images/g7.jpg" data-lightbox="example-set" data-title="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen.">
                                        <img src="images/g7.jpg" class="img-responsive zoom-img" alt="Error"/>
                                        <div class="b-wrapper">
                                            <h5>BCA</h5>
                                        </div>
                                    </a>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            <div class="tab-1 resp-tab-content">
                                <div class="col-md-3 portfolio-grids">
                                    <a href="images/g2.jpg" data-lightbox="example-set" data-title="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen.">
                                        <img src="images/g2.jpg" class="img-responsive zoom-img" alt="Error"/>
                                        <div class="b-wrapper">
                                            <h5>BCA</h5>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 portfolio-grids">
                                    <a href="images/g5.jpg" data-lightbox="example-set" data-title="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen.">
                                        <img src="images/g5.jpg" class="img-responsive zoom-img" alt="Error"/>
                                        <div class="b-wrapper">
                                            <h5>BCA</h5>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 portfolio-grids">
                                    <a href="images/g6.jpg" data-lightbox="example-set" data-title="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen.">
                                        <img src="images/g6.jpg" class="img-responsive zoom-img" alt="Error"/>
                                        <div class="b-wrapper">
                                            <h5>BCA</h5>
                                        </div>
                                    </a>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        </div>						
                    </div>
                </div>
            </div>	
        </div>
        <!--//portfolio-->
        <!--//main-header-->
        <script type="text/javascript" src="js/jquery.zoomslider.min.js"></script>
        <!-- testimonial -->
        <div class="wthree-testi w3ls-section" id="testimonials">
            <!-- container -->
            <div class="container">
                <h3 class="w3ls-title">Testimonials</h3> 
                <div class="w3_wthree-testi_grids text-center">
                    <section class="slider">
                        <div class="flexslider">
                            <ul class="slides">
                                <li>	
                                    <div class="wthree-testi_grid">
                                        <div class="testimonial-left">
                                            <i class="fa fa-user" aria-hidden="true"></i> 
                                        </div>
                                        <p>"When one door of happiness closes, another opens; but often we look so long at the closed door that we do not see the one which has been opened for us."</p>
                                        <h5>Helen Keller</h5>
                                    </div>
                                </li>
                                <li>	
                                    <div class="wthree-testi_grid">
                                        <div class="testimonial-left">
                                            <i class="fa fa-user" aria-hidden="true"></i> 
                                        </div>
                                        <p>Your most unhappy customers are your greatest source of learning. Success is a lousy teacher. It seduces smart people into thinking they can't lose.Life is not fair; get used to it.</p>
                                        <h5>Bill Gates</h5>
                                    </div>
                                </li>
                                <li>	
                                    <div class="wthree-testi_grid">
                                        <div class="testimonial-left">
                                            <i class="fa fa-user" aria-hidden="true"></i> 
                                        </div>
                                        <p>Genius is one percent inspiration and ninety-nine percent perspiration. Our greatest weakness lies in giving up. The most certain way to succeed is always to try just one more time.Many of life's failures are people who did not realize how close they were to success when they gave up.
                                        </p>
                                        <h5>Thomas A. Edison</h5>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </section>

                </div>
            </div>
        </div>
        <!-- //testimonial --> 
        <!-- team -->
        <div class="testimonials w3ls-section" id="team">
            <div class="container">
                <h3 class="w3ls-title">Our Staff</h3>
                <div class="w3_testimonials_grids w3_testimonials_grids">
                    <div id="owl-demo" class="owl-carousel"> 
                        <div class="item w3_agileits_testimonials_grid">
                            <img src="images/t1.jpg" alt=" " class="img-responsive" />
                            <h4>J. Hobbs</h4>
                            <!--<p>Donec quis turpis pellentesque justo pulvinar sceleris.</p>-->
                        </div>
                        <div class="item w3_agileits_testimonials_grid">
                            <img src="images/t2.jpg" alt=" " class="img-responsive" />
                            <h4>Paul</h4>
                            <!--<p>Donec quis turpis pellentesque justo pulvinar sceleris.</p>-->
                        </div>
                        <div class="item w3_agileits_testimonials_grid">
                            <img src="images/t3.jpg" alt=" " class="img-responsive" />
                            <h4>John</h4>
                            <!--<p>Donec quis turpis pellentesque justo pulvinar sceleris.</p>-->
                        </div>
                        <div class="item w3_agileits_testimonials_grid">
                            <img src="images/t1.jpg" alt=" " class="img-responsive" />
                            <h4>Michael </h4>
                            <!--<p>Donec quis turpis pellentesque justo pulvinar sceleris.</p>-->
                        </div>
                        <div class="item w3_agileits_testimonials_grid">
                            <img src="images/t2.jpg" alt=" " class="img-responsive" />
                            <h4>Christopher</h4>
                            <!--<p>Donec quis turpis pellentesque justo pulvinar sceleris.</p>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- //team -->
        <!-- contact -->
        <div class="contact-bottom w3ls-section" id="contact">
            <div class="container">
                <h3 class="w3ls-title">contact</h3>
                <p>Vijayakumar<br>9677420944</p>
                <div class="w3layouts-list">
                    <div class="col-md-4 li"><span class="fa fa-map-marker" aria-hidden="true"></span><h6>Coimbatore,India.</h6></div>
                    <div class="col-md-4 li"><span class="fa fa-phone" aria-hidden="true"></span><h6>9677 420 944</h6></div>
                    <div class="col-md-4 li"><span class="fa fa-location-arrow" aria-hidden="true"></span><a href="mailto:vijivijz@icloud.com">vijivijz@icloud.com</a></div>
                    <div class="clearfix"></div>
                </div>
                <div class="col-md-6 col-sm-6  col-xs-6 agileits_w3layouts-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1646.2253132869112!2d76.99794384564913!3d11.083110056052485!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xa4bfa3a1c9c5aa49!2sKG+College+of+Arts+and+Science!5e0!3m2!1sen!2sin!4v1516187537356" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
                    <?php 
                        include './help.php';
                    ?>
<!--                <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSeDaVkqELFNY_UYt02aOxyK5QLbHRZApKgo0ZYn3_dh9yl1Vg/viewform?embedded=true" width="570" height="400" frameborder="0" style="border:0" allowfullscreen>Loading...</iframe>-->
                <!-- footer -->
                <div class="clearfix"></div>
            </div>
        </div>
        <!-- //contact -->

        <div class="agileits_w3layouts-footer">
            <div class="col-md-6 col-sm-8 agileinfo-copyright">
                <p>© 2018 Vijay. All rights reserved | Design by <a href="https://www.facebook.com/Vijaykumar707">Vijay</a></p>
            </div>
            <div class="col-md-6 col-sm-4 agileinfo-icons">
                <ul>
                    <li><a class="icon fb" href="https://www.facebook.com/Vijaykumar707" target="_blank"><i class="fa fa-facebook"></i></a></li>
                    <li><a class="icon tw" href="https://twitter.com/vijay76671" target="_blank"><i class="fa fa-twitter"></i></a></li>
                    <li><a class="icon gp" href="https://plus.google.com/108771608116326322856" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                    <li><a target="_blank" href="https://www.instagram.com/imvijay404/?hl=en"> <img src="https://c866088.ssl.cf3.rackcdn.com/assets/instagram30x30.png" border=0></a>


                </ul>
            </div>
            <div class="clearfix"></div>
        </div>
        <!-- footer -->
        
        
        <!-- bootstrap-modal-pop-up -->
        <div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        BCA
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
                    </div>
                    <div class="modal-body">
                        <img src="images/6.jpg" alt="Image loading Error" class="img-responsive" />
                        <p style="text-align:justify;">Bachelor in Computer Application (BCA) is an undergraduate degree course in Computer Applications. With the rapid growth of IT industry in India, the demand of Computer professional is increasing day by day. This increasing growth of IT industry has created a lot of opportunities for the Computer graduates.Bachelor in Computer Application (BCA) is one of the popular courses among the students who want to make their career in the IT (Information Technology) field. The duration of the course is 3 years and divided into 6 semesters. It comprises of the subjects like database, networking, data structure, core programming languages like 'C' and 'java'. This course provides a lot of opportunities to the students who are interested in Computer field and wants to work in the IT sector as programmer or software developer. 
                            <i>'The course curriculum of BCA is somewhat similar to the course as Bachelor of Technology (B.Tech).'</i></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- //bootstrap-modal-pop-up --> 
        <!--script for portfolio-->
        <script src="js/lightbox-plus-jquery.min.js"></script>
        <script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
        <script type="text/javascript">
$(document).ready(function () {
    $('#horizontalTab').easyResponsiveTabs({
        type: 'default', //Types: default, vertical, accordion           
        width: 'auto', //auto or any width like 600px
        fit: true   // 100% fit in a container
    });
});
        </script>
        <!--//script for portfolio-->


        <script src="js/owl.carousel.js"></script>  
        <script>
$(document).ready(function () {
    $("#owl-demo").owlCarousel({
        autoPlay: true, //Set AutoPlay to 3 seconds
        items: 3,
        itemsDesktop: [640, 2],
        itemsDesktopSmall: [414, 1],
        navigation: true,
        // THIS IS THE NEW PART
        afterAction: function (el) {
            //remove class active
            this
                    .$owlItems
                    .removeClass('active')
            //add class active
            this
                    .$owlItems //owl internal $ object containing items
                    .eq(this.currentItem + 1)
                    .addClass('active')
        }
        // END NEW PART

    });

});
        </script>

        <!-- here starts scrolling icon -->
        <script type="text/javascript">
            $(document).ready(function () {
                /*
                 var defaults = {
                 containerID: 'toTop', // fading element id
                 containerHoverID: 'toTopHover', // fading element hover id
                 scrollSpeed: 1200,
                 easingType: 'linear' 
                 };
                 */

                $().UItoTop({easingType: 'easeOutQuart'});

            });
        </script>
        <!-- flexSlider -->
        <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
        <script defer src="js/jquery.flexslider.js"></script>
        <script type="text/javascript">
$(window).load(function () {
$('.flexslider').flexslider({
animation: "slide",
start: function (slider) {
$('body').removeClass('loading');
}
});
});
        </script>
        <!-- //flexSlider -->

        <!-- start-smoth-scrolling -->
        <script type="text/javascript" src="js/move-top.js"></script>
        <script type="text/javascript" src="js/easing.js"></script>
        <script type="text/javascript">
            jQuery(document).ready(function ($) {
                $(".scroll").click(function (event) {
                    event.preventDefault();
                    $('html,body').animate({scrollTop: $(this.hash).offset().top}, 1000);
                });
            });
        </script>
        <!-- /ends-smoth-scrolling -->
        <!-- //here ends scrolling icon -->

        <script type="text/javascript" src="js/numscroller-1.0.js"></script>

        <script src="js/SmoothScroll.min.js"></script>
    </body>
</html> 