<?php
date_default_timezone_set('America/Guayaquil');
setlocale(LC_TIME, 'spanish');

$fecha = new DateTime();
$formatter = new IntlDateFormatter('es_ES', IntlDateFormatter::FULL, IntlDateFormatter::FULL, 'America/Guayaquil', IntlDateFormatter::GREGORIAN);

echo $formatter->format($fecha);
?>

