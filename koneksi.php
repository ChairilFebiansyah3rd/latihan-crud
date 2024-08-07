<?php
    $koneksi = mysqli_connect( 'localhost', 'root', '', 'cf_smkmutu');

    if (!$koneksi){
        die(mysqli_connect_error($koneksi));
    }

?>