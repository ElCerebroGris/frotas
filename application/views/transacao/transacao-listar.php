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
                        <li class="breadcrumb-item"><a href="#">Listar</a>
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
								<div class="card-block1">

									<div class="color-accordion" id="color-accordion">
										<a class="accordion-msg  bg-info b-none">Filtros de Pesquisa</a>
										<div class="accordion-desc">

											<div class="row">
												<div style="float: right;">
													<form class="form-inline">

														<div class="form-group" style="margin-left: 12px;">
															<label for="exampleSelect1" class="form-control-label">Funcionário</label>
															<select class="form-control" id="exampleSelect1">
																<option>Adão Mário</option>
																<option>Paulo Mateus</option>
																<option>Osvaldo João</option>
															</select>
														</div>

														<div class="form-group" style="margin-left: 12px;">
															<label for="exampleSelect1" class="form-control-label">Tipo</label>
															<select class="form-control" id="exampleSelect1">
																<option>Despesa</option>
																<option>Entrada</option>
																<option>Pagamento de salário</option>
															</select>
														</div>

														<div class="form-group" style="margin-left: 12px;">
															<label for="exampleSelect1" class="form-control-label">Data Inicio</label>
															<input type="date" class="form-control" id="exampleInputEmail3" placeholder="Pesquisar">
														</div>

														<div class="form-group" style="margin-left: 12px;">
															<label for="exampleSelect1" class="form-control-label">Data Fim</label>
															<input type="date" class="form-control" id="exampleInputEmail3" placeholder="Pesquisar">
														</div>

													</form>
												</div>
											</div>

											<div class="row">
												<div style="float: right; margin-top: 12px;">
													<form class="form-inline">
														<a class="btn btn-primary waves-effect waves-light" 
														href="<?= base_url() ?>welcome/transacaoAdd">ADICIONAR</a>

														<a style="margin-left: 12px;" class="btn btn-info waves-effect waves-light" 
														href="<?= base_url() ?>welcome/transacao">PESQUISAR</a>
													</form>
												</div>
											</div>
											
										</div>
									</div>

                        </div>
                     </div>

                     <div class="card-block">
                        <div class="row">
                           <div class="col-sm-12 table-responsive">
                              <table class="table table-hover">
                                 <thead>
                                    <tr>
                                       <th>Codigo</th>
                                       <th>Funcionario</th>
                                       <th>Tipo</th>
                                       <th>Total</th>
													<th>Feita por</th>
                                       <th>Data</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td>1</td>
                                       <td>Adão Mário</td>
                                       <td><span style="color: red;">Despesa</span></td>
                                       <td>110799,00 AKZ</td>
                                       <td>paulo</td>
													<td>09/05/2021 - 12:30</td>
                                    </tr>
                                    <tr>
                                       <td>2</td>
                                       <td>Osvaldo João</td>
                                       <td><span style="color: green;">Entrada</span></td>
                                       <td>110799,00 AKZ</td>
                                       <td>paulo</td>
													<td>09/05/2021 - 12:30</td>
                                    </tr>
												<tr>
                                       <td>1</td>
                                       <td>Osvaldo João</td>
                                       <td><span style="color: red;">Despesa</span></td>
                                       <td>110199,00 AKZ</td>
                                       <td>paulo</td>
													<td>09/05/2021 - 12:30</td>
                                    </tr>
                                    <tr>
                                       <td>2</td>
                                       <td>Osvaldo João</td>
                                       <td><span style="color: red;">Pagamento de salário</span></td>
                                       <td>210799,00 AKZ</td>
                                       <td>paulo</td>
													<td>09/05/2021 - 12:30</td>
                                    </tr>
                                 </tbody>
                              </table>
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
