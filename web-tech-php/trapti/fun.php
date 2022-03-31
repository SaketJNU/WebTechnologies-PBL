<html>
<body>
<?php
function myfun(){
static $x=1;
echo $x;
$x++;
}
myfun();
echo "<br>";
myfun();
echo "<br>";
myfun();
?>
</body>
</html>


