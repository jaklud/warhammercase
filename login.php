<?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") 
   {
      
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
   
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
   
      $sql = "SELECT User FROM user WHERE user = '$myusername' "; // zweryfikować np. z $hash i metoda + and authentication_string='$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      if($count == 1) 
      {
			$_SESSION['login_user'] = $myusername;
         header("location: creator.php");
      }
      	else 
      	{
         $error = "Your Login Name or Password is invalid";
      	}
   }
?>

<html>
<head>
      <title>Strona Logowania</title>
      Wpisac tylko root
      do weryfikacji metoda autentykacji z hasłem mysqelowym
      <br>
      sqldump w /home/user/baza_backup.sql
      <style type = "text/css">
         body {
            font-family:Arial, Helvetica, sans-serif;
            font-size:14px;
         }
         label {
            font-weight:bold;
            width:100px;
            font-size:14px;
         }
         .box {
            border:#666666 solid 1px;
         }
      </style>
      
   </head>
   
   <body bgcolor = "#FFFFFF">
	
      <div align = "center">
         <div style = "width:300px; border: solid 1px #333333; " align = "center">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;">
            <b>Login Warhammer Calculator</b></div>
				
            <div style = "margin:30px">
               
               <form action = "" method = "post">
                  <label>Username  :</label><input type = "text" name = "username" class = "box"/><br /><br />
                  <label>Password  :</label><input type = "password" name = "password" class = "box" /><br/><br />
                  <input type = "submit" value = " Login "/><br />
               </form>
               
               <div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
					
            </div>
				
         </div>
			
      </div>

   </body>
</html>