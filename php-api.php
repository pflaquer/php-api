<?php

// Connect to the MySQL database
$conn = mysqli_connect('localhost', 'root', '', 'my_database');

// Get the list of users
$sql = 'SELECT * FROM users';
$result = mysqli_query($conn, $sql);

// Loop through the results and create an array of users
$users = [];
while ($row = mysqli_fetch_assoc($result)) {
  $users[] = $row;
}

// Return the array of users
echo json_encode($users);

?>
