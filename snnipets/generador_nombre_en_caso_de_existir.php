<?php
/*
**  Verifica si el nombre de archivo existe,
**  y devuelve un nuevo nombre con un numero al final 
**  para no sobreescribir al existente !
*/
function file_newname($path, $filename){
    if ($pos = strrpos($filename, '.')) {
           $name = substr($filename, 0, $pos);
           $ext = substr($filename, $pos);
    } else {
           $name = $filename;
    }

    $newpath = $path.'/'.$filename;
    $newname = $filename;
    $counter = 0;
    while (file_exists($newpath)) {
           $newname = $name .'_'. $counter . $ext;
           $newpath = $path.'/'.$newname;
           $counter++;
     }

    return $newname;
}
/*
  EJEMPLOS:
    myfile.jpg
    myfile_0.jpg
    myfile_1.jpg
*/