<?php
require_once('database.php');

// create a variable
$username = filter_input(INPUT_POST, 'username');
$password = filter_input(INPUT_POST, 'password');

//Execute the query
$query = "SELECT * FROM HR_Tables.Employee
          WHERE username=:username and password=:password";
$statement = $conn->prepare($query);
$statement->execute([
    'username' => $username,
    'password' => $password
]);
$returned_user = $statement->fetch();
$statement->closeCursor();

if($returned_user == NULL){ //if provided username and password is wrong
    //Display the login page with an error message
    include('../pages/login_error.php');
} else{
    //Display the logged in homepage
    $employeeID = $returned_user['employeeID'];
    include('../pages/user_home_page.php');
}

?>
