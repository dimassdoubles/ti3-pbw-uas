<?php  
include "connection.php";
?>
<div class="row">
    <div class="col-lg-12">
        <ol class="breadcrumb">
            <li><i class="fa fa-home"></i><a href="dashboard.php">Home</a></li>
            <li><i class="fa fa-laptop"></i>Pesanan</li>						  	
        </ol>
    </div>
</div>              
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Pesanan
            </header>
                
            <table class="table table-striped table-advance table-hover">
                <tbody>
                    <tr>
                        <th>ID</th>
                        <th>Nama Pemesan</th>
                        <th>Email Pemesan</th>
                        <th>Paket Yang Dipilih</th>
                        <th>Jumlah</th>
                        <th>Total</th>
                        <th>Action</th>
                    </tr>
                    <?php  
                    $sql = mysqli_query($connect,"SELECT * FROM pesanan ORDER BY id_pesanan DESC");    
                    while($hasil = mysqli_fetch_array($sql)) {
                        $id_pesanan = $hasil['id_pesanan'];  	
                        $nama  = stripslashes($hasil['nama']);  
                        $email = stripslashes($hasil['email']);
                        $paket = stripslashes($hasil['paket']);
                        $jumlah = $hasil['jumlah'];
                        $total = $hasil['total']; 
                    ?>		  
                    <tr>
                        <td>
                            <?php echo $id_pesanan; ?>
                        </td>
                        <td style="max-width: 15rem">
                            <?php echo $nama;?>
                        </td>
                        <td style="max-width: 25rem">
                            <?php echo $email;?>
                        </td>
                        <td>
                            <?php echo $paket;?>
                        </td>
                        <td>
                            <?php echo $jumlah; ?>
                        </td>
                        <td>
                            <?php echo $total; ?>
                        </td>
                        <td style="max-width: 11rem">
                        <?php
                            $table = "pesanan";
                            $column = "id_pesanan";
                            echo "<div class='btn-group'>
                                    <a class='btn btn-danger' href='delete.php?table=$table&column=$column&value=$id_pesanan'><i class='icon_close_alt2'></i></a>
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