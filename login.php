
<html lang="en">
<head>

    <!-- Title -->
    <title>CLM </title> 
   
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />


     <!-- DATA TABLE !-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
    
    <!--Custom CSS-->
    <link href="../src/css/custom.css" rel="stylesheet">

</head>
<body>

<style>
  body { height: 100%; background-image: url(src/svg/agreement.svg); background-position:left -105px top -200px; background-repeat: no-repeat; background-size:cover; font-family: Noto Sans}
</style>
<body>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
    <div class="row no-gutters">
       <div class="col-xl-8"></div>

       <div class="col-xl-4 text-center">
           <div class="card border-0 bg-transparent p-1 login-box">
               <small class="text-uppercase font-weight-bold mt-5"> Welcome to </small>
               <h2 class="font-weight-bolder">Contract Lifecycle Management</h2>
               
               <div class="form-group mt-4 px-4">
                   
                   <div class="input-group mb-3 ">
                       <div class="input-group-prepend ">
                         <span class="input-group-text border-0 bg-purple text-white" id="basic-addon1"><i class="fas fa-user"></i></span>
                       </div>
                       <input type="text" class="form-control" placeholder="CCMS Username" aria-label="Username" aria-describedby="basic-addon1">
                   </div>
                   <div class="input-group mb-3">
                       <div class="input-group-prepend">
                         <span class="input-group-text border-0 bg-purple text-white" id="basic-addon1"><i class="fas fa-key"></i></span>
                       </div>
                       <input type="password" class="form-control" placeholder="CCMS Passowrd" aria-label="Username" aria-describedby="basic-addon1">
                   </div>
                   <br>
                   <button type="button" class="btn text-xs btn-sm btn-success">Log in</button>
                   <br>
                   
                   <button type="button" class="btn text-xs btn-sm btn-block btn-default">Account locked? Contact BARC Developers.</button>
               </div>
           </div>
       </div>
    </div> 
       
    <!--Need Access button -->
     
    <button type="button" class="btn icon-circle bg-purple text-white btn-sm text-xs need_access dropup" data-toggle="dropdown"><i class="fas fa-cog"></i></button>
    <div class="dropdown-menu">
      <div class="dropdown-header font-weight-bold text-uppercase p-0 text-center">Other Options</div>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item text-sm" href="#" role="button" data-toggle="modal" data-target="#RequestAccess_Modal"><i class="text-purple fas  fa-paper-plane mr-1"></i> Request Access</a>
      <a class="dropdown-item text-sm" href="#" role="button" data-toggle="modal" data-target="#ContactBARC_Modal"><i class="text-purple fas fa-comment mr-1"></i> Contact BARC</a>
    </div>     
      
</div>   

<!--Javascript-->
<!--Select2-->   
