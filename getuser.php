<?php 
$q=$_GET["q"];

$con = mysql_connect('localhost', 'root', 'admin');
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("ajax_demo", $con);

$sql="select jenisagensi, namakementerian, namabekalan, skimperkhidmatan, gredjawatan, sum(perjawatan) as jumlah
from mac2013 inner join jenis_agensi on mac2013.jenisagensi = jenis_agensi.jenis_singkatan
WHERE id = '".$q."' group by jenisagensi, namakementerian, namabekalan, skimperkhidmatan";

$result = mysql_query($sql);

//$result2 = mysql_query($result) or die($result."<br/><br/>".mysql_error());

echo "<table border='1'>
<tr>
<th>Jenis Agensi</th>
<th>Nama Kementerian</th>
<th>Nama Bekalan</th>
<th>Skim Perkhidmatan</th>
<th>Gred</th>
<th>Perjawatan</th>
</tr>";

while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['jenisagensi'] . "</td>";
  echo "<td>" . $row['namakementerian'] . "</td>";
  echo "<td>" . $row['namabekalan'] . "</td>";
  echo "<td>" . $row['skimperkhidmatan'] . "</td>";
  echo "<td>" . $row['gredjawatan'] . "</td>";
  echo "<td>" . $row['jumlah'] . "</td>";
  echo "</tr>";
  }
echo "</table>";

mysql_close($con);
?> 
