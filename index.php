<html>
<head>
  <title>CPSC 332 - 01 - Database Application (Project)</title>
</head>
<style>
  body {
    background-color: lightgreen;
    text-align: center;
  }
  table, th, td {
    margin-left: auto;
    margin-right: auto;
    border: 1px solid black;
  }
  th {
    text-align: left;
  }
</style>
<body>
  <img src="https://fontmeme.com/permalink/200504/18e8d7854253cf32142d342bfa460462.png" alt="be-vietnam-font" border="0">
  <br></br>

<?php
  $servername = "localhost";
  $username = "cs332s40";
  $password = "iBai9bai";
  $dbname = "cs332s40";

  // Create a connection between MySQL and Web Browser
  $connect = mysql_connect($servername, $username, $password, $dbname);

  // Check the connection
  if (!$connect) {
    die("Connection failed");
  }

  // Create a connection between created database and Web Browser
  $dbconnect = mysql_select_db($dbname, $connect);

  // Check the connection
  if (!$dbconnect) {
    die("Connected failed");
  }
?>

  <form action="" method="post">
    <label><b>Access to MySQL Account</b>
      <input type="checkbox" name="access" value="accessed" disabled checked></input>
    </label></br>
    <label><b>Connect to 'cs332s40' database</b>
      <input type="checkbox" name="connect" value="connected" disabled checked></input>
    </label>
  </form>
  </br>

  <img src="https://img.icons8.com/dotty/50/000000/database-export.png"/>
  <img src="https://fontmeme.com/permalink/200504/c0140ea63936dcd837325a93dcab620f.png" alt="tomorrow-font" border="0">
  <img src="https://img.icons8.com/dotty/50/000000/database-export.png"/>

  <br></br>
  <form action="index.php" method="post">
    <select name="showTables">
      <option value="">Please Select One</option>
      <option value="DEPARTMENT"
        <?php if ($_POST["showTables"] == "DEPARTMENT") echo 'selected="selected"'; ?>
        >DEPARTMENT</option>
      <option value="PROFESSOR"
        <?php if ($_POST["showTables"] == "PROFESSOR") echo 'selected="selected"'; ?>
        >PROFESSOR</option>
      <option value="STUDENT"
        <?php if ($_POST["showTables"] == "STUDENT") echo 'selected="selected"'; ?>
        >STUDENT</option>
      <option value="COURSE"
        <?php if ($_POST["showTables"] == "COURSE") echo 'selected="selected"'; ?>
        >COURSE</option>
      <option value="SECTION"
        <?php if ($_POST["showTables"] == "SECTION") echo 'selected="selected"'; ?>
        >SECTION</option>
      <option value="ENROLLMENT"
        <?php if ($_POST["showTables"] == "ENROLLMENT") echo 'selected="selected"'; ?>
        >ENROLLMENT</option>
      <option value="PROFESSOR_DEGREES"
        <?php if ($_POST["showTables"] == "PROFESSOR_DEGREES") echo 'selected="selected"'; ?>
        >PROFESSOR_DEGREES</option>
      <option value="COURSE_PREREQUISITE"
        <?php if ($_POST["showTables"] == "COURSE_PREREQUISITE") echo 'selected="selected"'; ?>
        >COURSE_PREREQUISITE</option>
    </select> <input type="image" src="https://img.icons8.com/ios/14/000000/search--v1.png" value="ABC" alt="Submit">
  </form>

<?php
  // Create a query
  if ($_POST["showTables"] == "STUDENT") {
    $query = "SELECT * FROM STUDENT";
    $result = mysql_query($query, $connect);

    echo "<table>";
    echo "<tr>";
    echo "<th>CWID</th>";
    echo "<th>DNO</th>";
    echo "<th>First Name</th>";
    echo "<th>Last Name</th>";
    echo "<th>Address</th>";
    echo "<th>Telephone</th>";
    echo "</tr>";

    // Show the result of the query
    for ($i = 0; $i < mysql_numrows($result); $i++) {
      echo "<tr>";
      echo "<td>" . mysql_result($result, $i, "CWID") . "</td>";
      echo "<td>" . mysql_result($result, $i, "DNO") . "</td>";
      echo "<td>" . mysql_result($result, $i, "FName") . "</td>";
      echo "<td>" . mysql_result($result, $i, "LName") . "</td>";
      echo "<td>" . mysql_result($result, $i, "Address") . "</td>";
      echo "<td>" . mysql_result($result, $i, "Telephone") . "</td>";
      echo "</tr>";
    }
    echo "</table>";
  } else if ($_POST["showTables"] == "PROFESSOR") {
    $query = "SELECT * FROM PROFESSOR";
    $result = mysql_query($query, $connect);

    echo "<table>";
    echo "<tr>";
    echo "<th>SSN</th>";
    echo "<th>DNO</th>";
    echo "<th>Name</th>";
    echo "<th>Street</th>";
    echo "<th>City</th>";
    echo "<th>State</th>";
    echo "<th>Zipcode</th>";
    echo "<th>Areacode</th>";
    echo "<th>Digits</th>";
    echo "<th>Sex</th>";
    echo "<th>Title</th>";
    echo "<th>Salary</th>";
    echo "<th>Degrees</th>";
    echo "</tr>";

    // Show the result of the query
    for ($i = 0; $i < mysql_numrows($result); $i++) {
      echo "<tr>";
      echo "<td>" . mysql_result($result, $i, "SSN") . "</td>";
      echo "<td>" . mysql_result($result, $i, "DNO") . "</td>";
      echo "<td>" . mysql_result($result, $i, "Name") . "</td>";
      echo "<td>" . mysql_result($result, $i, "SAddress") . "</td>";
      echo "<td>" . mysql_result($result, $i, "City") . "</td>";
      echo "<td>" . mysql_result($result, $i, "State") . "</td>";
      echo "<td>" . mysql_result($result, $i, "Zipcode") . "</td>";
      echo "<td>" . mysql_result($result, $i, "Areacode") . "</td>";
      echo "<td>" . mysql_result($result, $i, "Digits") . "</td>";
      echo "<td>" . mysql_result($result, $i, "Sex") . "</td>";
      echo "<td>" . mysql_result($result, $i, "Title") . "</td>";
      echo "<td>" . mysql_result($result, $i, "Salary") . "</td>";
      echo "<td>" . mysql_result($result, $i, "Degrees") . "</td>";
      echo "</tr>";
    }
    echo "</table>";
  } else if ($_POST["showTables"] == "COURSE") {
    $query = "SELECT * FROM COURSE";
    $result = mysql_query($query, $connect);

    echo "<table>";
    echo "<tr>";
    echo "<th>Course No.</th>";
    echo "<th>DNO</th>";
    echo "<th>Title</th>";
    echo "<th>Textbook</th>";
    echo "<th>Units</th>";
    echo "</tr>";

    // Show the result of the query
    for ($i = 0; $i < mysql_numrows($result); $i++) {
      echo "<tr>";
      echo "<td>" . mysql_result($result, $i, "CNumber") . "</td>";
      echo "<td>" . mysql_result($result, $i, "DNO") . "</td>";
      echo "<td>" . mysql_result($result, $i, "Title") . "</td>";
      echo "<td>" . mysql_result($result, $i, "Textbook") . "</td>";
      echo "<td>" . mysql_result($result, $i, "Units") . "</td>";
      echo "</tr>";
    }
    echo "</table>";
  } else if ($_POST["showTables"] == "SECTION") {
    $query = "SELECT * FROM SECTION";
    $result = mysql_query($query, $connect);

    echo "<table>";
    echo "<tr>";
    echo "<th>Section No.</th>";
    echo "<th>PSSN</th>";
    echo "<th>DNO</th>";
    echo "<th>CNO</th>";
    echo "<th>Classroom</th>";
    echo "<th>Seats</th>";
    echo "<th>Meeting Days</th>";
    echo "<th>Beginning Time</th>";
    echo "<th>Ending Time</th>";
    echo "</tr>";

    // Show the result of the query
    for ($i = 0; $i < mysql_numrows($result); $i++) {
      echo "<tr>";
      echo "<td>" . mysql_result($result, $i, "SNumber") . "</td>";
      echo "<td>" . mysql_result($result, $i, "PSSN") . "</td>";
      echo "<td>" . mysql_result($result, $i, "DNO") . "</td>";
      echo "<td>" . mysql_result($result, $i, "CNO") . "</td>";
      echo "<td>" . mysql_result($result, $i, "Classroom") . "</td>";
      echo "<td>" . mysql_result($result, $i, "Seats") . "</td>";
      echo "<td>" . mysql_result($result, $i, "MeetingDays") . "</td>";
      echo "<td>" . mysql_result($result, $i, "BeginningTime") . "</td>";
      echo "<td>" . mysql_result($result, $i, "EndingTime") . "</td>";
      echo "</tr>";
    }
    echo "</table>";
  } else if ($_POST["showTables"] == "DEPARTMENT") {
    $query = "SELECT * FROM DEPARTMENT";
    $result = mysql_query($query, $connect);

    echo "<table>";
    echo "<tr>";
    echo "<th>Department No.</th>";
    echo "<th>Name</th>";
    echo "<th>Telephone</th>";
    echo "<th>Location</th>";
    echo "<th>Chairman - SSN</th>";
    echo "</tr>";

    // Show the result of the query
    for ($i = 0; $i < mysql_numrows($result); $i++) {
      echo "<tr>";
      echo "<td>" . mysql_result($result, $i, "DNumber") . "</td>";
      echo "<td>" . mysql_result($result, $i, "Name") . "</td>";
      echo "<td>" . mysql_result($result, $i, "Telephone") . "</td>";
      echo "<td>" . mysql_result($result, $i, "Location") . "</td>";
      echo "<td>" . mysql_result($result, $i, "ChairmanSSN") . "</td>";
      echo "</tr>";
    }
    echo "</table>";
  } else if ($_POST["showTables"] == "ENROLLMENT") {
    $query = "SELECT * FROM ENROLLMENT";
    $result = mysql_query($query, $connect);

    echo "<table>";
    echo "<tr>";
    echo "<th>PSSN</th>";
    echo "<th>SCWID</th>";
    echo "<th>DNO</th>";
    echo "<th>CNO</th>";
    echo "<th>SNO</th>";
    echo "<th>Grade</th>";
    echo "</tr>";

    // Show the result of the query
    for ($i = 0; $i < mysql_numrows($result); $i++) {
      echo "<tr>";
      echo "<td>" . mysql_result($result, $i, "PSSN") . "</td>";
      echo "<td>" . mysql_result($result, $i, "SCWID") . "</td>";
      echo "<td>" . mysql_result($result, $i, "DNO") . "</td>";
      echo "<td>" . mysql_result($result, $i, "CNO") . "</td>";
      echo "<td>" . mysql_result($result, $i, "SNO") . "</td>";
      echo "<td>" . mysql_result($result, $i, "Grade") . "</td>";
      echo "</tr>";
    }
    echo "</table>";
  } else if ($_POST["showTables"] == "PROFESSOR_DEGREES") {
    $query = "SELECT * FROM PROFESSOR_DEGREES";
    $result = mysql_query($query, $connect);

    echo "<table>";
    echo "<tr>";
    echo "<th>PSSN</th>";
    echo "<th>Degrees</th>";
    echo "</tr>";

    // Show the result of the query
    for ($i = 0; $i < mysql_numrows($result); $i++) {
      echo "<tr>";
      echo "<td>" . mysql_result($result, $i, "PSSN") . "</td>";
      echo "<td>" . mysql_result($result, $i, "Degrees") . "</td>";
      echo "</tr>";
    }
    echo "</table>";
  } else if ($_POST["showTables"] == "COURSE_PREREQUISITE") {
    $query = "SELECT * FROM COURSE_PREREQUISITE";
    $result = mysql_query($query, $connect);

    echo "<table>";
    echo "<tr>";
    echo "<th>CNO</th>";
    echo "<th>PreCourse</th>";
    echo "</tr>";

    // Show the result of the query
    for ($i = 0; $i < mysql_numrows($result); $i++) {
      echo "<tr>";
      echo "<td>" . mysql_result($result, $i, "CNO") . "</td>";
      echo "<td>" . mysql_result($result, $i, "PreCourse") . "</td>";
      echo "</tr>";
    }
    echo "</table>";
  }
?>

  <br>
  <img src="https://img.icons8.com/dotty/50/000000/search-database.png"/>
  <img src="https://fontmeme.com/permalink/200504/c13fbf2defe714909ff4f5b9a597ceec.png" alt="tomorrow-font" border="0">
  <img src="https://img.icons8.com/dotty/50/000000/search-database.png"/>

  <form action="index.php" method="post">
    <p><b> You are a ... </b>
      <input type="radio" name="whoareyou" value="professor"
        <?php if ($_POST["whoareyou"] == "professor") echo 'checked="checked"'; ?>>Professor</input>
      <input type="radio" name="whoareyou" value="student"
        <?php if ($_POST["whoareyou"] == "student") echo 'checked="checked"'; ?>>Student</input>
      &nbsp; <input type="image" src="https://img.icons8.com/ios/17/000000/circled-chevron-right.png" value="Next">
    </p>
  </form>

<?php
  // Show queries related to 'Professor' field
  if ($_POST["whoareyou"] == "professor") {
?>
    <!-- Design the first query -->
    <p><b>a. Given the social security number of a professor, list the titles, classrooms, meeting days and time of his/her classes.</b></p>
    <form action="index.php" method="get">
      SSN: <input type="text" name="ssn" placeholder="Enter a social security number" size="22">
      <input type="image" src="https://img.icons8.com/ios/14/000000/search--v1.png" alt="Submit">
    </form>

    <!-- Design the second query -->
    <p><b>b. Given a course number and a section number, count how many students get each distinct grade.</b></p>
    <form action="index.php" method="get">
      Course No.: <input type="text" name="cno1" placeholder="Enter a course number" size="16"> <br></br>
      Section No.: <input type="text" name="sno" placeholder="Enter a section number" size="16"> <br></br>
      <input type="image" src="https://img.icons8.com/ios/14/000000/search--v1.png" alt="Submit">
    </form>

<?php
  // Show queries related to 'Student' field
  } else if ($_POST["whoareyou"] == "student") {
?>
  <!-- Design the third query -->
  <p><b>c. Given a course number, list the sections of the course, including the classrooms, the meeting days, time, and the number of students enrolled in each section.</b></p>
  <form action="index.php" method="get">
    Course No.: <input type="text" name="cno2" placeholder="Enter a course number" size="16">
    <input type="image" src="https://img.icons8.com/ios/14/000000/search--v1.png" alt="Submit">
  </form>

  <!-- Design the fourth query -->
  <p><b>d. Given the campus wide ID of a student, list all courses the student took and the grades.</b></p>
  <form action="index.php" method="get">
    CWID: <input type="text" name="cwid" placeholder="Enter a campus-wide identification" size="25">
    <input type="image" src="https://img.icons8.com/ios/14/000000/search--v1.png" alt="Submit">
  </form>
<?php
  }
?>

<!-- Create tables for queries -->
<?php
  // Create a table for Query 1
  if ($_GET["ssn"] != "") {
    echo "<b>Result:</b>";
    echo "<table>";
    echo "<tr>";
    echo "<th>Title</th>";
    echo "<th>Classroom</th>";
    echo "<th>Meeting Days</th>";
    echo "<th>Beginning Time</th>";
    echo "<th>Ending Time</th>";
    echo "</tr>";
  }
  // Create a first query
  $query1 = "SELECT COURSE.Title, Classroom, MeetingDays, BeginningTime, EndingTime
             FROM PROFESSOR, SECTION, COURSE
             WHERE CNumber = SECTION.CNO AND SSN = PSSN AND SSN=" . $_GET["ssn"];
  $result1 = mysql_query($query1, $connect);

  // Show the result of the first query
  for ($i = 0; $i < mysql_numrows($result1); $i++) {
    echo "<tr>";
    echo "<td>" . mysql_result($result1, $i, "COURSE.Title") . "</td>";
    echo "<td>" . mysql_result($result1, $i, "Classroom") . "</td>";
    echo "<td>" . mysql_result($result1, $i, "MeetingDays") . "</td>";
    echo "<td>" . mysql_result($result1, $i, "BeginningTime") . "</td>";
    echo "<td>" . mysql_result($result1, $i, "EndingTime") . "</td>";
    echo "</tr>";
  }
  echo "</table>";

  // Create a table for Query 2
  if ($_GET["cno1"] != "" && $_GET["sno"] != "") {
    echo "<b>Result:</b>";
    echo "<table>";
    echo "<tr>";
    echo "<th>Grade</th>";
    echo "<th>Number of Students</th>";
    echo "</tr>";
  }

  $cno = $_GET["cno1"];
  $sno = $_GET["sno"];

  // Create a second query
  $query2 = "SELECT Grade, COUNT(SCWID) Number_of_Students
             FROM ENROLLMENT
             WHERE CNO = '$cno' AND SNO= '$sno'
             GROUP BY Grade";
  $result2 = mysql_query($query2, $connect);

  // Show the result of the second query
  for ($i = 0; $i < mysql_numrows($result2); $i++) {
    echo "<tr>";
    echo "<td>" . mysql_result($result2, $i, "Grade") . "</td>";
    echo "<td>" . mysql_result($result2, $i, "Number_of_Students") . "</td>";
    echo "</tr>";
  }
  echo "</table>";

  // Create a table for Query 3
  if ($_GET["cno2"] != "") {
    echo "<b>Result:</b>";
    echo "<table>";
    echo "<tr>";
    echo "<th>Section</th>";
    echo "<th>Classroom</th>";
    echo "<th>Meeting Days</th>";
    echo "<th>Beginning Time</th>";
    echo "<th>Ending Time</th>";
    echo "<th>Number of Enrolled Students</th>";
    echo "</tr>";
  }

  $cno = $_GET["cno2"];

  // Create a third query
  $query3 = "SELECT SNumber, Classroom, MeetingDays, BeginningTime, EndingTime, COUNT(SCWID) Number_of_Students
             FROM SECTION, ENROLLMENT
             WHERE SECTION.CNO = '$cno' AND SECTION.CNO = ENROLLMENT.CNO AND SNumber = ENROLLMENT.SNO
             GROUP BY SNumber";
  $result3 = mysql_query($query3, $connect);

  // Show the result of the third query
  for ($i = 0; $i < mysql_numrows($result3); $i++) {
    echo "<tr>";
    echo "<td>" . mysql_result($result3, $i, "SNumber") . "</td>";
    echo "<td>" . mysql_result($result3, $i, "Classroom") . "</td>";
    echo "<td>" . mysql_result($result3, $i, "MeetingDays") . "</td>";
    echo "<td>" . mysql_result($result3, $i, "BeginningTime") . "</td>";
    echo "<td>" . mysql_result($result3, $i, "EndingTime") . "</td>";
    echo "<td>" . mysql_result($result3, $i, "Number_of_Students") . "</td>";
    echo "</tr>";
  }
  echo "</table>";

  // Create a table for Query 4
  if ($_GET["cwid"] != "") {
    echo "<b>Result:</b>";
    echo "<table>";
    echo "<tr>";
    echo "<th>Title</th>";
    echo "<th>CNO</th>";
    echo "<th>Section</th>";
    echo "<th>Grade</th>";
    echo "</tr>";
  }

  $cwid = $_GET["cwid"];

  // Create a fourth query
  $query4 = "SELECT Title, CNumber, SNO, Grade
             FROM COURSE, ENROLLMENT
             WHERE SCWID = '$cwid' AND CNumber = ENROLLMENT.CNO";
  $result4 = mysql_query($query4, $connect);

  // Show the result of the fourth query
  for ($i = 0; $i < mysql_numrows($result4); $i++) {
    echo "<tr>";
    echo "<td>" . mysql_result($result4, $i, "Title") . "</td>";
    echo "<td>" . mysql_result($result4, $i, "CNumber") . "</td>";
    echo "<td>" . mysql_result($result4, $i, "SNO") . "</td>";
    echo "<td>" . mysql_result($result4, $i, "Grade") . "</td>";
    echo "</tr>";
  }
  echo "</table>";
?>
</body>
</html>
