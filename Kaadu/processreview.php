<?php
include_once 'config.php';
if(isset($_POST['save']))
{	 
	 $name = $_POST['name'];
	 $review = $_POST['review'];
	
	 $sql = "INSERT INTO review (user,review)
	 VALUES ('$name','$review')";
	 if (mysqli_query($link, $sql)) {
		echo "";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($link);
	 }
	 mysqli_close($link);
}
?>
<html>
	<head><link rel="stylesheet" href="navigation.css">
		<title>
</title>
</head>
<style>
	b{
		font-family:Bradley Hand ITC;
		font-size:39px;
	}
	input[type=submit] {  
  background-color: red;  
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
b{
  width: 100px;
  height: 100px;
  background-color: ;
  position: relative;
  animation-name: example;
  animation-duration: 4s;
  animation-iteration-count: infinite;
}

@keyframes example {
  0%   {background-color:; left:0px; top:0px;}
  50%  {background-color:; left:200px; top:0px;}
  100% {background-color:; left:0px; top:0px;}
}
	</style>
<body align="center" bgcolor="lightblue">
<header>
    <div class="container">
        <h2 class="logo">KAADU</h2>
        <nav>
            <ul>
            
            <li class="right"><a href="logout.php">LOGOUT</a></li>
            
            </ul>
        </nav>
    </div>
</header>

<br><br><br><br><br><br><br><br><br><br><br>
	<b>THANKS FOR YOUR RESPONSE! !!!!</b><br><br><br><br><br><br><br><br><br><br>
	<form method="POST" action="welcome.php">
	<input type="submit" name="done" value="GO BACK">
	</form>
</body>
</html>