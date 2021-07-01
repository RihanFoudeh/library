<?php include_once './header.php';?>
<!-- Start: Category Filter -->







<body style="layout-v3">

    <!-- Start: Header Section -->
   
    <!-- End: Header Section -->

    <!-- Start: Page Banner -->
   
    <!-- End: Page Banner -->
    <!-- Start: Services Section -->
    <section  style="background:#3e3e3e ; width: 100% ; margin-top: -34px "> 
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
    </section>













<section class="category-filter section-padding" style="background-color: #f2f2f2 " >
    <div class="container" id="BooksPeriodicals" style="margin-top: 10px" >
                <main>
                    <div class="container-fluid">
                        
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active" style="margin-left: 45%;   color: black ; background-color: #f2f2f1 ;opacity: 70% ">Messenger Info</li>
                        </ol>
                       
                        <div class="card-header"><h3 class="text-center font-weight-light my-4">Messages</h3></div><br>
                        
                        <center><input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search by Message ID .." title="Type in a name"> </center><br>
                        <div class="card-body">
                            
                                <div class="table-responsive">
                                   
                                    <table class="table table-bordered" id="myTable" width="100%" cellspacing="0" style="color: black ; text-align: center ; background-color: white ;opacity: 70% ; ">
                                        <thead>
                                            <tr>
                                                <th>Message ID</th>
                                                <th>Text</th>
                                                <th>time</th>
                                                <th>Sent By</th>
                                               
                                              
                                                
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Message ID</th>
                                                <th>Text</th>
                                                <th>time</th>
                                                <th>Sent By</th>
                                              
                                               
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            
                                          <?php
                                           $con=new mysqli("localhost","root","","gproject");
                                           $st=$con->prepare("select * from messenger where id=? or id=1000");
                                          $st->bind_param('i', $_SESSION['id']);
                                           
                                           $st->execute();
                                           $rs=$st->get_result();
                                           
                                           while ($row=$rs->fetch_assoc()){
                                               
                                              
                                             
                                                echo '<tr>';
                                               echo '<td>'.$row["messageID"].'</td>';
                                               echo '<td>'.$row["text"].'</td>';
                                               echo '<td>'.$row["time"].'</td>';
                                               echo '<td>Admin</td>';
                                             
                                              
                                               
                                           
                                                 
                                             
                                               
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
                </main>
        </div>
        
        
    </section>
    
    
    </body>
<?php include './footer.php';?>