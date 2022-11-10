<!DOCTYPE html>
<html lang="it">
<head>
    <title>Personalizza le tue pagine con i cookies</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
<br>
<br>
<br>
<div id="mydiv">
<form id="myform" action="setcookie.php" method="POST">
    Text color: <input type="color" name="color"> 
    Background: <input type="color" name="background-color">
    Font: <select name="font-family">
     <option value="0">Select font family</option>
     <option value="Arial">Arial</option>
     <option value="Arimo">Arimo</option>
     <option value="Verdana">Verdana</option>
     <option value="Ubuntu">Ubuntu</option>
    </select>
    <br> 
    <input type="submit" value="Submit">
</form>
</div>
</body>
</html>
