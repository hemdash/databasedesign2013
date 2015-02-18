<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>User Criteria Form</title>
<link rel="stylesheet" href="stylesheet.css" type="text/css" />
</head>

<body><center>
<h1>Which type of information would you like to see about the books?:</h1>
<div class="container"><form action="usercriteria.php" method="post">
<p>Author <input type="radio" name="criteria" value="author" /></p>
<p>Publisher <input type="radio" name="criteria" value="publisher" /></p>
<p>Cover image <input type="radio" name="criteria" value="cover" /></p>
<p>Year Published <input type="radio" name="criteria" value="pub_year" /></p>
<p>Number of Pages <input type="radio" name="criteria" value="length_pages" /></p>
<input type="submit" name="submit" value="submit" /></form><br /><br /></div></center>

<?php

?>
</body>
</html>