<?
$input = $_GET["q"];
$data = array();
// query your DataBase here looking for a match to $input
$query = mysql_query("SELECT distinct skimperkhidmatan FROM mac2013 WHERE skimperkhidmatan LIKE '%$input%'");
while ($row = mysql_fetch_assoc($query)) {
$json = array();
$json['value'] = $row['skimperkhidmatan'];
$data[] = $json;
}
header("Content-type: application/json");
echo json_encode($data);
?>
