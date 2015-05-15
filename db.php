<?php

$user="root";
$password="asdf";
$database="comments";

mysql_connect(localhost,$user,$password);
@mysql_select_db($database) or die( "Unable to select database");
