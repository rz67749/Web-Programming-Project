<!doctype html>

<html lang="en">
  <head>
    <meta charset="utf-8">

    <title>Artec</title>
    <link rel="shortcut icon" href="../images/logo_icon.ico">
    <link rel="stylesheet" href="../stylesheets/personalInfoStyles.css">
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
          <li><a href="../pages/requestPage.php?employeeID=<?php echo $employeeID ?>">Requests</a></li>
          <li><a href="../pages/user_home_page.php?employeeID=<?php echo $employeeID ?>">Pay Info</a></li>
		      <li><a href="../pages/employee_directory.php?employeeID=<?php echo $employeeID ?>">Employee Directory</a></li>
          <li><a href="../pages/personal_info_page.php?employeeID=<?php echo $employeeID ?>"><img src="../images/profile_img.png" alt="Profile Image" width="30"></a></li>
          <li><a href="../pages/welcome_page.html">Log out</a></li>
        </ul>
      </nav>
    </header>

    <main>
      <div id="title">
        <h1>Personal Information</h1>
      </div>

      <div class="info">
        <h2>Employee:</h1>
        <h3>Title:</h3>
        <h3>Employee ID:</h3>
      </div>

      <form>
        <div class="info">
          <h2>Change Basic Information</h2>
            <label for ="username">Username:</label>
            <input type="text" name="username" id="username"><span id ="unerror"></span><br>

            <label for="email">E-Mail:</label>
            <input type="email" id ="email" name="email"><span id ="emailerror"></span><br>
            
            <label for="phone">Phone Number:</label>
            <input type="tel" id="phone" name="phone"><br>

            <label for="st1">Street Address 1:</label>
            <input type="text" id="st1" name="st1"><br>

            <label for="st2">Street Address 2:</label>
            <input type="text" id="st2" name="st2"><br>

            <label for="city">City:</label>
            <input type="text" id="city" name="city"><br>

            <label for="state">State:</label>
            <input type="text" id="state" name="state"><br>

            <label for="zip">Zip Code:</label>
            <input type="text" id="zip" name="zip"><br>
        </div>

        <div class="info">
          <h2>Change Security Questions</h2>
            <label for="security-q1">Security Question 1: </label>
            <select name="security-q1" id="security-q1">
              <option value="What elementary school did you attend?">
                What elementary school did you attend?
              </option>
              <option value="In what town or city was your first full time job?">
                In what town or city was your first full time job?
              </option>
              <option value="In what town or city did you meet your spouse or partner?">
                In what town or city did you meet your spouse or partner?
              </option>
              <option value="What was your childhood nickname?">
                What was your childhood nickname?
              </option>
              <option value="What is your mother's middle name?">
                What is your mother's middle name?
              </option>
            </select><br>
            <label for="security-q1-answer">Answer: </label>
            <input type="text" id="security-q1-answer" name="security-q1-answer"><span id ="sec-q1-error"></span><br>

            <label for="security-q2">Security Question 2: </label>
            <select name="security-q2" id="security-q2">
              <option value="In what town or city did your parents meet?">
                In what town or city did your parents meet?
              </option>
              <option value="What was the name of your first pet?">
                What was the name of your first pet?
              </option>
              <option value="What is your favorite movie?">
                What is your favorite movie?
              </option>
              <option value="What is the name of your favorite childhood friend?">
                What is the name of your favorite childhood friend?
              </option>
              <option value="What city or town was your first job in?">
                What city or town was your first job in?
              </option>
            </select><br>
            <label for="security-q2-answer">Answer: </label>
            <input type="text" id="security-q2-answer" name="security-q2-answer"><span id ="sec-q2-error"></span><br>
        </div>

        <div class="info">
          <h2>Change Password</h2>
            <label for ="password">Password:</label>
            <input type="password" name="password" id="pw"><span id ="pwerror"></span><br>
            <label for ="password2">Confirm Password:</label>
            <input type="password" name="password2" id ="pw2"><span id ="pw2error"></span><br>

            <input id="save-button" type="submit" id="submit" value="Save All Changes">
        </div>
      </form>
    </main>


    <footer>
      <p>Copyright &copy; 2021 Artec, Inc. All rights reserved.</p>
    </footer>
  </body>
</html>
