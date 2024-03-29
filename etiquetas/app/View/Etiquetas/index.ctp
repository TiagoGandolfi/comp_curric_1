<!-- <pre>
	<?// php print_r($posts); ?>
</pre> -->

<div class="page-header">
<h1>Listando as Etiquetas</h1>
</div>


<p>
	<?php echo $this->Html->link("<i class='icon-plus-sign icon-white'></i> Nova Etiqueta", 
			array('controller' => 'etiquetas', 'action' => 'add'), 
			array( 'escape' => false, 'class' => 'btn btn-small btn-success')); 
	?>
</p>




	<table class="table table-hover">
		<thead>
			<tr>
				<th>Código</th>
				<th>Título</th>
				<th>Tipo</th>
				<th>Cor</th>
				<th>Criado em</th>
				<th>Atualizado em</th>
				<th colspan="3">Ações</th>
			</th>
		</thead>
		<tbody>
			<?php foreach ($etiquetas as $etiqueta): ?>
				<tr>
					<td><?php echo $etiqueta["Etiqueta"]["id"]; ?></td>
					<td><?php echo $etiqueta["Etiqueta"]["titulo"]; ?></td>
					<td><?php echo $etiqueta["Etiqueta"]["tipo"]; ?></td>
					<td><?php echo $etiqueta["Etiqueta"]["cor"]; ?></td>
					<td><?php echo $etiqueta["Etiqueta"]["created"]; ?></td>
					<td><?php echo $etiqueta["Etiqueta"]["modified"]; ?></td>
					<td>
						<!--<a href="/posts/view/id">Visualizar</a> -->
					
						<?php echo $this->Html->link("<i class='icon-eye-open'></i> Visualizar", 
									array("controller" => "etiquetas", "action" => "view", 
									$etiqueta["Etiqueta"]["id"] ),
					            	array('escape' => false, 'class' => 'btn btn-small')); ?>
					
					<?php echo $this->Html->link('<i class="icon-edit icon-white"></i> Editar', 
									array('action' => 'edit', 
									$etiqueta['Etiqueta']['id']),
					            	array('escape' => false, 'class' => 'btn btn-small btn-info')); ?>

					<?php echo $this->Form->postLink('<i class="icon-trash icon-white"></i> Deletar',
					                array('action' => 'delete', $etiqueta['Etiqueta']['id']),
					                array('confirm' => 'Você tem certeza?', 
					                'escape' => false, 'class' => 'btn btn-small btn-danger')); ?>

					
				

				</td>

						




					</td>
				</tr>	
			<?php endforeach; ?>
		</tbody>

	</table>


<?php echo $this->element('pagination');?>
	<!-- File: /app/View/Posts/index.ctp  (links para edição adicionados) -->

