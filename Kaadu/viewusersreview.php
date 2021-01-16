<?php

session_start();
 

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: loginadmin.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head><link rel="stylesheet" href="navigation.css">
    <meta charset="UTF-8">
    <title>Reviews</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<style>
table {
border-collapse: collapse;
width: 100%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: left;}
body {
  
  counter-reset: my-sec-counter;
}

i::before {
  
  counter-increment: my-sec-counter;
  content:counter(my-sec-counter) ".";
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
            <li class="left"><a href="viewnaturalist.php">Naturalist</a></li>
            <li class="left"><a href="viewusers.php">Tourist</a></li>
            <li class="left"><a href="welcomeadmin.php">Sightings</a></li>
            <li class="left"><a href="viewbookings.php">Bookings</a></li>
            <li class="right"><a href="logoutadmin.php">LOGOUT</a></li>
            
            </ul>
        </nav>
    </div>
</header>
    <div class="page-header">
    <h1>Hi <b><?php echo htmlspecialchars($_SESSION["username"]) ?></b>,These are the tourist reviews.</h1>
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
<th>   &nbsp;&nbsp;&nbsp;Reviews  </th>
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "kaadu");
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT user,review FROM review";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {
echo "<tr><td><i></i></td><td>&nbsp;&nbsp;&nbsp;&nbsp;"
. $row["user"]. "</td><td>&nbsp;&nbsp;&nbsp;" . $row["review"] . "</td></tr>";
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
    <br><br><div></div>   
    
    <p>
     <br><br>   
    <h2><a href="welcomeadmin.php" class="btn btn-warning">GO back</a>
    </p>
</body>
</html>