<div class="container">
    
    <h3 class="title blue">CADASTRO CLIENTE</h3>
    
    <?php 
    if($_GET['r']=='sucesso'){echo '<div class="aviso title">CADASTRO REALIZADO COM SUCESSO!</div>';}
    ?>
    
    <div class="tab-control padding20" data-role="tab-control">
        <ul class="tabs">
            <li class="active"><a href="#write">Locatário</a></li>
            <li><a href="#preview">Fiador</a></li>
        </ul>

        <div class="frames">
            
            <div id="write" class="frame" style="display: block;">
                <h3 class="title blue">LOCATÁRIO</h3>
                <form id="f" class="f" method="POST" action="modulo/cliente/opCliente.php?cli=1" >
                    <input type="text" data-transform="input-control" name="nome" placeholder="Nome Completo" required />
                    <input type="text" data-transform="input-control" name="cpf" placeholder="CPF" required />
                    <input type="text" data-transform="input-control" name="rg" placeholder="RG [Ex.: 11222333 SSP/PB]" required />
                    <input type="date" data-transform="input-control" name="dtnasc" placeholder="RG [Ex.: 12/05/1990]" />
                    <input type="text" data-transform="input-control" name="cel" placeholder="Celular(1) [Ex.: (83)8888-8888]" required />
                    <input type="text" data-transform="input-control" name="cel2" placeholder="Celular(2) [Ex.: (83)9999-8888]" />
                    <input type="text" data-transform="input-control" name="tel" placeholder="Telefone Residêncial [Ex.: (83)3333-8888]" />
                    <div class="input-control select">
                        <select class="select2" name="civil" id="estadoc" onkeypress="return tabE(this,event);" required>
                            <option value="">Estado Civil</option>
                            <option value="Pessoa Juridica">PESSOA JURIDICA</option>
                            <option value="solteiro">SOLTEIRO(A)</option>
                            <option value="casado">CASADO(A)</option>
                            <option value="Separado">SEPARADO(A)</option>
                            <option value="Divorciado">DIVRCIADO(A)</option>
                            <option value="Viúvo">VIÚVO(A)</option>
                            <option value="União Estável">UNIÃO ESTÁVEL</option>
                        </select>
                    </div>
                    
                    <h3 class="title blue">ENDEREÇO - <a href="http://www.buscacep.correios.com.br/servicos/dnec/menuAction.do?Metodo=menuEndereco" target="blank" style="font-size: 14px;text-decoration: underline;"> Localizar CEP</a></h3>
                    
                    <input type="text" data-transform="input-control" name="cep" placeholder="CEP" onblur="atualizacep(this.value)" />
                    <input type="text" data-transform="input-control" name="end" placeholder="Endereço (com Número)" id="logradourof" />
                    <input type="text" data-transform="input-control" name="bairro" placeholder="Bairro" id="bairrof" />
                    <input type="text" data-transform="input-control" name="cidade" placeholder="Cidade" id="localidadef" />
                    <input type="text" data-transform="input-control" name="uf" placeholder="Estado" id="uff" />
                    <textarea data-transform="input-control" placeholder="Observações" name="obs"></textarea>
                    
                    <input type="hidden" name="tipo" value="locatario" />
                    
                    <?php $_SESSION["clienteToken"] = uniqid(time( )); ?>
                    <input type="hidden" name="clienteToken" value="<?php echo $_SESSION["clienteToken"]; ?>" />
                    
                    <?php date_default_timezone_set('America/Fortaleza'); ?>
                    <input type="hidden" name="dataC" class="iput5" value="<?php echo date("d/m/Y H:i:s"); ?>"  />
                    
                    <input type="submit" value="SALVAR LOCATÁRIO" class="botao">
                </form>
                
            </div>
            
            <div id="preview" class="frame" style="display: none;">
                <h3 class="title blue">FIADOR</h3>
                <form id="f" class="f" method="POST" action="opCliente.php?cli=2" >
                    <input type="text" data-transform="input-control" name="nome" placeholder="Nome Completo" required />
                    <input type="text" data-transform="input-control" name="cpf" placeholder="CPF" required />
                    <input type="text" data-transform="input-control" name="rg" placeholder="RG [Ex.: 11222333 SSP/PB]" required />
                    <input type="date" data-transform="input-control" name="dtnasc" placeholder="RG [Ex.: 12/05/1990]" />
                    <input type="text" data-transform="input-control" name="cel" placeholder="Celular(1) [Ex.: (83)8888-8888]" />
                    <input type="text" data-transform="input-control" name="cel2" placeholder="Celular(2) [Ex.: (83)9999-8888]" />
                    <input type="text" data-transform="input-control" name="tel" placeholder="Telefone Residêncial [Ex.: (83)3333-8888]" />
                    <div class="input-control select">
                        <select class="select2" name="estadoc" id="estadoc" onkeypress="return tabE(this,event);">
                            <option value="">Estado Civil</option>
                            <option value="Pessoa Juridica">PESSOA JURIDICA</option>
                            <option value="solteiro">SOLTEIRO(A)</option>
                            <option value="casado">CASADO(A)</option>
                            <option value="Separado">SEPARADO(A)</option>
                            <option value="Divorciado">DIVRCIADO(A)</option>
                            <option value="Viúvo">VIÚVO(A)</option>
                            <option value="União Estável">UNIÃO ESTÁVEL</option>
                        </select>
                    </div>
                    
                    <h3 class="title blue">ENDEREÇO - <a href="http://www.buscacep.correios.com.br/servicos/dnec/menuAction.do?Metodo=menuEndereco" target="blank" style="font-size: 14px;text-decoration: underline;"> Localizar CEP</a></h3>
                    
                    <input type="text" data-transform="input-control" name="cep" placeholder="CEP" onblur="atualizacep(this.value)" />
                    <input type="text" data-transform="input-control" name="end" placeholder="Endereço (com Número)" id="logradouro" />
                    <input type="text" data-transform="input-control" name="bairro" placeholder="Bairro" id="bairro" />
                    <input type="text" data-transform="input-control" name="cidade" placeholder="Cidade" id="localidade" />
                    <input type="text" data-transform="input-control" name="uf" placeholder="Estado" id="uf" />
                    <textarea data-transform="input-control" placeholder="Observações" name="obs"></textarea>
                    
                    <input type="hidden" name="tipo" value="fiador" />
                    
                    <?php $_SESSION["clienteToken"] = uniqid(time( )); ?>
                    <input type="hidden" name="clienteToken" value="<?php echo $_SESSION["clienteToken"]; ?>" />
                    
                    <?php date_default_timezone_set('America/Fortaleza'); ?>
                    <input type="hidden" name="dataC" class="iput5" value="<?php echo date("d/m/Y H:i:s"); ?>"  />
                    
                    <input type="submit" value="SALVAR FIADOR" class="botao">
                </form>
                
            </div>
            
        </div>
     </div>
    
   
    
    
    
</div>
