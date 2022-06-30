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

  public function getLastId() {
    return $this->conn->insert_id;
  }

  public function disconnect() {
    $this->conn = NULL;
  }
}
?>
