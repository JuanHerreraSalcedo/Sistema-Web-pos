<?php 

require_once "../modelos/categoria.php";

$categoria = new categoria();

$idcategoria = isset($_POST["idcategoria"])? limpiarCadena($_POST["idcategoria"]):"";

$nombre = isset($_POST["nombre"])? limpiarCadena($_POST["nombre"]):"";

$descripcion = isset($_POST["descripcion"])? limpiarCadena($_POST["descripcion"]):"";

// localhost. com?op=guardareditar
switch($_GET["op"]){
    case 'guardareditar':
        if(empty($idcategoria)){

            $respuesta=$categoria->insertar($nombre,$descripcion);
            echo $respuesta? "Categoria registrada" : "Categoria no se pudo registrar";
        }else{
            $respuesta=$categoria->editar($idcategoria,$nombre,$descripcion);
            echo $respuesta? "Categoria actualizada" : "Categoria no se pudo actualizar";
        }
        break;
        
        break;

    case 'desactivar':
        $respuesta=$categoria->desactivar($idcategoria);
        echo $respuesta ? "Categoria desactivada" : "Categoria no se pudo desactivar";

        break;

        break;
        
    case 'activar':
        $respuesta=$categoria->desactivar($idcategoria);
        echo $respuesta ? "Categoria activada" : "Categoria no se pudo activar";

        break;

        break;

    case 'mostrar':
        $respuesta=$categoria->mostrar($idcategoria);
        echo json_encode($respuesta);
        break;

        break;

    case 'listar':

        $respuesta=$categoria->listar();

        $data=Array();

        while($resp=$respuesta->fetch_object()){
            
            $data[]=array(

                "0"=>$resp->idcategoria,
                "1"=>$resp->nombre,
                "2"=>$resp->descripcion,
                "3"=>$resp->condicion,
            );
        }

        $result=array(

            "echo"=>1,
            "totalrecords"=>count($data),
            "iTotalDisplayRecords"=>count($data),
            "aaData"=>$data);
            echo json_encode($result);
        

        break;

        break;
}
