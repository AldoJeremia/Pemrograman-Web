<?php
$koneksi = mysqli_connect("localhost", "root", "", "sebelas");

$name = $_POST['name'];
$email = $_POST['email'];
$address = $_POST['address'];
$gender = $_POST['gender'];
$position = $_POST['position'];
$status = $_POST['status'];
$submit = $_POST['submit'];

$query = "INSERT INTO praks VALUES('$name','$email','$address','$gender','$position','$status','$submit')";

mysqli_query($koneksi, $query);
if (isset($_POST["submit"])) {
    header('Location: tampil.php');
    exit;
}
