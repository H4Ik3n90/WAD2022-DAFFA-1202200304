<?php 
    require 'connector.php';

    // delete item 
    if(isset($_POST["delete_car"])) {
        // get id 
        $id = $_POST["id_mobil_hapus"];

        // make query for delete
        $query_syntax = "DELETE FROM showroom_daffa_table WHERE id_mobil=$id";

        // perform delete
        $query_delete = mysqli_query($connection, $query_syntax);
    }

    // redirect after delete item
    header("Location:/TUGAS_PRAKTIKUM_WAD/MODUL3%20DAFFA/pages/ListCar-DAFFA.php");
?>