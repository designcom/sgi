<div class="container">
<h3 class="title blue">LISTAR IMÓVEIS</h3>
    
    <?php 
        if($_GET['r']=='sucesso'){echo '<div class="aviso title">EXCLUSÃO REALIZADA COM SUCESSO!</div>';}
    ?>

    <div class="tab-control padding20" data-role="tab-control">
        <ul class="tabs">
            <li class="active"><a href="#write">Disponiveis</a></li>
            <li><a href="#preview">Locados</a></li>
        </ul>

        <div class="frames">
            
<div id="write" class="frame" style="display: block;">
    <div class="input-control text">
        <input type="text" name="busca" placeholder="Buscar Cliente"/>
        <button class="btn-search"></button>
    </div>
    <div id="table1" style="width: 100%; height: auto;">
        <table class="table hovered border myClass">
            <thead>
                <tr>
                    <th>Código</th>
                    <th class="text-left">Identificação</th>
                    <th class="text-left">Tipo de Imovel</th>
                    <th class="text-left">Tipo de Locação</th>
                    <th class="text-left">Endereço</th>
                    <th class="text-left">Funções</th>
                    <th class="text-left">Editar</th>
                    <th>Excluir</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                        $sql = "select * from imoveis where situacao=1 order by locacao asc";
                        $r = mysql_query($sql);
                        while($c = mysql_fetch_array($r)){
                ?>
                <tr>
                    <td class="text-center" style="width: 50px;"><?php echo $c['idImovel']; ?></td>
                    <td class="text-left" style="width: 200px;"><?php echo $c['nome']; ?></td>
                    <td class="text-left" style="width: 150px;"><?php echo $c['tipoImovel']; ?></td>
                    <td class="text-left" style="width: 200px;"><?php echo $c['locacao']; ?></td>
                    <td class="text-left" style="width: 600px;"><?php echo $c['end'].' - '.$c['cidade'].'/'.$c['uf'].' | '.$c['complemento']; ?></td>
                    <td class="text-center" style="width: 80px;"><a href="index.php?pg=locar&imovel=<?php echo $c['idImovel']; ?>" class="button large">Locar</a></td>
                     <?php $_SESSION["token"] = uniqid(time( )); ?>
                    <td class="text-center" style="width: 80px;"><a href="index.php?pg=imoveis&f=editar&imovel=<?php echo $c['idImovel']; ?>"><i class="icon-pencil"></i></a></td>
                    <td class="span1"><a href="modulo/imoveis/opImovel.php?f=excluir&imovel=<?php echo $c['idImovel'].'&imovelToken='.$_SESSION["token"]; ?>"><i class="icon-cancel-2"></i></a></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
            
</div>

<div id="preview" class="frame" style="display: none;">
   <div id="table1" style="width: 100%; height: auto;">
        <div class="input-control text">
            <input type="text" name="busca" placeholder="Buscar Fiador"/>
            <button class="btn-search"></button>
        </div> 
       <table class="table hovered border myClass">
            <thead>
                <tr>
                    <th>Código</th>
                    <th class="text-left">Identificação</th>
                    <th class="text-left">Tipo de Imovel</th>
                    <th class="text-left">Tipo de Locação</th>
                    <th class="text-left">Endereço</th>
                    <th class="text-left">Funções</th>
                    <th class="text-left">Editar</th>
                    <th>Excluir</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                        $sql = "select * from imoveis where situacao=2 order by locacao asc";
                        $r = mysql_query($sql);
                        while($c = mysql_fetch_array($r)){
                ?>
                <tr>
                    <td class="text-center" style="width: 50px;"><?php echo $c['idImovel']; ?></td>
                    <td class="text-left" style="width: 200px;"><?php echo $c['nome']; ?></td>
                    <td class="text-left" style="width: 150px;"><?php echo $c['tipoImovel']; ?></td>
                    <td class="text-left" style="width: 200px;"><?php echo $c['locacao']; ?></td>
                    <td class="text-left" style="width: 600px;"><?php echo $c['end'].' - '.$c['cidade'].'/'.$c['uf'].' | '.$c['complemento']; ?></td>
                    <td class="text-center" style="width: 80px;"><a href="#" class="button large">Conta</a></td>
                    <td class="text-center" style="width: 80px;"><a href="index.php?pg=imoveis&funcao=editar&imovel=<?php echo $c['idImovel']; ?>"><i class="icon-pencil"></i></a></td>
                    <td class="span1"><a href="opImovel.php?f=excluir&imovel=<?php echo $c['idImovel']; ?>"><i class="icon-cancel-2"></i></a></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>             
</div>
    
</div>