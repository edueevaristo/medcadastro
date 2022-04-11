    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"></h1>
      </div>

			<div class="col-md-12">
				<!-- para exibir o conteudo do prontuario do id no momento da edição "<?= isset($prontuario) ? $prontuario[""] : ""?> -->

					<?php if(isset($prontuario)) : ?>
						<form action="<?= base_url()?>prontuarios/update/<?= $prontuario['id'] ?>" method="post">
					<?php else: ?>
						<form action="<?= base_url()?>prontuarios/store" method="post">
					<?php endif; ?>

					<div class="col-md-6">
						<div class="form-group">
							<label for="name">Médico responsável</label>
							<input type="text" class="form-control" name="name" id="name" placeholder="Médico responsável" required value="<?= isset($prontuario) ? $prontuario["name"] : ""?>">
						</div>
					</div>

					<div class="col-md-6">
						<div class="form-group">
							<label for="description">Descrição</label>
							<textarea name="description" id="description" placeholder="Descrição prévia do prontuário" rows="5" class="form-control" required><?= isset($prontuario) ? $prontuario["description"] : ""?></textarea>
						</div>
					</div>

					<div class="col-md-6">
						<div class="form-group">
							<label for="num_paciente">N° Paciente</label>
							<input type="text" class="form-control" name="num_paciente" id="num_paciente" placeholder="N° Paciente" value="<?= isset($prontuario) ? $prontuario["num_paciente"] : ""?>" required>
						</div>
					</div>

					<div class="col-md-6">
						<div class="form-group">
							<label for="release_date">Data de criação</label>
							<input type="text" class="form-control" name="release_date" id="release_date" placeholder="Data de criação do prontuário (Formato 0000-00-0)" value="<?= isset($prontuario) ? $prontuario["release_date"] : ""?>" required>
						</div>
					</div>

					<div class="col-md-6">
						<div class="form-group">
							<label for="estado_prt">Estado do Prontuário</label>
							<input type="text" class="form-control" name="estado_prt" id="estado_prt" placeholder="Ativo/Finalizado" value="<?= isset($prontuario) ? $prontuario["estado_prt"] : ""?>" required>
						</div>
					</div>


					


					<div class="col-md-6">
							<button type="submit" class="btn btn-success btn-xs"><i class="fas fa-check"></i> Save</button>
							<a href="<?= base_url() ?>prontuarios" class="btn btn-danger btn-xs"><i class="fas fa-times"></i> Cancel</a>
						</div>
					</div>
				</form>
			</div>

    </main>
  </div>
</div>
