<!DOCTYPE html>
<html lang="en">

<head>
   <title>Gestão de Frotas</title>

   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
   <!-- Favicon icon -->
   <link rel="shortcut icon" href="<?= base_url() ?>assets/images/favicon.png" type="image/x-icon">
   <link rel="icon" href="<?= base_url() ?>assets/images/favicon.ico" type="image/x-icon">

   <!-- Google font-->
   <link href="https://fonts.googleapis.com/css?family=Ubuntu:400,500,700" rel="stylesheet">

   <!-- themify -->
   <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/icon/themify-icons/themify-icons.css">

   <!-- iconfont -->
   <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/icon/icofont/css/icofont.css">

   <!-- simple line icon -->
   <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/icon/simple-line-icons/css/simple-line-icons.css">

   <!-- Required Fremwork -->
   <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/plugins/bootstrap/css/bootstrap.min.css">

   <!-- Chartlist chart css -->
   <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/chartist/dist/chartist.css" type="text/css" media="all">

   <!-- Weather css -->
   <link href="<?= base_url() ?>assets/css/svg-weather.css" rel="stylesheet">


   <!-- Style.css -->
   <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/main.css">

   <!-- Responsive.css-->
   <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/responsive.css">

</head>

<body class="sidebar-mini fixed">
   <div class="wrapper">
      <!-- Navbar-->
      <header class="main-header-top hidden-print">
         <a href="index.html" class="logo">
					 <img class="img-fluid able-logo" src="<?= base_url() ?>assets/images/logo2.jpeg" alt="Theme-logo">
					</a>
         <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#!" data-toggle="offcanvas" class="sidebar-toggle"></a>
            <!-- Navbar Right Menu-->
            <div class="navbar-custom-menu f-right">
               <ul class="top-nav">
                  <!--Notification Menu-->
                  <li class="dropdown notification-menu">
                     <a href="#!" data-toggle="dropdown" aria-expanded="false" class="dropdown-toggle">
                        <i class="icon-bell"></i>
                        <span class="badge badge-danger header-badge">9</span>
                     </a>
                     <ul class="dropdown-menu">
                        <li class="not-head">Tu tens <b class="text-primary">4</b> novas notificações.</li>
                        <li class="bell-notification">
                           <a href="javascript:;" class="media">
                              <span class="media-left media-icon">
                    <img class="img-circle" src="<?= base_url() ?>assets/images/avatar-1.png" alt="User Image">
                  </span>
                              <div class="media-body"><span class="block">Nova Despesa</span><span class="text-muted block-time">2min atrás</span></div>
                           </a>
                        </li>
                        <li class="bell-notification">
                           <a href="javascript:;" class="media">
                              <span class="media-left media-icon">
                    <img class="img-circle" src="<?= base_url() ?>assets/images/avatar-2.png" alt="User Image">
                  </span>
                              <div class="media-body"><span class="block">Matorista Eliminado</span><span class="text-muted block-time">20min atrás</span></div>
                           </a>
                        </li>
                        <li class="bell-notification">
                           <a href="javascript:;" class="media"><span class="media-left media-icon">
                    <img class="img-circle" src="<?= base_url() ?>assets/images/avatar-3.png" alt="User Image">
                  </span>
                                    <div class="media-body"><span class="block">Nova Transação</span><span class="text-muted block-time">3 horas atrás</span></div></a>
                        </li>
                        <li class="not-footer">
                           <a href="#!">Ver Todas as notificações.</a>
                        </li>
                     </ul>
                  </li>
                  <!-- User Menu-->
                  <li class="dropdown">
                     <a href="#!" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle drop icon-circle drop-image">
                        <span><img class="img-circle " src="<?= base_url() ?>assets/images/avatar-1.png" style="width:40px;" alt="User Image"></span>
                        <span>John <b>Doe</b> <i class=" icofont icofont-simple-down"></i></span>

                     </a>
                     <ul class="dropdown-menu settings-menu">
                        <li><a href="#!"><i class="icon-settings"></i> Definições</a></li>
                        <li><a href="#"><i class="icon-user"></i> Perfil</a></li>
                        <li class="p-0">
                           <div class="dropdown-divider m-0"></div>
                        </li>
                        <li><a href="<?= base_url() ?>welcome/sair"><i class="icon-logout"></i> Sair</a></li>

                     </ul>
                  </li>
               </ul>
            </div>
         </nav>
      </header>
      <!-- Side-Nav-->
      <aside class="main-sidebar hidden-print ">
         <section class="sidebar" id="sidebar-scroll">
            <!-- Sidebar Menu-->
            <ul class="sidebar-menu">
                <li class="nav-level">--- Navigation</li>
                <li class="active treeview">
                    <a class="waves-effect waves-dark" href="<?= base_url() ?>">
                        <i class="icon-speedometer"></i><span> Dashboard</span>
                    </a>
                </li>
					 <li class="nav-level">--- Dados</li>
								<li class="treeview">
                    <a class="waves-effect waves-dark" href="<?= base_url() ?>welcome/veiculo">
                        <i class="icon-speedometer"></i><span> Veiculos</span>
                    </a>                
                </li>
								<li class="treeview">
                    <a class="waves-effect waves-dark" href="<?= base_url() ?>welcome/motoristas">
                        <i class="icon-user"></i><span> Motoristas</span>
                    </a>                
                </li>
								<li class="treeview">
                    <a class="waves-effect waves-dark" href="index.html">
                        <i class="icon-user"></i><span> Funcionarios</span>
                    </a>                
                </li>
					 <li class="nav-level">--- Operações</li>
						<li class="treeview">
                    <a class="waves-effect waves-dark" href="<?= base_url() ?>welcome/transacao">
                        <i class="icon-speedometer"></i><span> Transações</span>
                    </a>                
                	</li>
								<li class="treeview">
                    <a class="waves-effect waves-dark" href="index.html">
                        <i class="icon-speedometer"></i><span> Relatorios</span>
                    </a>                
                </li>
					 <li class="nav-level">--- Administração</li>
						<li class="treeview">
                    <a class="waves-effect waves-dark" href="index.html">
                        <i class="icon-user"></i><span> Utilizadores</span>
                    </a>                
                	</li>
            </ul>
         </section>
      </aside>
