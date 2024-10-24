<?php
if(file_exists("test.txt")){
    echo readfile("test.txt");
}else{
    echo "File doesn't exists<br>";
}
echo "<br>";
$file = fopen("test.txt","a");
if($file){
    fwrite($file,"This is a new line in the file.<br>");
    fclose($file);
    echo"File Written Successfully!<br>";
}else{
    echo "Error:Unable to open file.<br>";
}

$filename = "test.txt";
$file = fopen($filename,"r");
if($file){
    $filesize = filesize($filename);
    $content = fread($file,$filesize);
    fclose($file);
    echo "File Content: \n";
    echo $content;
}else{
    echo "Error:Unable to open file.<br>";
}
?>