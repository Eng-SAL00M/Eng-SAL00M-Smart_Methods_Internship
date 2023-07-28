<?php
$conn = mysqli_connect("localhost","root","","direct");

$query = "SELECT direction FROM dir_data ORDER BY created_at DESC LIMIT 1"; // select the latest inserted chareacter
$query_run = mysqli_query($conn,$query); //retrive form the database
if(mysqli_num_rows($query_run) > 0){
    foreach($query_run as $row){
        ?>
        <p><?= $row['direction']; ?></p> <!--print it out-->
        <?php
    }
}

?>