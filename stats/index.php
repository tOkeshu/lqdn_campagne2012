<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
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
"Dons/heure sur les dernières 24 heures" =>
"select concat(date(datec),' ',hour(datec),'h') 'heure',concat(count(*),' dons') 'nombre de dons',concat(sum(somme), ' EUR') 'total', concat(floor(avg(somme)),' EUR/don') 'moyenne' from dons where status !=0 and datec > (now() - interval 24 hour) group by (concat(date(datec),' ',hour(datec))) order by datec DESC;",
"30 derniers dons" =>
"select datec 'date', concat(somme,' EUR') 'montant', if(public,nom,'anonyme') 'nom', lang 'langue'  from dons where status !=0 order by datec DESC limit 30;",
"Répartitions des montants depuis le 8 juin" =>
"select count(*) nombre, concat(somme,' EUR') 'montant', sum(somme) total from dons where status !=0 and datec > '2012-06-08' group by (somme) order by somme DESC,nombre desc limit 30;"
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

