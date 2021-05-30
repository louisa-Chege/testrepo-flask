<?php
$FirstName = $_POST['FirstName'];
$LastName = $_POST['LastName'];
$Email = $_POST['Email'];
$Message = $_POST['Message'];

//Database connection
$conn = new mysqli('localhost', 'root', '', 'contact_database');
if($conn->connect_error){
    die('Connection failed : '.$conn->connect_error);
}else{
    $stmt =$conn->prepare("insert into contact_database(FirstName, LastName, Email, Message)values(?,?,?,?)");
    $stmt->bind_param("ssss", $FirstName, $LastName, $Email, $Message);
    $stmt->execute();
    echo "Successful connection...";
    $stmt->close();
    $conn->close();
}
?>