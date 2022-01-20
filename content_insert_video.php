<?php 
include "connection.php";
if (isset($_POST['submit'])) {
    if (isset($_POST['link'])) {
        $link = $_POST['link'];
        $insert = mysqli_query($connect, "INSERT INTO video (id_video, link) VALUES(NULL, '$link')");

        if ($insert) {
            header("Location: dashboard.php?page=video");
        }
    }
}
?>

<div class="row">
    <div class="col-lg-12">
        <ol class="breadcrumb">
            <li><i class="fa fa-home"></i><a href="dashboard.php">Home</a></li>
            <li><i class="fa fa-laptop"></i><a href="dashboard.php?page=video">Video</a></li>
            <li><i class="fa fa-laptop"></i>Insert Video</li>						  	
        </ol>
    </div>
</div>              
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Berita
            </header>
            <form action="" method="POST">    
                <table class="table table-striped table-advance table-hover">

                    <tr>
                        <td style='width: 25%'><label for='judul'>Judul</label></td>
                        <td><input style='width: 100%' type='text' name='link' value=''></td>
                    </tr>
                    
                </table>
                <button style="width: 100%" class="btn btn-primary" type="submit" name="submit">Submit</button>
            </form>
        </section>
    </div>
</div>