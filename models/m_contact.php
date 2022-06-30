<?php
require_once("database.php");
class M_contact extends database
{
    function contact(){
        $sql = "select * from contact WHERE id = 1";
        return $this->loadRow($sql);
    }
}
?>
