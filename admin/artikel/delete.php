<?php
// include config connection file
include_once("../../config.php");
include('session.php');

// Get id from URL to delete that user
$id = @$_GET['id'];
$sql = "SELECT image FROM article WHERE id='$id'";
$result = mysqli_query($mysqli, $sql);
if ($result->num_rows ==  0) {
    $row = mysqli_fetch_assoc($result);
    if (file_exists('uploads/' . $filename)) {
        unlink('uploads/' . $filename);
        echo 'File ' . $row['image'] . ' has been deleted';
    } else {
        echo 'Could not delete ' . $row['image'] . ', file does not exist';
    }
}
// Delete user row from table based on given id

$result = mysqli_query($mysqli, "DELETE FROM article WHERE id=$id");

// After delete redirect to Home, so that latest user list will be displayed.
header("Location:../dashboard.php?page=artikel");
