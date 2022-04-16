<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h1 class="h2">Prontuários</h1>
		<div class="btn-group mr-2">
            <!-- utilizando base_url do codeiginiter, para gerenciar rotas -->
			<a href="<?= base_url()?>prontuarios/new" class="btn btn-sm btn-outline-secondary"><i class="fas fa-plus-square"></i> Adicionar prontuário</a>
		</div>
	</div>

	<div class="table-responsive">
		<table class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>#</th>
                    <th>N°Prontuário</th>
					<th>Médico <br> responsável</th>
					<th>Identificação do paciente</th>
					<th>Data de criação</th>
                    <th>Estado do Prontuário</th>
                    <th>Breve<br> descrição</th>
                    <th style="padding: 30px;">Ações</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($prontuarios as $prontuario) : ?>
                    <tr>
                        <td><?= $prontuario['id'] ?></td>
                        <td><?= $prontuario['num_prontuario']?></td>
                        <td><?= $prontuario['name'] ?></td>
                        <td><?= $prontuario['num_paciente'] ?></td>
                        <td><?= $prontuario['release_date'] ?></td>
                        <td><?= $prontuario['estado_prt'] ?></td>
                        <td><?= $prontuario['description'] ?></td>
                        <td>
                            <a href="<?= base_url()?>prontuarios/edit/<?= $prontuario['id'] ?>" class="btn btn-warning btn-sm" title="Editar Prontuário">
                            <i class="fas fa-pencil-alt"></i></a>

                            <!-- função criada logo abaixo para ter um alert antes da exclusão do prontuário -->
                            <a href="javascript:del(<?= $prontuario['id'] ?>)" class="btn btn-danger btn-sm" title="Excluir Prontuário">
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
    CRIANDO UM ALERT PARA NÃO EXCLUIR DIRETAMENTE OS PRONTUÁRIOS SEM TER UMA VERIFICAÇÃO
--------------------------------------------------------------------------------------
--------------------------------------------------------------------------------------->
 <script>
     function del(id) 
     {
         var myUrl = 'prontuarios/delete/'+id
         if(confirm("Deseja realmente deletar este prontuário?")) {
             alert("O prontuário foi deletado com sucesso!");
             window.location.href = myUrl;
         } else {
             alert ("O prontuário não foi deletado");
             return false;
         }
     }
 </script>
