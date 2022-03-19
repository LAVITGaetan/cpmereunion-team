<?php

$monday = strtotime("last monday");

$monday = date('w', $monday)==date('w') ? $monday+7*86400 : $monday;
$tuesday = strtotime(date("Y-m-d",$monday)." +1 days");
$wednesday = strtotime(date("Y-m-d",$monday)." +2 days");
$thursday = strtotime(date("Y-m-d",$monday)." +3 days");
$friday = strtotime(date("Y-m-d",$monday)." +4 days");
$saturday = strtotime(date("Y-m-d",$monday)." +5 days");
?>