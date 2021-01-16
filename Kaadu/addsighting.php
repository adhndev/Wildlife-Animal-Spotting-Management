<!DOCTYPE html>
<html><head><link rel="stylesheet" href="navigation.css"></head>
<meta name="viewport" content="width=device-width, initial-scale=1">  
<style>  
body{   
  background-color: pink;  
} 
center{
	font-family:chiller;
	font-size:30px
}  
select{  
  width: 16%;  
  padding: 10px;  
  margin: 6px 0 22px 0;  
  display: inline-block;  
  border: none;  
  background: #f1f1f1;  
}

input[type=text], input[type=number],input[type=date],textarea {  
  width: 15%;  
  padding: 10px;  
  margin: 6px 0 22px 0;  
  display: inline-block;  
  border: none;  
  background: #f1f1f1;  
}  
input[type=text]:focus, input[type=number]:focus {  
  background-color: orange;  
  outline: none;  
}  
 div {  
            padding: 10px 0;  
         }  
hr {  
  border: 1px solid #f1f1f1;  
  margin-bottom: 25px;  
}  
input[type=submit] {  
  background-color: #4CAF50;  
  color: white;  
  padding: 16px 20px;  
  margin: 8px 0;  
  border: none;  
  cursor: pointer;  
  width: 20%;  
  opacity: 0.9;  
}  
input[type=submit]:hover {  
  opacity: 50;  
}  
</style>  
  <body>
  <header>
<div class="container">
        <h2 class="logo">KAADU</h2>
        <nav>
            <ul>
            <li class="left"><a href="welcomenat.php">Go Back</a></li>
            <li class="right"><a href="logoutnaturalist.php">LOGOUT</a></li>
            </ul>
        </nav>
    </div>
</header>
  <div class="container">
  <center><h1>ADD Sightings</h1></center>
	<form method="post" action="processsighting.php" align="center">
		Species Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                
		<input type="text" name="species" align="center" placeholder="Enter Your Species Name">
		<br>
		Number:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="number" name="count" placeholder="How many were sighted?">
		<br>
		Location:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                
		<input type="text" name="location" align="center" placeholder="Enter the Location Spotted">
		<br>
        Date:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="date" name="date">
		<br><br>
		<input type="submit" name="save" value="ADD SIGHTING"><br><br><br><br><br>
	</form>
</div>
  </body>
</html>