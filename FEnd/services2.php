<!DOCTYPE html>
<?php session_start(); 
?>
<html >


<head>

    <!-- Meta -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1">

    <!-- Title -->
    <title>..:: LIBRARIA ::..</title>

    <!-- Favicon -->
    <link href="images/favicon.ico" rel="icon" type="image/x-icon" />

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i%7CLato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet" />
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />

    <!-- Mobile Menu -->
    <link href="css/mmenu.css" rel="stylesheet" type="text/css" />
    <link href="css/mmenu.positioning.css" rel="stylesheet" type="text/css" />

    <!-- Stylesheet -->
    <link href="style.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="js/html5shiv.min.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->

</head>

<body class="layout-v3">

    
    
     
    
    
    
    
    <header id="header" class="navbar-wrapper">
        <div class="container-fluid">
            <div class="row">
                <nav class="navbar navbar-default">
                    <div class="menu-wrap" style="margin-top: -110px;">
                        <div class="navbar-header">
                            <div class="navbar-brand" style="margin-top: 60px;">
                               
                                    <a href="" >
                                        <h1 style=" color: #719200"> W.I.S.E</h1>
                                        
                                    </a>
                               
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
                                   echo '<p style=" color: #719200"  >Hello : '.$row['FirstName'].'</p>'?>
                                    <div class="header-cart dropdown">


                                    </div>
                                </div>
                            </div>
                        <!-- Navigation -->
                        <div class="navbar-collapse hidden-sm hidden-xs hidden-md hidden-ll" style="margin-top: 50px; background-color: #504d4c ;margin-right: -15%">
                            <ul class="nav navbar-nav">
                                <li class="dropdown active">
                                    <a data-toggle="dropdown" class="dropdown-toggle disabled" href="home.php">الرئيسية</a>

                                </li>
                                <li class="dropdown">
                                    <a data-toggle="dropdown" class="dropdown-toggle disabled" href="pAndB.php">الكتب و الدوريات</a>

                                </li>
                               
                               
                              
                               
                                <li><a href="aboutUs.php">معلومات عنا</a></li>
                                <li><a href="contact1.php">تواصل معنا</a></li>
                            </ul>
                            <!-- Header Topbar -->
                            
                            
                            
                            
                            <div class="header-topbar hidden-md hidden-sm" >
                                <div class="topbar-links">
                                    <a href="userLogin.php"><i class="fa fa-lock"></i>تسجيل الخروج</a>
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
                            <div style="margin-top: -45px; margin-right: 50px"> <a href="Messenger.php"><i class="fa fa-commenting" style=" color: #719200;  "></i> </a> </div>

                        
                        </div>
                    <div class="mobile-menu  hidden-lg "  >   
                        
                        <div style="margin-top: -45px; margin-right: 100px"> <a href="userLogin.php"><i class="fa fa-unlock" style=" color: #719200"></i> </a> </div>

                    
                    </div>
 
                    
                    
                    <div class="mobile-menu  hidden-lg ">
                        <div style="margin-top: -45px; margin-left: 39%"> <a href="#mobile-menu"><i class="fa fa-navicon" style=" color:#719200;  "></i></a> </div>
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
                                   echo '<p style=" color: #719200"  >Hello : '.$row['FirstName'].'</p>'?>
                                
                                </h1>
                                
                                </li>
                                 
                                <li class="mobile-title">
                                    <a href="home.php"> <h4>WISE</h4></a>
                                    
                                </li>
                                
                                <li>
                                    <a href="home.php">الرئيسية</a>

                                </li>
                                <li>
                                    <a href="pAndB.php">الكتب والدوريات</a>

                                </li>
                                
                                <li>
                                    <a href="aboutUs.php">معلومات عنا</a>

                                </li>
                                <li>
                                    <a href="contact1.php">تواصل معنا</a>

                                </li>
                                
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </header>
   
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    <!-- Start: Services Section -->
    <section  style="background:#3e3e3e ; width: 100% ; "> 
        <div id="content" class="site-content" >
        <div id="primary" class="content-area" >
            <main id="main" class="site-main" > 
                <div class="services-main" >
                                                     

                    <div class="services-pg " >
                      

                     
                    </div>
                </div>
            </main>
        </div>
            
    </div>  

    </section>
                                   

    <div style="color: #719200 ;margin-left:80% ; font-size: 40px ;margin-top: 20px">  <a href="services1.php" > EN  </a> </div>
    <section class="who-we-are1" style="margin-top:5% ; padding-top: 15px   ">
       
                            <div class="company-info">
                                <div class="container">
                                    <div class="row">
                                        
                                        <div class="col-sm-7 border  ">

                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="company-detail" style="text-align: center ; ">
                                                        <h3 class="section-title"  style="font-size: 60px">من نحن</h3>
                                                         <p  style="font-size: 20px"  >تسعى المكتبة إلى المساهمة الفاعلة في تحقيق أهداف الجامعة ، سواء فيما يتعلق بالعملية التعليمية ، أو دعم البحث العلمي ، أو خدمة المجتمع ، والطموح لتحقيق أعلى مستويات الجودة والتميز في العمل والخدمات ، والتفاعل المثمر مع جميع الأطراف والجهات المعنية..</p>
                                  <br>
                                  <p  style="font-size: 40px    ">رسالة المكتبة</p><br>
                                  <p  style="font-size: 20px">المساهمة بشكل فاعل في تحقيق أهداف الجامعة ورسالتها النبيلةعربي والإسلامي بمتخصصين قادرين على إبراز الصورة المشرقة للإسلام والمسلمين في كلفنون. والهندسة المعمارية ، مع مراعاة أفضل المعايير الدولية في البنية التحتية والموارد المالية والبشرية. المقتنيات والإجراءات والخدمات ، وقيمنا هي الإبداع والتميز والجودة والعمل الجماعي والإيثار والأخلاق والولاء والانتماء والمواطنة ونشر المعرفة.</p>                                  
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                 <div class="company-image1  hidden-xs " ></div>
                            </div>
                        </section>
    <!-- End: Services Section -->

    <!-- Start: Social Network -->
  
    <!-- End: Social Network -->

    <!-- Start: Footer -->
    
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
<?php include './footer.php'; ?>