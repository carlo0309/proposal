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
 
        <a class="active" style="color:#ffff ; Font-family: Calibri; " href="index.php">Dashboard</a>
   
        <a class="nav-link" style="color:#ffff ; Font-family: Calibri; " href="create_contract.php">Create Contract</a>

        <a class="nav-link" style="color:#ffff ; Font-family: Calibri; " href="reviewcontracts.php">Review Contract</a>
    
        <a class="nav-link" style="color:#ffff ; Font-family: Calibri;" href="repository.php">Repository</a>
    
    
        <a class="nav-link" style="color:#ffff ; Font-family: Calibri;" href="gmvsactual.php">GM vs Actual</a>


        <a class="nav-link" style="color:#ffff ; Font-family: Calibri;" href="reports.php">Reports</a>
 
        <a class="nav-link" style="color:#ffff ; Font-family: Calibri;" href="user.php">User</a>
 
    </div>
    </nav>

<div class="container-fluid" style="margin-top:30px">
  <div class="row">
        <div class="col-sm-4"> 
          <div class="col-sm-12">
              <div class="card shadow rounded">
                   <div class="card-header">
                       <h5 class="pt-1">MY TASK</h5>
                   </div>
                   <div class="card-body" style="height: 670px;overflow-y:scroll;">
                      <div class="card shadow bg-white rounded mt-1 taskcard" style="border-left: 3px solid #780096; ">
                      <table width="100%">
                          <tr>
                            <td colspan="2"><label class="float-right text-muted mr-3 mt-1 font-calibri">2020-02-15</label></td>
                          </tr>
                          <tr>
                            <td><label class="text-dark ml-4 mb-3 ">AT&T need renewal</label></td>    
                          </tr>
                         
                          <tr>
                            <td colspan="2"><label class="float-right text-muted mr-3 mt-1 font-calibri">2020-07-15</label></td>
                          </tr>
    
                          <tr>
                            <td><label class="text-dark ml-4 mb-3 ">Frontier need attention</label></td>    
                          </tr>
                          <tr>
                            <td colspan="2"><label class="float-right text-muted mr-3 mt-1 font-calibri">2020-07-15</label></td>
                          </tr>
    
                          <tr>
                            <td><label class="text-dark ml-4 mb-3 ">Frontier need attention</label></td>    
                          </tr>
                          <tr>
                            <td colspan="2"><label class="float-right text-muted mr-3 mt-1 font-calibri">2020-07-15</label></td>
                          </tr>
    
                          <tr>
                            <td><label class="text-dark ml-4 mb-3 ">Frontier need attention</label></td>    
                          </tr>
                          <tr>
                            <td colspan="2"><label class="float-right text-muted mr-3 mt-1 font-calibri">2020-07-15</label></td>
                          </tr>
    
                          <tr>
                            <td><label class="text-dark ml-4 mb-3 ">Frontier need attention</label></td>    
                          </tr>
                          <tr>
                            <td colspan="2"><label class="float-right text-muted mr-3 mt-1 font-calibri">2020-07-15</label></td>
                          </tr>
    
                          <tr>
                            <td><label class="text-dark ml-4 mb-3 ">Frontier need attention</label></td>    
                          </tr>
                          <tr>
                            <td colspan="2"><label class="float-right text-muted mr-3 mt-1 font-calibri">2020-07-15</label></td>
                          </tr>
    
                          <tr>
                            <td><label class="text-dark ml-4 mb-3 ">Frontier need attention</label></td>    
                          </tr>
                      </table>
                      </div>
                   </div>
              </div>
          </div>
        </div>

       <div class="col-sm-8">
          <div class="row">
            <div class="col-sm-3">
                <div class="card countbox text-center shadow rounded">
                    <div class="card-header bg-danger text-light font-weight-bold" style="font-size:14px">Need Attention</div>
                    <div class="card-body text-secondary font-weight-bolder" style="font-size:30px;padding-top:30px"> 90 </div>   
                </div>
                <div class="card-footer text-muted">
                    <small style="font-size:11px"> CONTRACTS THAT WILL EXPIRE  </small>
                </div>
            </div>
            <div class="col-sm-3">
                  <div class="card countbox text-center shadow rounded">
                      <div class="card-header text-light font-weight-bold" style="font-size:11px; background-color:#FFFF00;">RENEWAL ACCOUNTS</div>
                      <div class="card-body text-secondary font-weight-bolder" style="font-size:30px;padding:30px">30</div>   
                  </div>
                  <div class="card-footer text-muted">
                      <small style="font-size:11px"> NUMBER OF RENEWAL ACCOUNTS</small>
                  </div>
            </div>
            <div class="col-sm-3">
                  <div class="card countbox text-center shadow rounded">
                      <div class="card-header text-light font-weight-bold" style="font-size:14px; background-color:#780096;">ACCOUNTS</div>
                      <div class="card-body text-secondary font-weight-bolder" style="font-size:30px;padding:30px">250</div>   
                  </div>
                  <div class="card-footer text-muted">
                      <small style="font-size:11px"> TOTAL NUMBER OF ACCOUNTS </small>
                  </div>
            </div>
            <div class="col-sm-3">
                  <div class="card countbox text-center shadow rounded">
                      <div class="card-header text-light font-weight-bold" style="font-size:14px; background-color:#00FF00;">Users</div>
                      <div class="card-body text-secondary font-weight-bolder" style="font-size:30px;padding:30px">500</div>   
                  </div>
                  <div class="card-footer text-muted">
                      <small style="font-size:11px"> TOTAL NUMBER OF USERS </small>
                  </div>
            </div>
         </div>
         <div class="row mt-3">
              <div class="col-sm-12">
                  <div class="card">
                  <div class="card-header">
                          <h5 class="pt-1">CONTRACT DATA REPORTS</h5>
                          </div>
                          <div class="card-body" style="font-size:15px;">
                              <ul class="nav nav-tabs" id="myTab" role="tablist">
                                  <li class="nav-item">
                                      <a class="nav-link active text-dark font-weight-bold" id="Pending-tab" data-toggle="tab" href="#Pending" role="tab" aria-controls="Pending" aria-selected="true">
                                          Pending <button type="button" class="btn btn-sm btn-dark ml-1">
                                          2        
                                          </button>
                                        
                                      </a>
                                  </li>
                                <li class="nav-item">
                                      <a class="nav-link font-weight-bold text-success" id="Approved-tab" data-toggle="tab" href="#Approved" role="tab" aria-controls="Approved" aria-selected="false">
                                          Approved <button type="button" class="btn btn-sm btn-success ml-1">  
                                        2
                                          </button>
                                    
                                      </a>
                                  </li>
                                <li class="nav-item">
                                    <a class="nav-link font-weight-bold text-primary" id="Renewal-tab" data-toggle="tab" href="#Renewal" role="tab" aria-controls="Renewal" aria-selected="false">
                                          Renewal <button type="button" class="btn btn-sm btn-primary ml-1">  
                                        2
                                          </button>
                                  
                                    </a>  
                                  </li>
                                  <li class="nav-item">
                                          <a class="nav-link font-weight-bold text-danger" id="Expiring-tab" data-toggle="tab" href="#Expiring" role="tab" aria-controls="Expiring" aria-selected="false">
                                              Expiring <button type="button" class="btn btn-sm btn-danger ml-1">
                                        2
                                              </button>     
                                          </a>
                                      </li>
                              </ul>
                              
                              <div class="tab-content" id="myTabContent">
                                  <div class="tab-pane fade show active" id="Pending" role="tabpanel" aria-labelledby="Pending-tab" style="padding: 20px;margin-left:20px;">
                                      <h5 class="font-weight-bolder  mt-2">Pending Contracts</h5>
                                      
                                          <div class="table-responsive-lg mt-2">
                                                  <table id="tablePending" class="table table-hover text-center table-bordered" style="font-size:13px">
                                                    <thead>
                                                      <tr>
                                                        <th scope="col">Contract Title</th>
                                                      
                                                        <th scope="col">Account Name</th>
                                                        <th scope="col">Expiration Date</th>
                                                        <th scope="col">Stage</th>
                                                        <th scope="col">Contract Type</th>
                                                    
                                                      </tr>
                                                    </thead>
                                                    <tbody>	

                                                      <td> Sample Contract 1</td>
                                                      <td> AT&T </td>
                                                      <td> 2022-03-15 </td>
                                                      <td> 2 </td>
                                                      <td> sample </td>
                                                    <tr>
                                                    <td> Sample Contract 2</td>
                                                      <td> AT&T </td>
                                                      <td> 2021-03-15 </td>
                                                      <td> 2 </td>
                                                      <td> sample </td>
                                                    </tr>
                                                    <tr>
                                                    <td> Sample Contract 2</td>
                                                      <td> AT&T </td>
                                                      <td> 2021-03-15 </td>
                                                      <td> 2 </td>
                                                      <td> sample </td>
                                                    </tr>
                                                    <tr>
                                                    <td> Sample Contract 2</td>
                                                      <td> AT&T </td>
                                                      <td> 2021-03-15 </td>
                                                      <td> 2 </td>
                                                      <td> sample </td>
                                                    </tr>
                                                    <tr>
                                                    <td> Sample Contract 2</td>
                                                      <td> AT&T </td>
                                                      <td> 2021-03-15 </td>
                                                      <td> 2 </td>
                                                      <td> sample </td>
                                                    </tr>
                                                    <tr>
                                                    <td> Sample Contract 2</td>
                                                      <td> AT&T </td>
                                                      <td> 2021-03-15 </td>
                                                      <td> 2 </td>
                                                      <td> sample </td>
                                                    </tr>
                                                  </tbody>
                                                  </table>
                                                </div>
                                    
                                  </div>
                                
                                  <div class="tab-pane fade show" id="Approved" role="tabpanel" aria-labelledby="Approved-tab" style="padding: 20px;margin-left:20px;">
                                      <h5 class="font-weight-bolder  mt-2">Approved Contracts</h5>
                                      
                                          <div class="table-responsive-lg mt-2">
                                                  <table id="tableApproved" class="table table-hover text-center table-bordered" style="font-size:13px">
                                                    <thead>
                                                      <tr>
                                                        <th scope="col">Contract Title</th>
                                                    
                                                        <th scope="col">Account Name</th>
                                                        <th scope="col">Expiration Date</th>
                                                        <th scope="col">Stage</th>
                                    <th scope="col">Contract Type</th>
                                                    
                                                      </tr>
                                                    </thead>
                                                    <tbody>	

                                                    <td> Sample Contract 1</td>
                                                      <td> AT&T </td>
                                                      <td> 2022-03-15 </td>
                                                      <td> 2 </td>
                                                      <td> sample </td>
                                                    <tr>
                                                    <td> Sample Contract 2</td>
                                                      <td> AT&T </td>
                                                      <td> 2021-03-15 </td>
                                                      <td> 2 </td>
                                                      <td> sample </td>
                                                    </tr>
                                                    <tr>
                                                    <td> Sample Contract 2</td>
                                                      <td> AT&T </td>
                                                      <td> 2021-03-15 </td>
                                                      <td> 2 </td>
                                                      <td> sample </td>
                                                    </tr>
                                                    <tr>
                                                    <td> Sample Contract 2</td>
                                                      <td> AT&T </td>
                                                      <td> 2021-03-15 </td>
                                                      <td> 2 </td>
                                                      <td> sample </td>
                                                    </tr>
                                                    <tr>
                                                    <td> Sample Contract 2</td>
                                                      <td> AT&T </td>
                                                      <td> 2021-03-15 </td>
                                                      <td> 2 </td>
                                                      <td> sample </td>
                                                    </tr>
                                                    <tr>
                                                    <td> Sample Contract 2</td>
                                                      <td> AT&T </td>
                                                      <td> 2021-03-15 </td>
                                                      <td> 2 </td>
                                                      <td> sample </td>
                                                    </tr>
                                                    <tr>
                                                    <td> Sample Contract 2</td>
                                                      <td> AT&T </td>
                                                      <td> 2021-03-15 </td>
                                                      <td> 2 </td>
                                                      <td> sample </td>
                                                    </tr>
                                       </tbody>
                                                  </table>
                                                </div>
                                    
                                  </div>

                                          <div class="tab-pane fade show" id="Renewal" role="tabpanel" aria-labelledby="Renewal-tab" style="padding: 20px;margin-left:20px;">
                                      <h5 class="font-weight-bolder  mt-2">Renewal Contracts</h5>
                                      
                                          <div class="table-responsive-lg mt-2">
                                                  <table id="tableRenewal" class="table table-hover text-center table-bordered " style="font-size:13px">
                                                    <thead>
                                                      <tr>
                                                        <th scope="col">Contract Title</th>
                                                      
                                                        <th scope="col">Account Name</th>
                                                        <th scope="col">Expiration Date</th>
                                                        <th scope="col">Stage</th>
                                    <th scope="col">Contract Type</th>
                                                
                                                      </tr>
                                                    </thead>
                                                    <tbody>	

                                                    <td> Sample Contract 1</td>
                                                      <td> AT&T </td>
                                                      <td> 2022-03-15 </td>
                                                      <td> 2 </td>
                                                      <td> sample </td>
                                                    <tr>
                                                    <td> Sample Contract 2</td>
                                                      <td> AT&T </td>
                                                      <td> 2021-03-15 </td>
                                                      <td> 2 </td>
                                                      <td> sample </td>
                                                    </tr>
                                                    <tr>
                                                    <td> Sample Contract 2</td>
                                                      <td> AT&T </td>
                                                      <td> 2021-03-15 </td>
                                                      <td> 2 </td>
                                                      <td> sample </td>
                                                    </tr>
                                                    <tr>
                                                    <td> Sample Contract 2</td>
                                                      <td> AT&T </td>
                                                      <td> 2021-03-15 </td>
                                                      <td> 2 </td>
                                                      <td> sample </td>
                                                    </tr>
                                                    <tr>
                                                    <td> Sample Contract 2</td>
                                                      <td> AT&T </td>
                                                      <td> 2021-03-15 </td>
                                                      <td> 2 </td>
                                                      <td> sample </td>
                                                    </tr>
                                                    <tr>
                                                    <td> Sample Contract 2</td>
                                                      <td> AT&T </td>
                                                      <td> 2021-03-15 </td>
                                                      <td> 2 </td>
                                                      <td> sample </td>
                                                    </tr>
                                                    <tr>
                                                    <td> Sample Contract 2</td>
                                                      <td> AT&T </td>
                                                      <td> 2021-03-15 </td>
                                                      <td> 2 </td>
                                                      <td> sample </td>
                                                    </tr>
                                                    <tr>
                                                    <td> Sample Contract 2</td>
                                                      <td> AT&T </td>
                                                      <td> 2021-03-15 </td>
                                                      <td> 2 </td>
                                                      <td> sample </td>
                                                    </tr>
                                                    <tr>
                                                    <td> Sample Contract 2</td>
                                                      <td> AT&T </td>
                                                      <td> 2021-03-15 </td>
                                                      <td> 2 </td>
                                                      <td> sample </td>
                                                    </tr>
                                                    <tr>
                                                    <td> Sample Contract 2</td>
                                                      <td> AT&T </td>
                                                      <td> 2021-03-15 </td>
                                                      <td> 2 </td>
                                                      <td> sample </td>
                                                    </tr>
                                                    <tr>
                                                    <td> Sample Contract 2</td>
                                                      <td> AT&T </td>
                                                      <td> 2021-03-15 </td>
                                                      <td> 2 </td>
                                                      <td> sample </td>
                                                    </tr>
                                                    <tr>
                                                    <td> Sample Contract 2</td>
                                                      <td> AT&T </td>
                                                      <td> 2021-03-15 </td>
                                                      <td> 2 </td>
                                                      <td> sample </td>
                                                    </tr>
                  
                
                    </tbody>
                                                  </table>
                                                  </div>
                                                </div>                      
                                                <div class="tab-pane fade show" id="Expiring" role="tabpanel" aria-labelledby="Expiring-tab" style="padding: 20px;margin-left:20px;">
                                      <h5 class="font-weight-bolder  mt-2">Expiring Contracts</h5>
                                      
                                          <div class="table-responsive-lg mt-2">
                                                  <table id="tableExpiring" class="table table-hover text-center table-bordered " style="font-size:13px">
                                                    <thead>
                                                      <tr>
                                                        <th scope="col">Contract Title</th>
                                                
                                                        <th scope="col">Account Name</th>
                                                        <th scope="col">Expiration Date</th>
                                                        <th scope="col">Stage</th>
                                  <th scope="col">Contract Type</th>
                                                      </tr>
                                                    </thead>
                                                    <tbody>	

                                                    <td> Sample Contract 1</td>
                                                      <td> AT&T </td>
                                                      <td> 2022-03-15 </td>
                                                      <td> 2 </td>
                                                      <td> sample </td>
                                                    <tr>
                                                    <td> Sample Contract 2</td>
                                                      <td> AT&T </td>
                                                      <td> 2021-03-15 </td>
                                                      <td> 2 </td>
                                                      <td> sample </td>
                                                    </tr>
                                                    <tr>
                                                    <td> Sample Contract 2</td>
                                                      <td> AT&T </td>
                                                      <td> 2021-03-15 </td>
                                                      <td> 2 </td>
                                                      <td> sample </td>
                                                    </tr>
                                                    <tr>
                                                    <td> Sample Contract 2</td>
                                                      <td> AT&T </td>
                                                      <td> 2021-03-15 </td>
                                                      <td> 2 </td>
                                                      <td> sample </td>
                                                    </tr>
                                                    <tr>
                                                    <td> Sample Contract 2</td>
                                                      <td> AT&T </td>
                                                      <td> 2021-03-15 </td>
                                                      <td> 2 </td>
                                                      <td> sample </td>
                                                    </tr>
                                                    <tr>
                                                    <td> Sample Contract 2</td>
                                                      <td> AT&T </td>
                                                      <td> 2021-03-15 </td>
                                                      <td> 2 </td>
                                                      <td> sample </td>
                                                    </tr>
                                                    <tr>
                                                    <td> Sample Contract 2</td>
                                                      <td> AT&T </td>
                                                      <td> 2021-03-15 </td>
                                                      <td> 2 </td>
                                                      <td> sample </td>
                                                    </tr>
                                                    <tr>
                                                    <td> Sample Contract 2</td>
                                                      <td> AT&T </td>
                                                      <td> 2021-03-15 </td>
                                                      <td> 2 </td>
                                                      <td> sample </td>
                                                    </tr>
                                                    <tr>
                                                    <td> Sample Contract 2</td>
                                                      <td> AT&T </td>
                                                      <td> 2021-03-15 </td>
                                                      <td> 2 </td>
                                                      <td> sample </td>
                                                    </tr>
                                                    <tr>
                                                    <td> Sample Contract 2</td>
                                                      <td> AT&T </td>
                                                      <td> 2021-03-15 </td>
                                                      <td> 2 </td>
                                                      <td> sample </td>
                                                    </tr>
                                                    <tr>
                                                    <td> Sample Contract 2</td>
                                                      <td> AT&T </td>
                                                      <td> 2021-03-15 </td>
                                                      <td> 2 </td>
                                                      <td> sample </td>
                                                    </tr>
                                                    <tr>
                                                    <td> Sample Contract 2</td>
                                                      <td> AT&T </td>
                                                      <td> 2021-03-15 </td>
                                                      <td> 2 </td>
                                                      <td> sample </td>
                                                    </tr>
                  
                  
                    </tbody>
                                                  </table>
                                                  </div>
                                                </div>   
                        
                              </div> 
                  </div>
                </div>
              </div>
            </div>
       </div>
  </div>
</div>
  

<div class="jumbotron text-center" style="margin-bottom:0">
  <p>PROPOSAL DASHBOARD</p>
</div>

</body>
</html>
