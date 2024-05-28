<?php
   class informacionpersonal extends conectar{
    public function get_informacionpersonal(){
        $informacion_personal =parent::conexion();
        parent::set_names();
        $sql="SELECT * FROM informacion_personal WHERE est=1";
        $sql=$informacion_personal->prepare($sql);
        $sql->execute();
        return $resultado=$sql->fetchAll();
    }
    public function get_informacionpersonal_con_parametro($info_id){
        $informacion_personal =parent::conexion();
        parent::set_names();
        $sql="SELECT * FROM informacion_personal WHERE info_id=?";
        $sql=$informacion_personal->prepare($sql);
        $sql->bindValue(1,$info_id);
        $sql->execute();
        return $resultado=$sql->fetchAll();
    }
    public function get_delete_informacionpersonal($info_id){
        $informacion_personal =parent::conexion();
        parent::set_names();  
        $sql="UPDATE informacion_personal SET est=0 WHERE info_id=?";
        $sql=$informacion_personal->prepare($sql);
        $sql->bindValue(1,$info_id);
        $sql->execute();
        return $resultado=$sql->fetchAll();
    }
    public function get_insert_informacionpersonal($info_nacimiento,$inf_celular,$info_email,$info_url,$info_direccion,$info_cargo){
        $informacion_personal =parent::conexion();
        parent::set_names();
        $sql="INSERT imformacion_personal(info_id,info_nacimiento,inf_celular,info_email,info_url,info_url,info_direccion,info_cargo,est VALUES(NULL,?,?,?,?,1)";
        $sql=$informacion_personal->prepare($sql);
        $sql->bindValue(1,$info_nacimiento);
        $sql->bindValue(2,$inf_celular);
        $sql->bindValue(3,$info_email);
        $sql->bindValue(4,$info_url;
        $sql->execute();
        return $resultado=$sql->fetchAll();
    }
    public function get_update_estudios($est_id,$est_titulo,$est_lugar,$est_anno,$est_tipo){
        $estudios =parent::conexion();
        parent::set_names();
        $sql="UPDATE estudios
                SET 
                   est_titulo=?,
                   est_lugar=?,
                   est_anno=?,
                   est_tipo=?
                WHERE
                   est_id=?";
        $sql=$estudios->prepare($sql);
        $sql->bindValue(1,$est_titulo);
        $sql->bindValue(2,$est_lugar);
        $sql->bindValue(3,$est_anno); 
        $sql->bindValue(4,$est_tipo); 
        $sql->bindValue(5,$est_id); 
        $sql->execute();
        return $resultado=$sql->fetchAll();          
    }
   }
?>