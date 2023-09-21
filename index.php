<?php

function makeDirectory($input){
    if(!is_dir($input)){
        $result = __DIR__.DIRECTORY_SEPARATOR.$input;
        mkdir($result,077,true);
        echo "<p>$input has been created</p>";
    }else{
        echo "$input exists";
    }
}
function removeDirectory($input){
    if(is_dir($input)){
        rmdir($input);
        echo "file has been removed";
    }else{
        echo "file does\'nt exists";
    }
}
function makeFile($input){
    if(!file_exists($input)){
        fopen($input , "w");
        echo "$input has been created.";
    }else{
        $size = filesize($input);
        echo "$input exists! file size: $size";
    }
}

function removeFile($input){
    if(file_exists($input)){
        unlink($input);
        echo "file has been removed";
    }else{
        echo "file does'nt exists";
    }
}

$projectArray = scandir(__DIR__);

for($i = 3; $i < count($projectArray); $i++){
    $type = "";
    if(is_file($projectArray[$i])){
        $type = "File";
        $size = filesize($projectArray[$i]);
        echo "$type: Name : $projectArray[$i] Size : $size";
    }else{
        $type = "Directory";
        echo "$type: Name : $projectArray[$i]";
    }
    echo "</br>";
}