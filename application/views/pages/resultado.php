<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h1 class="h2"><?= $title?></h1>
		<div class="btn-toolbar mb-2 mb-md-0">
			<div class="btn-group mr-2">
</div>
		</div>
	</div>

	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h2 class="h2">Últimos 5 prontuários</h2>
	</div>

	<div class="table-responsive">
		<table class="table table-bordered table-hover">
			<thead>
				<tr>
				<th>#</th>
				<th>N° Prontuário</th>
				<th>Médico<br>Responsável</th>
				<th>Identificação<br>do paciente</th>
				<th>Data de<br>criação</th>
				<th>Breve descrição do<br>prontuário</th>
                    		<th>Estado do<br>Prontuário</th>
				</tr>
			</thead>
			<tbody>
				

      <!-- listando registros do banco -->
      <?php foreach($resultado as $prt) : ?>
        <tr>
        <td><?= $prt['id'] ?></td>
	<td><?= $prt['num_prontuario']?></td>
        <td><?= $prt['name'] ?></td>
        <td><?= $prt['num_paciente'] ?></td>
	<td><?= $prt['release_date'] ?></td>
	<td><?= $prt['description'] ?></td>
        <td><?= $prt['estado_prt'] ?></td>
      </tr>
      <?php endforeach;?>

      
			</tbody>
		</table>
	</div>
</main>
