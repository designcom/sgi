<div class="container">
    
    <h3 class="title blue">LOCAR IMOVEL - CÓDIGO: <?php $idImovel = $_GET['imovel']; echo $idImovel; ?></h3>
    
    <?php 
        if($_GET['r']=='sucesso'){echo '<div class="aviso title">CADASTRO REALIZADO COM SUCESSO!</div>';}
        $sql = "select * from imoveis where idImovel='$idImovel'";
        $r = mysql_query($sql);
        $c = mysql_fetch_array($r);
    ?>
    
    <div class="tab-control padding20" data-role="tab-control">
        <ul class="tabs">
            <li class="active"><a href="#write">Locação</a></li>
        </ul>

        <div class="frames">
            
            <div id="write" class="frame" style="display: block;">
                <h3 class="title blue">DADOS DO IMOVEL</h3>
                <form id="f" class="f" method="POST" action="modulo/conta/opConta.php" >
                    <input type="hidden" name="imovel" value="<?php echo $c['idImovel']; ?>" required />
                    <input type="text" data-transform="input-control" name="nome" value="<?php echo $c['nome']; ?>" disabled />
                                        
                                      
                    <!-- chama cliente -->
                    <link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
                    <script src="//code.jquery.com/jquery-1.9.1.js"></script>
                    <script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
                    <script>
                      $(function() {
                        var availableTags = [
                          <?php
                                      $sql2 = "select * from clientes where tipo=1";
                                      $r2 = Mysql_query($sql2, $conexao);
                                      while($c2 = mysql_fetch_array($r2)){
                                      $nome = $c2['nome'];
                                      ?>"<? echo $nome; ?>"<? if($r2>'1'){echo ", ";}
                                      }
                          ?>
                        ];
                            $( "#tags" ).autocomplete({
                                source: availableTags
                            });
                      var availableTags1 = [
                          <?php
                                      $sql22 = "select * from clientes where tipo=2";
                                      $r22 = Mysql_query($sql22, $conexao);
                                      while($c22 = mysql_fetch_array($r22)){
                                      $nome = $c22['nome'];
                                      ?>"<? echo $nome; ?>"<? if($r2>'1'){echo ", ";}
                                      }
                          ?>
                        ];
                            $( "#tagsFi" ).autocomplete({
                                source: availableTags1
                            });
                      });

                    function testeCli(id){
                        $.post("modulo/conta/buscaCli.php",
                        {nomeCli:id},
                    function(id){
                        $("#preenche").html(id);
                    })} 
                    function testeCliFi(id){
                        $.post("modulo/conta/buscaCli.php",
                        {nomeCliFi:id},
                    function(id){
                        $("#preenche2").html(id);
                    })} 
                    </script>
                    <h3 class="title blue">DADOS LOCATÁRIO</h3>
                    <div id="preenche">
                    <div class="input-control text">
                        <input type="text" id="tags" name="cliente" placeholder="Nome Cliente" onblur="testeCli(this.value)" required autocomplete="off" autofocus/>
                        <button class="btn-clear"></button>
                    </div>
                    </div>
                    
                    <h3 class="title blue">DADOS FIADOR</h3>
                    <div id="preenche2">
                    <div class="input-control text">
                        <input type="text" id="tagsFi" name="fiador" placeholder="Nome Fiador" onblur="testeCliFi(this.value)" required autocomplete="off"/>
                        <button class="btn-clear"></button>
                    </div>
                    </div>
                    
                    <h3 class="title blue">DADOS DO CONTRATO</h3>
                    <input type="text" data-transform="input-control" name="valor111" value="Valor do Aluguel: R$ <?php echo $c['valor']; ?>" disabled />
                    <input type="hidden" name="valor" value="<?php echo $c['valor']; ?>" />
                    <p class="title" style="float:left;">DATA INICIO</p>
                    <input type="date" data-transform="input-control" name="dtinicial" />
                    <p class="title" style="float:left;">DATA TERMINO</p>
                    <input type="date" data-transform="input-control" name="dtfinal"/>
                    <p class="title" style="float:left;">FORMA DE PAGTO</p>
                    <div class="input-control select">
                        <select class="select2" name="formaPagto" id="estadoc" onkeypress="return tabE(this,event);" required>
                            <option value="1">Promissoria</option>
                            <option value="2">Boleto</option>
                            <option value="3">Cheque</option>
                        </select>
                    </div>
                    
                    <?php $_SESSION["token"] = uniqid(time( )); ?>
                    <input type="hidden" name="contaToken" value="<?php echo $_SESSION["token"]; ?>" />
                    <input type="hidden" name="usuario" value="<?php echo $_SESSION["idUsuario"]; ?>" />
                    
                    <?php date_default_timezone_set('America/Fortaleza'); ?>
                    <input type="hidden" name="dataC" class="iput5" value="<?php echo date("d/m/Y H:i:s"); ?>"  />
                    
                    <input type="submit" value="SALVAR DADOS" class="botao">
                </form>
                
            </div>
            
            
            
        </div>
     </div>
    
   
    
    
    
</div>
