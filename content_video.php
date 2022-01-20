<?php  
include "connection.php";
?>
<div class="row">
    <div class="col-lg-12">
        <ol class="breadcrumb">
            <li><i class="fa fa-home"></i><a href="dashboard.php">Home</a></li>
            <li><i class="fa fa-laptop"></i>Video</li>						  	
        </ol>
    </div>
</div>              
<div class="row">
    <div class="col-lg-12">
        <a class="btn btn-success" href="dashboard.php?page=insert_video" style="margin-bottom: 8px;">Tambah Video</a>
        <section class="panel">
            <header class="panel-heading">
                Video
            </header>  
            <table class="table table-striped table-advance table-hover">
                <tbody>
                    <tr>
                        <th>Link Video</th>
                        <th>Action</th>
                    </tr>
                    <?php  
                    $sql = mysqli_query($connect,"SELECT * FROM video ORDER BY id_video DESC");    
                    while($hasil = mysqli_fetch_array($sql)) {
                        $id_video = $hasil['id_video'];  	
                        $video  = stripslashes($hasil['link']);  
                    ?>		  
                    <tr>
                        <td >
                            <a href="<?php echo $video;?>"><?php echo $video;?></a>
                        </td>
                        <td style="max-width: 11rem">
                        <?php
                            $table = "video";
                            $column = "id_video";
                            echo "<div class='btn-group'>
                                    <a class='btn btn-danger' href='delete.php?table=$table&column=$column&value=$id_video'><i class='icon_close_alt2'></i></a>
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