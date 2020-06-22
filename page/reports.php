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
   
        <a class="nav-link" style="color:#ffff ; Font-family: Calibri; " href="create_contract.php">Create Contract</a>
        <a class="nav-link-" style="color:#ffff ; Font-family: Calibri; " href="reviewcontracts.php">Review Contract</a>
     
        <a class="nav-link" style="color:#ffff ; Font-family: Calibri;" href="repository.php">Repository</a>
    
    
        <a class="nav-link" style="color:#ffff ; Font-family: Calibri;" href="gmvsactual.php">GM vs Actual</a>

        <a class="active" style="color:#ffff ; Font-family: Calibri;" href="reports.php">Reports</a>
 
        <a class="nav-link" style="color:#ffff ; Font-family: Calibri;" href="user.php">User</a>
 
    </div>
    </nav>
		
<div class="hero">
         
                <div class="container-fluid">
                    <h3 class="font-weight-bold mt-3"> Reports </h3>
                    <hr>
                
                    <div id="accordion">

                        <div class="card shadow">
                            <div class="card-header" style="background-color:#dee7ed!important;">
                                <a class="text-dark" data-toggle="collapse" href="#collapseOne">
                                    <h6 class="font-weight-bold"> Reports Category
                                    <i class="fas fa-chevron-up float-right"></i> </h6>
                                </a>
                            </div>

                            <div id="collapseOne" class="collapse show" data-parent="#accordion">
                                <div class="card-body">
                                <div class="row">
                                    <div class="col-xl-3 col-lg-3">
                                        <label for="vertical" class="text-sm font-weight-bold text-primary">Vertical</label>
                                            <select class="form-control text-sm" multiple>
                                                <option>Technology</option>
                                                <option>Retail</option>
                                                <option>Services </option>
                                                <option>Broadband Internet/ DS </option>
                                                <option>Healthcare</option>
                                                <option>Telecommunications</option>
                                                <option>Automotive & Transportation</option>
                                                <option>Paid TV </option>
                                                <option>Media and Publishing </option>
                                                <option>Membership Services </option>
                                                <option>Games</option>
                                                <option>Manufacturing</option>
                                                <option>Insurance</option>
                                                <option>Consumer</option>
                                            </select>
                                        </div>

                                        <div class="col-xl-3 col-lg-3">
                                            <label for="billing type" class="text-sm font-weight-bold text-primary">Billing Type</label>
                                            <select class="form-control text-sm" multiple>
                                                <option name="per paid hours" value="per paid hours">per paid hours</option>
                                                <option name="per contacts resolved" value="per contacts resolved">per contacts resolved</option>
                                                <option name="per hour" value="per hour">per hour </option>
                                                <option name="per billable minutes" value="per billable minutes">per billable minutes </option>
                                                <option name="per billable HC" value="per billable HC">per billable HC</option>
                                                <option name="per billable production hours" value="per billable production hours">per billable production hours </option>
                                                <option name="per connect minutes" value="per connect minutes">per connect minutes </option>
                                                <option name="per talk time + ACW" value="per talk time + ACW">per talk time + ACW </option>
                                                <option name="per transaction" value="per transaction">per transaction</option>
                                                <option name="per production hour" value="per production hour">per production hour </option>
                                                <option name="per call (CS); per converted account (Collections)" value="per call (CS); per converted account (Collections)">per call (CS); per converted account (Collections) </option>
                                                <option name="per call" value="per call">per call </option>
                                                <option name="per productive minute" value="per productive minute">per productive minute  </option>
                                                <option name="per headcount" value="per headcount">per headcount  </option>
                                                <option name="per FTE" value="per FTE">per FTE</option>
                                                <option name="LOI - hourly" value="LOI - hourly">LOI - hourly </option>
                                                <option name="per connect minutes and billable FTE" value="per connect minutes and billable FTE">per connect minutes and billable FTE  </option>
                                                <option name="per minute/per transaction" value="per minute/per transaction">per minute/per transaction</option>
                                                <option name="per contact/per transaction" value="per contact/per transaction">per contact/per transaction  </option>
                                                <option name="per minute" value="per minute">per minute     </option>
                                                <option name="per FCR" value="per FCR">per FCR </option>
                                                <option name="TBA" value="TBA">TBA  </option>
                                            </select>                            
                                        </div>

                                        <div class="col-xl-3 col-lg-3">
                                            <label for="KPI" class="text-sm font-weight-bold text-primary">KPI</label>
                                            <select class="form-control text-sm" multiple>
                                                        <option  name="Schedule Adherence" value="Schedule Adherence" ><font size="2px;">Schedule Adherence</option>
                                                <option  name="Handled vs. Commits" value="Handled vs. Commits" >Handled vs. Commits</option>
                                                <option  name="Service Level" value="Service Level" >Service Level</option>
                                                <option  name="Accessibility" value="Accessibility" >Accessibility</option>
                                                <option  name="Attendance" value="Attendance" >Attendance</option>
                                                <option  name="Interval Adherence" value="Interval Adherence" >Interval Adherence</option>
                                                <option  name="TBD" value="TBD" >TBD</option>
                                                <option  name="Line Adherence" value="Line Adherence" >Line Adherence</option>
                                                <option  name="Hours Attainment" value="Hours Attainment" >Hours Attainment</option>
                                                <option  name="No KPI" value="No KPI" >No KPI</option>
                                                <option  name="Bill To Pay" value="Bill To Pay" >Bill To Pay</option>
                                                <option  name="Staffing Attainment" value="Staffing Attainment" >Staffing Attainment</option>
                                                <option  name="no SOW yet" value="no SOW yet" >no SOW yet</option>
                                                <option  name="Calls Handled Percentage" value="Calls Handled Percentage" >Calls Handled Percentage</option>
                                                <option  name="Abandon Rate" value="Abandon Rate" >Abandon Rate</option>
                                                <option  name="Staffing Index" value="Staffing Index" >Staffing Index</option>
                                                <option  name="Absenteeism; Beginning of Month Headcount" value="Absenteeism; Beginning of Month Headcount" >Absenteeism; Beginning of Month Headcount</option>
                                                <option  name="Handle Rate" value="Handle Rate" >Handle Rate</option>
                                                <option  name="Goal Hours" value="Goal Hours" >Goal Hours</option>
                                            </select>                            
                                        </div>

                                        <div class="col-xl-3 col-lg-3">
                                            <label for="KPI" class="text-sm font-weight-bold text-primary">Support GEO</label>
                                            <select class="form-control text-sm" multiple>
                                                <option  name="checkbox" name="US" value="US" >US</option>
                                                <option  name="checkbox" name="Canada" value="Canada" >Canada</option>
                                                <option  name="checkbox" name="APAC" value="APAC" >APAC</option>
                                                <option  name="checkbox" name="EMEA" value="EMEA" >EMEA</option>
                                                <option  name="checkbox" name="ANZ" value="ANZ" >ANZ</option>
                                            </select>                            
                                        </div>
                                </div>
                                    <div class="row mt-3">
                                                <div class="col-xl-3 col-lg-3">
                                                    <label for="KPI" class="text-sm font-weight-bold text-primary">Support Category</label>
                                                    <select class="form-control text-sm" multiple>
                                                        <option  name="Sales" value="Sales" >Sales</option>
                                                        <option  name="Tech Support" value="Tech Support" >Tech Support</option>
                                                        <option  name="Customer Care" value="Customer Care" >Customer Care</option>
                                                        <option  name="Collections" value="Collections" >Collections</option>
                                                        <option  name="Customer Care, Tech Support" value="Customer Care, Tech Support" >Customer Care, Tech Support</option>
                                                        <option  name="Sales, Tech Support" value="Sales, Tech Support" >Sales, Tech Support</option>
                                                        <option  name="Sales, Tech Support, Customer Care" value="Sales, Tech Support, Customer Care" >Sales, Tech Support, Customer Care</option>
                                                    </select>                            
                                                </div>

                                                <div class="col-xl-3 col-lg-3">
                                                    <label for="KPI" class="text-sm font-weight-bold text-primary">Support Channel</label>
                                                    <select class="form-control text-sm" multiple>
                                                        <option name="checkbox" name="Inbound" value="Inbound" >Inbound</option>
                                                        <option name="checkbox" name="Outbound" value="Outbound" >Outbound</option>
                                                        <option name="checkbox" name="Chat" value="Chat" >Chat</option>
                                                        <option name="checkbox" name="Email" value="Email" >Email</option>
                                                        <option name="checkbox" name="Social Media" value="Social Media" >Social Media</option>
                                                        <option name="checkbox" name="Back Office" value="Back Office" >Back Office</option>
                                                    </select>                            
                                                </div>

                                                <div class="col-xl-3 col-lg-3">
                                                    <label for="KPI" class="text-sm font-weight-bold text-primary">Shift Type</label>
                                                    <select class="form-control text-sm" multiple>
                                                        <option name="checkbox" name="GY" value="GY" >GY</option>
                                                        <option name="checkbox" name="24x7" value="24x7" >24x7</option>
                                                        <option name="checkbox" name="AM" value="AM" >AM</option>
                                                        <option name="checkbox" name="24x5" value="24x5" >24x5</option>
                                                        <option name="checkbox" name="PM" value="PM" >PM</option>
                                                        <option name="checkbox" name="18x7" value="18x7" >18x7</option>
                                                    </select>                            
                                                </div>

                                                <div class="col-xl-3 col-lg-3">
                                                    <div class="row">
                                                        <div class="col-xl-6 col-lg-6">
                                                            <label for="KPI" class="text-sm font-weight-bold text-primary">Seat Sharing</label>
                                                            <select class="form-control text-sm" multiple>
                                                                    <option name="checkbox" name="Yes" value="Yes" ><font size="2px;">Yes</option>
                                                                    <option name="checkbox" name="No" value="No" ><font size="2px;">No</option>
                                                                </select>       
                                                        </div>          

                                                        <div class="col-xl-6 col-lg-6">
                                                            <label for="KPI" class="text-sm font-weight-bold text-primary">Market</label>
                                                            <select class="form-control text-sm" multiple>
                                                                    <option name="checkbox" name="Yes" value="Yes" ><font size="2px;">Yes</option>
                                                                    <option name="checkbox" name="No" value="No" ><font size="2px;">No</option>
                                                                </select>       
                                                        </div>                                  
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    
                            </div>
                            <button style="float:right" type="button" class="btn btn-sm btn-primary ml-1">Generate</button>
                     </div>
                    

                    <div class="tbl-header mt-4">
                            <table cellpadding="0" cellspacing="0" border="1" class="table table-bordered"  style="background-color:#dee7ed!important;">
                              <thead class="text-center text-dark">
                                <tr>
                                    <th class="text-dark">File</th>
                                    <th class="text-dark">Uploader</th>
                                    <th class="text-dark">Account Name</th>
                                    <th class="text-dark">Latest Upload</th>
                                    <th class="text-dark">Expiration Date</th>
                                </tr>
                                
                              </thead>
                            </table>
                          </div>
                          <div class="tbl-content">
                            <table cellpadding="0" cellspacing="0" border="0" class="table table-bordered">
                              <tbody>
                                <tr>
                                 
                              </tbody>
                            </table>
                          </div>

                    </div>
    </div>
</div>
</div>
</div>
</div>
  

<div class="jumbotron text-center" style="margin-bottom:0">
  <p>PROPOSAL REPORTS</p>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

<!-- Charts --> 
<!-- <script src="assets/js/chart/doughnut.js"></script> -->
<script src="src/js/main.js"></script>


</body>
</html>
