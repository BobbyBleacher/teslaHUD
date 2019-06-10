<?php
    
 //write file being sent to vitals.json
 $upload_file = 'vitals.json'; 
 $handle = fopen($upload_file,'w'); 

//Make sure there is actually data
if ('' == @file_get_contents('php://input'))
{
 echo "No JSON received, empty file";
} else{
 fwrite($handle, @file_get_contents('php://input')); 
 fclose($handle);
}

 ?>