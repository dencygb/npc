<?php
// Report all errors
error_reporting(E_ALL);
$servername = "localhost";
$username = "root";
$password = "test1234";
$dbname = "npc";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  //die("Connection failed: " . $conn->connect_error);
  //return json_encode(['status'=>false]);
  echo json_encode(['status'=>false]);
}
//print_r($_POST);die;
if($_POST['action']=="add-pet"){
    // prepare and bind
    $stmt = $conn->prepare("INSERT INTO pet(name, age, breed) VALUES (?, ?, ?)");
    $stmt->bind_param("sis", $name, $age, $breed);

    // set parameters and execute
    $name = $_POST['name'];
    $age = $_POST['age'];
    $breed = $_POST['breed'];
    $stmt->execute();
    //echo "New records created successfully";
    $stmt->close();
    $conn->close();
    echo json_encode(['status'=>true]);
    //return json_encode(['status'=>true]);
    
}


?>
