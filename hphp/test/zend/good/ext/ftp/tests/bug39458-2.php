<?php
$bug39458=1;
require 'server.inc';

$ftp = ftp_connect('127.0.0.1', $port);
if (!$ftp) die("Couldn't connect to the server");

var_dump(ftp_login($ftp, 'user', 'pass'));

var_dump(ftp_nlist($ftp, ''));
var_dump(ftp_nlist($ftp, 'emptydir'));
var_dump(ftp_nlist($ftp, 'bogusdir'));

ftp_close($ftp);
?>
