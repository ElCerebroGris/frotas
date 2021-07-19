<div class="content-wrapper">
	<!-- Container-fluid starts -->
	<div class="container-fluid">

		<!-- Header Starts -->
		<div class="row">
			<div class="col-sm-12 p-0">
				<div class="main-header">
					<h4>Utilizadores</h4>
					<ol class="breadcrumb breadcrumb-title breadcrumb-arrow">
						<li class="breadcrumb-item">
							<a href="index.html">
								<i class="icofont icofont-home"></i>
							</a>
						</li>
						<li class="breadcrumb-item"><a href="#">Utilizadores</a>
						</li>
						<li class="breadcrumb-item"><a href="basic-table.html">Adicionar</a>
						</li>
					</ol>
				</div>
			</div>
		</div>
		<!-- Header end -->

		<!-- Tables start -->
		<!-- Row start -->
		<div class="row">
			<div class="col-sm-12">
				<!-- Hover effect table starts -->
				<div class="card">
					<div class="card-header">
						<h5 class="card-header-text">Adicionar Utilizador</h5>

						<div class="card-block">
							<div class="row">
								<div class="col-sm-4">
									<div class="form-group">
										<label for="exampleInputEmail1" class="form-control-label">Login</label>
										<input type="text" class="form-control" id="exampleInputEmail1"
											aria-describedby="emailHelp">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-12">
									<div class="form-group">
										<label for="exampleSelect1" class="form-control-label">Funcionário</label>
										<select class="form-control" id="exampleSelect1">
											<option>Adão</option>
											<option>Mário</option>
											<option>Mateus</option>
										</select>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-12">
									<div class="form-group">
										<label for="exampleSelect1" class="form-control-label">Perfil</label>
										<select class="form-control" id="exampleSelect1">
											<option>Administrador</option>
											<option>Gestor de Frotas</option>
											<option>Motorista</option>
										</select>
									</div>
								</div>
							</div>

							<div class="card-block1" style="float: right;">
								<form class="form-inline">
									<a class="btn btn-primary waves-effect waves-light"
										href="<?= base_url() ?>welcome/utilizadores">SALVAR</a>
								</form>
							</div>
						</div>
					</div>
				</div>
				<!-- Hover effect table ends -->
			</div>
		</div>
		<!-- Row end -->
		<!-- Tables end -->
	</div>

	<!-- Container-fluid ends -->
</div>
</div>
