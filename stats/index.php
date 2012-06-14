<html>
<head>
<style type="text/css">
td { border:1px solid #ccc}
thead{ font-weight:bold}
</style>
</head>
<body>
<img src="https://support.laquadrature.net/images/dons_2012.png"/>
<?php
require_once(dirname(__DIR__).'/config.php');
$sql = array(
"aujourd'hui, heure par heure" => "select concat(hour(datec),'h') 'heure',concat(count(*),' dons') 'nombre de dons',concat(sum(somme), ' EUR') 'total', concat(floor(avg(somme)),' EUR/don') 'moyenne' from dons where date(datec) = date(now()) group by hour(datec);"
);

foreach($sql as $title=>$s)
{
$q = mysql_query($s);
$nc = mysql_num_fields($q);
echo '<table><thead><tr><td colspan="'.$nc.'">'.htmlspecialchars($title).'</td></tr>
<tr>';
for($i = 0;$i < $nc; $i++)
{
    $c = mysql_fetch_field($q, $i);
    echo '<td>'.$c->name.'</td>';
}
echo '</tr>
</thead>
<tbody>';
while ($r = mysql_fetch_assoc($q))
{
echo '
<tr>';
foreach($r as $v)
{
echo '<td>'.htmlspecialchars($v).'</td>';
}
echo '</tr>';
}
echo '
</tbody></table>
';
}

?>

</body></html>

