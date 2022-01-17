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
$sql = "SELECT * FROM Photo ORDER BY date_taken DESC";
if($result = mysqli_query($connect, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
        echo "<h3> Part A </h3><br>";
            echo "<tr>";
                echo "<th>Subject</th>";
                echo "<th>Location</th>";
                echo "<th>Date</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['subject_n'] . "</td>";
                echo "<td>" . $row['locationa'] . "</td>";
                echo "<td>" . $row['date_taken'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Close result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($connect);
}
echo "<div>";
echo "<h3> Part B </h3><br>";
$pics = "SELECT * FROM Photo WHERE locationa = 'Ontario'";
if($result_p = mysqli_query($connect, $pics)){
    if(mysqli_num_rows($result_p) > 0){
        while($row = mysqli_fetch_array($result_p)){
            echo "<br>";
            echo "<img src=" . $row['picture_url'] . " width='133' height='133' style='border-radius:15px;border:1px solid red;'>";
            echo "<br>";
        }
        // Close result set
        mysqli_free_result($result_p);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $pics. " . mysqli_error($connect);
}
echo "</div>";

echo "<h3> Part C </h3><br>";

//get one img
$oneimg = "SELECT picture_url FROM Photo ORDER BY RAND() LIMIT 1";
if($result_p = mysqli_query($connect, $oneimg)){
    if(mysqli_num_rows($result_p) > 0){
        while($row = mysqli_fetch_array($result_p)){
            echo "<img src=" . $row['picture_url'] . " width='133' height='133' style='border-radius:15px;border:1px solid red;'>";
            echo "<br>";
        }
        // Close result set
        mysqli_free_result($result_p);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $oneimg. " . mysqli_error($connect);
}
//count rows
echo "<br>";
$count_f = "select count(1) FROM Photo";
$result_f = mysqli_query($connect, $count_f);
$row_f = mysqli_fetch_array($result_f);
$total_f = $row_f[0];
echo "Total rows: " . $total_f;
echo "<br>";

// Close connection
mysqli_close($connect);
?>

</body>
</html>
