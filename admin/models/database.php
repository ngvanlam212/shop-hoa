<?php
    require_once "config.php";
?>

<?php
class Database{
    public $host   = DB_HOST;
    public $user   = DB_USER;
    public $pass   = DB_PASS;
    public $dbname = DB_NAME;
 
    public $conn;
    public $error;

    public function __construct(){
        $this->connectDB();
        $this->conn->set_charset("utf8");
    }
 
private function connectDB(){
   $this->conn = new mysqli($this->host, $this->user, $this->pass, 
    $this->dbname);
   if(!$this->conn){
     $this->error ="Connection fail".$this->conn->connect_error;
    return false;
   }
 }

public function execute($sql) {
  return $this->conn->query($sql);
}

public function loadAllRows($sql) {
  $result = $this->execute($sql);
  if (!$result) {
    return false;
  }
  $data = [];
  while(($row = $result->fetch_assoc())) {
      $data[] =  $row;
  }
  return $data;
}

public function loadRow($sql) {
  $result = $this->execute($sql);
  if (!$result) {
    return false;
  }
  return $result->fetch_assoc();
}
 
// // Select or Read data
// public function select($query){
//   $result = $this->conn->query($query) or 
//    die($this->conn->error.__LINE__);
//   if($result->num_rows > 0){
//     return $result;
//   } else {
//     return false;
//   }
//  }
 
// // Insert data
// public function insert($query){
//    $insert_row = $this->conn->query($query) or 
//      die($this->conn->error.__LINE__);
//    if($insert_row){
//      return $insert_row;
//    } else {
//      return false;
//     }
//  }
  
// // Update data
//  public function update($query){
//    $update_row = $this->conn->query($query) or 
//      die($this->conn->error.__LINE__);
//    if($update_row){
//     return $update_row;
//    } else {
//     return false;
//     }
//  }
  
// // Delete data
//  public function delete($query){
//    $delete_row = $this->conn->query($query) or 
//      die($this->conn->error.__LINE__);
//    if($delete_row){
//      return $delete_row;
//    } else {
//      return false;
//     }
//    }

  public function disconnect() {
    $this->conn = NULL;
  }
}
?>
