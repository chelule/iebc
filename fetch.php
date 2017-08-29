<?php
include_once('simple_html_dom.php');

$dom = curl('https://public.rts.iebc.or.ke/enr/index.html#/Kenya_Elections_Presidential/1/1003');

foreach($dom->find("body") as $element)
    die($element->innertext);
?>