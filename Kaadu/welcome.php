<?php

session_start();
 

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <link rel="stylesheet" href="navigation.css">
</head>
<style>
body {
  text-align:center;
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
                <li class="left"><a href="review.php">SHARE YOUR EXPERIENCE</a></li>
                    <li class="right"><a href="logout.php">LOGOUT</a></li>
                  <li class="right"><a href="reset-password.php">Reset your Password</a></li>
                </ul>
              </nav>
            </div>
          </header>
    <div class="page-header">
    <h1>Hi <b><?php echo htmlspecialchars($_SESSION["username"]) ?></b>,This is today's sighting in Kabini.</h1>
    </div>
    <div>
    
    <div class="container" align="center">
        <div class="tab-content">
            <div class="tab-pane fade in active" id="welcome">
            <hr><br><br>
            <div class="text">
            
            <table>
<tr>
<th>   Sl No.  </th>
<th>   Species   </th>
<th>   Count   </th>
<th>   Date Seen   </th>
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "kaadu");
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT SPECIES, COUNT, DATE FROM animalview";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {
echo "<tr><td><i></i></td><td>" . $row["SPECIES"] . "</td><td>"
. $row["COUNT"]. "</td><td>" . $row["DATE"] . "</td></tr>";
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
    <br><br><div><h1>Do you want to experience the jungle???</h1></div>   
    
    <p>
     <br><br>   
    <h2><a href="booking.php" class="btn btn-danger">BOOK NOW!!!!</a>
    </p>
</body>
</html>