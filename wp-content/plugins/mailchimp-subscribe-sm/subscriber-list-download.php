<?php



header("Content-disposition: attachment; filename=sm_subcribers-list.csv");
header("Content-type: application/csv");
readfile("sm_subcribers-list.csv");





?>