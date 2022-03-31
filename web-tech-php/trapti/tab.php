<html>
<body>
<?php

function table(){
$t=(int)readline('Enter an integer: ');
for($i=0;$i<=10;$i++){
$f=$t*$i;
echo "$t * $i = ".$f;
}
table();
}
?>
</body>
</html>