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
					<th>Ações</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($users as $user) : ?>
				<tr>
					<td><?= $user['id'] ?></td>
					<td><?= $user['name'] ?></td>
					<td><?= $user['email'] ?></td>
 					<td><?= $user['crm'] ?></td>
					<td><?= $user['especializacao'] ?></td>

					<td>
						<a href="javascript:deletar(<?= $user['id'] ?>)" class="btn btn-danger btn-sm" title="Excluir Usuário">
						<i class="fas fa-trash-alt "></i></a>
					</td>
				
 				</tr>
				<?php endforeach;?>
			</tbody>
		</table>
	</div>
</main>

<!-------------------------------------------------------------------------------------
---------------------------------------------------------------------------------------
    CRIANDO UM ALERT PARA NÃO EXCLUIR DIRETAMENTE OS USUÁRIOS SEM TER UMA VERIFICAÇÃO
--------------------------------------------------------------------------------------
--------------------------------------------------------------------------------------->
<script>
     function deletar(id) 
     {
         var myUrl = 'users/delete/'+id
         if(confirm("Deseja realmente deletar este usuário?")) {
             alert("O usuário foi deletado com sucesso!");
             window.location.href = myUrl;
         } else {
             alert ("O usuário não foi deletado");
             return false;
         }
     }
 </script>
  
