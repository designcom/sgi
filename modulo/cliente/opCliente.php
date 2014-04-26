<?php
    require_once '../../session.php';
    if($_POST['clienteToken'] == $_SESSION["clienteToken"]){
    
        require_once '../../conexaoBD/coneXao.php';
        
        $nome = $_POST['nome'];
        $cpf = $_POST['cpf'];
        $rg = $_POST['rg'];
        $dtnasc = $_POST['dtnasc'];
        $cel = $_POST['cel'];
        $cel2 = $_POST['cel2'];
        $tel = $_POST['tel'];
        $civil = $_POST['civil'];
        $cep = $_POST['cep'];
        $end = $_POST['end'];
        $bairro = $_POST['bairro'];
        $cidade = $_POST['cidade'];
        $uf = $_POST['uf'];
        $obs = $_POST['obs'];
        $dataC = $_POST['dataC'];
        $tipoC = $_GET['cli'];
        
        /* SQL Adiciona registro */
        $sql = "INSERT INTO clientes (nome,cpf,rg,dtnasc,cel,cel2,tel,civil,cep,end,bairro,cidade,uf,obs,dataC,tipo) 
            VALUES ('$nome','$cpf','$rg','$dtnasc','$cel','$cel2','$tel','$civil','$cep','$end','$bairro','$cidade','$uf','$obs','$dataC','$tipoC')";
        $r = mysql_query($sql);
        
        if($r){
            header('Location: ../../index.php?pg=cliente&r=sucesso');
        }
        /* SQL ALtera registro */
    }else{
        /*ERRO*/
        echo 'Ops algo errado, Tente novamente!';
        /*sleep(5);
        header('Location: ../../index.php');*/
    }
?>
