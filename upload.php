<?php

$max_filesize = 10000000;
    echo $max_filesize;
    $allowed_filetypes = ".stl";
    $upload_path = "http://testerinho.com/foicore/";
    $filename = $_FILES['upload']['name'];
    echo $filename;
    $ext = substr($filename, strpos($filename, '.'), strlen($filename) - 1);
    echo $ext;
    echo "PENISPENISPENISPENIS";
    $file_strip = str_replace(" ", "_", $filename);
    echo $file_strip;
    if ($ext === $allowed_filetypes) {
        if (move_uploaded_file($_FILES['upload']['tmp_name'], $upload_path . $file_strip)) {
            
        }
    }