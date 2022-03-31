<html>
<body>
<h1>Trapti Upadhyay</h1>
<?php
$x=10;
$y=10;
function sum(){
global $x,$y,$z;
$z=$x+$y;

}
sum();
echo "the sum is $z";
?>
</body>
</html>