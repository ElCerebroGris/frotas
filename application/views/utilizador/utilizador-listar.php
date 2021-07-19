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
                        <h5 class="card-header-text">Lista de Utilizadores</h5>
								<div class="card-block" style="float: right;">
                              <form class="form-inline">
                                 <div class="form-group m-r-15">
                                    <label class="sr-only form-control-label" for="exampleInputEmail3">Pesquisar</label>
                                    <input type="text" class="form-control" id="exampleInputEmail3" placeholder="Pesquisar">
                                 </div>
											<a class="btn btn-primary waves-effect waves-light" 
											href="<?= base_url() ?>welcome/utilizadorAdd">ADICIONAR</a>
                              </form>
                           </div>
                     	</div>
                     <div class="card-block">
                        <div class="row">
                           <div class="col-sm-12 table-responsive">
                              <table class="table table-hover">
                                 <thead>
                                    <tr>
                                       <th>Login</th>
                                       <th>Perfil</th>
                                       <th>Estado</th>
													<th>Ações</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td>Marcos João</td>
                                       <td>Administrador</td>
                                       <td><span style="color: green;">Activo</span></td>
													<td>
														<div class="dropdown-primary dropdown">
															<button class="btn btn-primary dropdown-toggle waves-effect waves-light " type="button" id="dropdown1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
															
														</button>
															<div class="dropdown-menu" aria-labelledby="dropdown1" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
																<a class="dropdown-item waves-light waves-effect" href="#"><i class="icofont icofont-info"></i> Ver detalhes</a>
																<a class="dropdown-item waves-light waves-effect" href="#"><i class="icofont icofont-edit"></i> Editar</a>
															</div>
														</div> 
													</td>
                                    </tr>
                                    <tr>
                                       <td>Marcos João</td>
                                       <td>Administrador</td>
                                       <td><span style="color: green;">Activo</span></td>
													<td>
														<div class="dropdown-primary dropdown">
															<button class="btn btn-primary dropdown-toggle waves-effect waves-light " type="button" id="dropdown1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
															
														</button>
															<div class="dropdown-menu" aria-labelledby="dropdown1" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
																<a class="dropdown-item waves-light waves-effect" href="#"><i class="icofont icofont-info"></i> Ver detalhes</a>
																<a class="dropdown-item waves-light waves-effect" href="#"><i class="icofont icofont-edit"></i> Editar</a>
															</div>
														</div> 
													</td>
                                    </tr>
												<tr>
                                       <td>Marcos João</td>
                                       <td>Administrador</td>
                                       <td><span style="color: green;">Activo</span></td>
													<td>
														<div class="dropdown-primary dropdown">
															<button class="btn btn-primary dropdown-toggle waves-effect waves-light " type="button" id="dropdown1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
															
														</button>
															<div class="dropdown-menu" aria-labelledby="dropdown1" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
																<a class="dropdown-item waves-light waves-effect" href="#"><i class="icofont icofont-info"></i> Ver detalhes</a>
																<a class="dropdown-item waves-light waves-effect" href="#"><i class="icofont icofont-edit"></i> Editar</a>
															</div>
														</div> 
													</td>
                                    </tr>
                                    <tr>
                                       <td>Marcos João</td>
                                       <td>Administrador</td>
                                       <td><span style="color: green;">Activo</span></td>
													<td>
														<div class="dropdown-primary dropdown">
															<button class="btn btn-primary dropdown-toggle waves-effect waves-light " type="button" id="dropdown1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
															
														</button>
															<div class="dropdown-menu" aria-labelledby="dropdown1" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
																<a class="dropdown-item waves-light waves-effect" href="#"><i class="icofont icofont-info"></i> Ver detalhes</a>
																<a class="dropdown-item waves-light waves-effect" href="#"><i class="icofont icofont-edit"></i> Editar</a>
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
