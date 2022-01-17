<!DOCTYPE html>
<html>
<head>
<title>Lab 5</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
    body {
	    font-family: Roboto, sans-serif;
	    font-size: 16px;
	    text-align: center;
        background-color: rgb(94, 223, 240);
        }
    #main {
	    height: auto;
     	width: 600px;
     	margin: 10px auto;
     	background: white;
     	padding: 1px;
     	box-shadow: 0 0 10px rgba(0,0,0,.1);
     	border-radius: 17px;
	    transition: ease all 0.25s;
}
</style>
</head>
<body>
<div id = "main">
<?php
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
if (!isset($_COOKIE['count'])){
	$cookie = 1;
    setcookie("count", $cookie);
}else{
	$cookie = ++$_COOKIE['count'];
    setcookie("count", $cookie);
}
$width = $_POST["wid"];
$height = $_POST["high"];
$widbool = ($width >= 3 and $width <= 12);
$heibool = ($height >= 3 and $height <=12);

if (($widbool and $heibool) == TRUE){
    echo "The number of views this session is: " . $_COOKIE['count'] . "<br>";
    echo "<table align='center' cellpadding='5px' cellspacing='3px' border='0'>";
    for ($i = 1; $i <= $width; $i++){
        echo'<tr>';
        for ($j = 1; $j <= $height; $j++)
            echo '<td>' .$i * $j.'</td>';
        echo '</tr>';
    }
}

else {
    echo "The number of views this session is: " . $_COOKIE['count'] . "<br>";
    echo "<h4>ERROR: Invalid Rows or Columns</h4>";
}
echo "<br>";
echo "<button onclick=\"window.location.href = 'form.html'\">New Table</button>";
?>
</div>
</body>
</html>