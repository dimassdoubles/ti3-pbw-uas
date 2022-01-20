<?php 
include "connection.php";
if (isset($_POST['submit'])) {
    if (isset($_POST['judul']) && isset($_POST['isi'])) {
        $judul = $_POST['judul'];
        $isi = $_POST['isi'];
        if ($_FILES['uploadfile']['size']!=0) {
            $filename = $_FILES["uploadfile"]["name"];
            $temp_name = $_FILES["uploadfile"]["tmp_name"];
            $folder = "img/"."berita/".$filename;
            move_uploaded_file($temp_name, $folder);
            $insert = mysqli_query($connect, "INSERT INTO berita (id_berita, id_kategori, author, judul, isi, gambar, tanggal) VALUES (NULL, 'BDY', 'admin', '$judul', '$isi', '$filename', now())");
            // echo mysqli_error($connect);

        } else {
            // echo "#cek2";
            $insert = mysqli_query($connect, "INSERT INTO berita (id_berita, id_kategori, author, judul, isi, gambar, tanggal) VALUES (NULL, 'BDY', 'admin', '$judul', '$isi', NULL, now())");
        }

        if ($insert) {
            header("Location:dashboard.php");
        }
    }
}
?>

<div class="row">
    <div class="col-lg-12">
        <ol class="breadcrumb">
            <li><i class="fa fa-home"></i><a href="dashboard.php">Home</a></li>
            <li><i class="fa fa-laptop"></i><a href="dashboard.php?page=berita">Berita</a></li>
            <li><i class="fa fa-laptop"></i>Tambah Berita</li>						  	
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
                    <tbody>
                        
                            <tr>
                                <td style='width: 25%'><label for='judul'>Judul</label></td>
                                <td><input style='width: 100%' type='text' name='judul' value=''></td>
                            </tr>
                            <tr>
                                <td><label for='isi'>Isi</label></td>
                                <td><textarea style='width: 100%' name='isi' id='' cols='30' rows='10'></textarea></td>
                            </tr>
                            <tr>
                                <td>
                                    <label for='inputImage'>Pilih Gambar (Opsional)</label>
                                </td>
                                <td>
                                    <input type="file" name="uploadfile" accept="image/*">
                                </td>
                            </tr>
                    
                        </tbody>
                    
                </table>
                <button style="width: 100%" class="btn btn-primary" type="submit" name="submit">Submit</button>
            </form>
        </section>
    </div>
</div>