<?php
$ck1_name = "Organization";
$ck1_value = "ACCS";
$ck2_name = "Journal";
$ck2_value = "Computing & Communications";
$ck3_name = "Topic";
$ck3_value = "Networking";

$secure = true;
$httponly = true;

setcookie($ck1_name, $ck1_value, time() + (86400), "/"); 
setcookie($ck2_name, $ck2_value, time() + (86400), "/", "", $secure);
setcookie($ck3_name, $ck3_value, time() + (86400), "/", "", $secure, $httponly);
?>

<html>
<body>
<?php
if (count($_COOKIE) > 0) {
  echo "Cookie values are:<br/>";
  foreach ($_COOKIE as $name => $value) {
    echo "<br/>Name= $name, Value= $value\n";
  } 
} else {
    echo "<br/>Cookies are not yet set";
}
?>
</body>
</html>
