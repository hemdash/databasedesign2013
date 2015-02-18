<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>User Criteria</title>
<link rel="stylesheet" href="stylesheet.css" type="text/css" />
</head>

<body><?php

$criteria = $_POST['criteria'];
//creates a variable out of the criteria that the user chose

require ('../mysqli_connect.php');
//connects to MySQL

$q = "SELECT (book_name) as bookname, ($criteria) AS criteria FROM books ORDER BY $criteria ASC";
//creates a variable out of the mysql command to be called later
$r = @mysqli_query ($dbc, $q);
//connection to mysql table

if ($r) {
	if ($criteria == NULL) {
		echo '<center><div class="container"><p>No results match your criteria.</p></div></center>';}
//if the connection is made and there is no relevant data, this message is shown

	else {
	echo '<center><div class="container"><table align="center" cellspacing="3" cellpadding="3" width="75%">
	<tr><td align="left"><b>Book Name</b></td><td align="left"><b>Criteria</b></td></tr>';
//if the connection is made and there is data, the head of the table is created
	
while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC))
	{echo '<tr><td align="left">' . $row['bookname'] . '</td><td align = "left">' . $row['criteria'] . '</td></tr>';
}

	};
//then the actual table is called

echo '</table></div></center>';
//then the table and div are closed

mysqli_free_result($r);
//this releases the mysql info

}

else {
	echo '<center><div class="container"><p>The information could not be retrieved.</p>';
	
	echo '<p>' . mysqli_error($dbc) . '<br><br>Query: ' . $q . '</p></div></center>';
	
}
//if the connection can't be made, the error message is called

?>
</body>
</html>