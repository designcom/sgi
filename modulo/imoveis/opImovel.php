<?php
    require_once '../../session.php';
    if($_POST['imovelToken'] == $_SESSION["token"]){
    
        require_once '../../conexaoBD/coneXao.php';
        
        $nome = $_POST['nome'];
        $locacao = $_POST['locacao'];
        $tipoImovel = $_POST['tipoImovel'];
        $situacao = $_POST['situacao'];
        $valor = $_POST['valor'];
        $garagem = $_POST['garagem'];
        $internet = $_POST['internet'];
        $cep = $_POST['cep'];
        $end = $_POST['end'];
        $complemento = $_POST['complemento'];
        $bairro = $_POST['bairro'];
        $cidade = $_POST['cidade'];
        $uf = $_POST['uf'];
        $obs = $_POST['obs'];
        $dataC = $_POST['dataC'];
        //$tipoC = $_GET['tipo'];
        
        /* SQL Adiciona registro */
        $sql = "INSERT INTO imoveis (nome,locacao,tipoImovel,situacao,valor,garagem,internet,cep,end,complemento,bairro,cidade,uf,obs,dataC) 
            VALUES ('$nome','$locacao','$tipoImovel','$situacao','$valor','$garagem','$internet','$cep','$end','$complemento','$bairro','$cidade','$uf','$obs','$dataC')";
        $r = mysql_query($sql);
        if($r){
            header('Location: ../../index.php?pg=imoveis&r=sucesso');
        }
           
    }else if($_GET['imovelToken'] == $_SESSION["token"]){
        
        if($_GET['f'] == 'editar'){
            /* SQL EDITAR registro */
            echo 'VAMOS EDITAR!';
                        
        }else if($_GET['f'] == 'excluir'){
            /* SQL EXCLUIR registro */
            echo 'VAMOS EXCLUIR!';
            header('Location: ../../index.php?pg=listar-imoveis&r=sucesso');
        }
        
    }else{
        /*ERRO*/
        echo 'Ops algo errado, Tente novamente!';
        /*sleep(5);
        header('Location: ../../index.php');*/
    }
?>
