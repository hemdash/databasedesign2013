<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Sort Books</title>
<link rel="stylesheet" href="stylesheet.css" type="text/css" />
</head>

<body><?php
echo '<center><h1>Sort the Books!</h1>';
//show headline

require ('../mysqli_connect.php');
//connect to MySQL

$sort = (isset($_POST['sortby'])) ? $_POST['sortby'] : 'books';

	switch($sort) {
	case 'book_name':
	$order_by = 'book_name ASC';
	break;
	case 'author':
	$order_by = 'author ASC';
	break;
	default:
	$order_by = 'book_name ASC';
	$sort = 'books';
	break;
}
//sorts books according to what the user decided in the drop-down menu


$q = "SELECT (book_name) AS name, (author) AS author, (publisher) AS publisher FROM books ORDER BY $order_by";
//creates MySQL command

$r = @mysqli_query ($dbc, $q);
//connects to the mysql table

if ($r) {
	echo '<div class="container"><a href="http://wikipedia.org"><img src="dog1.gif"></a> <a href="http://google.com"><img src="dog2.gif"></a> <br><table align="center" cellspacing="3" cellpadding="3" width="75%">
	<tr><td align="left"><b>Book Name</b></td><td align="left"><b>Author</b></td><td align="left"><b>Publisher</b></td></tr>';
//if the connection is made, then the head of the table is created
	
while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC))
	{echo '<tr><td align="left">' . $row['name'] . '</td><td align = "left">' . $row['author'] . '</td><td align = "left">' . $row['publisher'] . '</td></tr>';
}
//then the actual table is retrieved

echo '</table></div>';
//closes the table and div

mysqli_free_result($r);
//releases mysql info

} else {
	echo '<div class="container"><p>The current books could not be retrieved.</p>';
	
	echo '<p>' . mysqli_error($dbc) . '<br><br>Query: ' . $q . '</p></div></center>';
	
}
//if mysql connection can't be made, this calls the error

?>
</body>
</html>