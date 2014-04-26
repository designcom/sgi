<?php
require_once('session.php');

if(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==$_POST["captcha"]){
    require_once('conexaoBD/coneXao.php');
    $login = $_POST['login'];
    $senha = $_POST['senha'];

    $sql = "select * FROM usuario WHERE login='$login' AND senha='$senha'";
    $rs = mysql_query($sql,$conexao);
    $usu = mysql_fetch_array($rs);
    
    $idUsuario = $usu['idUsuario'];
    $loginB = $usu['login'];
    $senhaB = $usu['senha'];
    $nomeUsu = $usu['nome'];
    
        if($loginB == $login && $senhaB == $senha){
            $_SESSION['login'] = $loginB;
            $_SESSION['idUsuario']= $idUsuario;
            $_SESSION['usuario']= $nomeUsu;
            header("Location: index.php");
            echo $_SESSION['login'];
            echo $_SESSION['idUsuario'];
        }else{
            echo '<script language="JavaScript">window.location.href="login.php?aviso=login";</script>';
        }
        
} else { 
    echo '<script language="JavaScript">window.location.href="login.php?aviso=captcha";</script>'; 
}
?>