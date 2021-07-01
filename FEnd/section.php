<?php include './header.php';?>
   
    

<div data-ride="carousel" class="carousel slide" id="home-v1-header-carousel" >
        <!-- Carousel slides -->
        <div class="carousel-inner" >
            <div class="item active">
                <figure>
                    <img alt="Home Slide" src="images/book.png" />
                </figure>
                <div class="container">
                    <div class="carousel-caption">
                    
                        <div class="card-body" style="margin-top: -40%">
                                <div class="table-responsive">
                                    <p style="color: #719200">Books Section</p>
                                    <center><input type="text" id="myInput" onkeyup="myFunction()"style="width: 300px" placeholder="Search by Title .." title="Type in a name"> </center><br>
                                     
                                    
                                    <table class="table table-bordered" id="myTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Title</th>
                                                <th>Book ID</th>
                                                <th>Year</th>
                                                <th>Pages</th>
                                                <th>Section</th>
                                                <th>Publisher Name</th>
                                                <th>Author Name</th>
                                                <th>Serial</th>
                                                <th>ISBN</th>
                                                <th>Borrow Status</th>
                                                
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                 <th>Title</th>
                                                <th>Book ID</th>
                                                <th>Year</th>
                                                <th>Pages</th>
                                                <th>Section</th>
                                                <th>Publisher Name</th>
                                                <th>Author Name</th>
                                                <th>Serial</th>
                                                <th>ISBN</th>
                                                 <th>Borrow status</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            
                                           <?php
                                           $con=new mysqli("localhost","root","","gproject");
                                           $st=$con->prepare("select * from book where section=?");
                                                  
                                           $st->bind_param('s', $_GET['sec']);
                                           $st->execute();
                                           $rs=$st->get_result();
                                           
                                           while ($row=$rs->fetch_assoc()){
                                               
                                              
                                             
                                                echo '<tr>';
                                                echo '<td>'.$row["title"].'</td>';
                                               echo '<td>'.$row["bookID"].'</td>';
                                               
                                               echo '<td>'.$row["year"].'</td>';
                                               echo '<td>'.$row["pages"].'</td>';
                                               echo '<td>'.$row["section"].'</td>';
                                               echo '<td>'.$row["publisherName"].'</td>';
                                               echo '<td>'.$row["authorName"].'</td>';
                                               echo '<td>'.$row["serial"].'</td>';
                                                echo '<td>'.$row["isbn"].'</td>'; 
                                                 
                                               
                                               $st_borrow=$con->prepare("select status from bookborrow where bookID=? ");
                                               $st_borrow->bind_param('i', $row['bookID']);
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