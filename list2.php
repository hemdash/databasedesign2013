<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Book Table</title>
<link rel="stylesheet" href="stylesheet.css" type="text/css" />
</head>

<body>
<?php

require ('mysqli_connect.php');
$q = "SELECT (book_name) AS name, (author) AS author FROM books ORDER BY book_name ASC";
$r = @mysqli_query ($dbc, $q);
if ($r) {
	echo '<center><div class="container"><table align="center" cellspacing="3" cellpadding="3" width="75%">
	<tr><td align="left"><b>Book Name</b></td><td align="left"><b><Author</b></td></tr>';
	
while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC))
	{echo '<tr><td align="left">' . $row['name'] . '</td><td align = "left">' . $row['author'] . '</td></tr>';
}

echo '</table></div></center>';

mysqli_free_result($r);

} else {
	echo '<center><div class="container"><p>The current books could not be retrieved.</p>';
	
	echo '<p>' . mysqli_error($dbc) . '<br><br>Query: ' . $q . '</p></div></center>';
	
}

?>
</body>
</html>