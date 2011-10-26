<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Henry County Public Schools</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="style.css" />
</head>
<body>
<div id="pagewrapper">
  <div id="page">
    <div id="header">
      <h1><img src="images/HCPS-Logo-250x120.gif" alt="HCPS" /></h1>
    </div>
    <div id="topnav">
      <ul>
        <li><a href="http://www.henry.k12.va.us/">Home</a></li>
        <li><a href="https://hcps.schoolrecruiter.net/">Jobs</a></li>
      </ul>
    </div>
    <div id="main">
      <div id="body">
        <h2>Candidate Evaluation</h2>
        <p>This is a web-based application for evaluating prospective employees. It will allow administrators to evaluate and accomplish the following: 
	<ul>
		<li>The Ability to set goals for Student academic progress</li>
		<li>General performance</li>
		<li>Devise a plan for improving performance.</li>
	</ul></p>
      </div>
      <div id="left">
        <h2>Log in: </h2>
		<form method="post" action="authenticate.php">
			<table>
				<tr>
					<td colspan="2">
						<?php 
							echo $_SESSION['msg'];
							$_SESSION['msg'] = '';
						?>
					
					</td>
				</tr>
				<tr>
					<td>Username:</td>
					<td><input type="text" size="20" name="uid" /></td>
				</tr>
				<tr>
					<td>Password:</td>
					<td><input type="password" size="20" name="pass" /></td>
				</tr>
				<tr>
					<td colspan="2"><input type="submit" value="Login" /></td>
				</tr>
			</table>
		</form>
        <h2>Resources</h2>
        <div class="nav">
          <ul>
            <li><a href="resources/DefinitionsOfTerms.pdf">Terms used in evaluations</a></li>
            <li><a href="resources/TeacherResponsibilities.pdf">Teacher Resposibilities</a></li>
            <li><a href="resources/GoalSetting.pdf">Sample Goal Setting Form</a></li>
            <li><a href="resources/TeacherPerformanceForm.pdf">Sample Teacher Form</a></li>
            <li><a href="resources/PerformanceImprovementPlan.pdf">Sample Improvement Form</a></li>
          </ul>
        </div>
      <!-- END OF LEFT BAR -->
    </div>
    <!-- END OF MAIN DIV TAG -->
    <div id="footer">Please direct questions or requests to jmabry@henry.k12.va.us</div>
  </div>
</div>
</body>
</html>
