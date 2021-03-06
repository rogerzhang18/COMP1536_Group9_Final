<?php
  include 'functions.php';
  require_once('config.php');
  session_start();
  // Connect to server and select database.
  mysql_connect(DB_HOST, DB_USER, DB_PASSWORD)or die("cannot connect, error: ".mysql_error());
  mysql_select_db(DB_DATABASE)or die("cannot select DB, error: ".mysql_error());
  $tbl_name="topic"; // Table name
?>
<!DOCTYPE html>
<html lang="en">
<head>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link href="../style/base.css" rel="stylesheet" type="text/css">
        <link href="../style/style_appointment_table_b.css" rel="stylesheet" type="text/css">
        <link href="../style/style_subject.css" rel="stylesheet" type="text/css">
        <!--CSS for registeration form-->
        <link href="../style/style_registration.css" rel="stylesheet" type="text/css"/>


        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <!-- Registeration form validation -->
        <script type="text/javascript" src="../js/registeration_Form_script.js"></script>
<title>Professional Writing</title>
<meta charset="utf-8">


</head>

<body>
    <div id="main-wrapper">
        
        <!-- Main Header -->
        <?php
            include("../config.php");
            include(ROOT."header.php");
        ?>

        <!-- Main content section -->
        <div id="main-content">
		    <div id="header">
			    <h1>Course Schedule</h1>
		    </div>
            <br>
            <div id ="tale2">
	            <table> 
	                <caption id ="caption2">Professional Writing</caption>
	                    <tr>
		                    <th>Tutors</th>
		                    <th colspan="7">Times</th>
	                    </tr>
	                    <tr>
		                    <td> </td>
		                    <td>Monday</td>
		                    <td>Tuesday</td>
		                    <td>Wednesday </td>
		                    <td>Thursday </td>
		                    <td>Friday </td>
		                    <td>Saturday </td>
		                    <td>Sunday </td>
	                    </tr>
	                    <tr>
		                    <td>Luke Lee</td>
		                    <td><?php include ("tablesCheck.php"); ?>Essay Writing <br>5pm-6pm</a></td>
		                    <td></td>
		                    <td><?php include ("tablesCheck.php"); ?>Essay Writing  <br>5pm-6pm </a></td>
		                    <td> </td>
		                    <td> </td>
		                    <td><?php include ("tablesCheck.php"); ?>Report Writing <br>12pm-2pm </a> </td>
		                    <td><?php include ("tablesCheck.php"); ?>Report Writing <br>12pm-2pm </a></td>
	                    </tr>
	                    <tr>
		                    <td>Roger Zhang </td>
		                    <td></td>
		                    <td><?php include ("tablesCheck.php"); ?>Thesis <br>6pm-8pm</a> </td>
		                    <td> </td>
		                    <td><?php include ("tablesCheck.php"); ?>Thesis <br>6pm-8pm  </a></td>
		                    <td> </td>
		                    <td><?php include ("tablesCheck.php"); ?>Thesis <br>12pm-2pm </a> </td>
		                    <td> </td>
	                    </tr>
	              </table>
		    </div>
		</div>

		<!-- Main Footer -->
        <?php
            include("../config.php");
            include(ROOT."footer.php");
        ?>
	</div>
</body>
</html>
