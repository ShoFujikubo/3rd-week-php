<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname ="newdb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error){
    die("Connection failed:".$conn->connect_error);
    }

    echo "Connected successfully";


$sql = "INSERT INTO task_table(name,lastname,email,phone,country)

VALUES
('$_GET[name]','$_GET[lastname]','$_GET[email]','$_GET[phone]','$_GET[country]')";

      

if ($conn->query($sql) === TRUE) {
    echo "New data created successfully";
    }else{
    echo "Error creating table: ".$conn->error;
    }

$conn->close();

?>