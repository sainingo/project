<?php
if(isset($_REQUEST["u_sub"]))
header('location:index.php');

?>


<?php

extract($_POST);
$stid=$_REQUEST["stid"];
$stpw=$_REQUEST["stpw"];
$name=$_REQUEST["in_name"];
$dob=$_REQUEST["in_dob"];
$eml=$_REQUEST["in_eml"];
$mob=$_REQUEST["in_mob"];

$con=mysqli_connect("localhost","root","","oas");
if(!isset($con))
{
    die("Database Not Found");
}
            $rs1=mysqli_query($con,"select * from t_user_data where s_email='$eml'");
if (mysqli_num_rows($rs1)>0)
{
	echo '
    <font style="color:red; margin-left:520px; font-family: Verdana; width:100%; font-size:30px;">
                                        <h5>Email ID Already Exists</h5></font>
                            ';
	exit;
}
if(isset($_REQUEST["in_sub"]))
{
    if($stid == "")
    $stid = StudentCode();
    if($stpw == "")
    $stpw = StudentPsw();
    
    $sql  = "insert into t_user_data values(";
    $sql .= "'" . $stid . "',";
    $sql .= "'" . $stpw . "',";
    $sql .= "'" . $dob . "',";
    $sql .= "'" . $name . "',";
    $sql .= "'" . $eml . "',";
    $sql .= "'" . $mob . "',";
    $sql .= "sysdate())";
    
    
        mysqli_query($con, $sql);
    

 
//     header('location:signupconfirm.php');
     
     
      
}
//room for change
//generated password for the applicants
  function StudentCode()
  {
      $con = mysqli_connect("localhost", "root", "", "oas");
      $rs  = mysqli_query($con,"select CONCAT('SIT/',LPAD(RIGHT(ifnull(max(s_id),'SIT/00000'),5) + 1,5,'0')) from t_user_data");
      return mysqli_fetch_array($rs)[0];
  }
  
  function StudentPsw()
  {
      $alphabet = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890";
      $pass = array();
      $alphaLength = strlen($alphabet) - 1;
      for($i=0;$i<8;$i++)
      {
          $n=rand(0,$alphaLength);
          $pass[]=$alphabet[$n];
      }
      return implode($pass);
  }


  
?>


<html>
    <head>
        <meta name="viewpoint" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
       <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
         <link rel="stylesheet" href="bootstrap/bootstrap-theme.min.css">
       <script src="bootstrap/jquery.min.js"></script>
        <script src="bootstrap/bootstrap.min.js"></script>
        <script language="javascript" type="text/javascript" src="jquery/jquery-1.10.2.js"></script>
        <script language="javascript" type="text/javascript" src="jquery/jquery-ui.js"></script>
        <link href="jquery/jquery-ui.css" rel="stylesheet" type="text/css" />


        <link type="text/css" rel="stylesheet" href="css/sign.css"></link>
         
       <script>
    function valid(inputtxt)  
    {  
      var phoneno = /^\d{10}$/;  
      if(inputtxt.value.match(phoneno))  
      {  
          return true;  
      }  
      else  
      {  
         alert("Not a valid Phone Number");  
         return false;  
      }  
      }  
  </script>
        
        
        
        
    </head>
    
    
    <body style="background-image:url('./images/inbg.jpg');">
        <form id="signupconfirm" action="signupconfirm.php" method="post">
  
            <div id="dvlogin" style="box-shadow: 0px 5px 10px #999999">
                    <?php
                        
                    ?>
            </div>
                    
            <div class="container-fluid">    
                <h1><center>KAIMOSI FRIENDS UNIVERSITY COLLEGE</h1></center>  
             </div>
        <div id="dmid">
            
        </div>
        <div id="ddown">
            <br><br><br>
            <div id="dleft">
                
            <img src="images/signup1.jpg" style="height:470px;width:550px;border-top-left-radius:15px;border-bottom-left-radius:15px;" ></img>
            </div>
             <div id="drig">
                 <br><br>
                 <center><font style="color: #3399ff; margin-left:30px; font-family: Verdana;font-size:20px;">
                     <?php  require_once("mail-content.php");  ?>
                     
                      <?php echo "Your User ID is $stid and Password is $stpw" ; ?><br>
                    You are successfully registered. Please check your email ID or Phone for User ID and Password. </font></center>
                 <br><br>
            
                 <input type="submit" id="u_sub" name="u_sub" value="Login" class="toggle btn btn-primary" style="width:100px; margin-left: 200px;"><br><br>
             </div>
        </div>
        
        </form>
    </body>
</html>
