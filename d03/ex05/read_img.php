<?php
header("Content-type: image/png");
header('X-Powered-By: PHP/5.4.26');
header('Content-Disposition: attachment; filename="downloaded.pdf"');
header('Server: Apache');

$im = readfile('/img/42.png');
?>