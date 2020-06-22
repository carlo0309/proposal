<!DOCTYPE html>
<html lang="en">
<head>
  <title>CLM</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

  <style>
      p { 
 color: white; 
} 
.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #4CAF50;
  color: white;
}
.folder {
    width: 70px;
    height: 50px;
    margin: 0 auto;
    margin-top: 50px;
    position: relative;
    background-color: #d1bc9a;
    border-radius: 0 6px 6px 6px;
    box-shadow: 4px 4px 7px rgba(0, 0, 0, 0.59);
}

.folder:before {
    content: '';
    width: 50%;
    height: 12px;
    border-radius: 0 20px 0 0;
    background-color: #d1bc9a;
    position: absolute;
    top: -12px;
    left: 0px;
}
</style>
<body> 

<!-- NAVIGATION !--> 
  <div class="topnav">
 
        <a class="nav-link" style="color:#ffff ; Font-family: Calibri; " href="index.php">Dashboard</a>
   
        <a class="nav-link" style="color:#ffff ; Font-family: Calibri; " href="create_contract.php">Create Contract</a>
   
     
        <a class="active" style="color:#ffff ; Font-family: Calibri;" href="repository.php">Repository</a>
    
    
        <a class="nav-link" style="color:#ffff ; Font-family: Calibri;" href="gmvsactual.php">GM vs Actual</a>

        <a class="nav-link" style="color:#ffff ; Font-family: Calibri;" href="reports.php">Reports</a>
 
        <a class="nav-link" style="color:#ffff ; Font-family: Calibri;" href="user.php">User</a>
 
    </div>
    </nav>
<div class="hero">
     <div class="wrapper d-flex align-items-stretch">
                    
                    <h3 class="font-weight-bold mt-3"> Repository </h3>
                    <hr>

                    <!--buttons-->
                    <div id="navbarproj">
                        <div class="row mt-3">
                            <div class="col-xl-12 col-lg-12">   
                                <div class="button-cover float-left ml-3">
                                    <div class="button r" id="button-4">                          
                                        <input type="checkbox" class="checkbox" id="list-grid-button" >                            
                                        <div class="knobs"></div>
                                        <div class="layer"></div>
                                    </div>
                                </div>                  
                            </div>
                        </div>
                    </div>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <!-- Clients -->
                    <div class="row mt-5">
                    <b>Apple</b>
                    <div class="folder">
                         <div class="contai d-flex justify-content-center px-5">   
                           
                         </div>
                    </div>
                        <div class="col-xl-2 col-lg-2 clients_card mb-grid">
                        <b>AT@T</b>
                        <div class="folder">
                            <div class="contai d-flex justify-content-center px-5">   
                                   
                            </div>
                        </div>
                        </div>
                      
                        <div class="col-xl-2 col-lg-2 clients_card mb-grid">
                        <b>BPI</b>
                        <div class="folder">
                            <div class="contai d-flex justify-content-center px-5">   
                                
                            </div>
                        </div>
                        </div>
                      
                        <div class="col-xl-2 col-lg-2 clients_card mb-grid">
                        <b>Bisell</b>
                        <div class="folder">
                            <div class="contai d-flex justify-content-center px-5">   
                                
                            </div>
                        </div>
                        </div>
                      
                        <div class="col-xl-2 col-lg-2 clients_card mb-grid">
                        <b>Ceva</b>
                        <div class="folder">
                            <div class="contai d-flex justify-content-center px-5">   
                           
                            </div>
                        </div>
                        </div>
                        
                        <div class="col-xl-2 col-lg-2 clients_card mb-grid">
                        <b>Globe</b>
                        <div class="folder">
                            <div class="contai d-flex justify-content-center px-5">   
                                   
                            </div>
                        </div>
                        </div>

                        <div class="col-xl-2 col-lg-2 clients_card mb-grid">
                        <b>Hawian Airlines</b>
                        <div class="folder">
                            <div class="contai d-flex justify-content-center px-5">   
                                     
                            </div>
                        </div>
                        </div>
                      
                        <div class="col-xl-2 col-lg-2 clients_card mb-grid">
                        <b>Frontier</b>
                        <div class="folder">
                            <div class="contai d-flex justify-content-center px-5">   
                                 
                            </div>
                        </div>
                        </div>
                      
                        <div class="col-xl-2 col-lg-2 clients_card mb-grid">
                            
                                <div class="contai d-flex justify-content-center px-5">
                                 
                                <br>
                                                        <br>
                                                        <p >Open Folder</p>
                            </div>
                        </div>

                        <div class="col-xl-2 col-lg-2 clients_card mb-grid">
                            
                                <div class="contai d-flex justify-content-center px-5">
                                    <img  class="img-fluid img-grid">
                                 
                                           <br>
                                                        <br>
                                            <p >Open Folder</p>
                                           
                                        
                                   
                                </div>
                         
                        </div>

                      
                      
                    </div>
                    
                </div>
                

            </div>
        </div>
        </div>
        
  
        <!-- Custom JS -->      
  <script>
    (function($) {

	$('#sidebarCollapse').on('click', function () {
      $('#sidebar').toggleClass('active');
      $('.main').toggleClass('main-active');
  });

    })(jQuery);

    $('#sidebarCollapse').click(function() {
        $("span", this).toggleClass("fa-angle-double-right fa-angle-double-left");
    });

    $('.collapse').click(function(){
        $(this).find("i").toggleClass('fa-chevron-up fa-chevron-down');
      });

      $(document).ready(function(){
         $('#list-grid-button').change(function(){
        if(this.checked)
        {           
            $('.clients_card').removeClass('col-xl-2 col-lg-2');
            $('.clients_card').addClass('col-xl-6 col-lg-6');

            $('.clients_card').removeClass('mb-grid');
            $('.clients_card').addClass('mb-list');
          
            $('.card').removeClass('grids');
            $('.card').addClass('list');

            $('.img-fluid').removeClass('img-grid');
            $('.img-fluid').addClass('img-list');
        }

        else {
            $('.clients_card').removeClass('col-xl-6 col-lg-6');
            $('.clients_card').addClass('col-xl-2 col-lg-2');  

            $('.clients_card').removeClass('mb-list');
            $('.clients_card').addClass('mb-grid');

            $('.card').removeClass('list');
            $('.card').addClass('grids');

            $('.img-fluid').removeClass('img-list');
            $('.img-fluid').addClass('img-grid');

        }
    });
    });

    </script>
    <script>

        $(function () {
            $(document).scroll(function () {
                var $nav = $("#navbarproj");
                $nav.toggleClass('scrolled1', $(this).scrollTop() > $nav.height());
            });
        });

    </script>
    <script>
      window.onscroll = function() {myFunction()};
      
      var navbar = document.getElementById("navbarproj");
      var sticky = navbar.offsetTop;
      
      function myFunction() {
        if (window.pageYOffset >= sticky) {
          navbar.classList.add("sticky1")
        } else {
          navbar.classList.remove("sticky1");
        }
      }
    </script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

<!-- Charts --> 
<!-- <script src="assets/js/chart/doughnut.js"></script> -->
<script src="src/js/main.js"></script>


</body>
</html>