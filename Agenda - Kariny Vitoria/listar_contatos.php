<font size="verdana">


		<?php
		include "config.php";
		?>


		<?php

		$inicial= $_REQUEST['contato'];


		$lista = mysqli_query($con, "select * from agenda where nome or cod_contato" ) or trigger_error('Erro ao executar consutla. Detalhes = ' . mysqli_error());

   if (mysqli_num_rows($lista)==0) {
   	echo "<h3 align='center'>";
   	
   	echo "Nenhum registro encontrado.";

   	
   	echo "</h3>";
   }else{

   	?>

   	<table class="table table-striped table-hover" align='center' style="width:800px;">
   		<tr>
   			<td>Código</td>
   			<td>Nome</td>
   			<td align='center'>Ações</td>
   		</tr>
   		<?php 
   		while ($dados = mysqli_fetch_array($lista)) {
   			?>

   			<tr>
   				<td><?php echo $dados['cod_contato']; ?></td>
   				<td><a href="index.php?page=exibir_contato&contato=<?php echo $dados['cod_contato']; ?>"><?php echo $dados['nome']; ?></td>
   					<td align='center'>
   						<div class="btn-group btn-group-sm" role="group" aria-label="Ações para os Contatos!">
   							<a href="dao/del_contato.php?contato=<?php echo $dados['cod_contato']; ?>" type="button" class="btn btn-default btn-danger" aria-label="Excluir Contato">
   							Excluir</a>
   						</div>
   					</td>
   				</tr>
   				<?php
   			}
   			?>
   		</table>
   		<?php
   	}
   	?>
