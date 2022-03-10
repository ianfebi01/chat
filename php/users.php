<?php
    session_start();
    include_once "config.php";
    $outgoing_id = $_SESSION['unique_id'];
    $sql = mysqli_query($conn, "SELECT * FROM users WHERE NOT unique_id = {$outgoing_id} ORDER BY fname ASC");
    $output = "";

    if(mysqli_num_rows($sql) == 0){
        $output .= "Tidak ada pengguna untuk memulai chat. ";  
        // include "data.php";
    }elseif(mysqli_num_rows($sql) > 0){
        include "data.php"; 
    }
    echo $output;
?>