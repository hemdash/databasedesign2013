<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Untitled Document</title>
</head>

<body>
<?php # Script 2.2 - handle_form.php
// Creating shorthand for the form data:
$noun1 = $_REQUEST['noun1'];
$adjective1 = $_REQUEST['adjective1'];
$city = $_REQUEST['city'];
$fname = $_REQUEST['fname'];
$adjective2 = $_REQUEST['adjective2'];
$noun2 = $_REQUEST['noun2'];

//Print the submitted information:
echo "<p>The $noun1 licked the $adjective1 person, so they decided to move to $city to get away from the $noun1. They changed their name to $fname and found a $adjective2 and $noun2 and lived happily ever after with it.</p>\n";

?>
</body>
</html>
