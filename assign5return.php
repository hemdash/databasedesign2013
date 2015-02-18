<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Untitled Document</title>
</head>

<body>
<?php # script
  $original = $_REQUEST['original'];
  $english = $_REQUEST['english'];
  $array = explode(" ", $original);

  if($english=="no")
  {
    $piglatin = "";
foreach($array as $word)
    {
        $word = trim($word);
        $first = substr($word,0,1);
        $rest = substr($word,1,strlen($word)-1);
	
    if (preg_match('/^[aeiou]/', $word)) {
        $word = preg_replace('/^([aeiou].+)$/', "$1-way", $word);
    }
	
	elseif (preg_match('/^(th|sh)/', $word)) {
        $word = preg_replace('/^(th|sh)(.+)$/', "$2-$1ay", $word);
    }
   
		else {
           $word = preg_replace('/^[a-z](.+)$/', "$1-$first"."ay", $word);
        }
		
		$piglatin .= $word ." ";
		
	
 }

echo $original ." becomes: ".$piglatin.".";
  } else {
    echo $original.".";
  };


?>
</body>
</html>