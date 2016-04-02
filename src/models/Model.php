<?php
namespace dark_horse\hw3\models;
$host = "localhost";
$user = "root";

function connDB($db = "")
{
	global $host, $user;

	$conn = mysqli_connect($host, $user) or die("Connection Failed!");

	if ($db != "" and !mysql_select_db($db))
		die("The database is not available!");

	return $conn;
}
?>


<!DOCTYPE html>
<html>
<head>
	<title>New User Registration</title>
	<meta http-equip = "Content-Type" content = "text/html; charset = iso-8859-1"/>
<head>

<body>
	<h1><center>New User Registration Form<center></h1>

	<p><center><font color = "red" size = "+1"><tt><b>*</b></tt></font>indicates a required field<center></p>

	<form method = "post" action = "<?=$_SERVER['PHP_SELF']?>">

		<table border = "0" cellpadding = "0" cellspacing = "5">

		<tr>
			<td align = "right">
			 	<p>User ID</p>
			</td>
			<td>
				<input name = "newid" type = "type" maxlength = "100" size = "25" />

				<font color = "red" size = "+1"><tt><b>*</b></tt></font>
			</td>
		</tr>

		<tr>
			<td align = "right">
				<p>Name</p>
			</td>
			<td>
				<input name = "newname" type = "text" maxlength = "100" size = "25" />

				<font color = "red" size = "+1"><tt><b>*</b></tt></font>
			</td>
		</tr>

		<tr>
			<td align = "right" colspan = "2">
				<hr noshade = "noshade" />
				<input type = "reset" value = "Reset Form" />
				<input type = "submit" name "accept" value = "OK" />
			</td>
		</tr>



		</table>
	</form>
</body>
</html>

<?php

//PROCESS SIGN-UP SUBMISSION

connDB('user');

if ($_POST['newid']=='' or $_POST['newname']=='')
{
	error('Must fill in all required fields.\n');
}

//CHECK FOR EXISTING USER WITH THE NEW ID

$sql = "select count(*) from userinfo where userid = '$_POST[newid]'";
$result = mysql_query($sql);

if (!$result)
{
	erro('Submission error');
}




