<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
//   include("config.php");
//   session_start();
//   
//   if($_SERVER["REQUEST_METHOD"] == "POST"){
//      
//      
//      $myusername = mysqli_real_escape_string($db,$_POST['username']) ;
//      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
//      
//      $sql = "SELECT id FROM admin WHERE username = '$myusername' and passcode = '$mypassword'";
//      $result = mysqli_query($db,$sql);
//      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
//      $active = $row['active'];
//      
//      $count = mysqli_num_rows($result);
//      
//		
//      if($count == 1) {
//         session_register("myusername");
//         $_SESSION['login_user'] = $myusername;
//         
//         header("location: welcome.php");
//      }else {
//         $error = "Your Login Name or Password is invalid";
//      }
//   }
?>

<html>
   
   <head>
      <title>Login Page</title>
      
      <style type = "text/css">
         body {
            font-family:Arial, Helvetica, sans-serif;
            font-size:30px;
         }
         label {
            font-weight:bold;
            width:350px;
            font-size:35px;
         }
         .box {
            border:#666666 solid 1px;
         }
      </style>
      
   </head>
   
   <body bgcolor = "#FFFFFF">
	
      <div align = "center">
         <div style = "width:70%; border: solid 1px #333333; " align = "left">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3%;"><b>Login</b></div>
				
            <div style = "margin:10%">
               
                <form action = "index.php" method = "post">
                  <label>UserName  :</label><input type = "text" name = "username" class = "box"/><br /><br />
                  <label>Password  :</label><input type = "password" name = "password" class = "box" /><br/><br />
                  <input type = "submit" value = " Submit "/><br />
                </form>
               
               <div style = "font-size:30px; color:#cc0000; margin-top:20px">
                   
               </div>
					
            </div>
				
         </div>
			
      </div>

   </body>
</html>
