<!-- <pre>
	<?// php print_r($posts); ?>
</pre> -->

<div class="page-header">
<h1>Listando as Postagens</h1>
</div>

<P>

	<?php echo $this->Html->link("Novo Item",
								array('controller' => 'posts', 'action' => 'add'),
								array('class' => 'btn btn-success')); ?>


</P>


	<table class="table table-hover">
		<thead>
			<tr>
				<th>Código</th>
				<th>Título</th>
				<th>Texto</th>
				<th>Criado em</th>
				<th>Atualizado em</th>
				<th colspan="3">Ações</th>
			</th>
		</thead>
		<tbody>
			<?php foreach ($posts as $post): ?>
				<tr>
					<td><?php echo $post["Post"]["id"]; ?></td>
					<td><?php echo $post["Post"]["title"]; ?></td>
					<td><?php echo $post["Post"]["body"]; ?></td>
					<td><?php echo $post["Post"]["created"]; ?></td>
					<td><?php echo $post["Post"]["modified"]; ?></td>
					<td>
						<!--<a href="/posts/view/id">Visualizar</a> -->
					
						<?php echo $this->Html->link("Visualizar",
							array('controller' => 'posts','action'=> 'view', $post["Post"]["id"]));
						?>

					</td>
				</tr>	
			<?php endforeach; ?>
		</tbody>

	</table>