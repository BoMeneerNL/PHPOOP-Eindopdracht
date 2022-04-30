<?php
spl_autoload_register(function ($class) {
    include 'classes'.str_starts_with(strtoupper(PHP_OS),"WIN")? "\\":"/"."$class.php";
});


$CSV = new CSV();
print_r($CSV->read("data.csv"));