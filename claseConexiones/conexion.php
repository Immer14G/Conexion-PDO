<?php
class ConexionPoo {

  private $host;
  private $db;
  private $user;
  private $password;
  private $conexion;

  public function __construct($host, $db, $user, $password) {
    $this->host = $host;
    $this->db = $db;
    $this->user = $user;
    $this->password = $password;
  }

  public function conectar() {
    try {
      $opciones = array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
      );
      $this->conexion = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->db, $this->user, $this->password, $opciones);
      if ($this->conexion) {
        echo "Conexión exitosa";
      } else {
        echo "Falló la conexión";
      }
    } catch (PDOException $e) {
      echo "Error de conexión: " . $e->getMessage();
      die();
    }
  }

  public function desconectar() {
    $this->conexion = null;
    echo "Base de datos desconectada";
  }
}

$host = "localhost";
$db = "dbclasPoo";
$user = "root";
$password = "";

?>

 

?>