<div class="container">
<h3 class="title blue">LISTAR CLIENTES</h3>

    <div class="tab-control padding20" data-role="tab-control">
        <ul class="tabs">
            <li class="active"><a href="#write">Locatário</a></li>
            <li><a href="#preview">Fiador</a></li>
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
                    <th class="text-left">Dt. Nasc</th>
                    <th class="text-left">Nome</th>
                    <th class="text-left">CPF</th>
                    <th class="text-left">Contatos</th>
                    <th class="text-left">Editar</th>
                    <th>Excluir</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                        require_once 'conexaoBD/coneXao.php';
                        $sql = "select * from clientes where tipo=1 order by nome asc";
                        $r = mysql_query($sql);
                        while($c = mysql_fetch_array($r)){
                ?>
                <tr>
                    <td class="text-center" style="width: 50px;"><?php echo $c['idCliente']; ?></td>
                    <td class="text-left" style="width: 150px;"><?php echo $c['dtnasc']; ?></td>
                    <td class="text-left" style="width: 500px;"><?php echo $c['nome']; ?></td>
                    <td class="text-left" style="width: 200px;"><?php echo $c['cpf']; ?></td>
                    <td class="text-left" style="width: 600px;"><?php echo $c['cel'].' | '.$c['cel2'].' | '.$c['tel']; ?></td>
                    <td class="text-center" style="width: 80px;"><a href="index.php?pg=cliente&funcao=editar&cli=<?php echo $c['idCliente']; ?>"><i class="icon-pencil"></i></a></td>
                    <td class="span1"><a href="opCliente.php?f=excluir"><i class="icon-cancel-2"></i></a></td>
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
                    <th class="text-left">Dt. Nasc</th>
                    <th class="text-left">Nome</th>
                    <th class="text-left">CPF</th>
                    <th class="text-left">Contatos</th>
                    <th class="text-left">Editar</th>
                    <th>Excluir</th>
                </tr>
            </thead>
            <tbody>
                <tr>
            
                    <td class="text-center" style="width: 50px;">1</td>
                    <td class="text-left" style="width: 120px;">27/03/1983</td>
                    <td class="text-left" style="width: 500px;">ADRIANA DOS SANTOS SILVA</td>
                    <td class="text-left" style="width: 200px;">008.026.864.19</td>
                    <td class="text-left" style="width: 600px;">(83)8894-4829 | (83)8796-8779 | (83)3077-1498</td>
                    <td class="text-center" style="width: 80px;"><a href="index.php?pg=cliente&funcao=editar"><i class="icon-pencil"></i></a></td>
                    <td class="span1"><a href="opCliente.php?f=excluir"><i class="icon-cancel-2"></i></a></td>            
                </tr>
            </tbody>
        </table>
    </div>             
</div>
    
</div>