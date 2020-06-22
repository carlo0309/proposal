<!DOCTYPE html>
<html lang="en">
<head>
  <title>CLM</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="custom.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>

<body> 

<!-- NAVIGATION !--> 
  <div class="topnav">
 
        <a class="nav-link" style="color:#ffff ; Font-family: Calibri; " href="index.php">Dashboard</a>
   
        <a class="nav-link" style="color:#ffff ; Font-family: Calibri; " href="#">Create Contract</a>
   
     
        <a class="nav-link" style="color:#ffff ; Font-family: Calibri;" href="repository.php">Repository</a>
    
        <a class="active" style="color:#ffff ; Font-family: Calibri;" href="gmvsactual.php">GM vs Actual</a>

        <a class="nav-link" style="color:#ffff ; Font-family: Calibri;" href="reports.php">Reports</a>
 
        <a class="nav-link" style="color:#ffff ; Font-family: Calibri;" href="user.php">User</a>
 
    </div>
    </nav>

<div class="container-fluid" style="margin-top:30px">
  <div class="row">


  <div class="container-fluid">
                    <h3 class="font-weight-bold mt-3"> Bonus and Penalties </h3>
                    <hr>

                    <table class="table table-striped table-bordered dt-responsive nowrap no-footer dtr-inline text-center">
				        <thead>
                            <tr role="row">
                                <th rowspan="2" class="bg-primary text-light sorting_disabled" style="padding: 50px; width: 152px;" colspan="1">Account Name</th>
                                <th colspan="3" class="bg-warning text-dark" style="padding:20px;" rowspan="1">Month</th>
                                <th colspan="5" class="bg-success text-light" style="padding:20px;" rowspan="1">Bonus</th>
                                <th colspan="5" class="bg-danger text-light" style="padding:20px;" rowspan="1">Penalties</th>
                            </tr>
				            <tr role="row">
                                <th class="bg-warning text-dark sorting_disabled" rowspan="1" colspan="1" style="width: 120px;">GM</th>
                                <th class="bg-warning text-dark sorting_disabled" rowspan="1" colspan="1" style="width: 121px;">Actuals</th>
                                <th class="bg-warning text-dark sorting_disabled" rowspan="1" colspan="1" style="width: 118px;">Variance</th>
                                <th class="bg-success text-light sorting_disabled" rowspan="1" colspan="1" style="width: 51px;">KPI 1</th>
                                <th class="bg-success text-light sorting_disabled" rowspan="1" colspan="1" style="width: 51px;">KPI 2</th>
                                <th class="bg-success text-light sorting_disabled" rowspan="1" colspan="1" style="width: 51px;">KPI 3</th>
                                <th class="bg-success text-light sorting_disabled" rowspan="1" colspan="1" style="width: 52px;">KPI 4</th>
                                <th class="bg-success text-light sorting_disabled" rowspan="1" colspan="1" style="width: 52px;">KPI 5</th>
                                <th class="bg-danger text-light sorting_disabled" rowspan="1" colspan="1" style="width: 52px;">KPI 1</th>
                                <th class="bg-danger text-light sorting_disabled" rowspan="1" colspan="1" style="width: 52px;">KPI 2</th>
                                <th class="bg-danger text-light sorting_disabled" rowspan="1" colspan="1" style="width: 52px;">KPI 3</th>
                                <th class="bg-danger text-light sorting_disabled" rowspan="1" colspan="1" style="width: 52px;">KPI 4</th>
                                <th class="bg-danger text-light sorting_disabled" rowspan="1" colspan="1" style="width: 52px;">KPI 5</th>
                            </tr>
                        </thead>			
				        <tbody>	
                            <tr role="row" class="odd">
							    <td style="text-align:left;" tabindex="0">JP Morgan Chase</td>
							
                                <td style="text-align:right;"> $1,231,562.40 </td>
                                <td style="text-align:right;"> $1,958,924.48 </td>
                                <td style="text-align:right;"> $(727,362.08)</td>
                                
                                <td style="text-align:right;">&nbsp;</td>
                                <td style="text-align:right;">&nbsp;</td>
                                <td style="text-align:right;">&nbsp;</td>
                                <td style="text-align:right;">&nbsp;</td>
                                <td style="text-align:right;">&nbsp;</td>
                                
                                <td style="text-align:right;">&nbsp;</td>
                                <td style="text-align:right;">&nbsp;</td>
                                <td style="text-align:right;">&nbsp;</td>
                                <td style="text-align:right;">&nbsp;</td>
                                <td style="text-align:right;">&nbsp;</td>
							
                            </tr>

                            <tr role="row" class="even">
                                <td style="text-align:left;" tabindex="0">Accor</td>
                                
                                <td style="text-align:right;"> $113,344.86 </td>
                                <td style="text-align:right;"> $93,239.80 </td>
                                <td style="text-align:right;"> $20,105.06 </td>
                                
                                <td style="text-align:right;">&nbsp;</td>
                                <td style="text-align:right;">&nbsp;</td>
                                <td style="text-align:right;">&nbsp;</td>
                                <td style="text-align:right;">&nbsp;</td>
                                <td style="text-align:right;">&nbsp;</td>
                                
                                <td style="text-align:right;">&nbsp;</td>
                                <td style="text-align:right;">&nbsp;</td>
                                <td style="text-align:right;">&nbsp;</td>
                                <td style="text-align:right;">&nbsp;</td>
                                <td style="text-align:right;">&nbsp;</td>
                                
                            </tr>
                            <tr role="row" class="odd">
                                <td style="text-align:left;" tabindex="0">Advent</td>
                                
                                <td style="text-align:right;"> $217,498.16 </td>
                                <td style="text-align:right;"> $220,909.92 </td>
                                <td style="text-align:right;"> $(3,411.76)</td>
                                
                                <td style="text-align:right;">&nbsp;</td>
                                <td style="text-align:right;">&nbsp;</td>
                                <td style="text-align:right;">&nbsp;</td>
                                <td style="text-align:right;">&nbsp;</td>
                                <td style="text-align:right;">&nbsp;</td>
                                
                                <td style="text-align:right;">&nbsp;</td>
                                <td style="text-align:right;">&nbsp;</td>
                                <td style="text-align:right;">&nbsp;</td>
                                <td style="text-align:right;">&nbsp;</td>
                                <td style="text-align:right;">&nbsp;</td>
							
                            </tr>   
                            <tr role="row" class="even">
                                <td style="text-align:left;" tabindex="0">AIA</td>
                                
                                <td style="text-align:right;"> $130,402.03 </td>
                                <td style="text-align:right;"></td>
                                <td style="text-align:right;"> $130,402.03 </td>
                                
                                <td style="text-align:right;">&nbsp;</td>
                                <td style="text-align:right;">&nbsp;</td>
                                <td style="text-align:right;">&nbsp;</td>
                                <td style="text-align:right;">&nbsp;</td>
                                <td style="text-align:right;">&nbsp;</td>
                                
                                <td style="text-align:right;">&nbsp;</td>
                                <td style="text-align:right;">&nbsp;</td>
                                <td style="text-align:right;">&nbsp;</td>
                                <td style="text-align:right;">&nbsp;</td>
                                <td style="text-align:right;">&nbsp;</td>
							
                            </tr>
                            <tr role="row" class="odd">
                                <td style="text-align:left;" tabindex="0">Amazon</td>
                                
                                <td style="text-align:right;"> $328,139.74 </td>
                                <td style="text-align:right;"> $401,487.00 </td>
                                <td style="text-align:right;"> $(73,347.26)</td>
                                
                                <td style="text-align:right;">&nbsp;</td>
                                <td style="text-align:right;">&nbsp;</td>
                                <td style="text-align:right;">&nbsp;</td>
                                <td style="text-align:right;">&nbsp;</td>
                                <td style="text-align:right;">&nbsp;</td>
                                
                                <td style="text-align:right;">&nbsp;</td>
                                <td style="text-align:right;">&nbsp;</td>
                                <td style="text-align:right;">&nbsp;</td>
                                <td style="text-align:right;">&nbsp;</td>
                                <td style="text-align:right;">&nbsp;</td>
							
                            </tr>
                            <tr role="row" class="even">
                                <td style="text-align:left;" tabindex="0">Apria</td>
                                
                                <td style="text-align:right;"> $216,694.54 </td>
                                <td style="text-align:right;"> $168,473.70 </td>
                                <td style="text-align:right;"> $48,220.84 </td>
                                
                                <td style="text-align:right;">&nbsp;</td>
                                <td style="text-align:right;">&nbsp;</td>
                                <td style="text-align:right;">&nbsp;</td>
                                <td style="text-align:right;">&nbsp;</td>
                                <td style="text-align:right;">&nbsp;</td>
                                
                                <td style="text-align:right;">&nbsp;</td>
                                <td style="text-align:right;">&nbsp;</td>
                                <td style="text-align:right;">&nbsp;</td>
                                <td style="text-align:right;">&nbsp;</td>
                                <td style="text-align:right;">&nbsp;</td>
                                
                            </tr>
                            <tr role="row" class="odd">
                                <td style="text-align:left;" tabindex="0">Assurant</td>
                                
                                <td style="text-align:right;"> $25,512.00 </td>
                                <td style="text-align:right;"></td>
                                <td style="text-align:right;"> $25,512.00 </td>
                                
                                <td style="text-align:right;">&nbsp;</td>
                                <td style="text-align:right;">&nbsp;</td>
                                <td style="text-align:right;">&nbsp;</td>
                                <td style="text-align:right;">&nbsp;</td>
                                <td style="text-align:right;">&nbsp;</td>
                                
                                <td style="text-align:right;">&nbsp;</td>
                                <td style="text-align:right;">&nbsp;</td>
                                <td style="text-align:right;">&nbsp;</td>
                                <td style="text-align:right;">&nbsp;</td>
                                <td style="text-align:right;">&nbsp;</td>
                                
                            </tr>
                          
                        </tbody>
                     </table>
                    </div>
                
                </div>
            </div>
    </div>
    </div>

<div class="jumbotron text-center" style="margin-bottom:0">
  <p>PROPOSAL BONUS N PENALTIES</p>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

<!-- Charts --> 
<script src="src/js/main.js"></script>

</body>
</html>
