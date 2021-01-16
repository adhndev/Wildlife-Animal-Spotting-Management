<!DOCTYPE html>
<html>
  <head><link rel="stylesheet" href="navigation.css"></head>
<meta name="viewport" content="width=device-width, initial-scale=1">  
<style>  
body{  
    
  background-color: coffee;  
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
                    <li class="left"><a href="welcome.php">SIGHTINGS</a></li>
                    <li class="right"><a href="logout.php">LOGOUT</a></li>
                    <li class="right"><a href="review.php">SHARE YOUR EXPERIENCE</a></li>
                </ul>
              </nav>
            </div>
          </header>
  <div class="container">
  <center><h1>BOOK TO SWING INTO THE JUNGLE</h1></center>
	<form method="post" action="processbook.php" align="center">
		Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                
		<input type="text" name="name" align="center" placeholder="Enter Your Name">
		<br>
		Number of People:
		<input type="number" name="count" placeholder="Enter the number of people">
		<br>
		Room:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<label>
			<select name="room">
				<option value="">Select the type of room</option>
				<option value="Maharaja Bunglow">Maharaja Bunglow</option>
				<option value="Tented Cottage">Tented Cottage</option>
				<option value="Cottage Room">Cottage Room</option>
				<option value="Dormitory">Dormitory</option>
</select>
		<br>
		Number of Nights:
		<input type="number" name="nights" placeholder="">
        <br>
        Date:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="date" name="date">
		<br><br>
		<input type="submit" name="save" value="BOOK NOW !!!"><br><br><br><br><br>
	</form>
</div>
  </body>
</html>