<?php

$long = gethostname();

$arr = explode(".", $long);

?>

document.querySelector('#footer > p:nth-child(2)').textContent += " <?php echo $arr[0]?>";