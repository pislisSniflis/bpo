<?php

if ( !isset($_REQUEST['term']) )
    exit;

$dblink = mysql_connect('localhost', 'root', 'admin') or die( mysql_error() );
mysql_select_db('ajax_demo');

//$rs = mysql_query('select zip, city, state from zipcode where zip like "'. mysql_real_escape_string($_REQUEST['term']) .'%" order by zip asc limit 0,10', $dblink);
$rs = mysql_query('select distinct skimperkhidmatan, gredjawatan, namakementerian from mac2013
	where skimperkhidmatan like "'. mysql_real_escape_string($_REQUEST['term']) .'%" order by skimperkhidmatan asc limit 0,100', $dblink);
$data = array();
if ( $rs && mysql_num_rows($rs) )
{
    while( $row = mysql_fetch_array($rs, MYSQL_ASSOC) )
    {
        $data[] = array(
            'label' => $row['skimperkhidmatan'] .', '. $row['gredjawatan'] .', '. $row['namakementerian'] ,
            'value' => $row['skimperkhidmatan']
        );
    }
echo json_encode($data);
flush();

}

