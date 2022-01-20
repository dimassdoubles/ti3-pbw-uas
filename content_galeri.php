<?php  
include "connection.php";
?>
<div class="row">
    <div class="col-lg-12">
        <ol class="breadcrumb">
            <li><i class="fa fa-home"></i><a href="dashboard.php">Home</a></li>
            <li><i class="fa fa-laptop"></i>Galeri</li>						  	
        </ol>
    </div>
</div>              
<div class="row">
    <div class="col-lg-12">
        <a class="btn btn-success" href="dashboard.php?page=insert_gambar" style="margin-bottom: 8px;">Tambah Gambar</a>
        <section class="panel">
            <header class="panel-heading">
                Galeri
            </header>
                
            <table class="table table-striped table-advance table-hover">
                <tbody>
                    <tr>
                        <th>Nama</th>
                        <th>Gambar</th>
                        <th>Action</th>
                    </tr>
                    <?php  
                    $sql = mysqli_query($connect,"SELECT * FROM galeri ORDER BY id_gambar DESC");    
                    while($hasil = mysqli_fetch_array($sql)) {
                        $id_gambar = $hasil['id_gambar'];  	
                        $gambar  = $hasil['gambar'];  
                    ?>		  
                    <tr>
                        <td style="min-width: 45rem">
                            <?php echo $gambar;?>
                        </td>
                        <td>
                            <img style="width: 50%" src="img/galeri/<?php echo $gambar;?>" alt="">
                        </td>
                        <td style="max-width: 11rem">
                        <?php
                            $table = "galeri";
                            $column = "id_gambar";
                            echo "<div class='btn-group'>
                                    <a class='btn btn-danger' href='delete.php?table=$table&column=$column&value=$id_gambar'><i class='icon_close_alt2'></i></a>
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