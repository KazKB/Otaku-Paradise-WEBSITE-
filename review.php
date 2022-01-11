<?php
session_start();
$review = $_POST["review"];

$writeReview = fopen("review.csv", "a") or die ("Unable to find file.");   //Open CSV File To Add New Review
fwrite($writeReview, "\n".$review);
fclose($writeReview);

header("Location: purchase.php");
?>