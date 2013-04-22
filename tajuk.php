<?php
$con=mysqli_connect("localhost","root","admin","ajax_demo");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$result = mysqli_query($con,"SELECT * FROM mac2013");
/*$a[] = mysqli_fetch_array($result);
echo $a; */
while($row = mysqli_fetch_array($result))
  {
  $a[] = $row;
  echo $row['skimperkhidmatan'];
  echo "<br />";
  }

mysqli_close($con);
?> 