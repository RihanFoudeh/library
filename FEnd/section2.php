<?php include './header.php';?>
   
    

    




<!--<section  style="background:#3e3e3e ; width: 100% ; margin-top: -34px "> 
        <div id="content"  class="site-content" >
        <div id="primary" class="content-area" >
            <main id="main" class="site-main" >
                <div class="services-main" >
                    <div class="services-pg " >
                      
                       
                        
                     
                    </div>
                </div>
            </main>
        </div>
    </div>  
    </section>-->













<div data-ride="carousel" class="carousel slide" id="home-v1-header-carousel">
        <!-- Carousel slides -->
        <div class="carousel-inner">
            <div class="item active">
                <figure>
                    <img alt="Home Slide" src="images/book.png" />
                </figure>
                <div class="container">
                    <div class="carousel-caption">
                    
                        <div class="card-body" style="margin-top: -40%">
                                <div class="table-responsive">
                                    <p style="color: #719200;">Periodicals Section</p>
                                      <center><input type="text" id="myInput" onkeyup="myFunction()" style="width: 300px" placeholder="Search by Title .." title="Type in a name"> </center><br>
                                    <table class="table table-bordered" id="myTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Title</th>
                                                <th>Periodical ID</th>
                                                
                                                <th>Year</th>
                                                <th>Pages</th>
                                                <th>Section</th>
                                                <th>Publisher Name</th>
                                                <th>Author Name</th>
                                                <th>Serial</th>
                                                <th>ISBN</th>
                                                <th>Borrow status</th>
                                                
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                               <th>Title</th>
                                                <th>Periodical ID</th>
                                                
                                                <th>Year</th>
                                                <th>Pages</th>
                                                <th>Section</th>
                                                <th>Publisher Name</th>
                                                <th>Author Name</th>
                                                <th>Serial</th>
                                                <th>ISBN</th>
                                                 <th>Borrow Status</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            
                                           <?php
                                           $con=new mysqli("localhost","root","","gproject");
                                           $st=$con->prepare("select * from periadical where section=?");
                                                  
                                           $st->bind_param('s', $_GET['sec']);
                                           $st->execute();
                                           $rs=$st->get_result();
                                           
                                           while ($row=$rs->fetch_assoc()){
                                               
                                              
                                             
                                                echo '<tr>';
                                              
                                               echo '<td>'.$row["title"].'</td>';
                                                echo '<td>'.$row["periodicalID"].'</td>';
                                               echo '<td>'.$row["year"].'</td>';
                                               echo '<td>'.$row["pages"].'</td>';
                                               echo '<td>'.$row["section"].'</td>';
                                               echo '<td>'.$row["publisherName"].'</td>';
                                               echo '<td>'.$row["autherName"].'</td>';
                                               echo '<td>'.$row["serial"].'</td>';
                                               echo '<td>'.$row["isbn"].'</td>';
                                              
                                               
                                                 $st_borrow=$con->prepare("select status from periodicalborrow where periodicalborrow=? ");
                                               $st_borrow->bind_param('i', $row['periodicalID']);
                                               $st_borrow->execute();
                                               $rs_borrow=$st_borrow->get_result();
                                              $test=$rs_borrow->fetch_assoc();
                                              if($test==0){
                                              $test='Available';}
 else { $test='Unavailable';}
                                             
                                            echo '<td>'.$test.'</td>';
                                              
                                              
                                             
                                             
                                               
                                            echo'</tr>';   
                                           }
                                           
                                           
                                           ?>
                                            
                                       
                                        
                                            
                                        </tbody>
                                    </table>
    
                                                                     <script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
                                                         </div>
                            </div>
                                    
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
     
    
    
   <?php
   include './footer.php';