<!DOCTYPE HTML>
<html>
<meta charset="UTF-8"> 
<head>
	<title>Dane użytkownika</title>
</head>
 <div align = "center">
 				<div style = "width:1000px; border: solid 3px #333333; " align = "center">
            <div style = "background-color:#222222; color:#FFFFFF; padding:5px;">
             
             
<?php
  include('session.php');
    
   /* mysqli_select_db($db, 'mysql');*/
    $query = "SELECT * FROM user where user = '$user_check' ";
		$result = mysqli_query($db, $query);

			while ($row=mysqli_fetch_array($result))	
	{
		
		echo "Użytkownik:", $row[1] . ' ','<br />', "Hasło:",$row[40] . ' ','<br />', "Ostatnio zmienione hasło:",$row[42] . ' ' ;
		
	}
	mysqli_free_result($result);
  ?>   

</div>
				
				</div>
				</div>
				
				</div>



<div align = "center" style="background-color: yellow">
 			
             

<form action="logout.php">
 <input type="submit" id="logout" value="logout" name="logout">
</form>


		    <a href='creator.php'>Kalculator Armii</a>    
    </div>
    
</html>