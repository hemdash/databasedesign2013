<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" href="stylesheet.css" type="text/css" />
<title>Enter Book</title>
</head>

<body>
<center><div class="container">
<center><h1>Enter book</h1>
<form action="register.php" method="post">
<p>Book name: <input type="text" name="book_name" size="20" maxlength="100" value="<?php if (isset($_POST['book_name'])) echo $_POST['book_name']; ?>" /></p>
<p>Author: <input type="text" name="author" size="20" maxlength="100" value="<?php if (isset($_POST['author'])) echo $_POST['author']; ?>" /></p>
<p>Publisher: <input type="text" name="publisher" size="20" maxlength="100" value="<?php if (isset($_POST['publisher'])) echo $_POST['publisher']; ?>" /></p>
<p>Language:</p>
<p><select name="language_id"><option value="1">English</option>
<option value="2">Spanish</option>
<option value ="3">French</option>
<option value="4">Italian</option>
<option value="5">Mandarin</option></select></p>
<p>Number of pages: <input type="text" name="length_pages" size="20" maxlength="100" value="<?php if (isset($_POST['length_pages'])) echo $_POST['length_pages']; ?>" /></p>
<p>Cover image file name: <input type="text" name="cover" size="20" maxlength="100" value="<?php if (isset($_POST['cover'])) echo $_POST['cover']; ?>" /></p>
<p>Is this book fiction?:</p>
<p>Yes <input type="radio" name="fiction" value="yes" /></p>
<p>No <input type="radio" name="fiction" value="no" /></p>
<p>Year Published: <input type="text" name="pub_year" size="20" maxlength="100" value="<?php if (isset($_POST['pub_year'])) echo $_POST['pub_year']; ?>" /></p>
<input type="submit" name="submit" value="submit" /></form><br /><br /></center>
</div></center>

<?php

?>
</body>
</html>