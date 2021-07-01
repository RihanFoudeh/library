
<!DOCTYPE html>
<?php session_start(); 
?>
<html lang="zxx">


<head>

    <!-- Meta -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1">

    <!-- Title -->
    <title>..:: Library ::..</title>

    <!-- Favicon -->
    <link href="images/favicon.ico" rel="icon" type="image/x-icon" />

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i%7CLato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet" />
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />

   
    <link href="css/mmenu.css" rel="stylesheet" type="text/css" />
    <link href="css/mmenu.positioning.css" rel="stylesheet" type="text/css" />

   
    <link href="style.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="style.css">

</head>

<body class="layout-v3">

    <!-- Start: Header Section -->
    <header id="header" class="navbar-wrapper">
        <div class="container-fluid">
            <div class="row">
                <nav class="navbar navbar-default">
                    <div class="menu-wrap" style="margin-top: -110px;">
                        <div class="navbar-header">
                            <div class="navbar-brand" style="margin-top: 60px;">
                                <h1>
                                    <a href="">
                                        <h1> W.I.S.E</h1>
                                    </a>
                                </h1>
                            </div>
                        </div>
                        
                        
                           <div class="header-topbar hidden-sm hidden-md" style="margin-right: 10% " >
                                <div class="topbar-links">
                                   <?php
                                   $con=new mysqli("localhost","root","","gproject");
                                   $st=$con->prepare("select FirstName from user where id=?");
                                   $st->bind_param('i', $_SESSION['id']);
                                   $st->execute();
                                  $rs= $st->get_result();
                                  $row=$rs->fetch_assoc();
                                   
                                   
                                   
                                  echo '<br>';
                                  echo '<br>';
                                  echo '<br>';
                                   echo '<p style="color: tomato"  >Hello : '.$row['FirstName'].'</p>'?>
                                    <div class="header-cart dropdown">


                                    </div>
                                </div>
                            </div>
                        <!-- Navigation -->
                        <div class="navbar-collapse hidden-sm hidden-xs hidden-md hidden-ll" style="margin-top: 50px; background-color: #504d4c ;margin-right: -15%">
                            <ul class="nav navbar-nav">
                                <li class="dropdown active">
                                    <a data-toggle="dropdown" class="dropdown-toggle disabled" href="home.php">الرئيسيه</a>

                                </li>
                                <li class="dropdown">
                                    <a data-toggle="dropdown" class="dropdown-toggle disabled" href="pAndB.php">الكتب و الدوريات</a>

                                </li>
                               
                               
                              
                                <li><a href="services.php">خدمات</a></li>
                                <li><a href="aboutUs.php">معلومات عنا</a></li>
                                <li><a href="contactus.php">تواصل معنا</a></li>
                            </ul>
                            <!-- Header Topbar -->
                            
                            
                            
                            
                            <div class="header-topbar hidden-md hidden-sm" >
                                <div class="topbar-links">
                                    <a href="userLogin.php"><i class="fa fa-lock"></i>خروج</a>
                                    <div class="header-cart dropdown">


                                    </div>
                                </div>
                            </div> 
                            
                            <div class="header-topbar hidden-md" style="margin-right: 5%">
                                <div class="topbar-links">
                                    <a href="Messenger.php"><i class="fa fa-commenting"></i>الرسائل</a>
                                    <div class="header-cart dropdown">


                                    </div>
                                </div>
                            </div>
                            
                             
                            
                            <!-- Header Topbar -->
                        </div>
<!--                        -->

                    </div>
                    <div class="mobile-menu  hidden-lg">
                            <div style="margin-top: -45px; margin-right: 50px"> <a href="Messenger.php"><i class="fa fa-commenting"></i> </a> </div>

                        
                        </div>
                    <div class="mobile-menu  hidden-lg">   
                        
                        <div style="margin-top: -45px; margin-right: 100px"> <a href="userLogin.php"><i class="fa fa-lock"></i> </a> </div>

                    
                    </div>
 
                    
                    
                    <div class="mobile-menu  hidden-lg ">
                        <div style="margin-top: -45px; margin-left: 39%"> <a href="#mobile-menu"><i class="fa fa-navicon"></i></a> </div>
                        <div id="mobile-menu">
                            <ul>
                                <li class="mobile-title ">    
                                    <h1 style="margin-left: 30%; margin-top:   -22%  ">
                                <?php
                                   $con=new mysqli("localhost","root","","gproject");
                                   $st=$con->prepare("select FirstName from user where id=?");
                                   $st->bind_param('i', $_SESSION['id']);
                                   $st->execute();
                                  $rs= $st->get_result();
                                  $row=$rs->fetch_assoc();
                                   
                                   
                                   
                                  echo '<br>';
                                  echo '<br>';
                                  echo '<br>';
                                   echo '<p style="color: tomato"  >Hello : '.$row['FirstName'].'</p>'?>
                                
                                </h1>
                                
                                </li>
                                 
                                <li class="mobile-title">
                                    <a href="home.php"> <h4>WISE</h4></a>
                                    
                                </li>
                                
                                <li>
                                    <a href="home.php">HOME</a>

                                </li>
                                <li>
                                    <a href="pAndB.php">BOOKS  &amp; PERIODICALS</a>

                                </li>
                                <li>
                                    <a href="services.php">SERVICES</a>

                                </li>
                                <li>
                                    <a href="aboutUs.php">ABOUT US</a>

                                </li>
                                <li>
                                    <a href="contactus.php">CONTACT</a>

                                </li>
                                <li> <a href="index.html">Login</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </header>
   

    <div data-ride="carousel" class="carousel slide" id="home-v1-header-carousel">
        <!-- Carousel slides -->
        <div class="carousel-inner">
            <div class="item active">
                <figure>
                    <img alt="Home Slide" src="images/book.png" />
                </figure>
                <div class="container">
                    <div class="carousel-caption">
                    
                        <div class="card-body" style="margin-top: -10%">
                                <div class="table-responsive">
                                    <p><a href="services.php" style="color: #ffffff ; margin-left: 150%  " >Eng</a></p>
                                    <p style="color: tomato">تهدف المكتبة إلى تحقيق أهداف الجامعة من خلال مساعدة الطلاب على إظهار إبداعهم وتميزهم. بالإضافة إلى ذلك ، تلعب المكتبة دورًا رئيسيًا في تزويد الطلاب بالكتب المدرسية والموارد والمجلات ، إلخ ... التي يحتاجونها في مجالات دراستهم.</p>
                                  <br>
                                  <p style="color: tomato">مهام : </p><br>
                                  <p style="color: tomato">مساعدة الطلاب على إجراء البحوث.</p>
                                  <p style="color: tomato">تزويد الطلاب بقواعد البيانات والمصادر اللازمة لدراساتهم.</p>
                                  <p style="color: tomato">مساعدة ماجستير. والدكتوراه. الطلاب في مجالات دراستهم.</p>
                                  <p style="color: tomato">إنشاء مصادر مرئية وصوتية للطلاب.</p>
                                  <p style="color: tomato">تعزيز البحث العلمي المتعلق بالجامعة والأردن.</p>
                                  <p style="color: tomato">. والدكتوراه. الأطروحات لمساعدة الباحثين على إجراء الدراسات.</p>
                                  <p style="color: tomato">التعاون والتنسيق مع المكتبات داخل الأردن وخارج المملكة.</p>
                                    
                                   
                                </div>
                            </div>
                                    
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- Start: Footer -->
    <footer class="site-footer">
        <div class="container">
            <div id="footer-widgets">
                <div class="row">

                    <div class="col-md-4 col-sm-6 widget-container">








                        <div id="text-2" class="widget widget_text">
                            <h3 class="footer-widget-title">About library</h3>
                            <span class="underline left"></span>
                            <div class="textwidget">
                                It is a long established fact that a reader will be distracted by the readable content of a page when looking.
                            </div>
                            <address>
                                    <div class="info">
                                        <i class="fa fa-location-arrow"></i>
                                        <span><a href="https://www.google.com/maps/dir//The+World+Islamic+Sciences+and+Education+University,+The+World+Islamic+Science+%26+Education+University+Prince+Nayef+Bin+Asem+St+9+%D8%AC%D8%A7%D9%85%D8%B9%D8%A9+%D8%A7%D9%84%D8%B9%D9%84%D9%88%D9%85+%D8%A7%D9%84%D8%A7%D8%B3%D9%84%D8%A7%D9%85%D9%8A%D8%A9+%D8%A7%D9%84%D8%B9%D8%A7%D9%84%D9%85%D9%8A%D8%A9+-%D8%B7%D8%A8%D8%B1%D8%A8%D9%88%D8%B1%D8%8C+Amman%E2%80%AD/@32.0116951,35.9349848,18z/data=!4m8!4m7!1m0!1m5!1m1!1s0x151b6037d70a02f5:0x422b60b0d9a86253!2m2!1d35.9356661!2d32.0123661"> The World Islamic Science & Education University Prince Nayef Bin Asem St 9 جامعة العلوم الاسلامية العالمية -طبربور، Amman</a>  </span>
                                    </div>
                                    <div class="info">
                                        <i class="fa fa-envelope"></i>
                                        <span><a href="mailto:info@wise.edu.jo ">info@wise.edu.jo</a></span>
                                    </div>

                                    <div class="info">
                                        <i class="fa fa-facebook-f"></i>
                                        <span><a href="https://web.facebook.com/wise.univ?_rdc=1&_rdr ">The World Islamic Science & Education University</a></span>
                                    </div>


                                    <div class="info">
                                        <i class="fa fa-phone"></i>
                                        <span><a href="tel:009625600230">+ 962-5600230</a></span>
                                    </div>
                                </address>
                        </div>
                    </div>
                    <div class="col-md-2 widget-container">

                    </div>
                    <div class="col-md-2 col-sm-6 widget-container">
                        <div id="nav_menu-2" class="widget widget_nav_menu">
                            <h3 class="footer-widget-title">Quick Links</h3>
                            <span class="underline left"></span>
                            <div class="menu-quick-links-container">
                                <ul id="menu-quick-links" class="menu">
                                    <li><a href="#">Library News</a></li>
                                    <li><a href="#">History</a></li>
                                    <li><a href="#">Meet Our Staff</a></li>
                                    <li><a href="#">Board of Trustees</a></li>
                                    <li><a href="#">Budget</a></li>
                                    <li><a href="#">Annual Report</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 widget-container">

                    </div>
                    <div class="clearfix hidden-lg hidden-md hidden-xs tablet-margin-bottom"></div>
                    <div class="col-md-2 col-sm-6 widget-container">
                        <div id="text-4" class="widget widget_text">
                            <h3 class="footer-widget-title">Timing</h3>
                            <span class="underline left"></span>
                            <div class="timming-text-widget">
                                <time datetime="2020-11-18">Sunday, 8AM–4PM</time>
                                <time datetime="2017-02-13">Monday, 8AM–4PM</time>
                                <time datetime="2017-02-13">Tuesday, 8AM–4PM</time>
                                <time datetime="2017-02-13">Wednesday, 8AM–4PM</time>
                                <time datetime="2017-02-13">Thursday, 8AM–4PM</time>
                                <time datetime="2017-02-13">Friday, Closed</time>
                                <time datetime="2017-02-13">Saturday, Closed</time>

                                <ul>
                                    <li><a href="#">Closings</a></li>
                                    <li><a href="#">Branches</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </footer>
    <!-- End: Footer -->

    <!-- jQuery Latest Version 1.x -->
    <script type="text/javascript" src="js/jquery-1.12.4.min.js"></script>

    <!-- jQuery UI -->
    <script type="text/javascript" src="js/jquery-ui.min.js"></script>

    <!-- jQuery Easing -->
    <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>

    <!-- Bootstrap -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    <!-- Mobile Menu -->
    <script type="text/javascript" src="js/mmenu.min.js"></script>

    <!-- Harvey - State manager for media queries -->
    <script type="text/javascript" src="js/harvey.min.js"></script>

    <!-- Waypoints - Load Elements on View -->
    <script type="text/javascript" src="js/waypoints.min.js"></script>

    <!-- Facts Counter -->
    <script type="text/javascript" src="js/facts.counter.min.js"></script>

    <!-- MixItUp - Category Filter -->
    <script type="text/javascript" src="js/mixitup.min.js"></script>

    <!-- Owl Carousel -->
    <script type="text/javascript" src="js/owl.carousel.min.js"></script>

    <!-- Accordion -->
    <script type="text/javascript" src="js/accordion.min.js"></script>

    <!-- Responsive Tabs -->
    <script type="text/javascript" src="js/responsive.tabs.min.js"></script>

    <!-- Responsive Table -->
    <script type="text/javascript" src="js/responsive.table.min.js"></script>

    <!-- Masonry -->
    <script type="text/javascript" src="js/masonry.min.js"></script>

    <!-- Carousel Swipe -->
    <script type="text/javascript" src="js/carousel.swipe.min.js"></script>

    <!-- bxSlider -->
    <script type="text/javascript" src="js/bxslider.min.js"></script>

    <!-- Custom Scripts -->
    <script type="text/javascript" src="js/main.js"></script>

</body>


</html>