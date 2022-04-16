<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h1 class="h2">Últimos prontuários</h1>
		<div class="btn-toolbar mb-2 mb-md-0">
			<div class="btn-group mr-2"></div>
		</div>
	</div>


	<div class="table-responsive">
		<table class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>#</th>
					<th>N°Prontuário</th>
					<th>Médico responsável</th>
					<th>Identificação do paciente</th>
					<th>Data de criação</th>
					<th>Estado do prontuário</th>
				</tr>
			</thead>
			<tbody>
				

      <!-- listando registros do banco -->
      <?php foreach($prontuarios as $prontuario) : ?>
        <tr>
        <td><?= $prontuario['id'] ?></td>
		<td><?= $prontuario['num_prontuario']?></td>
        <td><?= $prontuario['name'] ?></td>
        <td><?= $prontuario['num_paciente'] ?></td>
		<td><?= $prontuario['release_date'] ?></td>
        <td><?= $prontuario['estado_prt'] ?></td>                          
      </tr>
      <?php endforeach;?>
			</tbody>
		</table>
	</div>
</main>
