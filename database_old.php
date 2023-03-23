<?php

require_once '/protected/config.inc.php';

#create database connection
$con = new myslqi(DBHOST, DBUSER, DBPASS, DBNAME);
if($con-> connect_error) {
  die("Connection failed: " . $con->connection_error);
}

#querying function that returns record from database
function executeSelectQuery($con, $sql) {
  $sql = "SELECT * FROM tblUser";
  $result = $con->query($sql);

  if ($result->numb_rows > 0) {
    while($row = $result->fetch_assoc()) {
      echo "ID: " . $row['id'] . " - Email: " . $row['email'] . " - Name: " . $row['firstName'] . " " . $row['lastName'] . " - Password: " . $row['password'] . " - Salary: " . $row['salary'] . " - SSN: " . $row['SSN'];
    } 
  } else {
    echo "No results found.";
  }
}

#insert, update, delete new records
function executeQuery($con, $sql) {
  #insert data into database
  $sql = "INSERT INTO tblUser(id, email, password, firstName, lastName, address, phone, salary, SSN) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

  if($con->query($sql) === TRUE) {
    echo "New record added successfully!";
  } else {
    echo "Error adding new record" . $con->error;
  }

  #delete data from table
  $sql = "DELETE FROM tblUser WHERE id=?";
  if($con->query($sql) === TRUE) {
    echo "Record removed successfully!";
  } else {
    echo "Error deleting record: " . $con->error;
  }

  #update data from table
  $sql = "UPDATE tblUser SET lastName=? WHERE id=?";
  if($con->query($sql) === TRUE) {
    echo "Record updated successfully!";
  } else {
    echo "Error updating record: " . $con->error;
  }
}

$con->close();
?>