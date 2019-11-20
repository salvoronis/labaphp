 <?php
 $start = microtime(true);
 if($_POST['attrib'] == 'meichu'){
   $time = microtime(true) - $start;
   echo "Попадание ".$time;
 }else{
   $time = microtime(true) - $start;
   echo "Промах ".$time;
 }
?>
