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
    <!-- Look of this document is driven by a CSS referenced by an href attribute. See http://www.w3.org/TR/xml-stylesheet/ -->
<link rel="StyleSheet" type="text/css" href="http://DESKTOP-DDDP0R8:8082/resource/file%3A/C%3A/wamp64/www/Gproject/FEnd/style.css" media="screen" >
    
    
    
    
    
    <style>
        
        
        .layout-v3 .navbar-wrapper {
            color: red;
        }
    </style>

</head>

<body class="layout-v3">
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    

    <!-- Start: Header Section -->
    <header id="header" class="navbar-wrapper">
        <div class="container-fluid">
            <div class="row">
                <nav class="navbar navbar-default" >
                    <div class="menu-wrap" style="margin-top: -110px;  " >
                        <div class="navbar-header">
                            <div class="navbar-brand" style="margin-top: 60px;">
                               
                                    <a href="https://www.wise.edu.jo/" >
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
                        <div class="navbar-collapse hidden-sm hidden-xs hidden-md hidden-ll" style="margin-top: 50px; background-color: #504d4c ;margin-right: -15%;">
                            <ul class="nav navbar-nav" >
                                <li class="dropdown active">
                                    <a data-toggle="dropdown" class="dropdown-toggle disabled"  href="home.php">Home</a>

                                </li>
                                <li class="dropdown ">
                                    <a data-toggle="dropdown" class="dropdown-toggle disabled" href="pAndB.php">Books &amp; Periodicals</a>

                                </li>
                               
                               
                              
                               
                                <li  class="dropdown "><a href="services1.php">About Us</a></li>
                                <li class="dropdown "><a href="contact1.php">Contact</a></li>
                            </ul>
                            <!-- Header Topbar -->
                            
                            
                            
                            
                            <div class="header-topbar hidden-md hidden-sm" >
                                <div class="topbar-links">
                                    <a href="userLogin.php"><i class="fa fa-lock"></i>Logout</a>
                                    <div class="header-cart dropdown">


                                    </div>
                                </div>
                            </div> 
                            
                            <div class="header-topbar hidden-md" style="margin-right: 5%">
                                <div class="topbar-links">
                                    <a href="Messenger.php"><i class="fa fa-commenting"></i>Messages</a>
                                    <div class="header-cart dropdown">


                                    </div>
                                </div>
                            </div>
                            
                             
                            
                            <!-- Header Topbar -->
                        </div>
<!--                        -->

                    </div>
                    <div class="mobile-menu  hidden-lg">
                            <div style="margin-top: -45px; margin-right: 50px"> <a href="Messenger.php"><i class="fa fa-commenting" style=" color: #719200"></i> </a> </div>

                        
                        </div>
                    <div class="mobile-menu  hidden-lg "  >   
                        
                        <div style="margin-top: -45px; margin-right: 100px"> <a href="userLogin.php"><i class="fa fa-unlock" style=" color: #719200"></i> </a> </div>

                    
                    </div>
 
                    
                    
                    <div class="mobile-menu  hidden-lg ">
                        <div style="margin-top: -45px; margin-left: 39%"> <a href="#mobile-menu"><i class="fa fa-navicon" style=" color:#719200;"></i></a> </div>
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
                                    <a href="home.php">HOME</a>

                                </li>
                                <li>
                                    <a href="pAndB.php">BOOKS  &amp; PERIODICALS</a>

                                </li>
                                
                                <li>
                                    <a href="services1.php">ABOUT US</a>

                                </li>
                                <li>
                                    <a href="contact1.php">CONTACT</a>

                               
                                
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </header>
   