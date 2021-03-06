<nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-sm-3 col-md-3 mr-0" href="#">Unimar | HC Controle Prontuários</a>
	<div>
		<form action="<?= base_url()?>dashboard/pesquisar" method="post">
			<input class="form-control form-control-dark" type="text" name="busca" id="busca" placeholder="Buscar prontuários" aria-label="Search" value="">
		</form>
	</div>
  <ul class="navbar-nav px-5">
    <li class="nav-item text-nowrap">
      <a class="nav-link" href="<?= base_url('') ?>login/logout">Encerrar sessão</a>
    </li>
  </ul>
</nav>

<div class="container-fluid">
  <div class="row">
    <nav class="col-md-2 d-none d-md-block bg-light sidebar">
      <div class="sidebar-sticky">
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>Menu</span>
          <a class="d-flex align-items-center text-muted" href="#" aria-label="Add a new report">
            <span data-feather="plus-circle"></span>
          </a>
        </h6>
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('') ?>dashboard">
              <span data-feather="file"></span>
              Dashboard
            </a>
          </li>
					<li class="nav-item">
            <a class="nav-link" href="<?= base_url('') ?>prontuarios"> <!-- mudar rota -->
              <span data-feather="file"></span>
              <span data-feather="file"></span>
              Prontuários
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('') ?>pages/users"> <!-- Fazer caminho para os usuários --> <!-- EM BREVE -->
              <span data-feather="shopping-cart"></span>
              Usuários
            </a>
					</li>
					
        </ul>
      </div>
    </nav>
