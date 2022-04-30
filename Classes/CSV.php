<?php

class CSV
{
    public static function read($file)
    {
        $handle = fopen($file, 'r');
        $data = array();
        while (($row = fgetcsv($handle, 1000, ',')) !== FALSE)
        {
            $data[] = $row;
        }
        fclose($handle);
        return $data;
    }
}