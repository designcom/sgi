<?php
if($_POST['nomeCliFi']){
    
    $nomeCliFi = $_POST['nomeCliFi'];
        if(!empty($nomeCliFi)){
            require_once '../../conexaoBD/coneXao.php';
	$sql5 = "select * from clientes where nome='$nomeCliFi' and tipo=2";
	$r5 = Mysql_query($sql5, $conexao);
	$c5 = mysql_fetch_array($r5);
	$nomef = $c5['nome'];
	$idClientef = $c5['idCliente'];
        $cpff = $c5['cpf'];
        if($nomef!=$nomeCliFi){
?>	
	<div id="preenche2">
                    <div class="input-control text">
                        <input type="text" id="tagsFi" name="fiador" placeholder="Nome Fiador" onblur="testeCliFi(this.value)" required autocomplete="off"/>
                        <button class="btn-clear"></button>
                    </div>
                    </div>	
    <?php } else { ?>

        <div id="preenche">
                    <div class="input-control text">
                        <input type="text" id="tagsFi" name="fiador" value="<?php echo $nomef; ?>" placeholder="Nome Fiador" onblur="testeCliFi(this.value)" required autocomplete="off"/>
                        <button class="btn-clear"></button>
                    </div>
                    <input type="text" data-transform="input-control" name="cpf-fiador" value="<?php echo $cpff; ?>" placeholder="CPF" required />
                    <input type="text" data-transform="input-control" name="id-fiador" value="<?php echo $idClientef; ?>" placeholder="CPF" required />
                    </div>
<?php } 

}else{ ?>
    <div id="preenche2">
                    <div class="input-control text">
                        <input type="text" id="tagsFi" name="fiador" placeholder="Nome Fiador" onblur="testeCliFi(this.value)" required autocomplete="off"/>
                        <button class="btn-clear"></button>
                    </div>
                    </div>
<? }
    
    
}else{	
	$nomeCli = $_POST['nomeCli'];
        if(!empty($nomeCli)){
            require_once '../../conexaoBD/coneXao.php';
	$sql = "select * from clientes where nome='$nomeCli' and tipo=1";
	$r1 = Mysql_query($sql, $conexao);
	$c = mysql_fetch_array($r1);
	$nome = $c['nome'];
	$idCliente = $c['idCliente'];
        $cpf = $c['cpf'];
        if($nome!=$nomeCli){
?>	
	<div id="preenche">
                    <div class="input-control text">
                        <input type="text" id="tags" name="cliente" placeholder="Nome Cliente" onblur="testeCli(this.value)" required autocomplete="off"/>
                        <button class="btn-clear"></button>
                    </div>
                    <input type="text" data-transform="input-control" name="cpf-cliente" placeholder="CPF" required />
                    </div>	
    <?php } else { ?>

        <div id="preenche">
                    <div class="input-control text">
                        <input type="text" id="tags" name="cliente" value="<?php echo $nome; ?>" placeholder="Nome Cliente" onblur="testeCli(this.value)" required autocomplete="off"/>
                        <button class="btn-clear"></button>
                    </div>
                    <input type="text" data-transform="input-control" name="cpf-cliente" value="<?php echo $cpf; ?>" placeholder="CPF" required />
                    <input type="text" data-transform="input-control" name="id-cliente" value="<?php echo $idCliente; ?>" placeholder="CPF" required />
                    </div>
<?php } 

}else{ ?>
    <div id="preenche">
                    <div class="input-control text">
                        <input type="text" id="tags" name="cliente" placeholder="Nome Cliente" onblur="testeCli(this.value)" required autocomplete="off"/>
                        <button class="btn-clear"></button>
                    </div>
                    <input type="text" data-transform="input-control" name="cpf-cliente" placeholder="CPF" required />
                    </div>
<?php } } ?>