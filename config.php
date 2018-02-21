<?
    $DB_HOST = "localhost";
    $DB_USER = "root";
    $DB_PASS = "";
    $DB_NAME = "armbd";
        mysql_connect($DB_HOST,$DB_USER,$DB_PASS) or die (mysql_error());
        mysql_select_db($DB_NAME);
?>