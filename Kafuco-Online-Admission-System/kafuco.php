<!DOCTYPE html>
<html lang="en">

<meta name="viewport" content="width=device-width, initial-scale=1">

<head>
<meta name="language" content="en">
<meta name="description" content="Our application System provides an easy way to access and apply for our offered programmes, Apply at home, wait and receive updates while at home. Admission documents are sent to you vai email address">
  <meta name="author" content="@Engineer Coder">
 <!-- Latest compiled and minified CSS -->
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script> 
 <title>Home Page</title>
<link rel="stylesheet" type="text/css" href="sec/css/main.css">
<link rel="stylesheet" type="text/css" href="sec/css/form.css">
<!-- SB Admin 2 stuff -->
<!-- Bootstrap Core CSS -->
<link href="sec/css/bootstrap.min.css" rel="stylesheet">
<!-- bootstrap theme -->
<link href="sec/css/bootstrap-paper-theme.css" rel="stylesheet">
<!-- Custom CSS -->
<link href="sec/css/sb-admin-2.css" rel="stylesheet">
<!-- Custom Fonts -->
<link href="sec/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="sec/css/custom_css.css" rel="stylesheet">
<!-- custom icons courtesy of Benard-->
<link href="sec/css/icon_css.css" rel="stylesheet">
 <link href="sec/css/dataTables/dataTables.bootstrap.css " media="all" rel="stylesheet" type="text/css" />
<!-- CSS to stylize checkboxes -->
<link href="sec/css/style.css" rel="stylesheet">
<!-- animation CSS -->
<!--<link href="/plugins/magic/magic.css" rel="stylesheet">-->
<link href="sec/css/animate.css" rel="stylesheet">
<!-- Flags -->
<link href="sec/css/flag-icon.css" rel="stylesheet">
<!-- bootstrap select -->
<link rel="stylesheet" href="sec/css/bootstrap-select.min.css">
<script type="text/javascript" src="sec/css/jquery.min.js"></script>


</head>
   <style>
.inst-logo {
    width:120px;
    height:90px;
    margin-top: 2px;
    margin-bottom: 3px;
    margin-left: 90px;
}
.inst-name {
    font-size:32px;
    font-weight:600;
}

</style>
<body>
<div class="content">

<div class="container-fluid">
        <!-- begin content here -->
        <div class="row" style="background-color: rgb(9, 134, 30);">
             <div class="col-md-10 col-md-offset-1" style="font-family: Arial, Helvetica, sans-serif; font-size: 30px; font-weight: 800; color: #FFFFFF;">
                 <img class="inst-logo" src="sec/logo/kafuco.jpeg" alt="">
                KAFUCO Online Course Application
             </div>

</div>
        <div class="row">
    <div class="col-md-12 col-md-10 col-md-offset-1">
        <p class="lead">Welcome to our university of choice, where academic excellence is our service.</p>

        <p>An applicant is exepcted to create an account to be able to keep track of your application process at any place. If you haven't created an account, kindly click on the button <strong>Create Account</strong> feature to create your account.
        </p>

        <p>At start you will fill and provide simple and basic personal information to gain access in our system. You will provide email address and password which will be used to access our system as username and password respectively, after getting to login page.
           </p>
           
           <div class="col-md-2"></div>
    </div>
</div>
<br>
<div class="row">
      <div class="col-md-12 col-md-10 col-md-offset-1">
           <div class="btn btn-success btn-block" onclick="download();"><i class="fa fa-download"></i> Download Application Manual</div>
      </div>

</div>
   <br>
<div class="row">
    <div class="col-md-4 col-md-offset-2">
          <a href="signup.php"><button class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span>&nbsp;&nbsp;CREATE ACCOUNT</button></a>

          </div>

    <div class="col-md-4">
        <a href="index.php"><button class="btn btn-primary"><span class="glyphicon glyphicon-lock"></span>&nbsp;&nbsp; LOGIN</button></a>

            </div>
</div>
<div class="row">
    <div class="col-md-12 col-md-10 col-md-offset-1" style="margin-top:35px;">
       <div class="panel panel-info col-md-12">
             <ul class="nav nav-tabs">
                  <li class="active"><a data-toggle="tab" href="#bachelors">Degree Programmes</a></li>
                  <li><a data-toggle="tab" href="#dip">Diploma Programmes</a></li>
                  <li><a data-toggle="tab" href="#cert">Certificate Programmes</a></li>
                  <li><a data-toggle="tab" href="#masters">Masters Programmes</a></li>
             </ul>
   <div class="tab-content">
        <div id="bachelors" class="tab-pane fade in active">
             <table class="table table-condensed table-striped table-bordered dataTables">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>PROGRAMME NAME</th>
                        <th>VIEW MORE</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                           <td>1 </td>
                           <td>Bachelor of Criminology</td>
                            <td>
                            <a href="" data-toggle="modal" data-backdrop="static" data-keyboard="false" data-target="#modal-default1">View Details</a></td>
                          </tr>
                               <div class="modal fade" id="modal-default1">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title">Bachelor of Criminology</h4>
                                  </div>
                                  <div class="modal-body">
                                    <p>Mean grade of C+ (plus) at KCSE and at least a C+ (plus) in English, Or 2 principal passes at A-level and 1 subsidiary in relevant subjects. Or Diploma in a relevant area of study</p>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-warning pull-left" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i>Close</button>
                                    <a href="signup.php"><button type="button" class="btn btn-primary"><i class="glyphicon glyphicon-ok"></i> Proceed to Application</button></a>
                                  </div>
                                </div>
                                <!-- /.modal-content -->
                              </div>
                              <!-- /.modal-dialog -->
                            </div>
                            <tr>
                           <td>2</td>
                           <td>Bachelor of Commerce</td>
                            <td>
                            <a href="" data-toggle="modal" data-backdrop="static" data-keyboard="false" data-target="#modal-default1">View Details</a></td>
                          </tr>
                               <div class="modal fade" id="modal-default1">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title">Bachelor of Commerce</h4>
                                  </div>
                                  <div class="modal-body">
                                    <p>Accounting,Marketing,Finance,HRM,Entrepreneurship,Purchasing & Supply Chain Mgt) Minimum requirements: Minimum aggregate of C+ in KCSE and minimum of C (plain) in either Mathematic/Business Studies or English/Kiswahili Or KACE certificate with minimum of two Principal passes and one Subsidiary Pass, and a minimum of a credit pass in Mathematics at KCE Or a Business Diploma validated by CUE with a minimum of credit C. Any other equivalence as determined by The KNEC. A student who has undertaken an equivalent programme may be granted credit transfer on case by case basis</p>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-warning pull-left" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i>Close</button>
                                    <a href="signup.php"><button type="button" class="btn btn-primary"><i class="glyphicon glyphicon-ok"></i> Proceed to Application</button></a>
                                  </div>
                                </div>
                                <!-- /.modal-content -->
                              </div>
                              <!-- /.modal-dialog -->
                            </div>
                        <tr>
                           <td>3 </td>
                           <td>Bachelor of Economics</td>
                            <td>
                            <a href="" data-toggle="modal" data-backdrop="static" data-keyboard="false" data-target="#modal-default1">View Details</a></td>
                          </tr>
                               <div class="modal fade" id="modal-default1">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title">Bachelor of Economics</h4>
                                  </div>
                                  <div class="modal-body">
                                    <p>At least minimum grade of C+ in KCSE. In addition, the applicant must have a minimum grade of C+ in Mathematics at KCSE Or Minimum of two (2) principal passes and subsidiary pass in the general paper at A-level and have passed with a credit in mathematics at O-levels.</p>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-warning pull-left" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i>Close</button>
                                    <a href="signup.php"><button type="button" class="btn btn-primary"><i class="glyphicon glyphicon-ok"></i> Proceed to Application</button></a>
                                  </div>
                                </div>
                                <!-- /.modal-content -->
                              </div>
                              <!-- /.modal-dialog -->
                            </div>
                          <tr>
                           <td>4 </td>
                           <td>Bachelor of Disaster Management</td>
                            <td>
                            <a href="" data-toggle="modal" data-backdrop="static" data-keyboard="false" data-target="#modal-default1">View Details</a></td>
                          </tr>
                               <div class="modal fade" id="modal-default1">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title">Bachelor of Economics</h4>
                                  </div>
                                  <div class="modal-body">
                                    <p>Mean grade of C+ (plus) at KCSE and at least a C+ (plus) in English, Or 2 principal passes at A-level and 1 subsidiary in relevant subjects. Or Diploma in a relevant area of study</p>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-warning pull-left" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i>Close</button>
                                    <a href="signup.php"><button type="button" class="btn btn-primary"><i class="glyphicon glyphicon-ok"></i> Proceed to Application</button></a>
                                  </div>
                                </div>
                                <!-- /.modal-content -->
                              </div>
                              <!-- /.modal-dialog -->
                            </div>
                           
                            <tr>
                           <td>5 </td>
                           <td>Bachelor of Science in Computer Science</td>
                            <td>
                            <a href="" data-toggle="modal" data-backdrop="static" data-keyboard="false" data-target="#modal-default1">View Details</a></td>
                          </tr>
                               <div class="modal fade" id="modal-default1">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title">Bachelor of Science in Computer Science</h4>
                                  </div>
                                  <div class="modal-body">
                                    <p>Mean grade of C+ (plus) at KCSE and a C+ (plus) in Mathematics, Physics or Physical Sciences. Or 2 Principal passes in relevant science subjects, 1 of which must be in Mathematics or Physics at A-level. Or Diploma in Computer Studies or its equivalent (may be exempted in relevant units)</p>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-warning pull-left" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i>Close</button>
                                    <a href="signup.php"><button type="button" class="btn btn-primary"><i class="glyphicon glyphicon-ok"></i> Proceed to Application</button></a>
                                  </div>
                                </div>
                                <!-- /.modal-content -->
                              </div>
                              <!-- /.modal-dialog -->
                            </div>
                              
                            <tr>
                           <td>6 </td>
                           <td>Bachelor of Social Work and Community Development</td>
                            <td>
                            <a href="" data-toggle="modal" data-backdrop="static" data-keyboard="false" data-target="#modal-default1">View Details</a></td>
                          </tr>
                               <div class="modal fade" id="modal-default1">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title">Bachelor of Social Work and Community Development</h4>
                                  </div>
                                  <div class="modal-body">
                                    <p>Mean grade of C+ (plus) at KCSE and at least a C+ (plus) in English, Or 2 principal passes at A-level and 1 subsidiary in relevant subjects. Or Diploma in a relevant area of study</p>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-warning pull-left" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i>Close</button>
                                    <a href="signup.php"><button type="button" class="btn btn-primary"><i class="glyphicon glyphicon-ok"></i> Proceed to Application</button></a>
                                  </div>
                                </div>
                                <!-- /.modal-content -->
                              </div>
                              <!-- /.modal-dialog -->
                            </div>
                            <tr>
                           <td>7</td>
                           <td>Bachelor of Education (Arts)</td>
                            <td>
                            <a href="" data-toggle="modal" data-backdrop="static" data-keyboard="false" data-target="#modal-default1">View Details</a></td>
                          </tr>
                               <div class="modal fade" id="modal-default1">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title">Bachelor of Education (Arts)</h4>
                                  </div>
                                  <div class="modal-body">
                                    <p>Subject combinations - History/Geography/CRE/ Kiswahili - English/Literature - Business Studies/Mathematics Minimum requirements: Mean grade C+ (plus) at KCSE and at least C+ in each of the two teaching subjects chosen and at least D+ in Mathematics and C (Plain) in English. Or 2 principal passes at A-level and 1 subsidiary in relevant subjects. Or Diploma in Education </p>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-warning pull-left" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i>Close</button>
                                    <a href="signup.php"><button type="button" class="btn btn-primary"><i class="glyphicon glyphicon-ok"></i> Proceed to Application</button></a>
                                  </div>
                                </div>
                                <!-- /.modal-content -->
                              </div>
                              <!-- /.modal-dialog -->
                            </div>
                               
                            <tr>
                           <td>8</td>
                           <td>Bachelor of Education (French)</td>
                            <td>
                            <a href="" data-toggle="modal" data-backdrop="static" data-keyboard="false" data-target="#modal-default1">View Details</a></td>
                          </tr>
                               <div class="modal fade" id="modal-default1">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title">Bachelor of Education (French)</h4>
                                  </div>
                                  <div class="modal-body">
                                    <p>Mean grade of C+ (plus) at KCSE with at least C+ in French and another teaching subject chosen, Or any other relevant qualifications accepted by KAFUCO Senate.</p>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-warning pull-left" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i>Close</button>
                                    <a href="signup.php"><button type="button" class="btn btn-primary"><i class="glyphicon glyphicon-ok"></i> Proceed to Application</button></a>
                                  </div>
                                </div>
                                <!-- /.modal-content -->
                              </div>
                              <!-- /.modal-dialog -->
                            </div>
                      
                            <tr>
                           <td>9</td>
                           <td>Bachelor of Education (Science)</td>
                            <td>
                            <a href="" data-toggle="modal" data-backdrop="static" data-keyboard="false" data-target="#modal-default1">View Details</a></td>
                          </tr>
                               <div class="modal fade" id="modal-default1">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title">Bachelor of Education (Science)</h4>
                                  </div>
                                  <div class="modal-body">
                                    <p>Subject combinations: - Mathematics/Physics - Mathematics/Biology - Mathematics/Chemistry - Chemistry/Biology - Chemistry/Physics Minimum requirements: Kenya Certificate of Secondary Education (KCSE) with an average grade of C+ (C Plus) with a C+ in two teaching subjects and at least a C(Plain) in Mathematics and English its equivalence Or diploma in Education from a recognized Institution Or diploma in Education from a recognized Institution with a mean grade of C-(Minus) and two years teaching experience Or P1 certificate from a recognized institution and two years teaching experience Or Kenya Advanced Certificate of Education with minimum of two principal passes and one subsidiary pass or its equivalent.</p>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-warning pull-left" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i>Close</button>
                                    <a href="signup.php"><button type="button" class="btn btn-primary"><i class="glyphicon glyphicon-ok"></i> Proceed to Application</button></a>
                                  </div>
                                </div>
                                <!-- /.modal-content -->
                              </div>
                              <!-- /.modal-dialog -->
                            </div>
                            <tr>
                           <td>10 </td>
                           <td>Bachelor of Science in Agricultural Economics</td>
                            <td>
                            <a href="" data-toggle="modal" data-backdrop="static" data-keyboard="false" data-target="#modal-default1">View Details</a></td>
                          </tr>
                               <div class="modal fade" id="modal-default1">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title">Bachelor of Science in Agricultural Economics</h4>
                                  </div>
                                  <div class="modal-body">
                                    <p>Minimum requirements: - Minimum grade of C+ (plus) at KCSE or equivalent qualification recognized by MMUST Senate, and at least C (plain) in Chemistry and Biology, and either Mathematics, Economics, Commerce, Business Studies, Agriculture or Geography. The applicant may also have C+ (Plus) in either Biological Sciences or Physical Sciences - 2 Principal passes and one subsidiary at A-level, in Biology, Mathematics and Chemistry, and Economics - Diploma in Agriculture or related disciplines </p>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-warning pull-left" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i>Close</button>
                                    <a href="signup.php"><button type="button" class="btn btn-primary"><i class="glyphicon glyphicon-ok"></i> Proceed to Application</button></a>
                                  </div>
                                </div>
                                <!-- /.modal-content -->
                              </div>
                              <!-- /.modal-dialog -->
                            </div>
                                   
                            <tr>
                           <td>11 </td>
                           <td>Bachelor of Science in information Technology</td>
                            <td>
                            <a href="" data-toggle="modal" data-backdrop="static" data-keyboard="false" data-target="#modal-default1">View Details</a></td>
                          </tr>
                               <div class="modal fade" id="modal-default1">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title">Bachelor of Science in IT</h4>
                                  </div>
                                  <div class="modal-body">
                                    <p>Mean grade of C+ (plus) at KCSE with C+ (plus) in Mathematics, in any science or any business related subject. Or, 2 principal passes at A-level, 1 of which must be in Mathematics or Science subject, Or Any business related subject, Or Those with a diploma in IT from KAFUCO or equivalent with a credit or distinction will be admitted into 2nd year of study. Or a relevant diploma recognized by the University Senate</p>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-warning pull-left" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i>Close</button>
                                    <a href="signup.php"><button type="button" class="btn btn-primary"><i class="glyphicon glyphicon-ok"></i> Proceed to Application</button></a>
                                  </div>
                                </div>
                                <!-- /.modal-content -->
                              </div>
                              <!-- /.modal-dialog -->
                            </div>
                               
                            <tr>
                           <td>12</td>
                           <td>Bachelor of Science Mathematics</td>
                            <td>
                            <a href="" data-toggle="modal" data-backdrop="static" data-keyboard="false" data-target="#modal-default1">View Details</a></td>
                          </tr>
                               <div class="modal fade" id="modal-default1">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title">Bachelor of Science Mathematics</h4>
                                  </div>
                                  <div class="modal-body">
                                    <p>Mean grade of C+ (plus) at KCSE and a C+ (plus) in Mathematics, Physics or Physical Sciences. Or 2 Principal passes in relevant science subjects, 1 of which must be in Mathematics or Physics at A-level. Or Diploma in Computer Studies or its equivalent (may be exempted in relevant units)</p>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-warning pull-left" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i>Close</button>
                                    <a href="signup.php"><button type="button" class="btn btn-primary"><i class="glyphicon glyphicon-ok"></i> Proceed to Application</button></a>
                                  </div>
                                </div>
                                <!-- /.modal-content -->
                              </div>
                              <!-- /.modal-dialog -->
                            </div>
                              
                            <tr>
                           <td>13 </td>
                           <td>Bachelor of Science in Mathematics with information Technology</td>
                            <td>
                            <a href="" data-toggle="modal" data-backdrop="static" data-keyboard="false" data-target="#modal-default1">View Details</a></td>
                          </tr>
                               <div class="modal fade" id="modal-default1">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title">Bachelor of Science in Mathematics with information Technology</h4>
                                  </div>
                                  <div class="modal-body">
                                    <p>Mean grade of C+ (plus) at KCSE and at least a C+ (plus) in Mathematics, Or 2 Principal passes in relevant science subjects and a subsidiary pass at A-level, 1 of the Principals must be in Mathematics.</p>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-warning pull-left" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i>Close</button>
                                    <a href="signup.php"><button type="button" class="btn btn-primary"><i class="glyphicon glyphicon-ok"></i> Proceed to Application</button></a>
                                  </div>
                                </div>
                                <!-- /.modal-content -->
                              </div>
                              <!-- /.modal-dialog -->
                            </div>
                              
                    </tbody>
             </table>
        </div>
      <div class="tab-content">
       <div id="dip" class="tab-pane fade">
       <table class="table table-condensed table-striped table-bordered table-responsive dataTables">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>PROGRAMME NAME</th>
                        <th>VIEW MORE</th>
                    </tr>
                    </thead>
                    <tbody>
                                                     <tr>
                           <td>1 </td>
                           <td>Diploma in Business Management</td>
                            <td>
                            <a href="" data-toggle="modal" data-backdrop="static" data-keyboard="false" data-target="#modal-default1">View Details</a></td>
                          </tr>
                               <div class="modal fade" id="modal-default1">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title">Diploma in Business Management</h4>
                                  </div>
                                  <div class="modal-body">
                                    <p>Minimum mean grade of C- (Minus) KCSE with D+ (Plus) in Mathematics/Business studies/Commerce Or Certificate in Business Management from MMUST or any other recognized institution.</p>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-warning pull-left" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i>Close</button>
                                    <a href="signup.php"><button type="button" class="btn btn-primary"><i class="glyphicon glyphicon-ok"></i> Proceed to Application</button></a>
                                  </div>
                                </div>
                                <!-- /.modal-content -->
                              </div>
                              <!-- /.modal-dialog -->
                            </div>
                            <!-- /.modal -->
                                                   <tr>
                           <td>2 </td>
                           <td>Diploma in Criminology and Criminal Justice</td>
                            <td>
                            <a href="" data-toggle="modal" data-backdrop="static" data-keyboard="false" data-target="#modal-default2">View Details</a></td>
                          </tr>
                               <div class="modal fade" id="modal-default2">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title">Diploma in Criminology and Criminal Justice</h4>
                                  </div>
                                  <div class="modal-body">
                                    <p>Mean Grade C- (Minus) at KCSE Or a Craft Certificate from a recognized institution.</p>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-warning pull-left" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i>Close</button>
                                    <a href="user_register"><button type="button" class="btn btn-primary"><i class="glyphicon glyphicon-ok"></i> Proceed to Application</button></a>
                                  </div>
                                </div>
                                <!-- /.modal-content -->
                              </div>
                              <!-- /.modal-dialog -->
                            </div>
                            <!-- /.modal -->
                                                   <tr>
                           <td>3 </td>
                           <td>Diploma in Disaster Management</td>
                            <td>
                            <a href="" data-toggle="modal" data-backdrop="static" data-keyboard="false" data-target="#modal-default3">View Details</a></td>
                          </tr>
                               <div class="modal fade" id="modal-default3">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title">Diploma in Disaster Management</h4>
                                  </div>
                                  <div class="modal-body">
                                    <p>Mean Grade C- (Minus) at KCSE or a relevant Certificate from a recognized institution.</p>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-warning pull-left" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i>Close</button>
                                    <a href="user_register"><button type="button" class="btn btn-primary"><i class="glyphicon glyphicon-ok"></i> Proceed to Application</button></a>
                                  </div>
                                </div>
                                <!-- /.modal-content -->
                              </div>
                              <!-- /.modal-dialog -->
                            </div>
                            <!-- /.modal -->
                                                   <tr>
                           <td>4 </td>
                           <td>Diploma in Music</td>
                            <td>
                            <a href="" data-toggle="modal" data-backdrop="static" data-keyboard="false" data-target="#modal-default4">View Details</a></td>
                          </tr>
                               <div class="modal fade" id="modal-default4">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title">Diploma in Music</h4>
                                  </div>
                                  <div class="modal-body">
                                    <p>Mean Grade C- (Minus) at with at least D+ (plus) in Music at KCSE Or a Craft Certificate  from a recognized institution.</p>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-warning pull-left" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i>Close</button>
                                    <a href="user_register"><button type="button" class="btn btn-primary"><i class="glyphicon glyphicon-ok"></i> Proceed to Application</button></a>
                                  </div>
                                </div>
                                <!-- /.modal-content -->
                              </div>
                              <!-- /.modal-dialog -->
                            </div>
                            <!-- /.modal -->
                                                   
                                                  
                                                   <tr>
                           <td>5</td>
                           <td>Diploma in French</td>
                            <td>
                            <a href="" data-toggle="modal" data-backdrop="static" data-keyboard="false" data-target="#modal-default7">View Details</a></td>
                          </tr>
                               <div class="modal fade" id="modal-default7">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title">Diploma in French</h4>
                                  </div>
                                  <div class="modal-body">
                                    <p></p>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-warning pull-left" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i>Close</button>
                                    <a href="user_register"><button type="button" class="btn btn-primary"><i class="glyphicon glyphicon-ok"></i> Proceed to Application</button></a>
                                  </div>
                                </div>
                                <!-- /.modal-content -->
                              </div>
                              <!-- /.modal-dialog -->
                            </div>
                            <!-- /.modal -->
                                                   <tr>
                           <td>6</td>
                           <td>Diploma in Early Childhood Education</td>
                            <td>
                            <a href="" data-toggle="modal" data-backdrop="static" data-keyboard="false" data-target="#modal-default8">View Details</a></td>
                          </tr>
                               <div class="modal fade" id="modal-default8">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title">Diploma in Early Childhood Education</h4>
                                  </div>
                                  <div class="modal-body">
                                    <p>Mean grade of C (Plain) at KCSE or Certificate in Early Childhood Education from a recognized institution.</p>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-warning pull-left" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i>Close</button>
                                    <a href="user_register"><button type="button" class="btn btn-primary"><i class="glyphicon glyphicon-ok"></i> Proceed to Application</button></a>
                                  </div>
                                </div>
                                <!-- /.modal-content -->
                              </div>
                              <!-- /.modal-dialog -->
                            </div>
                            <!-- /.modal -->
                                                   <tr>
                           <td>7 </td>
                           <td>Diploma in Community Health Development</td>
                            <td>
                            <a href="" data-toggle="modal" data-backdrop="static" data-keyboard="false" data-target="#modal-default9">View Details</a></td>
                          </tr>
                               <div class="modal fade" id="modal-default9">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title">Diploma in Community Health Development</h4>
                                  </div>
                                  <div class="modal-body">
                                    <p>Mean Grade C- (Minus) at KCSE with D+ (Plus) in Biology/Chemistry Or a Craft Certificate from a recognized institution</p>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-warning pull-left" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i>Close</button>
                                    <a href="user_register"><button type="button" class="btn btn-primary"><i class="glyphicon glyphicon-ok"></i> Proceed to Application</button></a>
                                  </div>
                                </div>
                                <!-- /.modal-content -->
                              </div>
                              <!-- /.modal-dialog -->
                            </div>
                            <!-- /.modal -->
                                                   
                                                   <tr>
                           <td>8 </td>
                           <td>Diploma in Information Technology</td>
                            <td>
                            <a href="" data-toggle="modal" data-backdrop="static" data-keyboard="false" data-target="#modal-default11">View Details</a></td>
                          </tr>
                               <div class="modal fade" id="modal-default11">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title">Diploma in Information Technology</h4>
                                  </div>
                                  <div class="modal-body">
                                    <p>Minimum mean grade of C- (Minus) at KCSE with at least D+ (Plus) in English and Mathematics/Computer Studies Or Certificate in IT</p>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-warning pull-left" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i>Close</button>
                                    <a href="user_register"><button type="button" class="btn btn-primary"><i class="glyphicon glyphicon-ok"></i> Proceed to Application</button></a>
                                  </div>
                                </div>
                                <!-- /.modal-content -->
                              </div>
                              <!-- /.modal-dialog -->
                            </div>
                            <!-- /.modal -->
                                                   <tr>
                           <td>9 </td>
                           <td>Diploma in Public Relations and Creative Advertising</td>
                            <td>
                            <a href="" data-toggle="modal" data-backdrop="static" data-keyboard="false" data-target="#modal-default12">View Details</a></td>
                          </tr>
                               <div class="modal fade" id="modal-default12">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title">Diploma in Public Relations and Creative Advertising</h4>
                                  </div>
                                  <div class="modal-body">
                                    <p>Mean Grade C- (Minus) at KCSE Or a Craft Certificate from a recognized institution.</p>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-warning pull-left" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i>Close</button>
                                    <a href="user_register"><button type="button" class="btn btn-primary"><i class="glyphicon glyphicon-ok"></i> Proceed to Application</button></a>
                                  </div>
                                </div>
                                <!-- /.modal-content -->
                              </div>
                              <!-- /.modal-dialog -->
                            </div>
      <tr>
                           <td>10 </td>
                           <td>Diploma in Social Work and Community Development</td>
                            <td>
                            <a href="" data-toggle="modal" data-backdrop="static" data-keyboard="false" data-target="#modal-default16">View Details</a></td>
                          </tr>
                               <div class="modal fade" id="modal-default16">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title">Diploma in Social Work and Community Development</h4>
                                  </div>
                                  <div class="modal-body">
                                    <p>Mean Grade C- (Minus) at KCSE Or a Craft Certificate from a recognized institution.</p>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-warning pull-left" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i>Close</button>
                                    <a href="user_register"><button type="button" class="btn btn-primary"><i class="glyphicon glyphicon-ok"></i> Proceed to Application</button></a>
                                  </div>
                                </div>
                                <!-- /.modal-content -->
                              </div>
                              <!-- /.modal-dialog -->
                            </div>
                            <!-- /.modal -->
                                                   
                                                  
                                                   
                                                   <tr>
                           <td>11 </td>
                           <td>Diploma in Hospitality Management</td>
                            <td>
                            <a href="" data-toggle="modal" data-backdrop="static" data-keyboard="false" data-target="#modal-default20">View Details</a></td>
                          </tr>
                               <div class="modal fade" id="modal-default20">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title">Diploma in Hospitality Management</h4>
                                  </div>
                                  <div class="modal-body">
                                    <p>Mean Grade C- (Minus) at KCSE with C- (Minus) in each of the following: English/Kiswahili, Mathematics/Physics, Biology and Chemistry Or a Certificate in relevant field.</p>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-warning pull-left" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i>Close</button>
                                    <a href="user_register"><button type="button" class="btn btn-primary"><i class="glyphicon glyphicon-ok"></i> Proceed to Application</button></a>
                                  </div>
                                </div>
                                <!-- /.modal-content -->
                              </div>
                              <!-- /.modal-dialog -->
                            </div>
                            <!-- /.modal -->
                                                   <tr>
                           <td>12</td>
                           <td>Diploma in Health Promotion and Education</td>
                            <td>
                            <a href="" data-toggle="modal" data-backdrop="static" data-keyboard="false" data-target="#modal-default21">View Details</a></td>
                          </tr>
                               <div class="modal fade" id="modal-default21">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title">Diploma in Health Promotion and Education</h4>
                                  </div>
                                  <div class="modal-body">
                                    <p>Mean Grade C- (Minus) at KCSE Or a KNEC Certificate in Relevant field from a recognized institution.</p>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-warning pull-left" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i>Close</button>
                                    <a href="user_register"><button type="button" class="btn btn-primary"><i class="glyphicon glyphicon-ok"></i> Proceed to Application</button></a>
                                  </div>
                                </div>
                                <!-- /.modal-content -->
                              </div>
                              <!-- /.modal-dialog -->
                            </div>
                            <!-- /.modal -->
                                                  
                           </tbody>
                    </table>
          </div>

      </div>
     
   <div id="cert" class="tab-pane fade">
      <table class="table table-condensed table-striped table-bordered table-responsive dataTables">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>PROGRAMME NAME</th>
                        <th>VIEW MORE</th>
                    </tr>
                    </thead>
                    <tbody>
                                                     <tr>
                           <td>1 </td>
                           <td>Certificate in Business Management</td>
                                 <td>
                            <a href="" data-toggle="modal" data-backdrop="static" data-keyboard="false" data-target="#modal-cert1">View Details</a></td>
                          </tr>
                               <div class="modal fade" id="modal-cert1">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title">Certificate in Business Management</h4>
                                  </div>
                                  <div class="modal-body">
                                    <p>Minimum mean grade of  D+ (Plus) Or the relevant artisan course</p>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-warning pull-left" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i>Close</button>
                                    <a href="user_register"><button type="button" class="btn btn-primary"><i class="glyphicon glyphicon-ok"></i> Proceed to Application</button></a>
                                  </div>
                                </div>
                                <!-- /.modal-content -->
                              </div>
                              <!-- /.modal-dialog -->
                            </div>
                            <!-- /.modal -->
                                                   <tr>
                           <td>2 </td>
                           <td>Certificate in Criminology and Criminal Justice</td>
                                 <td>
                            <a href="" data-toggle="modal" data-backdrop="static" data-keyboard="false" data-target="#modal-cert2">View Details</a></td>
                          </tr>
                               <div class="modal fade" id="modal-cert2">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title">Certificate in Criminology and Criminal Justice</h4>
                                  </div>
                                  <div class="modal-body">
                                    <p>Minimum entry requirements for the certificate courses shall be D (Plain) in KCSE or the relevant artisan course</p>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-warning pull-left" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i>Close</button>
                                    <a href="user_register"><button type="button" class="btn btn-primary"><i class="glyphicon glyphicon-ok"></i> Proceed to Application</button></a>
                                  </div>
                                </div>
                                <!-- /.modal-content -->
                              </div>
                              <!-- /.modal-dialog -->
                            </div>
                            <!-- /.modal -->
                                                   <tr>
                           <td>3 </td>
                           <td>Certificate in Disaster Management</td>
                                 <td>
                            <a href="" data-toggle="modal" data-backdrop="static" data-keyboard="false" data-target="#modal-cert3">View Details</a></td>
                          </tr>
                               <div class="modal fade" id="modal-cert3">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title">Certificate in Disaster Management</h4>
                                  </div>
                                  <div class="modal-body">
                                    <p>Minimum entry requirements for the certificate courses shall be D (Plain) in KCSE or the relevant artisan course</p>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-warning pull-left" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i>Close</button>
                                    <a href="user_register"><button type="button" class="btn btn-primary"><i class="glyphicon glyphicon-ok"></i> Proceed to Application</button></a>
                                  </div>
                                </div>
                                <!-- /.modal-content -->
                              </div>
                              <!-- /.modal-dialog -->
                            </div>
                            <!-- /.modal -->
                                                  
                                                   <tr>
                           <td>4</td>
                           <td>Certificate in Early Childhood Education </td>
                                 <td>
                            <a href="" data-toggle="modal" data-backdrop="static" data-keyboard="false" data-target="#modal-cert6">View Details</a></td>
                          </tr>
                               <div class="modal fade" id="modal-cert6">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title">Certificate in Early Childhood Education </h4>
                                  </div>
                                  <div class="modal-body">
                                    <p>Minimum Mean grade of D+ at KCSE.</p>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-warning pull-left" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i>Close</button>
                                    <a href="user_register"><button type="button" class="btn btn-primary"><i class="glyphicon glyphicon-ok"></i> Proceed to Application</button></a>
                                  </div>
                                </div>
                                <!-- /.modal-content -->
                              </div>
                              <!-- /.modal-dialog -->
                            </div>
                            <!-- /.modal -->
                                                   <tr>
                           <td>6</td>
                           <td>Certificate in Community Health and Development</td>
                                 <td>
                            <a href="" data-toggle="modal" data-backdrop="static" data-keyboard="false" data-target="#modal-cert7">View Details</a></td>
                          </tr>
                               <div class="modal fade" id="modal-cert7">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title">Certificate in Community Health and Development</h4>
                                  </div>
                                  <div class="modal-body">
                                    <p>Minimum entry requirements for the certificate course shall be D+ (Plus) in KCSE.</p>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-warning pull-left" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i>Close</button>
                                    <a href="user_register"><button type="button" class="btn btn-primary"><i class="glyphicon glyphicon-ok"></i> Proceed to Application</button></a>
                                  </div>
                                </div>
                                <!-- /.modal-content -->
                              </div>
                              <!-- /.modal-dialog -->
                            </div>
                            <!-- /.modal -->
                                                  
                                                   <tr>
                           <td>7 </td>
                           <td>Certificate in Information Technology</td>
                                 <td>
                            <a href="" data-toggle="modal" data-backdrop="static" data-keyboard="false" data-target="#modal-cert10">View Details</a></td>
                          </tr>
                               <div class="modal fade" id="modal-cert10">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title">Certificate in Information Technology</h4>
                                  </div>
                                  <div class="modal-body">
                                    <p> Minimum entry requirements for the certificate courses shall be D+ (Plus) in KCSE or the relevant artisan course</p>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-warning pull-left" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i>Close</button>
                                    <a href="user_register"><button type="button" class="btn btn-primary"><i class="glyphicon glyphicon-ok"></i> Proceed to Application</button></a>
                                  </div>
                                </div>
                                <!-- /.modal-content -->
                              </div>
                              <!-- /.modal-dialog -->
                            </div>
                            <!-- /.modal -->
                                                   
                                                   <tr>
                           <td>8</td>
                           <td>Certificate in Social Work</td>
                                 <td>
                            <a href="" data-toggle="modal" data-backdrop="static" data-keyboard="false" data-target="#modal-cert14">View Details</a></td>
                          </tr>
                               <div class="modal fade" id="modal-cert14">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title">Certificate in Social Work</h4>
                                  </div>
                                  <div class="modal-body">
                                    <p>Minimum entry requirements for the certificate courses shall be D (Plain) in KCSE or the relevant artisan course</p>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-warning pull-left" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i>Close</button>
                                    <a href="user_register"><button type="button" class="btn btn-primary"><i class="glyphicon glyphicon-ok"></i> Proceed to Application</button></a>
                                  </div>
                                </div>
                                <!-- /.modal-content -->
                              </div>
                              <!-- /.modal-dialog -->
                            </div>
                            <!-- /.modal -->
                                                   <tr>
                           <td>9 </td>
                           <td>Certificate in Agriculture</td>
                                 <td>
                            <a href="" data-toggle="modal" data-backdrop="static" data-keyboard="false" data-target="#modal-cert15">View Details</a></td>
                          </tr>
                               <div class="modal fade" id="modal-cert15">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title">Certificate in Agriculture</h4>
                                  </div>
                                  <div class="modal-body">
                                    <p> Minimum entry requirements for the certificate courses shall be D (Plain) in KCSE or the relevant artisan course</p>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-warning pull-left" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i>Close</button>
                                    <a href="user_register"><button type="button" class="btn btn-primary"><i class="glyphicon glyphicon-ok"></i> Proceed to Application</button></a>
                                  </div>
                                </div>
                                <!-- /.modal-content -->
                              </div>
                              <!-- /.modal-dialog -->
                            </div>
                            <!-- /.modal -->
                                                  
                                             </tbody>
                    </table>
   </div>


 <div id="masters" class="tab-pane fade">
  <table class="table table-condensed table-striped table-bordered table-responsive dataTables">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>PROGRAMME NAME</th>
                        <th>VIEW MORE</th>
                    </tr>
                    </thead>
                    <tbody>
                                                   <tr>
                           <td>1</td>
                           <td>Master of Science in Human Resource Management</td>
                                 <td>
                            <a href="" data-toggle="modal" data-backdrop="static" data-keyboard="false" data-target="#modal-mas2">View Details</a></td>
                          </tr>
                               <div class="modal fade" id="modal-mas2">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title">Master of Science in Human Resource Management</h4>
                                  </div>
                                  <div class="modal-body">
                                    <p></p>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-warning pull-left" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i>Close</button>
                                    <a href="user_register"><button type="button" class="btn btn-primary"><i class="glyphicon glyphicon-ok"></i> Proceed to Application</button></a>
                                  </div>
                                </div>
                                <!-- /.modal-content -->
                              </div>
                              <!-- /.modal-dialog -->
                            </div>
                            <!-- /.modal -->
                                                   <tr>
                           <td>2</td>
                           <td>Master of Science in Human Resource Management (Distance Learning)</td>
                                 <td>
                            <a href="" data-toggle="modal" data-backdrop="static" data-keyboard="false" data-target="#modal-mas3">View Details</a></td>
                          </tr>
                               <div class="modal fade" id="modal-mas3">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title">Master of Science in Human Resource Management (Distance Learning)</h4>
                                  </div>
                                  <div class="modal-body">
                                    <p></p>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-warning pull-left" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i>Close</button>
                                    <a href="user_register"><button type="button" class="btn btn-primary"><i class="glyphicon glyphicon-ok"></i> Proceed to Application</button></a>
                                  </div>
                                </div>
                                <!-- /.modal-content -->
                              </div>
                              <!-- /.modal-dialog -->
                            </div>
                            <!-- /.modal -->
                                                   <tr>
                           <td>3</td>
                           <td>Master of Education (Biology)</td>
                                 <td>
                            <a href="" data-toggle="modal" data-backdrop="static" data-keyboard="false" data-target="#modal-mas4">View Details</a></td>
                          </tr>
                               <div class="modal fade" id="modal-mas4">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title">Master of Education (Biology)</h4>
                                  </div>
                                  <div class="modal-body">
                                    <p></p>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-warning pull-left" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i>Close</button>
                                    <a href="user_register"><button type="button" class="btn btn-primary"><i class="glyphicon glyphicon-ok"></i> Proceed to Application</button></a>
                                  </div>
                                </div>
                                <!-- /.modal-content -->
                              </div>
                              <!-- /.modal-dialog -->
                            </div>
                            <!-- /.modal -->
                                                   
                                                   
                                                   <tr>
                           <td>4</td>
                           <td>Master of Criminology</td>
                                 <td>
                            <a href="" data-toggle="modal" data-backdrop="static" data-keyboard="false" data-target="#modal-mas8">View Details</a></td>
                          </tr>
                               <div class="modal fade" id="modal-mas8">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title">Master of Criminology</h4>
                                  </div>
                                  <div class="modal-body">
                                    <p></p>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-warning pull-left" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i>Close</button>
                                    <a href="user_register"><button type="button" class="btn btn-primary"><i class="glyphicon glyphicon-ok"></i> Proceed to Application</button></a>
                                  </div>
                                </div>
                                <!-- /.modal-content -->
                              </div>
                              <!-- /.modal-dialog -->
                            </div>
                            <!-- /.modal -->
                                                   <
                                                   <tr>
                           <td>5</td>
                           <td>Master of Education in Kiswahili</td>
                                 <td>
                            <a href="" data-toggle="modal" data-backdrop="static" data-keyboard="false" data-target="#modal-mas33">View Details</a></td>
                          </tr>
                               <div class="modal fade" id="modal-mas33">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title">Master of Education in Kiswahili</h4>
                                  </div>
                                  <div class="modal-body">
                                    <p></p>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-warning pull-left" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i>Close</button>
                                    <a href="user_register"><button type="button" class="btn btn-primary"><i class="glyphicon glyphicon-ok"></i> Proceed to Application</button></a>
                                  </div>
                                </div>
                                <!-- /.modal-content -->
                              </div>
                              <!-- /.modal-dialog -->
                            </div>
                            <!-- /.modal -->
                                                   <tr>
                           <td>6</td>
                           <td>	Master of Science In Mathematics Education</td>
                                 <td>
                            <a href="" data-toggle="modal" data-backdrop="static" data-keyboard="false" data-target="#modal-mas34">View Details</a></td>
                          </tr>
                               <div class="modal fade" id="modal-mas34">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title">	Master of Science In Mathematics Education</h4>
                                  </div>
                                  <div class="modal-body">
                                    <p></p>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-warning pull-left" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i>Close</button>
                                    <a href="user_register"><button type="button" class="btn btn-primary"><i class="glyphicon glyphicon-ok"></i> Proceed to Application</button></a>
                                  </div>
                                </div>
                                <!-- /.modal-content -->
                              </div>
                              <!-- /.modal-dialog -->
                            </div>
                            <!-- /.modal -->
                                                   <tr>
                           <td>7</td>
                           <td>MASTER OF EDUCATION IN PHILOSOPHY OF EDUCATION</td>
                                 <td>
                            <a href="" data-toggle="modal" data-backdrop="static" data-keyboard="false" data-target="#modal-mas35">View Details</a></td>
                          </tr>
                               <div class="modal fade" id="modal-mas35">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title">MASTER OF EDUCATION IN PHILOSOPHY OF EDUCATION</h4>
                                  </div>
                                  <div class="modal-body">
                                    <p></p>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-warning pull-left" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i>Close</button>
                                    <a href="user_register"><button type="button" class="btn btn-primary"><i class="glyphicon glyphicon-ok"></i> Proceed to Application</button></a>
                                  </div>
                                </div>
                                <!-- /.modal-content -->
                              </div>
                              <!-- /.modal-dialog -->
                            </div>
                            <!-- /.modal -->
                                                   <tr>
                           <td>8</td>
                           <td>MASTER OF EDUCATION (ARTS) IN GEOGRAPHY</td>
                                 <td>
                            <a href="" data-toggle="modal" data-backdrop="static" data-keyboard="false" data-target="#modal-mas36">View Details</a></td>
                          </tr>
                               <div class="modal fade" id="modal-mas36">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title">MASTER OF EDUCATION (ARTS) IN GEOGRAPHY</h4>
                                  </div>
                                  <div class="modal-body">
                                    <p></p>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-warning pull-left" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i>Close</button>
                                    <a href="user_register"><button type="button" class="btn btn-primary"><i class="glyphicon glyphicon-ok"></i> Proceed to Application</button></a>
                                  </div>
                                </div>
                                <!-- /.modal-content -->
                              </div>
                              <!-- /.modal-dialog -->
                            </div>
                            <!-- /.modal -->
                                                   <tr>
                           <td>9</td>
                           <td>MASTER OF SCIENCE IN SCIENCE EDUCATION</td>
                                 <td>
                            <a href="" data-toggle="modal" data-backdrop="static" data-keyboard="false" data-target="#modal-mas37">View Details</a></td>
                          </tr>
                               <div class="modal fade" id="modal-mas37">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title">MASTER OF SCIENCE IN SCIENCE EDUCATION</h4>
                                  </div>
                                  <div class="modal-body">
                                    <p></p>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-warning pull-left" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i>Close</button>
                                    <a href="user_register"><button type="button" class="btn btn-primary"><i class="glyphicon glyphicon-ok"></i> Proceed to Application</button></a>
                                  </div>
                                </div>
                                <!-- /.modal-content -->
                              </div>
                              <!-- /.modal-dialog -->
                            </div>
                            <!-- /.modal -->
                                                   <tr>
                           <td>10</td>
                           <td>MASTER OF EDUCATION IN HISTORY</td>
                                 <td>
                            <a href="" data-toggle="modal" data-backdrop="static" data-keyboard="false" data-target="#modal-mas38">View Details</a></td>
                          </tr>
                               <div class="modal fade" id="modal-mas38">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title">MASTER OF EDUCATION IN HISTORY</h4>
                                  </div>
                                  <div class="modal-body">
                                    <p></p>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-warning pull-left" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i>Close</button>
                                    <a href="user_register"><button type="button" class="btn btn-primary"><i class="glyphicon glyphicon-ok"></i> Proceed to Application</button></a>
                                  </div>
                                </div>
                                <!-- /.modal-content -->
                              </div>
                              <!-- /.modal-dialog -->
                            </div>
                            <!-- /.modal -->
                                                   <tr>
                           <td>11</td>
                           <td>MASTER OF EDUCATION IN ENVIRONMENTAL EDUCATION</td>
                                 <td>
                            <a href="" data-toggle="modal" data-backdrop="static" data-keyboard="false" data-target="#modal-mas39">View Details</a></td>
                          </tr>
                               <div class="modal fade" id="modal-mas39">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title">MASTER OF EDUCATION IN ENVIRONMENTAL EDUCATION</h4>
                                  </div>
                                  <div class="modal-body">
                                    <p></p>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-warning pull-left" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i>Close</button>
                                    <a href="user_register"><button type="button" class="btn btn-primary"><i class="glyphicon glyphicon-ok"></i> Proceed to Application</button></a>
                                  </div>
                                </div>
                                <!-- /.modal-content -->
                              </div>
                              <!-- /.modal-dialog -->
                            </div>
                            <!-- /.modal -->
                                                  
                                                   <tr>
                           <td>12</td>
                           <td>MASTER OF SCIENCE IN ENVIRONMENTAL STUDIES</td>
                                 <td>
                            <a href="" data-toggle="modal" data-backdrop="static" data-keyboard="false" data-target="#modal-mas43">View Details</a></td>
                          </tr>
                               <div class="modal fade" id="modal-mas43">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title">MASTER OF SCIENCE IN ENVIRONMENTAL STUDIES</h4>
                                  </div>
                                  <div class="modal-body">
                                    <p></p>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-warning pull-left" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i>Close</button>
                                    <a href="user_register"><button type="button" class="btn btn-primary"><i class="glyphicon glyphicon-ok"></i> Proceed to Application</button></a>
                                  </div>
                                </div>
                                <!-- /.modal-content -->
                              </div>
                              <!-- /.modal-dialog -->
                            </div>
                            <!-- /.modal -->
                                                  
                                                   <tr>
                           <td>13</td>
                           <td>MASTER OF ARTS IN GEOGRAPHY</td>
                                 <td>
                            <a href="" data-toggle="modal" data-backdrop="static" data-keyboard="false" data-target="#modal-mas48">View Details</a></td>
                          </tr>
                               <div class="modal fade" id="modal-mas48">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title">MASTER OF ARTS IN GEOGRAPHY</h4>
                                  </div>
                                  <div class="modal-body">
                                    <p></p>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-warning pull-left" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i>Close</button>
                                    <a href="user_register"><button type="button" class="btn btn-primary"><i class="glyphicon glyphicon-ok"></i> Proceed to Application</button></a>
                                  </div>
                                </div>
                                <!-- /.modal-content -->
                              </div>
                              <!-- /.modal-dialog -->
                            </div>
                            <!-- /.modal -->
                                                   <tr>
                           <td>14</td>
                           <td>MASTERS OF SCIENCE IN COMMUNITY HEALTH AND DEVELOPMENT</td>
                                 <td>
                            <a href="" data-toggle="modal" data-backdrop="static" data-keyboard="false" data-target="#modal-mas49">View Details</a></td>
                          </tr>
                               <div class="modal fade" id="modal-mas49">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title">MASTERS OF SCIENCE IN COMMUNITY HEALTH AND DEVELOPMENT</h4>
                                  </div>
                                  <div class="modal-body">
                                    <p></p>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-warning pull-left" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i>Close</button>
                                    <a href="user_register"><button type="button" class="btn btn-primary"><i class="glyphicon glyphicon-ok"></i> Proceed to Application</button></a>
                                  </div>
                                </div>
                                <!-- /.modal-content -->
                              </div>
                              <!-- /.modal-dialog -->
                            </div>
                            <!-- /.modal -->
                                                  
                                             </tbody>
                    </table>
   </div>
   </div>
   </div>
   </div>
   </div>
  

        <!-- end content here-->

        <script>
        function download(){
            window.location.href="sec/KAFUCO_ONLINE_APPLICATION.odg";
        }
        </script>
    <div class="clearfix"></div>
    <div id="footer" style="background-color: white;">
    <font color="#1e90ff">
        <h5><b>Incase of any queries please Email to <a
                    href="mailto:admissions@kafuco.ac.ke?Subject=Support Inquiry" target="_top">
                    admissions@kafuco.ac.ke</a></b></h5>
        <h6><b>Phone numbers:  +254716843251</b></h6>
    </font>
</div><!-- footer -->
 <script src="http://jQuery/jQuery-2.1.4.min.js" type="text/javascript"></script>
<script src="http://plugins/bootstrap.base/js/bootstrap.min.js"></script>
    <script src="http://assets/esystem/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="http://assets/esystem/plugins/dataTables/dataTables.bootstrap.js"></script>
<script type="text/javascript" src="http://assets/js/managed-datatables.js"></script>
<script type="text/javascript">
 $(document).ready(function(){
   $('[data-toggle="popover"]').popover();
 });
</script>
<script>
  $(function () {
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : true,
      'info'        : true,
      'autoWidth'   : true
    })
  })
</script>
   <script>
                 $(document).ready(function () {
                   $('.dataTable .dataTables table').dataTable();
                    $('.dataTables, .dataTable').dataTable({
                       'paging'      : true,
                      'lengthChange': false,
                      'searching'   : true,
                      'ordering'    : false,
                      'info'        : false,
                      'autoWidth'   : true
                    });
                 });


              </script>
              <script src="http://js/sb-admin-2.js"></script>

<script src="http://js/custom_javascript.js"></script>

<script  src="http://plugins/bootstrap.select/dist/js/bootstrap-select.min.js"></script>

<script src="http://jquery-easing/1.3/jquery.easing.min.js"></script>
<!-- Custom Theme JavaScript -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" 
integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" 
integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" 
integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>