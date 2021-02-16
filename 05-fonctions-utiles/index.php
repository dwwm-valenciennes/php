<?php



// Pour récupèrer le timestamp actuel
$now = time();

echo $now.'<br />';

// Formater la date à partir d'un timestamp
echo date('d/m/Y', $now - 86400 * 2);
