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
textarea {  
  width: 20%;
  rows: 20;
  padding: 10px;  
  margin: 6px 0 22px 0;  
  display: inline-block;  
  border: none;  
  background: #f1f1f1;  
}  
input[class=exn] {  
  width: 15%;  
  padding: 10px;  
  margin: 6px 0 22px 0;  
  display: inline-block;  
  border: none;  
  background: #f1f1f1;  
}  
input[type=text]:focus {  
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
            <li class="left"><a href="booking.php">SWING IN TO THE JUNGLE</a></li>
            <li class="right"><a href="logout.php">LOGOUT</a></li>
            <li class="right"><a href="reset-password.php">Reset your Password</a></li>
            </ul>
        </nav>
    </div>
</header>

  <div class="container">
  <center><h1>SHARE YOUR EXPERINCE WITH US</h1></center>
	<form method="post" action="processreview.php" align="center">
		Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                
		<input type="text" name="name" align="center" placeholder="Enter Your Name" class="exn">
		<br>
        Review:<br>
		<textarea type="text" name="review" placeholder="Share your experience here" class="exp"></textarea>
		<br><br>
		<input type="submit" name="save" value="SUBMIT"><br><br><br><br><br>
	</form>
</div>
  </body>
</html>