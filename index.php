<?php
    require_once("session.php");
    if(!isset($_SESSION['idUsuario'])) {
        require_once('login.php');
    }else{
        include 'admin/header.php';
        include 'admin/mosaico.php';
        
        $pg = isset( $_GET['pg'] ) ? $_GET['pg'] : null;
        switch ( $pg ){
            case 'cliente':include "modulo/cliente/cliente.php";break;
            case 'listar-cliente':include "modulo/cliente/listar.php";break;
            
            case 'imoveis':include "modulo/imoveis/imovel.php";break;
            case 'listar-imoveis':include "modulo/imoveis/listar.php";break;
            case 'locar':include "modulo/conta/locar.php";break;
	
            default:
                //include ("resumo.php");
            break;
        }
    }
?>

