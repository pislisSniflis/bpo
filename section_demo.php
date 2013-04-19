<script type="text/javascript" src="http://ajax.googleapis.com/
ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function()
{
$(".kementerian").change(function()
{
var id=$(this).val();
var dataString = 'id='+ id;

$.ajax
({
type: "POST",
url: "ajax_city.php",
data: dataString,
cache: false,
success: function(html)
{
$(".agensi").html(html);
}
});

});

});
</script>
<!--HTML Code-->
Kementerian :
<select name="kementerian" class="kementerian">
<option selected="selected">--Pilih Kementerian--</option>
<?php
include('db.php');
$sql=mysql_query("select id,data from data where weight='1'");
while($row=mysql_fetch_array($sql))
{
$id=$row['id'];
$data=$row['data'];
echo '<option value="'.$id.'">'.$data.'</option>';
} ?>
</select> <br/><br/>

Agensi :
<select name="agensi" class="agensi">
<option selected="selected">--Pilih Agensi--</option>
</select>