<?php include ('dbconnect.php'); ?>


<?php
/*  $sql = "INSERT INTO Photo (picture_number, subject_n, locationa, date_taken, picture_url) 
VALUES (1, 'CN Tower', 'Ontario', '2019-11-13','https://images.unsplash.com/photo-1573674149092-3c3136ceee31?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80' )";
//add
$sql = "INSERT INTO Photo (picture_number, subject_n, locationa, date_taken, picture_url) 
VALUES (2, 'Museum', 'Quebec', '2018-11-04','https://images.unsplash.com/photo-1541354329998-f4d9a9f9297f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80' )";
//add
*/

$sql = "INSERT INTO Photo (picture_number, subject_n, locationa, date_taken, picture_url) 
VALUES (3, 'Cityscape', 'Alberta', '2018-06-04','https://images.unsplash.com/photo-1528144970445-ce8fe2893296?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80' )";
/*
$sql = "INSERT INTO Photo (picture_number, subject_n, locationa, date_taken, picture_url) 
VALUES (4, 'Downtown', 'Ontario', '2018-01-30','https://images.unsplash.com/photo-1517328894681-0f5dfabd463c?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=764&q=80' )";

$sql = "INSERT INTO Photo (picture_number, subject_n, locationa, date_taken, picture_url) 
VALUES (5, 'Vancouver', 'BC', '2021-03-04','https://images.unsplash.com/photo-1614892370243-319d3aad772c?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=687&q=80' )";

$sql = "INSERT INTO Photo (picture_number, subject_n, locationa, date_taken, picture_url) 
VALUES (6, 'Downtown', 'Ontario', '2020-03-21','https://images.unsplash.com/photo-1584809424080-9f7d12858f09?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=687&q=80' )";

$sql = "INSERT INTO Photo (picture_number, subject_n, locationa, date_taken, picture_url) 
VALUES (7, 'Montreal', 'Quebec', '2020-03-28','https://images.unsplash.com/photo-1585436016231-8291116b42a6?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=687&q=80' )";

$sql = "INSERT INTO Photo (picture_number, subject_n, locationa, date_taken, picture_url) 
VALUES (8, 'Vancouver', 'BC', '2020-12-31','https://images.unsplash.com/photo-1609473811812-f30a66d912e4?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=2670&q=80' )";

//add

$sql = "INSERT INTO Photo (picture_number, subject_n, locationa, date_taken, picture_url) 
VALUES (9, 'Winnipeg', 'Manitoba', '2021-01-13','https://images.unsplash.com/photo-1610595161872-a2118a7940f0?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=850&q=80' )";
/*
$sql = "INSERT INTO Photo (picture_number, subject_n, locationa, date_taken, picture_url) 
VALUES (10, 'Jasper', 'Alberta', '2021-11-14','https://images.unsplash.com/photo-1613297595628-6a29bb7fd0a6?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1470&q=80' )";*/
if (mysqli_query($connect, $sql)) {
    echo "New record created successfully.<br>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connect);
}


?>
