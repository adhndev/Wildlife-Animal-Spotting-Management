<?php

$sid = val($_POST["Sid"]);
$fname = val($_POST["fname"]);
$lname = val($_POST["lname"]);
$dob = val($_POST["dob"]);
$gender = val($_POST["gender"]);
$job = val($_POST["job"]);
$salary = val($_POST["salary"]);
$city = val($_POST["city"]);
$bgp = val($_POST["bgp"]);
$mob = val($_POST["mob"]);
$remb = val($_POST["remark"]);


function val($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$servername = "localhost";
$username = "root";
$password = "";
$dbms = "bloodbank";

$conn = new mysqli($servername, $username, $password, $dbms);

if($conn->connect_error){
    die ("Unable To Connect To Our Server!" . $conn->connect_error);
}
$sql = "INSERT INTO staff (Sid, FName, LName,DOB, Gender, Job, Salary, CityId, BloodGp, PhoneNo, Remarks) VALUES 
    ('$sid','$fname','$lname','$dob','$gender','$job','$salary','$city','$bgp','$mob','$remb')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>