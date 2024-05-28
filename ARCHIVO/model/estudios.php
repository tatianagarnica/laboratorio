<?php
   class estudios extends conectar{
    public function get_estudios(){
        $estudios =parent::conexion();
        parent::set_names();
        $sql="SELECT * FROM estudios WHERE est=1";
        $sql=$estudios->prepare($sql);
        $sql->execute();
        return $resultado=$sql->fetchAll();
    }
    public function get_estudios_con_parametro($est_id){
        $estudios =parent::conexion();
        parent::set_names();
        $sql="SELECT * FROM estudios WHERE est_id=?";
        $sql=$estudios->prepare($sql);
        $sql->bindValue(1,$est_id);
        $sql->execute();
        return $resultado=$sql->fetchAll();
    }
    public function get_delete_estudios($est_id){
        $estudios =parent::conexion();
        parent::set_names();
        $sql="UPDATE estudios SET est=0 WHERE est_id=?";
        $sql=$estudios->prepare($sql);
        $sql->bindValue(1,$est_id);
        $sql->execute();
        return $resultado=$sql->fetchAll();
    }
    public function get_insert_estudios($est_titulo,$est_lugar,$est_anno,$est_tipo){
        $estudios =parent::conexion();
        parent::set_names();
        $sql="INSERT estudios(est_id,est_titulo,est_lugar,est_anno,est_tipo,est VALUES(NULL,?,?,?,?,1)";
        $sql=$estudios->prepare($sql);
        $sql->bindValue(1,$est_titulo);
        $sql->bindValue(2,$est_lugar);
        $sql->bindValue(3,$est_anno);
        $sql->bindValue(4,$est_tipo);
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
