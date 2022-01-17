<?php include ('dbconnect.php'); ?>
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
</style>
</head>
<body>
<?php
$yer = $_POST["year"];
$loc = $_POST["location"];

echo "<div>";
echo "<h3> Lab 5 Last Part </h3><br>";
//SELECT * FROM tblName WHERE substr(column,1,4)
$pics = "SELECT * FROM Photo WHERE locationa = '$loc' AND YEAR(date_taken) = '$yer'";
if($result_p = mysqli_query($connect, $pics)){
    if(mysqli_num_rows($result_p) > 0){
        while($row = mysqli_fetch_array($result_p)){
            echo "<img src=" . $row['picture_url'] . " width='200' height='200' style='border-radius:15px;border:1px solid red;'>";
            echo "<br><br>";
            echo "This is " . $row['subject_n'] . ", " . $row['locationa'] . "<br>";
            echo "Taken in " . $row['date_taken']; 
            echo "<br><br>";
        }
        // Close result set
        mysqli_free_result($result_p);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not execute $pics. " . mysqli_error($connect);
}
echo "</div>";
echo "<br>";
echo "<button onclick=\"window.location.href = 'form2.html'\">Re-Try</button>";
// Close connection
mysqli_close($connect);
?>
</body>
</html>