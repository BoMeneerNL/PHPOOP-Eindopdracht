<?php
spl_autoload_register(function ($class) {
    include "classes/$class.php";
});


$CSV = new CSV();
print_r($CSV->read("data.csv"));