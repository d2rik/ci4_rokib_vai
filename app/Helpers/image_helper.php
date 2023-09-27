<?php

function src($fileName, $type = "full")
{
    $path = "./uploads/images/";
    if ($type != "full") {
        $path .= $type . "/";
    }
    return $path . $fileName;
}