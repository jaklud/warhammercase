<!DOCTYPE HTML>
<html>
<meta charset="UTF-8"> 
<head>
	<title>Warhammer Calculator</title>
</head>
   <?php echo $login_session; ?>
<?php
   include('session.php');
    
    mysqli_select_db($db, 'warhammer');
  ?>   
   
   <body>
      
      <center><img id="logo" src="Warhammer-logo.png" alt="logo-wh"></center>
  <div align = "center">    
    <?php  
 $query = "SELECT * FROM Army";
		$result = mysqli_query($db, $query);

			while ($row=mysqli_fetch_array($result))	
	{
		echo $row[0] . ' ',$row[1] . ' ',$row[2] . ' ',$row[3] . ' ',$row[4] . ' ',$row[5] . ' ',$row[6] . ' ',$row[7] . ' ' ;
		echo '<br />';
	}
	mysqli_free_result($result);
 
 
 ?>
 </div>
 
  
      
   
     
      
   </body>
   <h2><a href = "UserData.php">Dane użytkownika</a></h2>
</html>

<input type="submit" onclick="alert('Jakub Ludwiszewski Grupa Z706 7715')" value="Informacje o autorze"> 
     <form action="logout.php">
 <input type="submit" id="logout" value="logout" name="logout">
</form>
<?php
  
   /* 
		$query = "SELECT Name FROM Army";
		$result = mysqli_query($db, $query);

			while ($row=mysqli_fetch_array($result))	
	{
		echo $row[0] . ' ' ;
		echo '<br />';
	}
	mysqli_free_result($result);
	


?>