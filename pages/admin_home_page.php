<?php
  require_once('../db_connection/database.php');

  if (!isset($employeeID)){
    $employeeID = filter_input(INPUT_GET, 'employeeID', FILTER_VALIDATE_INT);
  }
?>

<!doctype html>

<html lang="en">
  <head>
    <meta charset="utf-8">

    <title>Artec</title>
    <link rel="shortcut icon" href="../images/logo_icon.ico">
    <link rel="stylesheet" href="../stylesheets/homeStyles.css">
    <meta name="description" content="Computer Software Company">
  </head>

  <body>
    <header>
      <img id="logo" src="../images/artec_logo.png" alt="Company Logo" width="100">
      <nav id="nav_menu">
        <ul>
          <li><a href="../pages/admin_home_page.php?<?php echo $employeeID ?>">Home</a></li>
          <li><a href="../pages/add_employee.php?<?php echo $employeeID ?>">Add Employee</a></li>
          <li><a href="../pages/deleteEmpForm.php">Delete Employee</a></li>

          <li><a href="../pages/timesheet.php?employeeID=<?php echo $employeeID ?>">Timesheet</a></li>
          <li><a href="../pages/requestPage.php?<?php echo $employeeID ?>">View Requests</a></li>
          <li><a href="../pages/admin_home_page.php?<?php echo $employeeID ?>">Employee Pay Info</a></li>
          <li><a href="../pages/admin_home_page.php?<?php echo $employeeID ?>"><img src="../images/profile_img.png" alt="Profile Image" width="30"></a></li>
          <li><a href="../pages/welcome_page.html">Log out</a></li>

        </ul>
      </nav>
    </header>

    <main>
      <h1 class="right">Work Hard.</h1>
      <h1 class="right">Make It Happen.</h1>
      <p>Our goal is to help you achieve your goals and making the journey there as simple as possible. Here you will be able to keep track of everything from timesheets to your W-2. Just let us know if you have any questions.</p>
    </main>

    <footer>
      <p>Copyright &copy; 2021 Artec, Inc. All rights reserved.</p>
    </footer>
  </body>
</html>
