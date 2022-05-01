<?php

class CSV
{
    public static function read($file){
        $dirsplit = explode("\\",__FILE__);
        $dirsplit = array_slice($dirsplit,0,count($dirsplit)-2);
        $dirpath = implode("\\",$dirsplit);
        $csv = array_map('str_getcsv', file($dirpath . '\\csv\\' . $file));
        array_walk($csv, function(&$a) use ($csv) {
            $a = array_combine($csv[0], $a);
        });
        array_shift($csv);
        return $csv;
    }
}