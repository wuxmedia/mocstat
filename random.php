<?php
$file = "/home/store/public_html/aeB3yoht.txt";
$sent_string = htmlspecialchars($_GET["music"]);
if($sent_string){
   $something = fopen($file, "w") or die("something went horribly wrong writing");    
   fwrite($something, $sent_string);
   fclose($something); 
   echo "Done";
}else{
    $something = fopen($file, "r") or die("something went horribly wrong reading");
    echo fgets($something);
fclose($something);
  }
?>
