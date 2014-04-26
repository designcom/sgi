<?php
    require_once '../../session.php';
    if($_POST['contaToken'] == $_SESSION["token"]){
    
        require_once '../../conexaoBD/coneXao.php';
        
        $imovel = $_POST['imovel'];
        $cliente = $_POST['id-cliente'];
        $fiador = $_POST['id-fiador'];
        $valor = $_POST['valor'];
        $dtinicial = $_POST['dtinicial'];
        $dtfinal = $_POST['dtfinal'];
        $formaPgto = $_POST['formaPagto'];
        $usuario = $_POST['usuario'];
        $dataC = $_POST['dataC'];
        
        /* SQL Adiciona registro */
        $sql = "INSERT INTO conta (imovel,cliente,fiador,valor,dtinicial,dtfinal,formaPgto,usuario,dataC) 
            VALUES ('$imovel','$cliente','$fiador','$valor','$dtinicial','$dtfinal','$formaPgto','$usuario','$dataC')";
        $r = mysql_query($sql);
        
        $sql1 = "update imoveis set situacao=2 where idImovel='$imovel' limit 1;";
        $r1 = mysql_query($sql1);
        
        if($r){
            header('Location: ../../index.php');
        }
        /* SQL ALtera registro */
    }else{
        /*ERRO*/
        echo 'Ops algo errado, Tente novamente!';
        /*sleep(5);
        header('Location: ../../index.php');*/
    }
?>
