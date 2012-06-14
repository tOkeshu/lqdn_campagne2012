<?php
$perso = mt_rand(1,8);
header('content-type: image/png');
readfile(__DIR__.'/images/perso_'.$perso.'.png');

