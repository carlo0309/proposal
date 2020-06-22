<!DOCTYPE html>
<html lang="en">
<head>

  <title>Dashboard</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- ICONS !-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <!-- CSS !-->
  <link href="../src/css/custom.css" rel="stylesheet">
  <link rel="stylesheet" href="custom.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <!-- DATA TABLE !-->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
  <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
  <link href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap4.min.css">

</head>

<body> 

<!-- NAVIGATION !--> 
  <div class="topnav">
 
        <a class="nav-link" style="color:#ffff ; Font-family: Calibri; " href="index.php">Dashboard</a>
   
        <a class="nav-link" style="color:#ffff ; Font-family: Calibri; " href="create_contract.php">Create Contract</a>
   
        <a class="nav-link" style="color:#ffff ; Font-family: Calibri;" href="repository.php">Repository</a>
    
        <a class="nav-link" style="color:#ffff ; Font-family: Calibri;" href="gmvsactual.php">GM vs Actual</a>

        <a class="nav-link" style="color:#ffff ; Font-family: Calibri;" href="reports.php">Reports</a>
 
        <a class="active" style="color:#ffff ; Font-family: Calibri;" href="user.php">User</a>
 
    </div>
    </nav>


<!--Modal-->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Edit info</h5>
      </div>
      <div class="modal-body">
      <input type="text" class="form-control" placeholder="CCMS IDENT" aria-label="empident" aria-describedby="basic-addon1">
      <br>
      <input type="text" class="form-control" placeholder="First Name" aria-label="empfname" aria-describedby="basic-addon1">
      <br>
      <input type="text" class="form-control" placeholder="Last Name" aria-label="emplname" aria-describedby="basic-addon1">
      <br>
      <select name="user_lvl" id="user_lvl" style="font-size:13px;" class="custom-select">
										<option value="Select">Select user level</option>
										<option value="0">Admin</option>
										<option value="1">Viewer</option>
									  </select>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!-- CONTENT !-->
<div class="container-fluid">
	<div class="content shadow-lg" style="padding:30px;">
		
	      <h5><b>	USER INFO 	</h5></b>
		
	</div>
	<div class="container-fluid" style="background-color:#f2f2f2; font-size:15px; border:2px solid #e6e6e6; padding:20px; border-radius: 5px;">
	  <table id="example1" class="table table-striped table-bordered dt-responsive nowrap no-footer"  role="grid" style="width:100%; cellspacing=0">
			
				 <thead class="primary">
				 <tr>
					<th>IDENT</th>
					<th>EMPLOYEE FULLNAME</th>
					<th> CCMS ID </th>
					<th>USER LEVEL</th>
					<th>Action</th>
					
					
				
                </tr>
                </thead>
				<tbody>
					<tr>
						<td>30000</td>
						<td>Sample User</td>
						<td>123456</td>
						<td>Admin</td>
						<td>
							<a href="#"  data-toggle="modal" data-target="#exampleModalCenter"><i class="fas fa-pencil-alt" aria-hidden="true"></i></a> &nbsp &nbsp | &nbsp &nbsp
							<a href="#" data-toggle="modal"><i class ="fa fa-trash"></i></a>
							
						</td>
					</tr>
					<tr>
						<td>30000</td>
						<td>Sample User</td>
						<td>123456</td>
						<td>Admin</td>
						<td>
							<a href="#" data-toggle="modal"><i class="fas fa-pencil-alt" aria-hidden="true"></i></a> &nbsp &nbsp | &nbsp &nbsp
							<a href="#" data-toggle="modal"><i class ="fa fa-trash"></i></a>
							
						</td>
					</tr>
				
				</tbody>
			
              </table>
	<hr>
</div>
	 <script type="text/javascript">
$(document).ready(function() {
    $('#example1').DataTable( {

        "scrollY":        "400px",
        "scrollCollapse": true,
        "paging":         true,
		"searching": false
    } );
} );

</script>
<script>
function openPage(pageName,elmnt,color) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].style.backgroundColor = "";
  }
  document.getElementById(pageName).style.display = "block";
  elmnt.style.backgroundColor = color;
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>

</div>
</body>
</html>
