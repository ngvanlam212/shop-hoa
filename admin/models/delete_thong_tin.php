<?php
    if(isset($_POST['delete_id'])){
        $id = $_POST['delete_id'];
        include("database.php");
        $db = new database();
        $sql = "DELETE FROM thong_tin WHERE id = $id";
        return $db->execute($sql);
    }
?>