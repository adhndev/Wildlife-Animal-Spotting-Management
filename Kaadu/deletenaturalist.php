<?php

session_start();
 

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: loginadmin.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="navigation.css">
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ 
            background: orange;
            font: 14px sans-serif; text-align: center; }
    </style>
</head>
<style>
.navbar-fixed-top{
    background:#ccff00;
}
input[type=text], input[type=number],input[type=date],textarea {  
  width: 17%;  
  padding: 10px;  
  margin: 6px 0 22px 0;  
  display: inline-block;  
  border: none;  
  background: #f1f1f1;  
}  
input[type=text]:focus, input[type=number]:focus {  
  background-color: yellow;  
  outline: none;  
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
body {
  
  counter-reset: my-sec-counter;
}

i::before {
  
  counter-increment: my-sec-counter;
  content:counter(my-sec-counter) ".";
}
table {
border-collapse: collapse;
width: 100%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: left;
}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>
<body>
<header>
    <div class="container">
        <h2 class="logo">KAADU</h2>
        <nav>
            <ul>
            <li class="left"><a href="viewnaturalist.php">Go Back</a></li>
            <li class="right"><a href="logoutadmin.php">LOGOUT</a></li>
            </ul>
        </nav>
    </div>
</header>
    <div class="page-header">
    <h1>Hi <b><?php echo htmlspecialchars($_SESSION["username"]) ?></b>, Enter the username you want to delete.</h1>
    </div>
  
    <div class="container" align="center">
        <div class="tab-content">
            <div class="tab-pane fade in active" id="welcome">
            <br><br>
            <div class="text">
            
            <table>
            <tr>
<th>   Sl No.  </th>
<th>  &nbsp;&nbsp;&nbsp; Username &nbsp;&nbsp;&nbsp;&nbsp;  </th>
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "kaadu");
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT username FROM naturalist";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {
echo "<tr><td><i></i></td><td>&nbsp;&nbsp;&nbsp;&nbsp;"
. $row["username"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
            </div>
                    
                   
        </div>
        </div>
        
    </div>
    <br><br>
    <div><form method="post" action="deletenaturalistprocess.php">Username: <input type="text" name="name" placeholder="Enter the username you want to delete"><br><br>
    <input type="submit" name="save"></form></div>
    </body>
</html>