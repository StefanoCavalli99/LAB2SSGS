<?php
$value = "";
$pattern = "/^#[0-9abcbdef]{6}$/";

if (isset($_POST["color"]) & $_POST["color"] != "#000000" & preg_match($pattern,$_POST["color"]))
    $value .= $_POST["color"] . "|";
else
    // default value
    $value .= "black|";

if (isset($_POST["background-color"]) & $_POST["background-color"] != "#000000" & preg_match($pattern,$_POST["background-color"]))
    $value .= $_POST["background-color"] . "|";
else
    // default value
    $value .= "white|";

if (isset($_POST["font-family"]) & $_POST["font-family"] != "0")
    $value .=  htmlspecialchars($_POST["font-family"]);
else
    // default value
    $value .= "serif";

$name    = "stile";
$expires = mktime(0, 0, 0, 01, 01, 2023);
setcookie($name, $value, $expires);

// redirect
header("Location: index.php");
?>
