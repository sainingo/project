<?php
    session_start();
    error_reporting(0);

    
    
    $detid=$_REQUEST["detid"];
    $uphn1 =$_REQUEST["uphn1"];
       
    $ufname =$_REQUEST["ufname"];
    $ufocc=$_REQUEST["ufocc"];
    $ufphn=$_REQUEST["ufphn"];
    
    $umname=$_REQUEST["umname"];
    $umocc=$_REQUEST["umocc"];
    $umphn=$_REQUEST["umphn"];
    
    $inc=$_REQUEST["inc"];
    $gen=$_REQUEST["gen"];
    
    $padr=$_REQUEST["padr"];
    $past=$_REQUEST["past"];
    $papin=$_REQUEST["papin"];
    $pamob=$_REQUEST["pamob"];
    
    $rur=$_REQUEST["rur"];
    $natn=$_REQUEST["natn"];
    $relg=$_REQUEST["relg"];
    $cat=$_REQUEST["cat"];
    
    $brnc=$_REQUEST["brnc"];
    $col=$_REQUEST["col"];
    $cen=$_REQUEST["cen"];
    $crsty=$_REQUEST["crsty"];
        
    $nob1=$_REQUEST["nob1"];
    $yop1=$_REQUEST["yop1"];
    $tm1=$_REQUEST["tm1"];
    $mo1 =$_REQUEST["mo1"];
    $divs1=$_REQUEST["divs1"];
    $pom1  =$_REQUEST["pom1"];
    
    $nob2  =$_REQUEST["nob2"];
    $yop2=$_REQUEST["yop2"];
    $tm2=$_REQUEST["tm2"];
    $mo2  =$_REQUEST["mo2"];
    $divs2  =$_REQUEST["divs2"];
    $pom2  =$_REQUEST["pom2"];
   
    
    $moi  = $_REQUEST["moi"];
    $pay= $_REQUEST["pay"];
    
    $con=mysqli_connect("localhost","root","","oas");
    
    
    if(!isset($con))
    {
        die("Database Not Found");
    }
    
    
    if(isset($_REQUEST["frmnext"]))
    {
        if($detid== "")
        $detid = DetCode();
        $sql  = "insert into t_user values(";
        $sql .= "'" . $detid . "',";
        $sql .= "'" . $_SESSION['user'] ."',";
        $sql .= "'" . $uphn1 . "',";
        $sql .= "'" . $ufname . "',";
        $sql .= "'" . $ufocc . "',";
        $sql .= "'" . $ufphn . "',";
        $sql .= "'" . $umname . "',";
        $sql .= "'" . $umocc . "',";
        $sql .= "'" . $umphn . "',";
        $sql .= "'" . $inc . "',";
        $sql .= "'" . $gen . "',";
      //  $sql .= "'" . $padr . "',";
        $sql .= "'" . $past . "',";
        $sql .= "'" . $papin . "',";
        $sql .= "'" . $pamob . "',";
        $sql .= "'" . $rur . "',";
        $sql .= "'" . $natn . "',";
        $sql .= "'" . $relg . "',";
        $sql .= "'" . $cat . "',";
        $sql .= "'" . $oaco . "',";
        $sql .= "'" . $brnc . "',";
        $sql .= "'" . $col . "',";
        $sql .= "'" . $cen . "',";
        $sql .= "'" . $crsty . "',";
        $sql .= "'" . $nob1 . "',";
        $sql .= "'" . $yop1 . "',";
        $sql .= "'" . $tm1 . "',";
        $sql .= "'" . $mo1 . "',";
        $sql .= "'" . $divs1 . "',";
       // $sql .= "'" . $pom1 . "',";
        $sql .= "'" . $nob2 . "',";
        $sql .= "'" . $yop2 . "',";
        $sql .= "'" . $tm2 . "',";
        $sql .= "'" . $mo2 . "',";
        $sql .= "'" . $divs2 . "',";
        $sql .= "'" . $pom2 . "',";
        $sql .= "'" . $moi . "',";
        $sql .= "'" . $pay . "')";

      
        mysqli_query($con, $sql);
        
        $sql1  = "insert into t_status values(";
        $sql1 .= "'" . $_SESSION['user'] ."',";
        $sql1 .= "'Applied')";
        
         mysqli_query($con, $sql1);
         
        header('location:documents.php');
        echo "<script type='text/javascript'>alert('Details Uploaded !!');</script>";
        
        
    }
    
    
    function DetCode()
{
      $con = mysqli_connect("localhost", "root", "", "oas");
      $rs  = mysqli_query($con,"select CONCAT('DE',LPAD(RIGHT(ifnull(max(s_detid),'DE00000000'),8) + 1,8,'0')) from t_user");
      return mysqli_fetch_array($rs)[0];
}

$q=mysqli_query($con,"select s_name from t_user_data where s_id='".$_SESSION['user']."'");
$n=  mysqli_fetch_assoc($q);
$stname= $n['s_name'];


 if (!isset($_SESSION['user']))
{
        echo "<br><h2>You are not Logged On Please Login to Access this Page</div></h2>";
        echo "<a href=index.php><h3 align=center>Click Here to Login</h3></a>";
        exit();
}



?>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Admins form</title>
        <link type="text/css" rel="stylesheet" href="css/admform.css"></link>
        <script language="javascript" type="text/javascript" src="jquery/jquery-1.10.2.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" 
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
         
        
       <style type="text/css">
          .collapse navbar-collapse{
              margin: 20px;
          }
       </style>

        <script type="text/javascript">
        function validate()
        {
            $('#adform input[type="text"]').each(function() {
                if(this.required)
                {
                    if(this.value=="")
                        $(this).addClass("inpterr");
                    else
                        $(this).addClass("inpterrc");
                }
              
                if($(this).attr("VT")=="NM")
                {
                    if((!isAlpha(this.value)) && this.value!="")
                    {
                       alert("Only Aplhabets Are Allowed . . .");
                       $(this).focus();
                    }
                }

                        if($(this).attr("VT")=="PH")
                        {
                                if((!isPhone(this.value)) && this.value!="")
                                {
                                        alert("Check the phone number format . . .");
                                        $(this).focus();
                                }
                        }

                        if($(this).attr("VT")=="EML")
                        {
                                if(!IsEmail($(this).val()) && this.value!="")
                                {
                                        alert("Invalid Email . . . .");
                                        $(this).focus();
                                }
                        }	

                        if($(this).attr("VT")=="PIN")
                        {
                                if((!IsPin(this.value)) && this.value!="")
                                {
                                        alert("Invalid Pin Code . . . .");
                                        $(this).focus();
                                }
                        }

            });
        }
        
                function isAlpha(x)
                {
                    var re = new RegExp(/^[a-zA-Z\s]+$/);
                    return re.test(x);
                }
        
		function isPhone(x)
		{
			
			var ph = new RegExp (/\(?([0-9]{3})\)?([ .-]?)([0-9]{3})\2([0-9]{4})/);  
			//if(!ph.length<10)
			return ph.test(x);
		}
                
                
		
		function IsEmail(x) 
		{
  			var em = new RegExp(/^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/);
  			return em.test(x);
		}
		
		function IsPin(x) 
		{
  			var pin = new RegExp (/^\d{6}$/);
			
  			return pin.test(x);
		}		
        </script>
        
        <style type="text/css">
            .inpterr
            {
                border: 1px solid red;
                background: #FFCECE;

            }
            
            .inpterrc
            {
                border: 1px solid black;
                background: white;
            }
        </style>
            
        
        
        
    </head>
     <body style="background-image:url('./images/inbg.jpg');">
        <form id="adform" action="admsnform.php" method="post">
            <div class="container-fluid">    
              <h1><center>KAIMOSI FRIENDS UNIVERSITY COLLEGE</h1></center> 
             </div>
            <div id="dmid" class="container-fluid">  
                
                 <div class="row">
                    <div class="col-sm-12">
                        <font style="color:white; margin-left:520px; font-family: Verdana; width:100%; font-size:30px;">
                        <b>ADMISSION FORM</b> </font>
                      </div>
                 </div>
                
             </div>
 <nav class="navbar navbar-default">

	<div class="container-fluid">
				<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mynavbar" aria-expanded="false">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>
					<div class="collapse navbar-collapse" id="mynavbar">
							<ul class="nav nav-tabs">
									<li class="active"><a data-toggle="tab" href="sectionA">Personal Background</a></li>
									<li><a data-toggle="tab" href="#">Educational Background</a></li>
                                    <li><a data-toggle="tab" href="#">Educational Testimonials</a></li>
                                    <li><a href="#">Payment Information</a></li>
                                    <li><a href="#">Payment procedure</a></li>
								</ul>
                    </div>
                    <div class="tab-content">
                        <div id="sectionA" class="tab-pane fade in active">
                        <table class="frmtbl">
                
                <tr border="1" class="hdrow">
               
                </tr>       
            
               <tr>
                     <td> <font style="font-family: Verdana;"><h3>Welcome, <?php echo $stname;?></h3> <h4>Fill in the form</h4></font> </td>
               <td colspan="2"> 
                   <input type="hidden" id="detid" name="detid"></td>
               </tr>
             
             <tr>
               <td> <font style="font-family: Verdana;">Student's Mobile No.</font>  </td>
               <td colspan="3"> <input type="text" id="uphn1" name="uphn1" placeholder="Telephone" required="true" VT="PH">
             </tr>
           
             <tr>
               <td><font style="font-family: Verdana;"> Father's Name</font></td>
               <td  colspan="3"> <input type="text" id="ufname" name="ufname" required="true" VT="NM"> </td>
              </tr>
            
             <tr>
               <td> <font style="font-family: Verdana;">Father's Occupation</font></td>
               <td> <input type="text" id="ufocc" name="ufocc" required="true" VT="NM"> </td>
               <td><font style="font-family: Verdana;"> Mobile No.</font></td>
               <td> <input type="text" id="ufphn" name="ufphn" required="true" VT="PH"> </td>
             </tr>
           
           <tr>
               <td> <font style="font-family: Verdana;">Mother's Name</font> </td>
               <td colspan="3"> <input type="text" id="umname" name="umname" required="true" VT="NM"></td>
           </tr>
           
           <tr>
               <td> <font style="font-family: Verdana;">Mother's Occupation</font></td>
               <td> <input type="text" id="umocc" name="umocc" required="true" VT="NM"> </td>
                <td> <font style="font-family: Verdana;">Mobile No.</font></td>
               <td> <input type="text" id="umphn" name="umphn" required="true" VT="PH"></td>
           </tr>
           
           <tr>
               <td><font style="font-family: Verdana;"> Income of Parents </font>
                <td  colspan="3"><input type="text" id="inc" name="inc" required="true" ></td>
           </tr>
           
           <tr>
               <td> <font style="font-family: Verdana;">Sex </font>
               <td><input type="radio" id="gen" name="gen" value="Male"><font style="font-family: Verdana;">Male</font>
                <input type="radio" id="gen" name="gen" value="Female"><font style="font-family: Verdana;">Female </font></td>       
               
           </tr>
           <tr>
               <td> <font style="font-family: Verdana;">Permanent Address</font>
               <td colspan="3"> <input type="text" id="past" name="past" class="ad" placeholder="State" style="margin-top: 4px;" required="true"><br>
                     <input type="text" id="papin" name="papin" class="ad" placeholder="Pin" style="margin-top: 4px;" required="true"><br>
                     <input type="text" id="pamob" name="pamob" class="ad" placeholder="Mobile" style="margin-top: 4px;" required="true"><br>
               </td>
           </tr>   
          
           <tr>
               <td colspan="4"><input type="radio" id="rur" name="rur" value="Rural"><font style="font-family: Verdana;">
                   Rural
                   <input type="radio" id="rur" name="rur" value="Urban"><font style="font-family: Verdana;">Urban</font>
                   <input type="radio" id="rur" name="rur" value="City"><font style="font-family: Verdana;">City</font></td>
            </tr>
           
           <tr>
               <td><font style="font-family: Verdana;"> Nationality</font>
               <td><input type="text" id="natn" name="natn" required="true"></td>
               <td><font style="font-family: Verdana;"> Religion</font>
               <td><input type="text" id="relg" name="relg" required="true"></td>
           </tr>       
            <tr>
               <td><font style="font-family: Verdana;">Exam</font></td>
               <td><select id="oaco" name="oaco" required="true">
                       <option>--------------------Select--------------------</option>
                       <option>KCSE</option>
                       <option>CERTIFICATE</option>
                       
                   </select>
                       
               </td>               
          <tr>
               <td><font style="font-family: Verdana;">Choice of Branch</font></td>
               <td><select id="brnc" name="brnc">
                    <option>--------------------Select--------------------</option>
                    <option>COMPUTER SCIENCE AND ENG</option>
                    <option>ELECTRICAL AND ELECTRONICS ENG</option>
                    <option>ELECTRONICS AND COMM ENG</option>
                    <option>CIVIL ENG</option>
                    <option>MECHANICAL ENG</option>
                    <option>ELECTRONICS ENG</option>
                    </select>
                </td>
          </tr>
          <tr>
                <td><font style="font-family: Verdana;">College Name</font></td>
                <td><select id="col" name="col">
                    <option>--------------------Select--------------------</option>
                    <option>Kafuco</option>
                    <option>MMUST</option>
                    </select>
                </td>
                
           </tr>
         
           <tr>
                <td><font style="font-family: Verdana;">Center for exam</font></td>
                <td><select id="cen" name="cen">
                    <option>--------------------Select--------------------</option>
                    <option>knec</option>
                    <option>ccna</option>
                    </select>
                </td>
                
           </tr>
           
           <tr>
                <td><font style="font-family: Verdana;">Course Type</font></td>
                <td><select id="crsty" name="crsty">
                    <option>--------------------Select--------------------</option>
                    <option>Regular</option>
                    <option>Full-time</option>
                    </select>
                </td>
                
           </tr>
          <tr>
              <td><font style="font-family: Verdana;">Academic Qualification</font></td>
              <td colspan="3">
                  <table class="table table-hover">
                      <thead>
                          <tr>
                               <th><font style="font-family: Verdana;font-size: small">Exam</font> <br><font style="font-family: Verdana; font-size: small">passed</font></th>
                               <th><font style="font-family: Verdana;font-size: small">High school</font> <br><font style="font-family: Verdana;font-size: small">Name/college</font></th>
                               <th><font style="font-family: Verdana;font-size: small">Year of</font> <br><font style="font-family: Verdana;font-size: small"> Passing</font></th>
                               <th><font style="font-family: Verdana;font-size: small">Total</font><br><font style="font-family: Verdana;font-size: small"> Mark</font></th>
                               <th><font style="font-family: Verdana;font-size: small">Grade</font> <br><font style="font-family: Verdana;font-size: small">Obtained</font></th>
                               <th><font style="font-family: Verdana;font-size: small">Division</font></th>
                         </tr>   
                      </thead>
                       <tbody>
                      <tr>
                          <td><?php echo "kcse"; ?></td>
                          <td><input type="text" id="nob1" name="nob1" required="true"></td>
                          <td><input type="text" id="yop1" name="yop1" class="actab" required="true"></td>
                          <td><input type="text" id="tm1" name="tm1" class="actab" required="true"></td>
                          <td><input type="text" id="mo1" name="mo1" class="actab" required="true"></td>
                          <td><input type="text" id="divs1" name="divs1" class="actab" required="true"></td>
                          
                      </tr>
                      <tr>
                          <td><?php echo "certificate/diploma"; ?> </td>
                          <td><input type="text" id="nob2" name="nob2" required="true"></td>
                          <td><input type="text" id="yop2" name="yop2" class="actab" required="true"></td>
                          <td><input type="text" id="tm2" name="tm2" class="actab" required="true"></td>
                          <td><input type="text" id="mo2" name="mo2" class="actab" required="true"></td>
                          <td><input type="text" id="divs2" name="divs2" class="actab" required="true"></td>
                         
                      </tr>
                      
                       </tbody>
                  </table>
                      <tr>
                          <td><font style="font-family: Verdana;">Mode of Payment</font></td>
                          <td colspan="3">
                               <input type="radio" id="pay" name="pay" value="Loan"><font style="font-family: Verdana;">Loan</font><br>
                               <input type="radio" id="pay" name="pay" value="Self"><font style="font-family: Verdana;">Self</font>
                          </td>
                      </tr>
            
            
                      
                      <tr>
                           <td colspan="4">
                              <center> <input type="submit" onclick="validate();" id="frmnext" name="frmnext" value="Next"></center>
                           </td>
                      </tr>
                  </table>
                        </div>
                    </div>
          
   </div>
  </nav>                      
</form>
                  

           
                  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" 
                  integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            </body>

</html>
