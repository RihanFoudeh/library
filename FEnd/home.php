


<?php
 include './header.php';?>

                             
<head>
   
    
    
    <style>
        
        
       .layout-v3 .category-filter .filter-buttons .btn.active,
.layout-v3 .category-filter .filter-buttons .btn:hover {
    background-color: #719200;
    border-color: #719200;
    color: #fff;
} 



.btn-dark-gray:hover {
    background-color: #719200;
    border-color: #719200;
    color: #fff;
}




.layout-v3 .category-filter .category-list .category-item figcaption.bg-blue {
    background-color: rgba(40, 143, 235, 0.9);
}
        
        .welcome-section .welcome-wrap .welcome-text .btn-dark-gray:hover{
    background-color: #719200;
    border-color: #719200;
    color: #fff; 
}
        
    </style>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
</head>              

   

    <!-- Start: Slider Section -->
    <div data-ride="carousel" class="carousel slide hidden-sm hidden-xs " style="opacity: 80%" id="home-v1-header-carousel">
        <!-- Carousel slides -->
        <div class="carousel-inner ">
            <div class="item active ">
                
                <figure class="col-sm-13 row-sm-13">
                    <img alt="Home Slide" src="images/sl.jpg" / style="height:1000px">
                </figure>
                <div class="container">
                    <div class="carousel-caption" >
                        <h2>W.I.S.E periodical system</h2>
                        <p>Our Periodical Library gives you the access and the ability to borrow the <strong>Books,</strong> <strong>Periodicals,</strong> <strong>Magazines,</strong> <strong>Researches.</strong> </p>
                  
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    
     <div data-ride="carousel" class="carousel slide hidden-lg hidden-md" style="opacity: 80%" id="home-v1-header-carousel">
        <!-- Carousel slides -->
        <div class="carousel-inner ">
            <div class="item active ">
                
                <figure >
                    <img alt="Home Slide" src="images/sl.jpg" >
                </figure>
                <div class="container">
                    <div class="carousel-caption">
                        <h2>W.I.S.E periodical system</h2>
                        <p>Our Periodical Library gives you the access and the ability to borrow the <strong>Books,</strong> <strong>Periodicals,</strong> <strong>Magazines,</strong> <strong>Researches.</strong> </p>
                  
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    <!-- End: Slider Section -->


    <br><br><br><br><br><br><br><br><br>
    <!-- Start: Welcome Section -->
    <section class="welcome-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="welcome-wrap">
                        <div class="welcome-text">
                            <h2 class="section-title">Welcome to the Library</h2>
                            <span class="underline left"></span>
                            <p style="font-size: 20px;">The Library aims at achieving the objectives of the university through helping students show their creativity and distinction. In addition, the library plays a major role in providing the students with textbooks, resources
                                and journals, etc. … needed in their fields of study.
                                <p>
                                    <h1>Tasks:</h1>
                                    <p> </p>

                                    <ul style="font-size: 10px;">
                                        <li>
                                            <h4>Helping students to conduct research.</h4>
                                        </li>

                                        <br>

                                        <li>
                                            <h4>Providing the students with databases and sources necessary for their studies.</h4>
                                        </li>

                                      

                                        <br>

                                        <li>
                                            <h4>Helping MA. and PhD. students in their fields of study.</h4>
                                        </li>

                                        <br>

                                        <li>
                                            <h4>Promoting scientific research related to the university and Jordan.</h4>
                                        </li>

                                        <br>

                                        <li>
                                            <h4>Collecting MA. and PhD. dissertations so as to help researchers conduct studies.</h4>
                                        </li>

                                        <br>

                                        <li>
                                            <h4> Cooperation and coordination with libraries inside Jordan and outside the kingdom</h4>
                                        </li>

                                        <br>

                                    </ul>

                                </p>
                        </p>
                            <div class="dark"> <a class="btn btn-dark-gray"  href="services1.php">Read More</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="welcome-image"></div>
    </section>
    <!-- End: Welcome Section -->

    <!-- Start: Category Filter -->
    <section class="category-filter section-padding">
        <div class="container" id="BooksPeriodicals">
            <div class="center-content">
                <h2 class="section-title">Check Out Our Content</h2>
                <span class="underline center"></span>
                <p class="lead">Our content from books and periodicals aim to spread the information and the knowledge between the students, and to help them in their fields of study.</p>
            </div>
            <div class="filter-buttons" >
                <div class="filter btn" data-filter="all">All Sections</div>
                <div class="filter btn" data-filter=".IT">Information Technology</div>
                <div class="filter btn" data-filter=".LAW">Shari'ah and Law</div>
                <div class="filter btn" data-filter=".EDU">Educational Sciences</div>
                <div class="filter btn" data-filter=".GS">Graduate Studies</div>
                <div class="filter btn" data-filter=".FHanafi">Fiqh Hanafi</div>
                <div class="filter btn" data-filter=".Arts">Arts and Architecture</div>
                <div class="filter btn" data-filter=".BF">Business & Finance</div>
            </div>
        </div>
        <div id="category-filter">
            <ul class="category-list">
                <li class="category-item IT">
                    <figure>
                        <img src="images/category-filter/home-v1/category-filter-img-07.jpg" alt="New Releaase" style="height: 356px"  />
                        <figcaption class="bg-blue">
                            <div class="info-block">
                                <h4 style="font-size: 30px">Information Technology</h4>
                                
                                <br>


                                <ol>
                                   
                                    
                                        
                                       <?php echo '<a class="btn  btn-dark-gray "    href="section?sec=Information Technology">Visit Books</a>' ?>
                                       <?php echo '<a class="btn btn-dark-gray" href="section2?sec=Information Technology">Visit Periodicals</a>' ?> 
                                   
                                    

                                </ol>
                            </div>
                        </figcaption>
                    </figure>
                </li>
                <li class="category-item LAW">
                    <figure>
                        <img src="images/category-filter/home-v1/Capture11.PNG" alt="New Releaase" style="height: 356px"/>
                        <figcaption class="bg-blue">
                            <div class="info-block">
                                <h4 style="font-size: 30px">Shariah and Law</h4>
                              
  <br>
                                <ol>
                                    <li>
                                     
                                           <?php echo '<a class="btn btn-dark-gray" href="section?sec=Shariah and Law">Visit Books</a>' ?>
                                       <?php echo '<a class="btn btn-dark-gray" href="section2?sec=Shariah and Law">Visit Periodicals</a>' ?> 
                                       

                                </ol>
                            </div>
                        </figcaption>
                    </figure>
                    </li>
                    <li class="category-item EDU">
                        <figure>
                            <img src="images/category-filter/home-v1/Capture5.PNG" alt="New Releaase" style="height: 356px"/>
                            <figcaption class="bg-blue">
                                <div class="info-block">
                                    <h4 style="font-size: 30px">Educational Sciences</h4>
                                   
  <br>
                                    <ol>
                                        <li>
                                            
                                               <?php echo '<a class="btn btn-dark-gray" href="section?sec=Educational Sciences">Visit Books</a>' ?>
                                       <?php echo '<a class="btn btn-dark-gray" href="section2?sec=Educational Sciences">Visit Periodicals</a>' ?> 
                                           
                                        </li>

                                    </ol>
                                </div>
                            </figcaption>
                        </figure>
                    </li>
                    <li class="category-item GS">
                        <figure>
                            <img src="images/category-filter/home-v1/GR.PNG" alt="New Releaase" style="height: 356px" />
                            <figcaption class="bg-blue">
                                <div class="info-block">
                                    <h4 style="font-size: 30px">Graduate Studies</h4>
                                    
  <br>
                                    <ol>
                                        <li>
                                            
                                             <?php echo '<a class="btn btn-dark-gray" href="section?sec=Graduate Studies">Visit Books</a>' ?>
                                       <?php echo '<a class="btn btn-dark-gray" href="section2?sec=Graduate Studies">Visit Periodicals</a>' ?> 
                                            
                                        </li>

                                    </ol>
                                </div>
                            </figcaption>
                        </figure>
                    </li>
                    <li class="category-item FHanafi">
                        <figure>
                            <img src="images/category-filter/home-v1/Fiqh Hanafi.jpg" alt="New Releaase" style="height: 356px" />
                            <figcaption class="bg-blue">
                                <div class="info-block">
                                    <h4 style="font-size: 30px">Fiqh Hanafi</h4>
                                    
  <br>

                                    <ol>
                                        <li>
                                          
                                                 <?php echo '<a class="btn btn-dark-gray" href="section?sec=Fiqh Hanafi">Visit Books</a>' ?>
                                       <?php echo '<a class="btn btn-dark-gray" href="section2?sec=Fiqh Hanafi">Visit Periodicals</a>' ?> 
                                           
                                        </li>

                                    </ol>
                                </div>
                            </figcaption>
                        </figure>
                    </li>
                    <li class="category-item Arts">
                        <figure>
                            <img src="images/category-filter/home-v1/category-filter-img-06.jpg" alt="New Releaase" style="height: 356px" />
                            <figcaption class="bg-blue">
                                <div class="info-block">
                                    <h4 style="font-size: 30px">Arts and Architecture</h4>
                                    
  <br>

                                    <ol>
                                        <li>
                                            
                                                <?php echo '<a class="btn btn-dark-gray" href="section?sec=Arts and Architecture">Visit Books</a>' ?>
                                       <?php echo '<a class="btn btn-dark-gray" href="section2?sec=Arts and Architecture">Visit Periodicals</a>' ?> 
                                          
                                        </li>

                                    </ol>
                                </div>
                            </figcaption>
                        </figure>
                    </li>
                 
                   

                    <li class="category-item BF">
                        <figure>
                            <img src="images/category-filter/home-v1/BF.PNG" style="height: 356px" />
                            <figcaption class="bg-blue">
                                <div class="info-block">
                                    <h4 style="font-size: 30px">Business and Finance</h4>
                                   
  <br>
                                    <ol>
                                        <li>
                                           
                                                <?php echo '<a class="btn btn-dark-gray" href="section?sec=Business and Finance">Visit Books</a>' ?>  
                                       <?php echo '<a class="btn btn-dark-gray" href="section2?sec=Business and Finance">Visit Periodicals</a>' ?> 
                                            

                                    </ol>
                                </div>
                            </figcaption>
                        </figure>
                        </li>

            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="container">

        </div>
    </section>
    <!-- Start: Category Filter -->
    <div class="col-md-2 widget-container">

    </div>



    <?php
     include './footer.php';