<meta charset ="utf-8">
<?php
echo "<pre>";
$name =$_REQUEST['user'];
echo "Привет,"." ".$name;
echo "</br>";
echo "Вот данные о комьпютере";
echo "</br>";
echo $_SERVER['REMOTE_ADDR'];
echo "</br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "</br>";
print_r($GLOBALS);
echo "</pre>";
?>