<?php 
include "connection.php";
if (isset($_POST['submit'])) {
    if ($_FILES['uploadfile'] != null) {
        $filename = $_FILES['uploadfile']['name'];
        $temp_name = $_FILES['uploadfile']['tmp_name'];
        $foler = "img/"."galeri/".$filename;
        move_uploaded_file($temp_name, $foler);
        $insert = mysqli_query($connect, "INSERT INTO galeri (id_gambar, gambar) VALUES (NULL, '$filename')");
        if ($insert) {
            header("location: dashboard.php?page=galeri");
        }
    }
}
?>

<div class="row">
    <div class="col-lg-12">
        <ol class="breadcrumb">
            <li><i class="fa fa-home"></i><a href="dashboard.php">Home</a></li>
            <li><i class="fa fa-laptop"></i><a href="dashboard.php?page=galeri">Galeri</a></li>
            <li><i class="fa fa-laptop"></i>Insert Gambar</li>						  	
        </ol>
    </div>
</div>              
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Berita
            </header>
            <form action="" method="POST" enctype="multipart/form-data">    
                <table class="table table-striped table-advance table-hover">

                    <tr>
                        <td>
                            <label for='inputImage'>Pilih Gambar (Opsional)</label>
                        </td>
                        <td>
                            <input type="file" name="uploadfile" accept="image/*">
                        </td>
                    </tr>
                    
                </table>
                <button style="width: 100%" class="btn btn-primary" type="submit" name="submit">Submit</button>
            </form>
        </section>
    </div>
</div>