<div class="content-wrapper">
         <!-- Container-fluid starts -->
         <div class="container-fluid">

            <!-- Header Starts -->
            <div class="row">
               <div class="col-sm-12 p-0">
                  <div class="main-header">
                     <h4>Funcionários</h4>
                     <ol class="breadcrumb breadcrumb-title breadcrumb-arrow">
                        <li class="breadcrumb-item">
                           <a href="index.html">
                              <i class="icofont icofont-home"></i>
                           </a>
                        </li>
                        <li class="breadcrumb-item"><a href="#">Funcionários</a>
                        </li>
                        <li class="breadcrumb-item"><a href="basic-table.html">Listar</a>
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
                        <h5 class="card-header-text">Lista de Funcionários</h5>
								<div class="card-block" style="float: right;">
                              <form class="form-inline">
                                 <div class="form-group m-r-15">
                                    <label class="sr-only form-control-label" for="exampleInputEmail3">Pesquisar</label>
                                    <input type="text" class="form-control" id="exampleInputEmail3" placeholder="Pesquisar">
                                 </div>
											<a class="btn btn-primary waves-effect waves-light" 
											href="<?= base_url() ?>welcome/funcionarioAdd">ADICIONAR</a>
                              </form>
                           </div>
                     	</div>
                     <div class="card-block">
                        <div class="row">
                           <div class="col-sm-12 table-responsive">
                              <table class="table table-hover">
                                 <thead>
                                    <tr>
                                       <th>Codigo</th>
                                       <th>Nome</th>
                                       <th>BI</th>
                                       <th>Telefone Atribuido</th>
                                       <th>Estado</th>
													<th>Ações</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td>1</td>
                                       <td><a href="<?= base_url() ?>welcome/motoristaPerfil">Marcos João</a></td>
                                       <td>01323123LA048</td>
                                       <td>991647109</td>
                                       <td><span style="color: green;">Activo</span></td>
													<td>
														<div class="dropdown-primary dropdown">
															<button class="btn btn-primary dropdown-toggle waves-effect waves-light " type="button" id="dropdown1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
															
														</button>
															<div class="dropdown-menu" aria-labelledby="dropdown1" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
																<a class="dropdown-item waves-light waves-effect" href="#"><i class="icofont icofont-info"></i> Ver detalhes</a>
																<a class="dropdown-item waves-light waves-effect" href="#"><i class="icofont icofont-edit"></i> Editar</a>
																<a class="dropdown-item waves-light waves-effect" href="#"><i class="icofont icofont-trash"></i> Eliminar</a>
															</div>
														</div> 
													</td>
                                    </tr>
                                    <tr>
                                       <td>2</td>
                                       <td><a href="<?= base_url() ?>welcome/motoristaPerfil">Marcos João</a></td>
                                       <td>01323123LA048</td>
                                       <td>991647109</td>
                                       <td><span style="color: red;">Desactivo</span></td>
													<td>
														<div class="dropdown-primary dropdown">
															<button class="btn btn-primary dropdown-toggle waves-effect waves-light " type="button" id="dropdown1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
															
														</button>
															<div class="dropdown-menu" aria-labelledby="dropdown1" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
																<a class="dropdown-item waves-light waves-effect" href="#"><i class="icofont icofont-info"></i> Ver detalhes</a>
																<a class="dropdown-item waves-light waves-effect" href="#"><i class="icofont icofont-edit"></i> Editar</a>
																<a class="dropdown-item waves-light waves-effect" href="#"><i class="icofont icofont-trash"></i> Eliminar</a>
															</div>
														</div> 
													</td>
                                    </tr>
												<tr>
                                       <td>3</td>
                                       <td><a href="<?= base_url() ?>welcome/motoristaPerfil">Adão João</a></td>
                                       <td>01323123LA048</td>
                                       <td>991647109</td>
                                       <td><span style="color: green;">Activo</span></td>
													<td>
														<div class="dropdown-primary dropdown">
															<button class="btn btn-primary dropdown-toggle waves-effect waves-light " type="button" id="dropdown1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
															
														</button>
															<div class="dropdown-menu" aria-labelledby="dropdown1" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
																<a class="dropdown-item waves-light waves-effect" href="#"><i class="icofont icofont-info"></i> Ver detalhes</a>
																<a class="dropdown-item waves-light waves-effect" href="#"><i class="icofont icofont-edit"></i> Editar</a>
																<a class="dropdown-item waves-light waves-effect" href="#"><i class="icofont icofont-trash"></i> Eliminar</a>
															</div>
														</div> 
													</td>
                                    </tr>
                                    <tr>
                                       <td>4</td>
                                       <td><a href="<?= base_url() ?>welcome/motoristaPerfil">Mateus João</a></td>
                                       <td>01323123LA048</td>
                                       <td>991647109</td>
                                       <td><span style="color: red;">Desactivo</span></td>
													<td>
														<div class="dropdown-primary dropdown">
															<button class="btn btn-primary dropdown-toggle waves-effect waves-light " type="button" id="dropdown1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
															
														</button>
															<div class="dropdown-menu" aria-labelledby="dropdown1" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
																<a class="dropdown-item waves-light waves-effect" href="#"><i class="icofont icofont-info"></i> Ver detalhes</a>
																<a class="dropdown-item waves-light waves-effect" href="#"><i class="icofont icofont-edit"></i> Editar</a>
																<a class="dropdown-item waves-light waves-effect" href="#"><i class="icofont icofont-trash"></i> Eliminar</a>
															</div>
														</div> 
													</td>
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
