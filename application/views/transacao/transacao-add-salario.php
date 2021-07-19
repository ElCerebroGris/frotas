<div class="content-wrapper">
	<!-- Container-fluid starts -->
	<div class="container-fluid">

		<!-- Header Starts -->
		<div class="row">
			<div class="col-sm-12 p-0">
				<div class="main-header">
					<h4>Transações</h4>
					<ol class="breadcrumb breadcrumb-title breadcrumb-arrow">
						<li class="breadcrumb-item">
							<a href="index.html">
								<i class="icofont icofont-home"></i>
							</a>
						</li>
						<li class="breadcrumb-item"><a href="#">Transações</a>
						</li>
						<li class="breadcrumb-item"><a href="#">Adicionar</a>
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
						<h5 class="card-header-text">Adicionar Entrada de Transação</h5>

						<div class="card-block">
							<div class="row">
								<div class="col-sm-12">
									<div class="form-group">
										<label for="exampleSelect1" class="form-control-label">Funcionário</label>
										<select class="form-control" id="exampleSelect1">
											<option>Adão Mário</option>
											<option>Paulo Mateus</option>
											<option>Osvaldo João</option>
										</select>
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-sm-4">
									<div class="form-group">
										<label for="exampleSelect1" class="form-control-label">Tipo</label>
										<select disabled class="form-control" id="exampleSelect1">
											<option>Entrada</option>
										</select>
									</div>
								</div>

								<div class="col-sm-4">
									<div class="form-group">
										<label for="exampleSelect1" class="form-control-label">IBAN</label>
										<select class="form-control" id="exampleSelect1">
											<option>Caixa Letransport</option>
											<option>Caixa Operações</option>
										</select>
									</div>
								</div>

								<div class="col-sm-4">
									<div class="form-group">
										<label for="exampleInputEmail1" class="form-control-label">Total (AKZ)</label>
										<input type="text" class="form-control" id="exampleInputEmail1"
											aria-describedby="emailHelp">
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-sm-12">
									<div class="form-group">
										<label for="file" class="col-form-label form-control-label">Recibo</label>
										<div class="">
											<label for="file" class="custom-file">
												<input type="file" id="file" class="custom-file-input">
												<span class="custom-file-control"></span>
											</label>
										</div>
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-sm-12">
									<div class="form-group">
										<label for="exampleTextarea" class="form-control-label">Descrição</label>
											<textarea class="form-control" id="exampleTextarea" rows="4"></textarea>
									</div>
								</div>
							</div>

							<div class="card-block1" style="float: right;">
								<form class="form-inline">
									<a class="btn btn-primary waves-effect waves-light"
										href="<?= base_url() ?>welcome/transacao">SALVAR</a>
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
