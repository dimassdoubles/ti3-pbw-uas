<?php 

include "../connection.php";

if (isset($_GET['table']) && isset($_GET['column']) && isset($_GET['value'])) {

    $table = $_GET['table'];
    $column = $_GET['column'];
    $value = $_GET['value'];
    
    $delete = mysqli_query($connect, "DELETE FROM $table WHERE $column='$value'");

    if ($delete) {
        if ($table == "berita") {
            header("location: dashboard.php?page=berita");
        } else if ($table == "galeri") {
            header("location: dashboard.php?page=galeri");
        } else if ($table == "pesanan") {
            header("location: dashboard.php?page=pesanan");
        } else if ($table == "video") {
            header("location: dashboard.php?page=video");
        }
    }
    
}
?>