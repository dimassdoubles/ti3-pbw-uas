<?php  
include "connection.php";
?>
<div class="row">
    <div class="col-lg-12">
        <ol class="breadcrumb">
            <li><i class="fa fa-home"></i><a href="dashboard.php">Home</a></li>
            <li><i class="fa fa-laptop"></i>Komentar</li>						  	
        </ol>
    </div>
</div>              
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Komentar
            </header>
                
            <table class="table table-striped table-advance table-hover">
                <tbody>
                    <tr>
                        <th>Nama</th>
                        <th>Komentar</th>
                        <th>Action</th>
                    </tr>
                    <?php  
                    $sql = mysqli_query($connect,"SELECT * FROM komentar ORDER BY id_komentar DESC");    
                    while($hasil = mysqli_fetch_array($sql)) {
                        $id_komentar = $hasil['id_komentar'];  	
                        $nama  = stripslashes($hasil['nama']);  
                        $komentar = stripslashes($hasil['komentar']);
                    ?>		  
                    <tr>
                        <td>
                            <?php echo $nama;?>
                        </td>
                        <td>
                            <?php echo $komentar;?>
                        </td>
                        <td style="max-width: 11rem">
                        <?php
                            $table = "komentar";
                            $column = "id_komentar";
                            echo "<div class='btn-group'>
                                    <a class='btn btn-danger' href='delete.php?table=$table&column=$column&value=$id_komentar'><i class='icon_close_alt2'></i></a>
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