<?php
    require_once $_SERVER['DOCUMENT_ROOT'] ."/Site/conexao.php";
    require_once "Imp_Bk.php";

    // Metodos GET
    if(isset($_GET["method"])){
        $type = $_GET["method"];

        switch($type){
            case "DEL":
                if(!isset($_GET["id"])){
                    echo "Id não informado";
                    exit;
                }

                $id = $_GET["id"];

                $service = new Imp_bk_Service($mysqli);
                if($service->deletar($id)){
                    echo "Desktop removido com sucesso";
                }else{
                    echo "Não foi possível remover o Desktop";
                }

                header("Location: ../../../cadastro.php");
                break;
            default:
                echo "Tipo de operação não identificada.";
                break;
        }
    }else{
        echo "Tipo de requisição não identificada.";
    }

?>