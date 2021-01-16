<?php

session_start();
 

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: loginnaturalist.php");
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
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<style>
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
                    <li class="right"><a href="logoutnaturalist.php">LOGOUT</a></li>
                  <li class="right"><a href="reset-passwordnaturalist.php">Reset your Password</a></li>
                </ul>
              </nav>
            </div>
          </header>
    <div class="page-header">
    <h1>Hi <b><?php echo htmlspecialchars($_SESSION["username"]) ?></b>,This is the recent sightings in Kabini with their locations.</h1>
    </div>
    <div>
    <div class="container" align="center">
        <div class="tab-content">
            <div class="tab-pane fade in active" id="welcome">
            <br><br>
            <div class="text">
            
            <table>
<tr>
<th>   Sl No.  </th>
<th>   Species   </th>
<th>   Count   </th>
<th>   Location  </th>
<th>   Date Seen   </th>
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "kaadu");
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT SPECIES, COUNT,LOCATION, DATE FROM animalview";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {
echo "<tr><td><i></i></td><td>" . $row["SPECIES"] . "</td><td>"
. $row["COUNT"]. "</td><td>" . $row["LOCATION"] . "</td><td>" . $row["DATE"] . "</td></tr>";
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
    <br><div><h1>Add Today's Sighting :</h1></div>   
    
    <p>
     <br>  
    <h2><a href="addsighting.php" class="btn btn-danger">ADD HERE</a></h2><br><br><br><br><br>
    </p>
</body>
</html>