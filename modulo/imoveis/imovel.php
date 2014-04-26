<div class="container">
    
    <h3 class="title blue">CADASTRO CLIENTE</h3>
    
    <?php 
        if($_GET['r']=='sucesso'){echo '<div class="aviso title">CADASTRO REALIZADO COM SUCESSO!</div>';}
    ?>
    
    <div class="tab-control padding20" data-role="tab-control">
        <ul class="tabs">
            <li class="active"><a href="#write">Cadastrar Imovel</a></li>
            <!--<li><a href="#preview">Fiador</a></li>-->
        </ul>

        <div class="frames">
            
            <div id="write" class="frame" style="display: block;">
                <h3 class="title blue">Imovel</h3>
                <form id="f" class="f" method="POST" action="modulo/imoveis/opImovel.php" >
                    <input type="text" data-transform="input-control" name="nome" placeholder="Identificação" required />
                    <div class="input-control select">
                        <select class="select2" name="locacao" id="estadoc" onkeypress="return tabE(this,event);" required>
                            <option value="">Tipo de Locação</option>
                            <option value="Residêncial">Residêncial</option>
                            <option value="Empresarial">Empresarial</option>
                        </select>
                    </div>
                    <div class="input-control select">
                        <select class="select2" name="tipoImovel" id="estadoc" onkeypress="return tabE(this,event);" required>
                            <option value="">Tipo de Imovel</option>
                            <option value="Apartamento">Apartamento</option>
                            <option value="Casa">Casa</option>
                            <option value="Sala">Sala</option>
                            <option value="Galpão">Galpão</option>
                        </select>
                    </div>
                    <div class="input-control select">
                        <select class="select2" name="situacao" id="estadoc" onkeypress="return tabE(this,event);" required>
                            <option value="1">Disponível</option>
                            <option value="2">Alugado</option>
                        </select>
                    </div>
                    
                    <input type="text" data-transform="input-control" name="valor" placeholder="Valor Aluguel" required />
                                        
                    <div class="input-control checkbox"><h3 class="title blue">Opicionais:</h3>
                        <label><input type="checkbox" name="garagem" value="garagem" /><span class="check"></span>Vaga Garagem</label>
                        <label><input type="checkbox" name="internet" value="internet" /><span class="check"></span>Internet</label>
                    </div>
                    
                    
                    <h3 class="title blue">Endereço - <a href="http://www.buscacep.correios.com.br/servicos/dnec/menuAction.do?Metodo=menuEndereco" target="blank" style="font-size: 14px;text-decoration: underline;"> Localizar CEP</a></h3>
                    
                    <input type="text" data-transform="input-control" name="cep" placeholder="CEP" onblur="atualizacep(this.value)" />
                    <input type="text" data-transform="input-control" name="end" placeholder="Endereço (com Número)" id="logradourof" />
                    <input type="text" data-transform="input-control" name="complemento" placeholder="Sala, Apto 103" />
                    <input type="text" data-transform="input-control" name="bairro" placeholder="Bairro" id="bairrof" />
                    <input type="text" data-transform="input-control" name="cidade" placeholder="Cidade" id="localidadef" />
                    <input type="text" data-transform="input-control" name="uf" placeholder="Estado" id="uf" />
                    
                    <textarea data-transform="input-control" placeholder="Observações" name="obs"></textarea>
                    
                    <input type="hidden" name="tipo" value="cadastrar" />
                    
                    <?php $_SESSION["token"] = uniqid(time( )); ?>
                    <input type="hidden" name="imovelToken" value="<?php echo $_SESSION["token"]; ?>" />
                    
                    <?php date_default_timezone_set('America/Fortaleza'); ?>
                    <input type="hidden" name="dataC" class="iput5" value="<?php echo date("d/m/Y H:i:s"); ?>"  />
                    
                    <input type="submit" value="SALVAR IMOVEL" class="botao">
                </form>
                
            </div>
            
            
            
        </div>
     </div>
    
   
    
    
    
</div>
