<?php require_once('session.php'); require_once 'conexaoBD/coneXao.php'; ?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>SGI - Designcom Tecnologia</title>
        <link href="css/style-principal.css" rel="stylesheet" type="text/css">
        <link rel='stylesheet' id='open-sans-css'  href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' type='text/css' media='all' />
        <!-- Metro UI -->
        
    <link href="css/metro-bootstrap.css" rel="stylesheet">
    <link href="css/metro-bootstrap-responsive.css" rel="stylesheet">

    <!-- Load JavaScript Libraries -->
    <script src="js/jquery/jquery.min.js"></script>
    <script src="js/jquery/jquery.widget.min.js"></script>
    <script src="js/jquery/jquery.mousewheel.js"></script>

    <!-- Metro UI CSS JavaScript plugins -->
    <script src="js/load-metro.js"></script>

        <!-- fim Metro UI -->
    <!-- BUSCA CEP -->
    <script>
    function atualizacep(cep){
      cep = cep.replace(/\D/g,"")
      url="http://cep.correiocontrol.com.br/"+cep+".js"
      s=document.createElement('script')
      s.setAttribute('charset','utf-8')
      s.src=url
      document.querySelector('head').appendChild(s)
    }

    function correiocontrolcep(valor){
      if (valor.erro) {
        alert('Cep não encontrado');
        return;
      };
      document.getElementById('logradouro').value=valor.logradouro
      document.getElementById('bairro').value=valor.bairro
      document.getElementById('localidade').value=valor.localidade
      document.getElementById('uf').value=valor.uf     
      document.getElementById('logradourof').value=valor.logradouro
      document.getElementById('bairrof').value=valor.bairro
      document.getElementById('localidadef').value=valor.localidade
      document.getElementById('uff').value=valor.uf     
    }
</script>
        
        
    </head>
    
    <body class="metro">
        
        <div class="topo">
            <div class="meio container">
                <a href="index.php"><div class="logo"></div></a>
                <div class="logado">
                    <div class="nome"><span class="icon-user-2 on-left"></span><?php echo $_SESSION['usuario']; ?></div>
                    <div class="funcoes">
                        <a href="#" title="Configurações"><div class="conf"><span class="icon-cog icon-conf"></span></div></a>
                        <a href="#" title="Suporte"><div class="suporte"><span class="icon-support icon-suporte"></span></div></a>
                        <a href="logout.php" title="Sair"><div class="logout"><span class="icon-cancel-2 icon-logout"></span></div></a>
                    </div>
                </div>
            </div>
        </div>        
            <div class="menu">
                <div class="meio container">
                    <nav class="sidebar light" style="width: 20%;float: left;">
                        <ul>
                            <li class="title"><b>Clientes</b></li>
                            <li class="stick bg-blue"><a href="index.php?pg=cliente"><i class="icon-new"></i>Novo</a></li>
                            <li class="stick bg-blue"><a href="index.php?pg=listar-cliente"><i class="icon-list"></i>Listar</a></li>
                        </ul>
                    </nav>
                    <nav class="sidebar light" style="width: 18%;float: left;">
                        <ul>
                            <li class="title"><b>Imóveis</b></li>
                            <li class="stick bg-blue"><a href="index.php?pg=imoveis"><i class="icon-new"></i>Novo</a></li>
                            <li class="stick bg-blue"><a href="index.php?pg=listar-imoveis"><i class="icon-list"></i>Listar</a></li>
                        </ul>
                    </nav>
                    <nav class="sidebar light" style="width: 20%;float: left;">
                        <ul>
                            <li class="title"><b>Contas</b></li>
                            <li class="stick bg-blue"><a href="#"><i class="icon-new"></i>Nova Locação</a></li>
                            <li class="stick bg-blue"><a href="#"><i class="icon-list"></i>Ver Locações</a></li>
                        </ul>
                    </nav>
                    <nav class="sidebar light" style="width: 22%;float: left;">
                        <ul>
                            <li class="title"><b>Financeiro</b></li>
                            <li class="stick bg-blue"><a href="#"><i class="icon-new"></i>Novo Lançamento</a></li>
                            <li class="stick bg-blue"><a href="#"><i class="icon-list"></i>Ver Lançamentos</a></li>
                        </ul>
                    </nav>
                    <nav class="sidebar light" style="width: 20%;float: left;">
                        <ul>
                            <li class="title"><b>Relatórios</b></li>
                            <li class="stick bg-blue">
                                <a class="dropdown-toggle" href="#"><i class="icon-clipboard-2"></i>Cliente</a>
                                <ul class="dropdown-menu" data-role="dropdown">
                                    <li><a href=""><i class="icon-user-3"></i>Locatário</a></li>
                                    <li><a href=""><i class="icon-user-3"></i>Fiador</a></li>
                                </ul>
                            </li>
                            <li class="stick bg-blue">
                                <a class="dropdown-toggle" href="#"><i class="icon-clipboard-2"></i>Diversos</a>
                                <ul class="dropdown-menu" data-role="dropdown">
                                    <li><a href=""><i class="icon-clipboard"></i>Movimentação</a></li>
                                    <li><a href=""><i class="icon-dollar"></i>Financeiro</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
       
        
         <script src="js/hitua.js"></script>
    