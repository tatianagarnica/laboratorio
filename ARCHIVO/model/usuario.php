<?php 
class usuario extends conectar{
    public function login(){
        $conectar = parent::conexion();
        parent:: set_names();
        if(isset($_POST["enviar"])){
            $correo = $_POST["correo"];
            $password = $_POST["passwd"];
            if (empty($correo)and empty($password)){
                header("location:" .conectar::ruta(). "login.php?m=2");
                exit();
            }else{
                $sql= "SELECT * FROM usuarios WHERE correo =? and password =? and estado =1";
                $stmt=$conectar->prepare($sql);
                $stmt->bindValue(1,$correo);
                $stmt->bindValue(2,$password);
                $stmt->execute();
                $resultado = $stmt->fetch();
                if (is_array($resultado)and count($resultado)>0){
                    $_SESSION["usu_id"]=$resultado["usu_id"];
                    $_SESSION["usu_nom"]=$resultado["usu_nom"];
                    $_SESSION["usu_apep"]=$resultado["usu_apep"];
                    $_SESSION["usu_correo"]=$resultado["usu_correo"];
                    header("location:" .conectar::ruta(). "views/inicio.php");
                    exit();
                }else{
                    header("location:".conectar::ruta()."login.php?m=1");
                }

            }

        }
    }
}
?>