<?php

    session_start();
    error_reporting(0);

$con=mysqli_connect("localhost","root","","oas");
$q=mysqli_query($con,"select s_name from t_user_data where s_id='".$_SESSION['user']."'");
$n=  mysqli_fetch_assoc($q);
$stname= $n['s_name'];
$id=$_SESSION['user'];


$sta=mysqli_query($con,"select s_stat from t_status where s_id='".$_SESSION['user']."'");
$stat=  mysqli_fetch_assoc($sta);
$stval= $stat['s_stat'];

$result = mysqli_query($con,"SELECT * FROM t_user WHERE s_id='".$_SESSION['user']."'");
                    
                    while($row = mysqli_fetch_array($result))
                      {
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>User page</title>
        <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
         <link rel="stylesheet" href="bootstrap/bootstrap-theme.min.css">
       <script src="bootstrap/jquery.min.js"></script>
        <script src="bootstrap/bootstrap.min.js"></script>
        <link type="text/css" rel="stylesheet" href="css/admform.css"></link>
       
    </head>
    <body style="background-image:url(./images/inbg.jpg) ">
        
        <?php  

include 'usersession.php';

?>
      <form id="admin" action="admin.php" method="post">
            <div class="container-fluid">    
                <h1><center>KAIMOSI FRIENDS UNIVERSITY COLLEGE</h1></center> 
             </div>
          
            <div class="container-fluid" id="dmid">    
                <div class="row">
                  <div class="col-sm-12">
                  <center> <font style="color:white; font-family: Verdana; width:100%; font-size:20px;">
                <b>Applicant Profile</b> </font></center>
                  </div>
                 </div>    
             </div>
          
             <div class="container">
                    <ul class="nav nav-tabs" >

                        <li class="active"><a data-toggle="tab" href="#myapp">My Application Form</a></li>
                        <li><a data-toggle="tab" href="#mystat">My Admission Details</a></li>
                        <li><a data-toggle="tab" href="#inq">Inqueries</a></li>
                        <li><a  href="logout.php">Logout</a></li>
                    </ul>
                 
                 <div class="tab-content">
                     <div id="myapp" class="tab-pane fade in active">
           
                         
                     <div class="container-fluid">
                            <div class="row">
                               <div class="col-sm-12">
      <center>  <table class="table table-bordered" style="font-family: Verdana">
                
                <tr>
                 <td style="width:3%;"><img src="./images/logo.jpeg" width="50%"> </td>
                 <td style="width:8%;"><center><font style="font-family:Arial Black; font-size:20px;">
                  KAIMOSI FRIENDS UNIVERSITY COLLEGE (constituent of masinde muliro university)</font></center>
                <br>
                <center><font style="font-family:Arial Black; font-size:20px;">
                    ADMISSIONS (2019-20)</font></center>
                </td>
                    <td colspan="2" width="3%" >
                   <?php
                  
                    $picfile_path ='studentpic/';
                    
                    $result1 = mysqli_query($con,"SELECT * FROM t_userdoc where s_id='".$_SESSION['user']."'");
                        
                    
                    
                    while($row1 = mysqli_fetch_array($result1))
                      {                  
                        $picsrc=$picfile_path.$row1['s_pic'];
                        
                        echo "<img src='$picsrc.' class='img-thumbnail' width='180px' style='height:180px;'>";
                        echo"<div>";
                      }
                      $resdata = mysqli_query($con,"SELECT * FROM t_user_data WHERE s_id='".$_SESSION['user']."'");
                    
                    while($rowdata = mysqli_fetch_array($resdata))
                      {
                   ?>
                        </td>
                 </tr>       
                 
                 <tr>
                 <td style="width:4%;"> <font style="font-family: Verdana;">Name : </font> </td>
                    <td style="width:8%;" colspan="3"> <?php echo $stname;?> </td>
                 </tr>
                 
                 
                <tr>
                    <td> <font style="font-family: Verdana;">ID : </font> </td>
                    <td colspan="3"> <?php echo $id ?> </td>
                </tr>
                
                <tr>
                    <td> <font style="font-family: Verdana;">Date of Birth : </font> </td>
                    <td colspan="3"> <?php echo $rowdata[2] ?> </td>
                </tr>
                
                <tr>
                    <td> <font style="font-family: Verdana;">Email : </font> </td>
                      <td colspan="3"> <?php echo $rowdata[4]  ?> </td>
                </tr>
                  <?php
                      }
                      ?>
                  <tr>
                    <td > <font style="font-family: Verdana;"> Mobile No.</font>  </td>
                    <td colspan="3"> <?php echo 'Telephone - '. $row[2]. '   ' ?><br>
                    <?php// echo ' Mobile - '.$row[3] ?></td>
                  </tr>
                
                  <tr>
                    <td><font style="font-family: Verdana;"> Father's Name</font></td>
                    <td  colspan="3"><?php echo $row[3] ?> </td>
                   </tr>
                 
                  <tr>
                    <td> <font style="font-family: Verdana;">Father's Occupation</font></td>
                    <td> <?php echo $row[4] ?></td>
                    <td><font style="font-family: Verdana;"> Mobile No.</font></td>
                    <td> <?php echo $row[5] ?> </td>
                  </tr>
                
                <tr>
                    <td> <font style="font-family: Verdana;">Mother's Name</font> </td>
                    <td colspan="3"> <?php echo $row[6] ?></td>
                </tr>
                
                <tr>
                    <td> <font style="font-family: Verdana;">Mother's Occupation</font></td>
                    <td> <?php echo $row[7] ?> </td>
                     <td> <font style="font-family: Verdana;">Mobile No.</font></td>
                    <td> <?php echo $row[8] ?></td>
                </tr>
                
                <tr>
                    <td><font style="font-family: Verdana;"> Income of Parents </font>
                     <td  colspan="3"><?php echo $row[9] ?></td>
                </tr>
                
                <tr>
                    <td> <font style="font-family: Verdana;">Gender</font>
                    <td colspan="3"><?php echo $row[10] ?></td>       
                    
                </tr>
                    <td> <font style="font-family: Verdana;">Postal Address</font>
                    <td colspan="3"><?php echo 'Address :'. $row[11] ?><br>
                          <?php echo 'State :'. $row[12] ?><br>
                          <?php echo 'Pin :'. $row[13] ?><br>
                          <?php echo 'Mobile :'. $row[14] ?><br>
                </td>  
                <tr>
                    <td> <font style="font-family: Verdana;">From</font>
                    <td colspan="3">  <?php echo  $row[20] ?>
                </td>
                </tr>  
                                
                <tr>
                    <td><font style="font-family: Verdana;"> Nationality</font>
                    <td> <?php echo $row[16] ?></td>
                    <td><font style="font-family: Verdana;"> Religion</font>
                    <td> <?php echo $row[17] ?></td>
                </tr>    
               
                <tr>
                   <td> <font style="font-family: Verdana;">Category</font>
                    <td colspan="3">  <?php echo $row[18] ?>
                </td>
                </tr>      
                 <tr>
                  <td><font style="font-family: Verdana;">Exam Appeared</font></td>
                    <td><?php echo $row[19] ?>
              </tr>           
               <tr>
                    <td><font style="font-family: Verdana;">Choice of Branch</font></td>
                    <td colspan="3"><?php echo $row[20] ?>
                     </td>
               </tr>
               <tr>
                     <td><font style="font-family: Verdana;">College Name</font></td>
                     <td colspan="3"><?php echo $row[21] ?>
                     </td>
                     
                </tr>
              
                <tr>
                     <td><font style="font-family: Verdana;">Center for exam</font></td>
                     <td colspan="3"><?php echo $row[22] ?>
                     </td>
                     
                </tr>
                
                <tr>
                     <td><font style="font-family: Verdana;">Course Type</font></td>
                     <td colspan="3"><?php echo $row[23] ?>
                     </td>
                     
                </tr>    
               <tr>
                   <td><font style="font-family: Verdana;">Academic Qualification</font></td>
                   <td colspan="3">
                       <table class="table table-hover">
                           <thead>
                               <tr>
                                    <th><font style="font-family: Verdana;font-size: small">Exam</font> <br><font style="font-family: Verdana; font-size: small">passed</font></th>
                                    <th><font style="font-family: Verdana;font-size: small">Name of</font> <br><font style="font-family: Verdana;font-size: small">Board/University</font></th>
                                    <th><font style="font-family: Verdana;font-size: small">Year of</font> <br><font style="font-family: Verdana;font-size: small"> Passing</font></th>
                                    <th><font style="font-family: Verdana;font-size: small">Total</font><br><font style="font-family: Verdana;font-size: small"> Mark</font></th>
                                    <th><font style="font-family: Verdana;font-size: small">Mark</font> <br><font style="font-family: Verdana;font-size: small">Obtained</font></th>
                                    <th><font style="font-family: Verdana;font-size: small">Division</font></th>
                                    <th><font style="font-family: Verdana;font-size: small">% of</font><br><font style="font-family: Verdana;font-size: small"> Marks</font></th>
                              </tr>   
                           </thead>
                            <tbody>
                           <tr>
                               <td><?php echo "10th"; ?></td>
                               <td><?php echo $row[32] ?></td>
                               <td><?php echo $row[33] ?></td>
                               <td><?php echo $row[34] ?></td>
                               <td><?php echo $row[35] ?></td>
                               <td><?php echo $row[36] ?></td>
                               <td><?php echo $row[37] ?></td>
                               
                           </tr>
                           <tr>
                               <td><?php echo "12th/Diploma"; ?> </td>
                               <td><?php echo $row[38] ?></td>
                               <td><?php echo $row[49] ?></td>
                               <td><?php echo $row[40] ?></td>
                               <td><?php echo $row[41] ?></td>
                               <td><?php echo $row[42] ?></td>
                               <td><?php echo $row[43] ?></td>
                           </tr>
                           
                            </tbody>
                       </table>
                       
                           <tr>
                               <td><font style="font-family: Verdana;">Medium of Instruction </font></td>
                               
                                    <td colspan="3"><?php echo $row[44] ?></td>
                               
                           </tr>
                           
                           
                           <tr>
                               <td><font style="font-family: Verdana;">Mode of Payment</font></td>
                               
                               <td colspan="3"><?php echo $row[45] ?></td>
                               
                           </tr>
                 
                       </table></center>
                               </div>
                            </div>
            </div>
        <?php
              }
        ?>
             
                         
         </div>
                      
             <div id="mystat" class="tab-pane fade">
                <div class="container-fluid">
                    <div class="jumbotron">
                        <div class="row">
                            <div class="col-sm-12">

                                <ul class="list-group">

                                    <li class="list-group-item">
                                        <font style="font-family: Verdana; font-size:15px;"> 1) Application Status
                                        <p align="right"> <?php echo $stval ?></p></font>
                                    </li>
                                    <li class="list-group-item">
                                        <font style="font-family: Verdana; font-size:15px;"> 2) Print Application</font>
                                        <p align="right" style="font-family: Verdana; font-size:15px;">
                                           <a href="admsnreport1.php" >Click Here</a>
                                        </p>
                                    </li>

                                    <li class="list-group-item">
                                        <font style="font-family: Verdana; font-size:15px;"> 3) Edit Application</font>
                                        <p align="right" style="font-family: Verdana; font-size:15px;">
                                            <a href="editform.php" >Click Here</a>
                                         </p>
                                    </li>
                                    <li class="list-group-item">
                                        <font style="font-family: Verdana; font-size:15px;"> 4) Print Admission letter</font>
                                        <p align="right" style="font-family: Verdana; font-size:15px;">
                                            <a href="admitcard.php">Click Here</a>
                                         </p>
                                    </li>  

                                    <li class="list-group-item">
                                        <font style="font-family: Verdana; font-size:15px;"> 5) View Application Status</font>
                                        <p align="right" style="font-family: Verdana; font-size:15px;">
                                            <a href="viewresult.php">Click Here</a>
                                         </p>
                                    </li>

                                </ul>
                            </div>

                         
                        </div>


                    </div>
                </div>
             </div>
             <style>
                 body{
                     font-family: Arial,Helvetica,sans-serif;
                 }
                 *{
                     box-sizing: border-box;
                 }
                 input[type=text],select,textarea{
                     width: 100%;
                     padding: 12px;
                     border: 1px solid #ccc;
                     border-radius: 4px;
                     box-sizing: border-box;
                     margin-top:6px;
                     margin-bottom: 16px;
                     resize: vertical;
                 }
                 input[type=submit]{
                     background-color: #4caf50;
                     color: white;
                     padding: 12px 20px;
                     border: none;
                     border-radius: 4px;
                     cursor: pointer;
                 }
                 input[type=submit]:hover{
                     background-color: #45a049;
                 }
                 .container1{
                     border-radius: 5px;
                     background-color: #f2f2f2;
                     padding: 20px;
                 }
             </style>
             <div id="inq" class="tab-pane fade">
                <div class="container1">
                          <form action="">
                             <label for="uname">Username</label>
                             <input type="text" id="uname" name="username" placeholder="Enter Your Username...">
                             <label for="pass">Password</label><br><br>
                             <input type="password"  id="pass" name="password"placeholder="Enter Your Password..."><br>
                             <label for="subject">Subject</label>
                             <textarea id="subject" name="subject" placeholder="Write Something.." style="height:200px">
                          </textarea>
                          <input type="submit" value="Submit">
                          </form>                   
                </div>
             </div>

             </div>
             </div>
    </body>
</html>

