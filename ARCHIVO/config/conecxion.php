<?php session_start();
class conectar{
    protected $dbh;
    protected function conexion(){
        try{
            $conectar =$this->dbh = new PDO("mysql:localhost;dbname=proyecto","root","");
            return $conectar;
        } catch(Exception $e){
            print"¡error BD!:" . $e->getMessage() ."<br/>";
            die();
        }
    }
    public function set_names(){
        return $this->dbh->query("SET NAMES'utf8'");
    }
    public static function ruta(){
        return "http://localhost/PARCIAL/";
    }

}
?>