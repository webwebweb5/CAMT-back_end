<?php

include('mail.php');

if (empty($_POST['first_name']) || empty($_POST['last_name']) || empty($_POST['email']) || empty($_POST['product'])){
echo "<p>You must enter your firstname lastname and email! Click your browser's Back button to return to the
information form.</p>";
} else {
    $DBConnect = mysqli_connect("localhost", "root", "");
    if ($DBConnect) {
    $DBName = "Customer";
    $SQLstring = "CREATE DATABASE IF NOT EXISTS $DBName";
    $QueryResult = mysqli_query($DBConnect, $SQLstring);
    if ($QueryResult){
        echo "<p>Product detail has been sent.</p>";}
    else{
        echo "<p>Unable to execute the query.</p>" . "<p>Error code " . mysqli_errno($DBConnect)
        . ": " . mysqli_error($DBConnect) . "</p>";}
        mysqli_select_db($DBConnect, $DBName);
        
    $TableName = "members";
    $SQLstring = "CREATE TABLE IF NOT EXISTS $TableName(countID SMALLINT NOT NULL
    AUTO_INCREMENT PRIMARY KEY,first_name VARCHAR(40), last_name VARCHAR(40), email VARCHAR(40), product VARCHAR(40))";
    $QueryResult = mysqli_query($DBConnect, $SQLstring);
    if ($QueryResult) {
        $LastName = stripslashes($_POST['last_name']);
        $FirstName = stripslashes($_POST['first_name']);
        $email = stripslashes($_POST['email']);
        $product = stripslashes($_POST['product']);
        $SQLstring = "INSERT INTO $TableName VALUES(NULL,'$FirstName','$LastName','$email','$product')";
        $QueryResult = mysqli_query($DBConnect, $SQLstring);
        if ($QueryResult)
        echo "<h1>Thank you for coming</h1>";
        else
        echo "<p>Unable to execute the query.</p>" . "<p>Error code " . mysqli_errno($DBConnect)
        . ": " . mysqli_error($DBConnect) . "</p>";
    }
    else{
    echo "<p>Unable to create the table.</p>" . "<p>Error code " . mysqli_errno($DBConnect) . ":
    " . mysqli_error($DBConnect) . "</p>";}
    } else {
        echo "<p>Unable to connect to the database server.</p>" . "<p>Error code " .
        mysqli_errno($DBConnect) . ": " . mysqli_error($DBConnect) . "</p>"; }
        mysqli_close($DBConnect);
        }

?>