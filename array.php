<?php
$con = mysql_connect('localhost', 'root', 'admin');
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("ajax_demo", $con);

//mysql_select_db("ajax_demo", $con);

$sql="SELECT distinct skimperkhidmatan FROM mac2013";

$result = mysql_query($sql);
$cars1=array($result);
$cars2=array("Volvo","BMW","Toyota");
echo "I like " . $cars1[0] . ", " . $cars1[1] . " and " . $cars1[2] . ".";
?> 