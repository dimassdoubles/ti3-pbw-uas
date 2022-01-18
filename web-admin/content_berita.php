<?php  
include "../connection.php";
?>
<div class="row">
    <div class="col-lg-12">
        <h3 class="page-header"><i class="fa fa-laptop"></i> Masters</h3>
        <ol class="breadcrumb">
            <li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
            <li><i class="fa fa-laptop"></i>Berita</li>						  	
        </ol>
    </div>
</div>              
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Berita
            </header>
                
            <table class="table table-striped table-advance table-hover">
                <tbody>
                    <tr>
                        <th>Tanggal</th>
                        <th>Kategori</th>
                        <th>Judul</th>
                        <th>Author</th>
                        <th>Action</th>
                    </tr>
                    <?php  
                    $sql = mysqli_query($connect,"SELECT * FROM berita ORDER BY tanggal DESC");    
                    while($hasil = mysqli_fetch_array($sql)) {
                        $id_berita = $hasil['id_berita'];  	
                        $judul  = stripslashes($hasil['judul']);  
                        $kategori = stripslashes($hasil['id_kategori']);
                        $author = stripslashes($hasil['author']);
                        $author_name = mysqli_fetch_array(mysqli_query($connect, "SELECT * FROM user WHERE username='$author'"))['nama'];
                        $isi = stripslashes($hasil['isi']);  
                        $gambar = stripslashes($hasil['gambar']);  
                        $tanggal  = stripslashes($hasil['tanggal']);   
                    ?>		  
                    <tr>
                        <td style="max-width: 15rem">
                            <?php echo $tanggal;?>
                        </td>
                        <td>
                            <?php echo $kategori;?>
                        </td>
                        <td style="max-width: 25rem">
                            <?php echo $judul;?>
                        </td>
                        <td>
                            <?php echo $author_name;?>
                        </td>
                        <td style="max-width: 11rem">
                        <?php
                            $table = "berita";
                            $column = "id_berita";
                            echo "<div class='btn-group'>
                                    <a class='btn btn-primary' href=''><i class='icon_plus_alt2'></i></a>
                                    <a class='btn btn-success' href='#'><i class='icon_check_alt2'></i></a>
                                    <a class='btn btn-danger' href='delete.php?table=$table&column=$column&value=$id_berita'><i class='icon_close_alt2'></i></a>
                                </div>"
                        ?>
                        </td>
                    </tr>
                    <?php 
                    } 
                    ?>
                </tbody>
            </table>
        </section>
    </div>
</div>