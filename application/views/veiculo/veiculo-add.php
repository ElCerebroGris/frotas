<div class="content-wrapper">
	<!-- Container-fluid starts -->
	<div class="container-fluid">

		<!-- Header Starts -->
		<div class="row">
			<div class="col-sm-12 p-0">
				<div class="main-header">
					<h4>Veiculos</h4>
					<ol class="breadcrumb breadcrumb-title breadcrumb-arrow">
						<li class="breadcrumb-item">
							<a href="index.html">
								<i class="icofont icofont-home"></i>
							</a>
						</li>
						<li class="breadcrumb-item"><a href="#">Veiculos</a>
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
						<h5 class="card-header-text">Adicionar Veiculo</h5>

						<div class="card-block">
							<div class="row">
								<div class="col-sm-6">
									<div class="form-group">
										<label for="exampleInputEmail1" class="form-control-label">Marca</label>
										<input type="text" class="form-control" id="exampleInputEmail1"
											aria-describedby="emailHelp">
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<label for="exampleInputEmail1" class="form-control-label">Cor</label>
										<input type="text" class="form-control" id="exampleInputEmail1"
											aria-describedby="emailHelp">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-6">
									<div class="form-group">
										<label for="exampleInputEmail1" class="form-control-label">Matricula</label>
										<input type="text" class="form-control" id="exampleInputEmail1"
											aria-describedby="emailHelp">
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<label for="exampleInputEmail1" class="form-control-label">Nº do Motor</label>
										<input type="text" class="form-control" id="exampleInputEmail1"
											aria-describedby="emailHelp">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-4">
									<div class="form-group">
										<label for="exampleSelect1" class="form-control-label">Proprieterio</label>
										<select class="form-control" id="exampleSelect1">
											<option>Letransport</option>
											<option>Privado</option>
										</select>
									</div>
								</div>
								<div class="col-sm-4">
									<div class="form-group">
										<label for="exampleInputEmail1" class="form-control-label">Nome Proprietario</label>
										<input type="text" class="form-control" id="exampleInputEmail1"
											aria-describedby="emailHelp">
									</div>
								</div>
								<div class="col-sm-4">
									<div class="form-group">
										<label for="exampleInputEmail1" class="form-control-label">BI Proprietario</label>
										<input type="text" class="form-control" id="exampleInputEmail1"
											aria-describedby="emailHelp">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-6">
									<div class="form-group">
										<label for="exampleInputEmail1" class="form-control-label">Data de Entrada</label>
										<input type="text" class="form-control" id="exampleInputEmail1"
											aria-describedby="emailHelp">
									</div>
								</div>
							</div>

							<div class="card-block1" style="float: right;">
								<form class="form-inline">
									<a class="btn btn-primary waves-effect waves-light"
										href="<?= base_url() ?>welcome/veiculo">SALVAR</a>
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
