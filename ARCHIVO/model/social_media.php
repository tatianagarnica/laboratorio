<?php
   class socialmedia extends conectar{
    public function get_socialmedia(){
        $social =parent::conexion();
        parent::set_names();
        $sql="SELECT * FROM social_media WHERE est=1";
        $sql=$social->prepare($sql);
        $sql->execute();
        return $resultado=$sql->fetchAll();
    }
    public function get_socialmedia_con_parametro($socmed_id){
        $social =parent::conexion();
        parent::set_names();
        $sql="SELECT * FROM social_media WHERE socmed_id=?";
        $sql=$social->prepare($sql);
        $sql->bindValue(1,$socmed_id);
        $sql->execute();
        return $resultado=$sql->fetchAll();
    }
    public function get_delete_socialmedia($socmed_id){
        $social =parent::conexion();
        parent::set_names();
        $sql="UPDATE usuarios SET est=0 WHERE socmed_id=?";
        $sql=$social->prepare($sql);
        $sql->bindValue(1,$socmed_id);
        $sql->execute();
        return $resultado=$sql->fetchAll();
    }
    public function get_insert_socialmedia($socmed_icono,$socmed_url){
        $social =parent::conexion();
        parent::set_names();
        $sql="INSERT social_media(socmed_id,socmed_icono,socmed_url,est) VALUES(NULL,?,?,1)";
        $sql=$social->prepare($sql);
        $sql->bindValue(1,$socmed_icono);
        $sql->bindValue(2,$socmed_url);
        $sql->execute();
        return $resultado=$sql->fetchAll();
    }
    public function get_update_socialmedia($socmed_id,$socmed_icono,$socmed_url){
        $social =parent::conexion();
        parent::set_names();
        $sql="UPDATE usuarios
                SET 
                   socmed_icono=?,
                   socmed_url=?
                WHERE
                   socmed_id=?";
        $sql=$social->prepare($sql);
        $sql->bindValue(1,$socmed_icono);
        $sql->bindValue(2,$socmed_url);
        $sql->bindValue(3,$socmed_id); 
        $sql->execute();
        return $resultado=$sql->fetchAll();          
    }
   }
?>
