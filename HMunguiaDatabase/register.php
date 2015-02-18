<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Insert into Database</title>
<link rel="stylesheet" href="stylesheet.css" type="text/css" />
</head>

<body>
<?php


if ($_SERVER['REQUEST_METHOD'] =='POST')
	{$errors = array( );
}
//creates an array for errors which can be displayed later as messages if need be

	if (empty($errors)) {
	require ('../mysqli_connect.php');
	

}
//connects to the mysql database
	
	$q = "INSERT INTO books(book_name, author, publisher, language_id, length_pages, cover, fiction, pub_year) VALUES
	('$booktitle', '$author', '$publisher', '$languageid', '$lengthpages', '$cover', '$fiction', '$pubyear')";
//creates the mysql commands to enter the info into the database

	$r = @mysqli_query($dbc, $q);
//connects to the specific mysql table	


if (empty($_POST['book_name']))
	{$errors[ ] = '<center><div class="container"><p>You forgot to enter the book name.<p></div></center>';
}
//if the book name field is empty, this error message will show
	else	{
		$booktitle = trim($_POST['book_name']);
	}
//if not, it will post the info to the database
	
if (empty($_POST['author']))
	{$errors[ ] = '<center><div class="container"><p>You forgot to enter the author.</p></div></center>';
}
	else	{
		$author = trim($_POST['author']);
	}
	
if (empty($_POST['cover']))
	{$errors[ ] = '<center><div class="container"><p>You forgot to enter the book cover image.</p></div class></center>';
}
	else	{
		$cover = trim($_POST['cover']);
	}
	
if (empty($_POST['publisher']))
	{$errors[ ] = '<center><div class="container"><p>You forgot to enter the publisher.</p></div></center>';
}
	else	{
		$publisher = trim($_POST['publisher']);
	}
	
if (empty($_POST['language_id']))
	{$errors[ ] = '<center><div class="container"><p>You forgot to enter the book language.</p></div></center>';
}
	else	{
		$languageid = trim($_POST['language_id']);
	}
	
if (empty($_POST['length_pages']))
	{$errors[ ] = '<center><div class="container"><p>You forgot to enter the book length in pages.</p></div></center>';
}
	else	{
		$lengthpages = trim($_POST['length_pages']);
	}
	
if (empty($_POST['fiction']))

	{$errors[ ] = '<center><div class="container"><p>You forgot to enter if the book is fiction or not.</p></div></center>';
}
	else	{
		$fiction = trim($_POST['fiction']);
	}
	
if (empty($_POST['pub_year']))
	{$errors[ ] = '<center><div class="container"><p>You forgot to enter the year the book was published.</p></div></center>';}
	
	else	{
		$pubyear = trim($_POST['pub_year']);
	
	}


if ($r) {
		echo '<center><div class="container"><p>Thank you! This book information has been entered into the database.</p><p>Click <a href="list.php">here</a> to view the updated list of books!</p></div></center>';
	}
// if the addition is successful, then this message shows
	
else {
		echo '<center><div class="container"><p>System error.';
		echo mysqli_error($dbc) . ' Query: ' . $q;
		foreach ($errors as $msg) {
			echo " - $msg<br>\n</p></div></center>";
		}
	}
//if it is not, the errors are listed		


?>

</body>
</html>