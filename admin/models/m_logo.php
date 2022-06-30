<?php
require_once("database.php");
class M_logo extends database
{
    function doc_logo(){
        $sql = "select * from logo";
        return $this->loadRow($sql);
    }
    function update_logo($hinh){
        $sql = "UPDATE logo SET Hinh='$hinh' WHERE id = 1";
        return $this->execute($sql);
    }
}
?>
