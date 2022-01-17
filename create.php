<?php include ('dbconnect.php'); ?>

<?php
// creating a table with 5 fields
$sql = "CREATE TABLE Photo (
   picture_number INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
   subject_n VARCHAR(20) NOT NULL, 
   locationa VARCHAR(20) NOT NULL, 
   date_taken VARCHAR(20) NOT NULL,
   picture_url VARCHAR(255) NOT NULL); ";

if (mysqli_query($connect, $sql)) {
    echo "New table created successfully.<br>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connect);
}
?>

