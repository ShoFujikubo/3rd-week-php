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


$sql = "INSERT INTO task_table2(name,lastname,email,phone,country)

VALUES
('$_POST[name]','$_POST[lastname]','$_POST[email]','$_POST[phone]','$_POST[country]')";

      

if ($conn->query($sql) === TRUE) {
    echo "New data created successfully";
    }else{
    echo "Error creating table: ".$conn->error;
    }

$conn->close();

?>