<?php

setlocale(LC_ALL, "pt_BR","pt_BR.utf-8","portuguese");

$ts = strtotime("+1 week");
echo date("l, d/m/Y", $ts);


?>