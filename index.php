<?php session_start();


if(isset($_SESSION) && !empty($_SESSION)){
	header('Location: dashboard.php');
}

<form action="action_page.php">
	E-mail: <input type="email" name="userid"><br>
  <input type="submit" value="Submit"><br>
  <input type="submit" formnovalidate value="Submit without validation">
</form>

<p><strong>Note:</strong> The formnovalidate attribute of the input tag is not supported in Internet Explorer 9 and earlier versions, or in Safari.</p>

else{
	header('Location: login.php');
}