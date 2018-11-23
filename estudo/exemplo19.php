<?php
$json = '[{"nome":"Andr\u00e9","idade":36},{"nome":"Marilis","idade":36}]';

$data = json_decode($json);

var_dump($data);

?>