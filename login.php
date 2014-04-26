<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SGI - Designcom Tecnologia</title>
<link href="css/style.css" rel="stylesheet" type="text/css">
<link rel='stylesheet' id='open-sans-css'  href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' type='text/css' media='all' />
<script language="javascript">
    function validar(frm){
        if (frm.login.value == ""){alert("Login não informado");frm.login.focus();return (false);}
        if (frm.senha.value == ""){alert("Senha não informado");frm.senha.focus();return (false);}
    }
</script>
</head>

<body onLoad="document.formlogin.login.focus();" style="background:#147eba;">
    <div class="topo">
        <h3>Sistema de Gestão Imobiliária</h3>
    </div>
    
    <div id="login" class="animate0">
        <div class="loginpanelinner">
        <form name="formlogin" id="formlogin" method="POST" action="logar.php" onsubmit="return validar(this)">    
            <div id="loga">
                <div class="login">ENTRA NO <b>SGI</b></div><br>
                <input type="text" name="login" class="textlogin" autofocus autocomplete="off" required placeholder="Usuário" title="Informe o Usuário" />
                <input type="password" name="senha" class="textlogin" autocomplete="off" required placeholder="Senha" title="Informe a Senha" />
                <img src="plugns/captcha.php" class="captcha" title="Código de Segurança" />
                <input name="captcha" type="text" class="inputCaptcha" placeholder="Informe o Código" required autocomplete="off" title="Informe Código de Segurança" />
                <input type="submit" name="button" class="botao" value="Entrar" />
                </br></br>
                <a href="#">Esqueci minha senha</a>
            </div> 
        </form>
    </div>
    </div>
    <div id="informe">
        <?php
            if($_GET['aviso']=='captcha'){ echo '<p>O código não confere!</p>'; }
            elseif($_GET['aviso']=='login'){ echo '<p>Usuário ou/e senha incorretos!</p>'; }
        ?>
       
    </div>
    <div class="footer">
        <a href="http://www.dcomt.com.br" target="blank"><div class="direitos">© 2014. <b>DesignCOM SGI.</b> Todos os direitos reservados.</div></a>
    </div>
        
</body>
</html>
