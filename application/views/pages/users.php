<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h1 class="h2">Usuários</h1>
	</div>

	<div class="table-responsive">
		<table class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>#</th>
					<th>Nome</th>
					<th>Email</th>
					<th>CRM</th> <!-- Adicionar na tela de usuários e na tela de cadastro dos usuários -->
					<th>Especialização</th> <!-- Adicionar na tela de usuários e na tela de cadastro dos usuários -->
				</tr>
			</thead>
			<tbody>
				<?php foreach($users as $usuario) : ?>
				<tr>
					<td><?= $usuario['id'] ?></td>
					<td><?= $usuario['name'] ?></td>
					<td><?= $usuario['email'] ?></td>
<!-- 					<td><?= $usuario['country'] ?></td>
 -->				</tr>
				<?php endforeach;?>
			</tbody>
		</table>
	</div>
</main>
  
