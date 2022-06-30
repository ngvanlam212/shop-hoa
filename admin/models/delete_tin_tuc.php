<?php
    if(isset($_POST['delete_id'])){
        $id = $_POST['delete_id'];
        include("database.php");
        $db = new database();
        $sql = "DELETE FROM tin_tuc WHERE tin_tuc.MaTT =$id";
        return $db->execute($sql);
    }
?>