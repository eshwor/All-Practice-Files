<?php 
/*
    $file = "example.txt";
    $handle = fopen($file,'w');
    fclose($handle);
    
   

//writing to file

$file = "example.txt";

if($handle = fopen($file,'w')){
    fwrite($handle,'I love PHP');
    fclose($handle);
}
else{
    echo "file Could not write";
}



//reading files
$file = "example.txt";

if($handle = fopen($file,'r')){
    echo $content = fread($handle,filesize($file));
    fclose($handle);
}
else{
    echo "file Could not write";
}
 */

//delete file

unlink("deleteme.txt");

?>