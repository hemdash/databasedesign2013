<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Books and Movies</title>
<link rel="stylesheet" href="stylesheet.css" type="text/css" />
</head>

<body>

<?php

require ('../mysqli_connect.php');
//connects to mysql


echo '<center><h1>Books</h1>';
//creates head of table

$q = "SELECT (book_name) AS name, (author) AS author FROM books ORDER BY book_name ASC";
//creates a variable out of the mysql command to be called later

$r = @mysqli_query ($dbc, $q);
//connects to mysql table

if ($r) {
	echo '<div class="container"><table align="center" cellspacing="3" cellpadding="3" width="75%">
	<tr><td align="left"><b>Book Name</b></td><td align="left"><b>Author</b></td></tr>';
//if the connection can be made, then the head of the table is created

while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC))
	{echo '<tr><td align="left">' . $row['name'] . '</td><td align = "left">' . $row['author'] . '</td></tr>';
}
//then the table is called

echo '</table></div></center>';
//then the table and div are closed

mysqli_free_result($r);
//releases the mysql info

} else {
	echo '<div class="container"><p>The current books could not be retrieved.</p>';
	
	echo '<p>' . mysqli_error($dbc) . '<br><br>Query: ' . $q . '</p></div><br><br>';
	
}
//if the connection can't be made, the error message shows

echo '<center><br><br><h1>Movies</h1>';
//repeats the process for the movies table

$q2 = "SELECT (movie_name) AS moviename, (producer) AS producer, (director) AS director FROM movies ORDER BY movie_name ASC";
$r2 = @mysqli_query ($dbc, $q2);
if ($r2) {
	if ($criteria == NULL) {
		echo '<div class="container"><p>No results match your criteria.</div></p>';}
	else {
	echo '<div class="container><table align="center" cellspacing="3" cellpadding="3" width="75%">
	<tr><td align="left"><b>Movie Name</b></td><td align="left"><b>Producer</b></td><td align="left"><b>Director</b></td></tr>';
	
while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC))
	{echo '<tr><td align="left">' . $row['moviename'] . '</td><td align = "left">' . $row['producer'] . '</td><td align = "left">' . '</td></tr>';
}
	}

echo '</table></div>';

mysqli_free_result($r);

} else {
	echo '<div class="container"><p>The current books and movies could not be retrieved.</p>';
	
	echo '<p>' . mysqli_error($dbc) . '<br><br>Query: ' . $q . '</p></div>';
	
}

?>
</center>

</body>
</html>