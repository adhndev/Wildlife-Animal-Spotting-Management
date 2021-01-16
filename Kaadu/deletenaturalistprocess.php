<?php
include_once 'config.php';
if(isset($_POST['save']))
{	 
	 $name = $_POST['name'];
	
	 $sql = "DELETE FROM naturalist where username='$name'";
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
<body align="center" bgcolor=lightblue>
	<header>
<div class="container">
        <h2 class="logo">KAADU</h2>
        <nav>
            <ul>
            <li class="left"><a href="welcomeadmin.php">Go Back</a></li>
            <li class="right"><a href="logoutadmin.php">LOGOUT</a></li>
            </ul>
        </nav>
    </div>
</header>
<br><br><br><br><br><br><br><br><br><br><br>
	<b>NATURALIST ACCOUNT DELETED SUCCESSFULLY!!!!</b><br><br><br><br><br><br><br><br><br><br>
	<form method="POST" action="deletenaturalist.php">
	<input type="submit" name="delete" value="DELETE ANOTHER USER">
	</form>
</body>
</html>