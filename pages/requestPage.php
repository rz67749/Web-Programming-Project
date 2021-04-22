<?php  
  if (!isset($employeeID)){
    $employeeID = filter_input(INPUT_GET, 'employeeID', FILTER_VALIDATE_INT); // Gets the employeeID from previous pages
  }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>

  <meta charset="utf-8">
  <title>Request Page</title>
  <link rel="shortcut icon" href="../images/logo_icon.ico">
  <link rel="stylesheet" href="../stylesheets/requestPagecss.css">
  <meta name="description" content="Computer Software Company">
  <script src="../javascript/timesheetData.js"></script>
</head>

<body>
  <header>
      <a href="../pages/user_home_page.php"><img id="logo" src="../images/artec_logo.png" alt="Company Logo" width="100"></a>

      <nav id="nav_menu">
        <ul>
          <li><a href="../pages/user_home_page.php?employeeID=<?php echo $employeeID ?>">Home</a></li>
          <li><a href="../pages/timesheet.php?employeeID=<?php echo $employeeID ?>">Timesheet</a></li>
          <li><a href="../pages/requestPage.php?employeeID=<?php echo $employeeID ?>" class="current">Requests</a></li>
          <li><a href="../pages/payInfo.php?employeeID=<?php echo $employeeID ?>">Pay Info</a></li>
		      <li><a href="../pages/employee_directory.php?employeeID=<?php echo $employeeID ?>">Employee Directory</a></li>
          <li><a href="../pages/personal_info_page.php?employeeID=<?php echo $employeeID ?>"><img src="../images/profile_img.png" alt="Profile Image" width="30"></a></li>
          <li><a href="../pages/welcome_page.html">Log out</a></li>
        </ul>
      </nav>
  </header>

  <h1>
    Employee Request Page
  </h1>
  <br>
  <br>
  <form name="subject" method="post">
    <p>Subject:</p>

    <textarea id="subject" name="request" rows="2" cols="20">
        </textarea>
    <br> <br>
    <br> <br>

    <p>
      Submit your request below :
    </p>
    <textarea id="request" name="request" rows="4" cols="50">
      </textarea>
    <br><br>
    <input type="submit" value="Submit request">
  </form>

  <footer>
      <p>Copyright &copy; 2021 Artec, Inc. All rights reserved.</p>
  </footer>

</body>

</html>