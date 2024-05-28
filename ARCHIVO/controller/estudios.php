<?php
require_once("../config/conecxion.php");
require_once("../model/estudios.php");
$estudios = new estudios();
switch($_GET["op"]){
    case "mostrar":
        $datos = $estudios->get_estudios_con_parametro($_POST["est_id"]);
        if(is_array($datos)==true and count($datos)<>0){
            foreach($datos as $row){
                $ouput["est_titulo"]=$row["est_titulo"];
                $ouput["est_lugar"]=$row["est_lugar"];
                $ouput["est_lugar"]=$row["est_anno"];
                $ouput["est_lugar"]=$row["est_tipo"];
            }
            echo json_encode($ouput);
        }
        break;
    case "modificar":
        $estudios->get_update_estudios(
            $_POST["est_id"],
            $_POST["est_titulo"],
            $_POST["est_lugar"],
            $_POST["est_anno"],
            $_POST["est_tipo"]
        );
        break;
    case "guardaryeditar":
        if(empty($_POST["est_id"])){
            $estudios->get_insert_estudios($_POST["est_tiulo"],$_POST["est_lugar"],$_POST["est_anno"],$_POST["est_tipo"]);
        }else{
            $estudios->get_update_estudios($_POST["est_id"],$_POST["est_titulo"],$_POST["est_lugar"],$_POST["est_anno"],$_POST["est_tipo"]);
        }
        break;
    case "eliminar":
        $estudios->get_delete_estudios($_POST["est_id"]);
        break;
    case "listar":
        $datos=$estudios->get_estudios();
        $data = Array();
        foreach($datos as $row){
            $sub_array = array();
            $sub_array[]= $row["est_titulo"];
            $sub_array[]=$row["est_lugar"];
            $sub_array[]=$row["est_anno"];
            $sub_array[]=$row["est_tipo"];
            $sub_array[]='<button type="button" onClick="editar('.$row["est_id"].');" id="'.$row["est_id"].'"
            class="btn btn-outline-warning btn-icon"><div><i class="fa fa-edit"<></i<>/div<>/button>';
            $sub_array[]='<button type="button" onClick="eliminar('.$row["est_id"].');" id="'.$row["est_id"].'"
            class="btn btn-outline-danger btn-icon"><div><i class="fa fa-close"<></i<>/div<>/button>';
            $data[] = $sub_array; 
        }
        $results = array(
            "sEcho"=>1,
            "itotalrecords"=>count($data),
            "itotaldisplayrecords"=>count($data),
            "aadata"=>$data);
        echo json_encode($results);
        break;


}
?>