﻿<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Administrador</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../../bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="../../dist/css/skins/_all-skins.min.css">
    <link rel="stylesheet" href="../../bower_components/whhg-font/css/whhg.css">
    
      <link rel="stylesheet" href="../../dist/css/sweetalert2.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="../../bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="../../bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="../../bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../../bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="../../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini" onLoad="consultar_comanda()">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="../index.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
     <img src = "../../dist/img/logoadmin.png" class="img-responsive"  border = "0" width = "95%" />
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-warning"></i>
              <!--<span class="label label-success">4</span>-->
            </a>
            <ul class="dropdown-menu">
              <li class="header"></li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- start message -->
                    <a href="#">
                      <div class="pull-left">
                        <img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Suporte
                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                      </h4>
                      <p>Equipe de Suporte?</p>
                    </a>
                  </li>
                  <!-- end message -->
                
                </ul>
              </li>
              
            </ul>
          </li>
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-question-circle"></i>
              <!--<span class="label label-warning">10</span>-->
            </a>
            <ul class="dropdown-menu">
              <li class="header">Ajuda</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li>
                    <a href="/ajuda/videos_tutoriais">
                             <h3 style="font-size:14px;">
                             <div><i class="fa fa-caret-square-o-right margin-right-5px;" style="font-size:14px;"></i> Vídeos tutoriais</div>
                                <span class = "text-muted"> Aprenda sobre os recursos do sistema.</span>
                                </h3>
                                  </a>

                  </li>
                  <li><!-- Task item -->
                              <a href="javascript:ativaChat()">
                                 <h3 style="font-size:14px;">
                                  <div><i class="fa fa-comments margin-right-5px"></i> Atendimento via chat</div>
                                 <span class = "text-muted">Converse com nossa equipe de suporte</span>
                                  </h3>
                                  </a>
                                </li>
                                <li><!-- Task item -->
                                   <a href="/desktop/GestaoClick.exe" target = "_blank">
                                     <h3 style="font-size:14px;">
                                      <div><i class="fa icon-font icon-battery margin-right-5px"></i> Aplicativo Desktop</div>
                                      <span class = "text-muted">Aplicativo para emissão de notas com certificado A3</span>
                                      </h3>
                                    </a>
                                </li>
                                <li><!-- Task item -->
                                 <a href="/files/TeamViewer.exe" target = "_blank">
                                  <h3 style="font-size:14px;">
                                    <div><i class="fa icon-sync margin-right-5px"></i> Suporte remoto</div>
                                       <span class = "text-muted">Acessamos seu computador pela Internet</span>
                                     </h3>
                                    </a>
                                </li>

                </ul>
              </li>
               <!-- <li class="footer"><a href="#">View all</a></li>-->
            </ul>
          </li>
          <!-- Tasks: style can be found in dropdown.less -->
          <li class="dropdown tasks-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa fa-cogs"></i>
             <!-- <span class="label label-danger">9</span>-->
            </a>
            <ul class="dropdown-menu">
              <li class="header">Configurações</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                 <li>
                                    <a href="/configuracoes/gerais">
                                        <h3 style="font-size:14px;"><i class="fa fa-gear"/></i> Gerais</h3>
                                    </a>
                                </li>
                                <li>
                                    <a href="/planos/meu_plano">
                                        <h3 style="font-size:14px;"><i class="fa fa-star-half-o"/></i> Meu plano</h3>
                                    </a>
                                </li>
                                <li>
                                    <a href="/configuracoes/dados_empresa">
                                        <h3 style="font-size:14px;"><i class="fa fa-suitcase"/></i> Dados da empresa</h3>
                                    </a>
                                </li>
                                <li>
                                    <a href="/configuracoes/marca_empresa">
                                        <h3 style="font-size:14px;"><i class="fa icon-images-gallery"/></i> Marca da empresa</h3>
                                    </a>
                                </li>
                                                                    <li>
                                        <a href="/backup_dados">
                                            <h3 style="font-size:14px;"><i class="fa fa-hdd-o"/></i> Backup de dados</h3>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/exclusao_dados">
                                            <h3 style="font-size:14px;"><i class="fa fa-trash-o"/></i> Exclusão de dados</h3>
                                        </a>
                                    </li>

                  <!-- end task item -->
                </ul>
              </li>
              
            </ul>
          </li>
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="../../dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">Alexandre</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  Alexandre
                  <small>2019</small>
                </p>
              </li>
              <!-- Menu Body -->
             <!--  <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Meus Dados </a>
                </div>
                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat">Sair</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <!--<li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>-->
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexandre</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <!--<form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>-->
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
       <!-- <li class="header">Admin</li>
        
       <!-- <li class="active treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Administrador</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
            <li><a href="index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
          </ul>-->
       <!-- </li>
        <!--<li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Layout Options</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">4</span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/layout/top-nav.html"><i class="fa fa-circle-o"></i> Top Navigation</a></li>
            <li><a href="pages/layout/boxed.html"><i class="fa fa-circle-o"></i> Boxed</a></li>
            <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i> Fixed</a></li>
            <li><a href="pages/layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i> Collapsed Sidebar</a></li>
          </ul>
        </li>
        <li>
          <a href="pages/widgets.html">
            <i class="fa fa-th"></i> <span>Widgets</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green">new</small>
            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Charts</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/charts/chartjs.html"><i class="fa fa-circle-o"></i> ChartJS</a></li>
            <li><a href="pages/charts/morris.html"><i class="fa fa-circle-o"></i> Morris</a></li>
            <li><a href="pages/charts/flot.html"><i class="fa fa-circle-o"></i> Flot</a></li>
            <li><a href="pages/charts/inline.html"><i class="fa fa-circle-o"></i> Inline charts</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>UI Elements</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/UI/general.html"><i class="fa fa-circle-o"></i> General</a></li>
            <li><a href="pages/UI/icons.html"><i class="fa fa-circle-o"></i> Icons</a></li>
            <li><a href="pages/UI/buttons.html"><i class="fa fa-circle-o"></i> Buttons</a></li>
            <li><a href="pages/UI/sliders.html"><i class="fa fa-circle-o"></i> Sliders</a></li>
            <li><a href="pages/UI/timeline.html"><i class="fa fa-circle-o"></i> Timeline</a></li>
            <li><a href="pages/UI/modals.html"><i class="fa fa-circle-o"></i> Modals</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Forms</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>

          <ul class="treeview-menu">
            <li><a href="pages/forms/general.html"><i class="fa fa-circle-o"></i> General Elements</a></li>
            <li><a href="pages/forms/advanced.html"><i class="fa fa-circle-o"></i> Advanced Elements</a></li>
            <li><a href="pages/forms/editors.html"><i class="fa fa-circle-o"></i> Editors</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Tables</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/tables/simple.html"><i class="fa fa-circle-o"></i> Simple tables</a></li>
            <li><a href="pages/tables/data.html"><i class="fa fa-circle-o"></i> Data tables</a></li>
          </ul>
        </li>
        <li>
          <a href="pages/calendar.html">
            <i class="fa fa-calendar"></i> <span>Calendar</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-red">3</small>
              <small class="label pull-right bg-blue">17</small>
            </span>
          </a>
        </li>
        <li>
          <a href="pages/mailbox/mailbox.html">
            <i class="fa fa-envelope"></i> <span>Mailbox</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-yellow">12</small>
              <small class="label pull-right bg-green">16</small>
              <small class="label pull-right bg-red">5</small>
            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i> <span>Examples</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/examples/invoice.html"><i class="fa fa-circle-o"></i> Invoice</a></li>
            <li><a href="pages/examples/profile.html"><i class="fa fa-circle-o"></i> Profile</a></li>
            <li><a href="pages/examples/login.html"><i class="fa fa-circle-o"></i> Login</a></li>
            <li><a href="pages/examples/register.html"><i class="fa fa-circle-o"></i> Register</a></li>
            <li><a href="pages/examples/lockscreen.html"><i class="fa fa-circle-o"></i> Lockscreen</a></li>
            <li><a href="pages/examples/404.html"><i class="fa fa-circle-o"></i> 404 Error</a></li>
            <li><a href="pages/examples/500.html"><i class="fa fa-circle-o"></i> 500 Error</a></li>
            <li><a href="pages/examples/blank.html"><i class="fa fa-circle-o"></i> Blank Page</a></li>
            <li><a href="pages/examples/pace.html"><i class="fa fa-circle-o"></i> Pace Page</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-share"></i> <span>Multilevel</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
            <li class="treeview">
              <a href="#"><i class="fa fa-circle-o"></i> Level One
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
                <li class="treeview">
                  <a href="#"><i class="fa fa-circle-o"></i> Level Two
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
          </ul>
        </li>-->
           <li class="active">
              <a href="../../index.html">
                <i class="fa fa-home"></i> <span>Inicio</span> 
              </a>
              
            </li>
         <li class="treeview">
            <a href = "#"><span class="fa fa-list-alt"></span>Meu Cadastro
            <i class="fa fa-angle-left pull-right"></i>
                    </a>
                <ul class="treeview-menu">
                 <li class = "">
                        <a class = "" href = "../../cadastro/clientes">
                           <span class="fa fa-users"></span>Clientes                                                                            </a>
                        </li>
                     <li class = "">
                      <a class = "" href = "../../cadastro/fornecedores">
                     
                         <span class="glyphicon glyphicon-stats"></span>Fornecedores                                                                            </a>
                              </li>
                        <li class = "">
                          <a class = "" href = "../../cadastro/funcionarios">
                          <span class="fa icon-workshirt"></span>Funcionários                                                                            </a>
                            </li>
                        <li class = "">
                          <a class = "" href = "../../cadastro/banco">
                         <span class="fa fa-bank"></span>Banco                                                                            </a>
                            </li>
                         <li class = "">
                          <a class = "" href = "../../cadastro/vendedor">
                         <span class="fa fa-address-book"></span>Vendedor                                                                           </a>
                            </li> 
                            <li class = "">
                          <a class = "" href = "../../cadastro/transportadora">
                         <span class="fa fa-truck"></span>Transportadora                                                                          </a>
                            </li>   
                            <li class = "">
                          <a class = "" href = "../../cadastro/categorias">
                         <span class="fa fa-truck"></span>Categorias                                                                          </a>
                            </li>
                           <li class = "treeview">
                             <a class = "" href = "#">
                             <span class="fa  fa-clipboard"></span>Produtos                                                                                    <i class="fa fa-angle-left pull-right"></i>
                                  </a>
                               <ul class="treeview-menu">
                                   <li>
                                       <a class = "" href = "../../cadastro/produtos">
                                         <span class="fa fa-bullhorn"></span>Gerenciar Produtos                                                       </a>
                                      </li>
                                     
                                 </ul>
                              </li>
                              <li class = "">
                          <a class = "" href = "../../cadastro/mesas">
                         <span class="fa fa-truck"></span>Mesas                                                                      </a>
                            </li>
                            <li class = "">
                          <a class = "" href = "../../cadastro/comanda">
                         <span class="fa fa-truck"></span>Comanda                                                                    </a>
                            </li>
                            <li class = "">
                          <a class = "" href = "../../cadastro/usuarios">
                         <span class="fa fa-truck"></span>Usuários                                                                    </a>
                            </li>
                               <li class = "treeview">
                             <a class = "" href = "#">
                             <span class="fa  fa-clipboard"></span>Pedidos                                                                                   <i class="fa fa-angle-left pull-right"></i>
                                  </a>
                               <ul class="treeview-menu">
                                   <li>
                                       <a class = "" href = "../../cadastro/pedidos">
                                         <span class="fa fa-bullhorn"></span>Relatório de Pedidos                                                        </a>
                                      </li>
                                      
                                 </ul>
                              </li>
                              
                             </ul>
                     </li>
        <!--<li><a href="https://adminlte.io/docs"><i class="fa fa-book"></i> <span>Documentation</span></a></li>
        <li class="header">LABELS</li>
        <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>-->
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
   <section class="content-header">
    <h1>Adicionar Comanda</h1>
    <ol class="breadcrumb">
        <li><a href="../../index.html"><i class="fa fa-dashboard"></i>Início</a></li>
        <li><a href="../../cadastro/comanda">Comandas</a></li>
        <li class="active">Adicionar</li>
    </ol>
</section>
    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
                    <div class="col-xs-12 col-md-3">
						<div class="input-group">
						<form method="POST" id="form-pesquisa" action="" class="form-inline">
                          <input type="text" class="form-control" name="pesquisa" placeholder="Buscar por nome" id="pesquisa">
						  <span class="input-group-btn">
							<button type="button" name="btn_buscar" id="btn_buscar" class="btn btn-default" ><i class='fa fa-search'></i></button>
						 </form>
                          </span>
						</div><!-- /input-group -->
						
					</div>
					<div class="col-md-3 hidden-xs"></div>
					<div class="col-xs-2 col-md-1">
						<div id="loader" class="text-center"></div>
						
					</div>
					<div class="col-xs-10 col-md-5 ">
						<div class="btn-group pull-right">
					<button type="button" class="btn btn-default"  data-toggle="modal" data-target="#cliente_modal">
                    <i class='fa fa-plus'></i> Novo</button>
						

						</div>
                    </div>
					
		 </div>			
            
         <div class="row">    
      
        <div class="col-sm-12 col-lg-12 col-md-12">
          <!-- small box -->
          <div class="box">
          <div class="box-header with-border">
          <br>
				<h3 class="box-title">Lista de Comandas</h3>
				</div>
                <div class="box-body">
                
                 <div id="carregar"  style="float:left; display: contents;margin-right:-10px;margin-top:-10px;">
                         <img src="../../dist/img/carregando_mini.gif" class="img-responsive" style="width:5%;height:5%">
                        </div>
                                        
				<div class="table-responsive">
                <div class="pull-right" align="right">
                <!--<input type="hidden" name="total"  id="total" value="" class="form-control" > 
                     <p><b>Total Registros: - <span id="total_registros">
                      
                     </span></b></p>-->
                    </div>
					<table class="table table-condensed table-hover table-striped">
						<thead>
                        <tr>
                           <th>Codigo</th>
							<th>Numero da Comanda</th>
                            <th>Numero da Mesa</th>
							<th>Ação</th>
                        </tr>
                    </thead>
                        <tbody id="tabela_body">
                        
						
						
					  </tbody>
                    </table>
                   
                    
					</div>
				</div>
                
      </div>          
                
           
<br>


 <div class="modal fade" id="cliente_modal" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" style="color:black">Adicionar Comanda</h4>
        </div>
        <div class="modal-body">
           <form id="frmmesa" name="frmmesa"  method="post">
            
              <legend>Comanda:</legend>
             
          <div class="container">
             <div class="row">
                <div class="col-md-7">
                
                  
                </div>
            
            </div>
            
            <div class="row">
              <div class="col-md-7">
               <div class="form-group">
                  <label for="numerocomanda" >Numero Comanda *</label>
                  <input id="numerocomanda" type="text" name="numerocomanda"  class="form-control">  
               </div>
               
              </div> 
            </div>
            <div class="row">
              <div class="col-md-7">
               <div class="form-group">
                  <label for="numeromesa" >Numero Mesa *</label>
                  <input id="numeromesa" type="text" name="numeromesa"  class="form-control">  
               </div>
               
              </div> 
            </div>
            
            
        
         </div>
     

           <div class="modal-footer">
              <div class="form-group">
                <div class="col-sm-offset-1 col-sm-10">
                  <div class="pull-right">
                    <button type="reset" class="btn btn-default">Cancelar</button>&nbsp;
                    <button type="submit" name="btn_salvar" id="btn_salvar" class="btn btn-primary botao">Salvar</button>
                    <div id="carregando"  style="display:none;float:right;margin-right:-10px;margin-top:10px;">
                             <img src="../../dist/img/carregando_mini.gif" class="img-responsive" style="width:90%;height:90%">
                        </div>
                             <div class="alert-success" id="sucesso" style="font-size:14px;width:100%;height:30px;margin-top:10px;">
                                <strong>Comanda Gravada com Sucesso!!!</strong>
                             </div>
                    
                  </div>
                </div>
              </div>
          </div>
               
               
       
               
              
              </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 2 -->
  <div class="modal fade" id="altera_modal" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" style="color:black">Editar uma Comanda</h4>
        </div>
        <div class="modal-body">
           <form id="frmalterarmesa" name="frmalterarmesa"  method="post">
            
             <legend>Comanda:</legend>
             
             <div class="container">
             <div class="row">
                <div class="col-md-7">
                
                  
                </div>
            
            </div>
            
            <div class="row">
              <div class="col-md-7">
               <div class="form-group">
                  <label for="numerocomanda" >Numero Comanda*</label>
                  <input id="numerocomanda" type="text" name="numerocomanda"  class="form-control">
                   <input type="hidden" name="codigo"  id="codigo" class="form-control" >  
                   
               </div>
               
              </div> 
            </div>
            <div class="row">
              <div class="col-md-7">
               <div class="form-group">
                  <label for="numeromesa" >Numero Mesa *</label>
                  <input id="numeromesa" type="text" name="numeromesa"  class="form-control">  
               </div>
               
              </div> 
            </div>
            
        
         </div>
         
            
          <div class="modal-footer">
              <div class="form-group">
                <div class="col-sm-offset-1 col-sm-10">
                  <div class="pull-right">
                    <button type="reset" class="btn btn-default">Cancelar</button>&nbsp;
                    <button type="submit" name="btn_alterar" id="btn_alterar" class="btn btn-primary">Alterar</button>
                    <div id="carregandoalterar"  style="display:none;float:right;margin-right:-10px;margin-top:10px;">
                             <img src="../../dist/img/carregando_mini.gif" class="img-responsive" style="width:90%;height:90%">
                        </div>
                             <div class="alert-success" id="alterarsucesso" style="font-size:14px;width:100%;height:30px;margin-top:10px;">
                                <strong>Comanda Alterada com Sucesso!!!</strong>
                             </div>
                    
                  </div>
                </div>
              </div>
          </div>
               
               
               
            </form>
        </div>
      </div>
  </div>
</div>



<div class="modal fade" id="delete">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Excluir Comanda?</h4>
      </div>
      <div class="modal-body">
        <p>Deseja Excluir a Comanda?</p>
         <input type="hidden" name="codigo"  id="codigo" class="form-control" >  
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
        <button type="button" name="btn_excluir" id="btn_excluir" class="btn btn-danger">Excluir</button>
        
        <div id="carregaexcluir"  style="display:none;float:right;margin-right:-10px;margin-top:10px;">
                             <img src="../../dist/img/carregando_mini.gif" class="img-responsive" style="width:5%;height:5%">
                        </div>
                             <div class="alert-success" id="excluirsucesso" style="font-size:14px;width:100%;height:30px;margin-top:10px;">
                                <strong>Comanda excluida com Sucesso!!!</strong>
                             </div>
        
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->



      
      <!-- /.row -->
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <section class="col-lg-12 connectedSortable">
          <!-- Custom tabs (Charts with tabs)-->
         <!--  <div class="nav-tabs-custom">
            <!-- Tabs within a box -->
           <!--  <ul class="nav nav-tabs pull-right">
              <li class="active"><a href="#revenue-chart" data-toggle="tab">   </a></li>
              <li><a href="#sales-chart" data-toggle="tab">   </a></li>
              <li class="pull-left header"><i class="fa fa-inbox"></i> Total de Vendas por produtos em cada mês</li>
            </ul>
            <div class="tab-content no-padding">
              <!-- Morris chart - Sales -->
            <!--   <div class="chart tab-pane active" id="revenue-chart" style="position: relative; height: 300px;"></div>
              <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;"></div>
            </div>
          </div>
          <!-- /.nav-tabs-custom -->

          <!-- Chat box -->
          <!--<div class="box box-success">
            <div class="box-header">
              <i class="fa fa-comments-o"></i>

              <h3 class="box-title">Chat</h3>

              <div class="box-tools pull-right" data-toggle="tooltip" title="Status">
                <div class="btn-group" data-toggle="btn-toggle">
                  <button type="button" class="btn btn-default btn-sm active"><i class="fa fa-square text-green"></i>
                  </button>
                  <button type="button" class="btn btn-default btn-sm"><i class="fa fa-square text-red"></i></button>
                </div>
              </div>
            </div>
            <div class="box-body chat" id="chat-box">
              <!-- chat item -->
            <!--  <div class="item">
                <img src="dist/img/user4-128x128.jpg" alt="user image" class="online">

                <p class="message">
                  <a href="#" class="name">
                    <small class="text-muted pull-right"><i class="fa fa-clock-o"></i> 2:15</small>
                    Mike Doe
                  </a>
                  I would like to meet you to discuss the latest news about
                  the arrival of the new theme. They say it is going to be one the
                  best themes on the market
                </p>
                <div class="attachment">
                  <h4>Attachments:</h4>

                  <p class="filename">
                    Theme-thumbnail-image.jpg
                  </p>

                  <div class="pull-right">
                    <button type="button" class="btn btn-primary btn-sm btn-flat">Open</button>
                  </div>
                </div>
                <!-- /.attachment -->
           <!--   </div>
              <!-- /.item -->
              <!-- chat item -->
             <!-- <div class="item">
                <img src="dist/img/user3-128x128.jpg" alt="user image" class="offline">

                <p class="message">
                  <a href="#" class="name">
                    <small class="text-muted pull-right"><i class="fa fa-clock-o"></i> 5:15</small>
                    Alexander Pierce
                  </a>
                  I would like to meet you to discuss the latest news about
                  the arrival of the new theme. They say it is going to be one the
                  best themes on the market
                </p>
              </div>
              <!-- /.item -->
              <!-- chat item -->
             <!-- <div class="item">
                <img src="dist/img/user2-160x160.jpg" alt="user image" class="offline">

                <p class="message">
                  <a href="#" class="name">
                    <small class="text-muted pull-right"><i class="fa fa-clock-o"></i> 5:30</small>
                    Susan Doe
                  </a>
                  I would like to meet you to discuss the latest news about
                  the arrival of the new theme. They say it is going to be one the
                  best themes on the market
                </p>
              </div>
              <!-- /.item -->
           <!-- </div>
            <!-- /.chat -->
          <!--  <div class="box-footer">
              <div class="input-group">
                <input class="form-control" placeholder="Type message...">

                <div class="input-group-btn">
                  <button type="button" class="btn btn-success"><i class="fa fa-plus"></i></button>
                </div>
              </div>
            </div>
          </div>
          <!-- /.box (chat box) -->

          <!-- TO DO List -->
         <!-- <div class="box box-primary">
            <div class="box-header">
              <i class="ion ion-clipboard"></i>

              <h3 class="box-title">To Do List</h3>

              <div class="box-tools pull-right">
                <ul class="pagination pagination-sm inline">
                  <li><a href="#">&laquo;</a></li>
                  <li><a href="#">1</a></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">&raquo;</a></li>
                </ul>
              </div>
            </div>
            <!-- /.box-header -->
          <!--  <div class="box-body">
              <!-- See dist/js/pages/dashboard.js to activate the todoList plugin -->
            <!--  <ul class="todo-list">
                <li>
                  <!-- drag handle -->
             <!--     <span class="handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                  <!-- checkbox -->
                <!--  <input type="checkbox" value="">
                  <!-- todo text -->
               <!--   <span class="text">Design a nice theme</span>
                  <!-- Emphasis label -->
               <!--   <small class="label label-danger"><i class="fa fa-clock-o"></i> 2 mins</small>
                  <!-- General tools such as edit or delete-->
               <!--   <div class="tools">
                    <i class="fa fa-edit"></i>
                    <i class="fa fa-trash-o"></i>
                  </div>
                </li>
                <li>
                      <span class="handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                  <input type="checkbox" value="">
                  <span class="text">Make the theme responsive</span>
                  <small class="label label-info"><i class="fa fa-clock-o"></i> 4 hours</small>
                  <div class="tools">
                    <i class="fa fa-edit"></i>
                    <i class="fa fa-trash-o"></i>
                  </div>
                </li>
                <li>
                      <span class="handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                  <input type="checkbox" value="">
                  <span class="text">Let theme shine like a star</span>
                  <small class="label label-warning"><i class="fa fa-clock-o"></i> 1 day</small>
                  <div class="tools">
                    <i class="fa fa-edit"></i>
                    <i class="fa fa-trash-o"></i>
                  </div>
                </li>
                <li>
                      <span class="handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                  <input type="checkbox" value="">
                  <span class="text">Let theme shine like a star</span>
                  <small class="label label-success"><i class="fa fa-clock-o"></i> 3 days</small>
                  <div class="tools">
                    <i class="fa fa-edit"></i>
                    <i class="fa fa-trash-o"></i>
                  </div>
                </li>
                <li>
                      <span class="handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                  <input type="checkbox" value="">
                  <span class="text">Check your messages and notifications</span>
                  <small class="label label-primary"><i class="fa fa-clock-o"></i> 1 week</small>
                  <div class="tools">
                    <i class="fa fa-edit"></i>
                    <i class="fa fa-trash-o"></i>
                  </div>
                </li>
                <li>
                      <span class="handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                  <input type="checkbox" value="">
                  <span class="text">Let theme shine like a star</span>
                  <small class="label label-default"><i class="fa fa-clock-o"></i> 1 month</small>
                  <div class="tools">
                    <i class="fa fa-edit"></i>
                    <i class="fa fa-trash-o"></i>
                  </div>
                </li>
              </ul>
            </div>
            <!-- /.box-body -->
           <!-- <div class="box-footer clearfix no-border">
              <button type="button" class="btn btn-default pull-right"><i class="fa fa-plus"></i> Add item</button>
            </div>
          </div>
          <!-- /.box -->

          <!-- quick email widget -->
         <!-- <div class="box box-info">
            <div class="box-header">
              <i class="fa fa-envelope"></i>

              <h3 class="box-title">Quick Email</h3>
              <!-- tools box -->
            <!-- <div class="pull-right box-tools">
                <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip"
                        title="Remove">
                  <i class="fa fa-times"></i></button>
              </div>
              <!-- /. tools -->
           <!-- </div>
            <div class="box-body">
              <form action="#" method="post">
                <div class="form-group">
                  <input type="email" class="form-control" name="emailto" placeholder="Email to:">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" placeholder="Subject">
                </div>
                <div>
                  <textarea class="textarea" placeholder="Message"
                            style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                </div>
              </form>
            </div>
            <div class="box-footer clearfix">
              <button type="button" class="pull-right btn btn-default" id="sendEmail">Send
                <i class="fa fa-arrow-circle-right"></i></button>
            </div>-->
          </div>
       </div>
     </div>     

        <!-- </section>
        <!-- /.Left col -->
        <!-- right col (We are only adding the ID to make the widgets sortable)-->
     <section class="col-lg-5 connectedSortable">

          <!-- Map box -->
         <!-- <div class="box box-solid bg-light-blue-gradient">
            <div class="box-header">
              <!-- tools box -->
            <!--  <div class="pull-right box-tools">
                <button type="button" class="btn btn-primary btn-sm daterange pull-right" data-toggle="tooltip"
                        title="Date range">
                  <i class="fa fa-calendar"></i></button>
                <button type="button" class="btn btn-primary btn-sm pull-right" data-widget="collapse"
                        data-toggle="tooltip" title="Collapse" style="margin-right: 5px;">
                  <i class="fa fa-minus"></i></button>
              </div>
              <!-- /. tools -->

            <!--  <i class="fa fa-map-marker"></i>

              <h3 class="box-title">
                Visitors
              </h3>
            </div>
            <div class="box-body">
              <div id="world-map" style="height: 250px; width: 100%;"></div>
            </div>
            <!-- /.box-body-->
            
          <!--  <div class="box-footer no-border">
              <div class="row">
                <div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">
                  <div id="sparkline-1"></div>
                  <div class="knob-label">Visitors</div>
                </div>
                <!-- ./col -->
             <!--   <div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">
                  <div id="sparkline-2"></div>
                  <div class="knob-label">Online</div>
                </div>
                <!-- ./col -->
             <!--   <div class="col-xs-4 text-center">
                  <div id="sparkline-3"></div>
                  <div class="knob-label">Exists</div>
                </div>
                <!-- ./col -->
           <!--   </div>
              <!-- /.row -->
          <!--  </div>
          </div>
          <!-- /.box -->

          <!-- solid sales graph -->
         <!-- <div class="box box-solid bg-teal-gradient">
            <div class="box-header">
              <i class="fa fa-th"></i>

              <h3 class="box-title">Sales Graph</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn bg-teal btn-sm" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn bg-teal btn-sm" data-widget="remove"><i class="fa fa-times"></i>
                </button>
              </div>
            </div>
            <div class="box-body border-radius-none">
              <div class="chart" id="line-chart" style="height: 250px;"></div>
            </div>
            <!-- /.box-body -->
           <!-- <div class="box-footer no-border">
              <div class="row">
                <div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">
                  <input type="text" class="knob" data-readonly="true" value="20" data-width="60" data-height="60"
                         data-fgColor="#39CCCC">

                  <div class="knob-label">Mail-Orders</div>
                </div>
                <!-- ./col -->
              <!--  <div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">
                  <input type="text" class="knob" data-readonly="true" value="50" data-width="60" data-height="60"
                         data-fgColor="#39CCCC">

                  <div class="knob-label">Online</div>
                </div>
                <!-- ./col -->
               <!-- <div class="col-xs-4 text-center">
                  <input type="text" class="knob" data-readonly="true" value="30" data-width="60" data-height="60"
                         data-fgColor="#39CCCC">

                  <div class="knob-label">In-Store</div>
                </div>
                <!-- ./col -->
            <!--  </div>
              <!-- /.row -->
         <!--   </div>
            <!-- /.box-footer -->
        <!--  </div>
          <!-- /.box -->

          <!-- Calendar -->
         <!-- <div class="box box-solid bg-green-gradient">
            <div class="box-header">
              <i class="fa fa-calendar"></i>

              <h3 class="box-title">Calendar</h3>
              <!-- tools box -->
            <!--  <div class="pull-right box-tools">
                <!-- button with a dropdown -->
             <!--   <div class="btn-group">
                  <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-bars"></i></button>
                  <ul class="dropdown-menu pull-right" role="menu">
                    <li><a href="#">Add new event</a></li>
                    <li><a href="#">Clear events</a></li>
                    <li class="divider"></li>
                    <li><a href="#">View calendar</a></li>
                  </ul>
                </div>
                <button type="button" class="btn btn-success btn-sm" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-success btn-sm" data-widget="remove"><i class="fa fa-times"></i>
                </button>
              </div>
              <!-- /. tools -->
           <!-- </div>
            <!-- /.box-header -->
          <!--  <div class="box-body no-padding">
              <!--The calendar -->
           <!--   <div id="calendar" style="width: 100%"></div>
            </div>
            <!-- /.box-body -->
           <!-- <div class="box-footer text-black">
              <div class="row">
                <div class="col-sm-6">
                  <!-- Progress bars -->
              <!--    <div class="clearfix">
                    <span class="pull-left">Task #1</span>
                    <small class="pull-right">90%</small>
                  </div>
                  <div class="progress xs">
                    <div class="progress-bar progress-bar-green" style="width: 90%;"></div>
                  </div>

                  <div class="clearfix">
                    <span class="pull-left">Task #2</span>
                    <small class="pull-right">70%</small>
                  </div>
                  <div class="progress xs">
                    <div class="progress-bar progress-bar-green" style="width: 70%;"></div>
                  </div>
                </div>
                <!-- /.col -->
              <!--  <div class="col-sm-6">
                  <div class="clearfix">
                    <span class="pull-left">Task #3</span>
                    <small class="pull-right">60%</small>
                  </div>
                  <div class="progress xs">
                    <div class="progress-bar progress-bar-green" style="width: 60%;"></div>
                  </div>

                  <div class="clearfix">
                    <span class="pull-left">Task #4</span>
                    <small class="pull-right">40%</small>
                  </div>
                  <div class="progress xs">
                    <div class="progress-bar progress-bar-green" style="width: 40%;"></div>
                  </div>
                </div>
                <!-- /.col -->
          <!--    </div>
              <!-- /.row -->
          <!--  </div>
          </div>
          <!-- /.box -->

        </section>
        <!-- right col -->
      </div>
      <!-- /.row (main row) -->

   <!-- </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer>

  


<!-- jQuery 3 -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../../bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="../../bower_components/raphael/raphael.min.js"></script>
<!--<script src="../bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="../../bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="../../plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="../../plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="../../bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../../bower_components/moment/min/moment.min.js"></script>
<script src="../../bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="../../bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="../../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="../../bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../../bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../plugins/input-mask/jquery.maskedinput.js"></script>
<script src="../../dist/js/adminlte.min.js"></script>
<!-- <script src="../../dist/js/sweetalert2.min.js"></script>-->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<!--<script src="../dist/js/pages/dashboard.js"></script>-->
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>

 <script type="text/javascript" >

//formata de forma generica os campos
function formataCampo(campo, Mascara, evento) { 
        var boleanoMascara; 

        var Digitato = evento.keyCode;
        exp = /\-|\.|\/|\(|\)| /g
        campoSoNumeros = campo.value.toString().replace( exp, "" ); 

        var posicaoCampo = 0;    
        var NovoValorCampo="";
        var TamanhoMascara = campoSoNumeros.length;; 

        if (Digitato != 8) { // backspace 
                for(i=0; i<= TamanhoMascara; i++) { 
                        boleanoMascara  = ((Mascara.charAt(i) == "-") || (Mascara.charAt(i) == ".")
                                                                || (Mascara.charAt(i) == "/")) 
                        boleanoMascara  = boleanoMascara || ((Mascara.charAt(i) == "(") 
                                                                || (Mascara.charAt(i) == ")") || (Mascara.charAt(i) == " ")) 
                        if (boleanoMascara) { 
                                NovoValorCampo += Mascara.charAt(i); 
                                  TamanhoMascara++;
                        }else { 
                                NovoValorCampo += campoSoNumeros.charAt(posicaoCampo); 
                                posicaoCampo++; 
                          }              
                  }      
                campo.value = NovoValorCampo;
                  return true; 
        }else { 
                return true; 
        }
}
//valida numero inteiro com mascara
function mascaraInteiro(){
        if (event.keyCode < 48 || event.keyCode > 57){
                event.returnValue = false;
                return false;
        }
        return true;
}

//adiciona mascara de data
function MascaraData(data){
        if(mascaraInteiro(data)==false){
                event.returnValue = false;
        }       
        return formataCampo(data, '00/00/0000', event);
}

 
function consultar_comanda()
	  {
		$("#carregando").hide();
		$("#carregar").hide(); 
		//var total    = $("#total").val();
		//var total    = $(this).attr('data-total');
		
		$.ajax(
		{
			type:"POST",
			method:"POST",
			dataType:'html',
			cache:false,
			 async: false,
			url:"controller.php?acao=consultar",
		
		beforeSend: function()
		{
			$("#carregar").show(); 
		  $("#carregar").fadeIn("slow",function()
			 { 		
			$("#carregar").delay(9000).show(); 
			 $("#carregar").empty().html('<img src="../../dist/img/carregando_mini.gif" class="img-responsive" style="width:7%;height:7%">');
			 });	
		
		},
		success: function(response)
		{
			
			
			 	$("#carregar").show(); 
				
			//	 $("input#total").val(response.total);
			    $("#tabela_body").empty().load('controller.php?acao=consultar');
			    console.log(response);	
			
			//var total = $("#total").val();
		
			//$("input[id*='total']").val(total);
			
            //faço um foreach percorrendo todos os inputs com a class soma e faço a soma na var criada acima
            //alert(total);
			 //console.log(total);
			 
			 // var item = [];
            // var tr;
		    // $('#tabela_body').empty().html('');
			
			 //  $.each(response, function(i, item) 
			 //  {
				  // var sucesso = item.sucesso;		   
				  // var CodigoClientes=item.CodigoClientes;
				  // var Nome=item.Nome;
				  // var Endereco=item.Endereco;
				  // var Cpf=item.Cpf;
				  // var Rg=item.Rg;
				 //  var Cep=item.Cep;
				 //  var CNPJ=item.CNPJ;
				 //  var RazaoSocial=item.RazaoSocial;
				 //  var InscEstadual=item.InscEstadual;
				 //  var Bairro=item.Bairro;
				 //  var Cidade=item.Cidade;
				 //  var Numero=item.Numero;
				 //  var Telefone=item.Telefone;
				 //  var Celular=item.Celular;
				 //  var Email=item.Email;
				  
					 
			   			   
				 // if(sucesso ==1)
				 // {  
				 
				  // $("#carregar").hide();
			 	  
				  //$("#tabela_body").append( 
					 //   '<tr>'+
					   // '<td>'  + CodigoClientes + ' </td>'+
					  //  '<td>'  + Nome + '</td>'+
					   // '<td>'  + Endereco + '</td>'+
					   // '<td>'  + Cpf + '</td>'+
					  //  '<td>'  + Rg + '</td>'+
                       // '<td><button type="button"  data-toggle="modal"  data-target="#altera_modal" class="btn btn-info" data-action="shred" '+
					  //  'data-id="' + CodigoClientes  + '" data-nome="' + Nome  + '" data-cep="' + Cep  + '" data-cpf="' + Cpf  + '" data-Rg="' + Rg  + '" '+
					  //  'data-CNPJ="' + CNPJ  + '" data-RazaoSocial="' + RazaoSocial  + '" data-inscricaoEstadual="' + InscEstadual  + '" '+
					  //  'data-endereco="' + Endereco  + '" data-bairro="' + Bairro  + '" data-cidade="' + Cidade  + '" '+
					  //  'data-numero="' + Numero  + '" data-telefone="' + Telefone  + '"  data-celular="' + Celular  + '" data-email="' + Email  + '">'+
                     //   '<span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Alterar</button>   '+
					 //   '    <button type="button" data-toggle="modal"  data-target="#delete" data-action="shred" '+
					 //   'data-id="' + CodigoClientes  + '" class="btn btn-danger"><i class="glyphicon glyphicon-trash"> Excluir</i></button> '+
					 //   '</td>'+
					 //   '</tr>')
					   
					    console.log(response);	
					   
					 //}
					 //else
				 // {
				  // $("#carregar").slideDown('slow').fadeIn('slow',function()
				   // {
						 // var erro = [];
           //
					 //	  $.each(response, function(i, item) 
						 //  {
						 //	  var erro = item.erro;	
					   //      console.log(erro);	
					
					  //     });
					
					 //   
					 //  });
				    // }   
					   
					   
				 //});
				
		    //  console.log(response);		
			 
			 
			
			
			
		},
		complete: function()
		{
			$("#carregar").hide(); 
		
		}
			
		});
			return false;
		
	  }
	
    $(document).ready(function()
	  {

       
	  
	  $('#delete').on('shown.bs.modal', function ()
		{
			 var carregaexcluir    =  $("#carregaexcluir").val();
	         var excluirsucesso    =  $("#excluirsucesso").val();
			
			 $("#carregaexcluir").hide();
		     $("#excluirsucesso").hide();
		}) 
	  
	  
	  $("#tabela_body").on('click','[data-action="shred"]',function (e)
	  {
		
		e.preventDefault();
		 var codigo    = $(this).attr('data-id');
		var codigo            =  $("#codigo").val();
		var button        = $(this).attr('name');
		
		 var codigo         =  $("#delete #codigo").val();
		$("#codigo input[name='codigo']").val(codigo);
		
		$("#carregaexcluir").hide();
		$("#excluirsucesso").hide();
		  
	   })  
	   
	   $('#btn_excluir').on('click', function (e)
	{
		e.preventDefault();
		 var codigo    = $(this).attr('data-id');
	    var codigo            =  $("#codigo").val();
        var carregaexcluir    =  $("#carregaexcluir").val();
	    var excluirsucesso    =  $("#excluirsucesso").val();
		
		$("#carregaexcluir").hide();
		$("#excluirsucesso").hide();

	  $.ajax(
		{
			 type:"POST",
			 cache:false,
			 async: false,
			 dataType: 'html',
             url:"controller.php?acao=excluir",
			data: "codigo="+codigo,

		
		beforeSend: function()
		{
			
		  $("#carregaexcluir").fadeIn("slow",function()
			 { 		
			 $("#carregaexcluir").show(); 
			 $("#carregaexcluir").empty().html('<img src="../../dist/img/carregando_mini.gif" class="img-responsive" style="width:10%;height:10%">');
			 });	
		
		},
		success: function(response)
		
		{
           $("#excluirsucesso").show('slow');
          if(response ==1)
				 {
					
				    $("#excluirsucesso").slideDown('slow').fadeIn('slow',function()
				   {
					    $("#excluirsucesso").show();
						console.log(response);
						 $("#excluirsucesso").show();
					});
				  
				 }
				  else
				 {
				  $("#carregaexcluir").slideDown('slow').fadeIn('slow',function()
				   {
					   $("#excluirsucesso").show();
						console.log(response);
						
					});

				 }	
				 
		  window.setTimeout(function () 
		    {
			  $("#carregaexcluir").show('slow');
		 	   $("#excluirsucesso").show('slow');
			     $("#excluirsucesso").hide();	
				$('#delete').modal('hide');	
				window.location = 'index.php'; 
			 }, 2000); 	
		
		
		console.log(response);	
			
		
		},
		complete: function()
		{
			$("#carregaexcluir").fadeOut('slow',function()
				 {
				    $("#carregaexcluir").hide();
				 });
				 
				window.setTimeout(function () 
				{
				  $("#carregaexcluir").show('slow');
				   $("#excluirsucesso").show('slow');
					 $("#excluirsucesso").hide();	
					$('#delete').modal('hide');	
					window.location = 'index.php'; 
				 }, 2000); 		 
		}
			
		});
			return false;
	
	
    })
});	
	 $(document).ready(function()
	  {

       $("#altera_modal #alterarsucesso").hide();
	   
	    $('#altera_modal').on('shown.bs.modal', function ()
		{
			 var carregandoalterar  =  $("#carregandoalterar").val();
			 var alterarsucesso     =  $("#alterarsucesso").val();
			
			 $("#carregandoalterar").hide();
			 $("#alterarsucesso").hide();	
			 
			//var codigo            =  $("#codigo").val();
			   var codigo         =  $("#altera_modal #codigo").val();
			   var numeromesa     = $("#altera_modal #numeromesa").val();
			    var numerocomanda = $("#altera_modal #numerocomanda").val();
			  
			 
		$("#altera_modal input[name='numeromesa']").focus();
		
		
			 
		}) 
	  
	  $("#tabela_body").on('click','[data-action="shred"]',function (e)
	  {
			
		e.preventDefault();
		
		
		$("#altera_modal #alterarsucesso").hide();
		
		var alterarsucesso    =  $("#altera_modal #alterarsucesso").val();
		var carregandoalterar =  $("#altera_modal #carregandoalterar").val();
		//var codigo          =  $("#codigo").val();
        var codigo            =  $("#altera_modal #codigo").val();
	   var numeromesa         = $("#altera_modal #numeromesa").val();
	    var numerocomanda     = $("#altera_modal #numerocomanda").val();
			  
	    var codigo            = $(this).attr('data-id');
		var numeromesa        = $(this).attr('data-numeromesa');
		var numerocomanda     = $(this).attr('data-numerocomanda');
		
		$("#altera_modal input[name='codigo']").val(codigo); 
		$("#altera_modal input[name='numeromesa']").val(numeromesa);
		$("#altera_modal input[name='numerocomanda']").val(numerocomanda);
		
		
		$("#altera_modal input[name='numeromesa']").focus();
		
		$("#altera_modal #alterarsucesso").hide();
		//console.log(codigo);
	  })
	   
	  $("#btn_alterar").click(function()
        
	  {
		  
	    var alterarsucesso    = $("#altera_modal #alterarsucesso").val();
		var codigo            =  $("#altera_modal #codigo").val();
		var numeromesa        = $("#altera_modal #numeromesa").val();
	    var numerocomanda     = $("#altera_modal #numerocomanda").val();
		
	    var carregandoalterar = $("#altera_modal #carregandoalterar").val();
	   
	   if(numeromesa == '')
		{
		 
		swal({
		  title: "Erro",
		  text: "Campo Obrigatório!",
		  icon: "warning",
		  button: "Erro!",
		 });
		 
		 return false;
		}
		
		
		
		$("#altera_modal #alterarsucesso").hide();
		var form=$("#frmalterarmesa");
			var dados = $('#frmalterarmesa').serialize();

	 
	  $.ajax(
		{
			type:"POST",
			 cache:false,
			 async: false,
			 dataType: 'html',
             url:"controller.php?acao=alterar",
			
			data:dados,
		
		beforeSend: function()
		{
			 $("#altera_modal #carregandoalterar").show();
		  $("#altera_modal #carregandoalterar").fadeIn("slow",function()
			 { 		
			 $("#altera_modal #carregandoalterar").show(); 
			 $("#altera_modal #carregandoalterar").empty().html('<img src="../../dist/img/carregando_mini.gif" class="img-responsive" style="width:40%;height:40%">');
			 });	
		
		},
		success: function(response)
		
		{
           $("#altera_modal #alterarsucesso").show('slow');
          if(response ==1)
				 {
					
				    $("#altera_modal #alterarsucesso").slideDown('slow').fadeIn('slow',function()
				   {
						console.log(response);
						 $("#altera_modal #alterarsucesso").show();
					});
				  
				 }
				  else
				 {
				  $("#altera_modal #carregandoalterar").slideDown('slow').fadeIn('slow',function()
				   {
						console.log(response);
						
					});

				 }	
				 
		   window.setTimeout(function () 
		   {
		 	   $("#altera_modal #alterarsucesso").show('slow');
			     $("#altera_modal #alterarsucesso").hide();	
				$('#altera_modal #altera_modal').modal('hide');
				window.location = 'index.php'; 
			}, 2000); 	
		
		
		console.log(response);	
			
		
		},
		complete: function()
		{
			$("#altera_modal #carregandoalterar").fadeOut('slow',function()
				 {
				    $("#altera_modal #carregandoalterar").hide();
				 });
				 
				 window.setTimeout(function () 
				 {
					$("#altera_modal #alterarsucesso").show('slow');
						$("#altera_modal #alterarsucesso").hide();	
						$('#altera_modal #altera_modal').modal('hide');
						window.location = 'index.php'; 
				  }, 2000); 		 
		}
			
		});
			return false;
	
      })
	  
	  
});	 

$(document).ready(function()
   {
	   
	 var carregando        =  $("#carregando").val();
	    var sucesso          =  $("#sucesso").val();
		
	 $("#carregando").hide();
	 $("#sucesso").hide();	 
	 
	$('#cliente_modal').on('shown.bs.modal', function ()
	{
		 var carregando        =  $("#cliente_modal #carregando").val();
	     var sucesso          =  $("#cliente_modal #sucesso").val();
	     $("#cliente_modal #carregando").hide();
	     $("#cliente_modal #sucesso").hide();		
  	 		
			
		$("#cliente_modal input[name='nome']").focus();
		
		
     
    })
	
	$('#btn_salvar').on('click', function (e)
	{
		e.preventDefault();
	   var numerocomanda        = $("#numerocomanda").val();
	   var numeromesa           = $("#numeromesa").val();
	   var carregando           =  $("#carregando").val();
	    var sucesso             =  $("#sucesso").val();
		
		if(numeromesa == '')
		{
		 
		swal({
		  title: "Erro",
		  text: "Campo Obrigatório!",
		  icon: "warning",
		  button: "Erro!",
		 });
		 
		 return false;
		}
		
		
		$("#sucesso").hide();
		  var form=$("#frmmesa");
			var dados = $('#frmmesa').serialize();

	  $.ajax(
		{
			 type:"POST",
			 cache:false,
			 async: false,
			 dataType: 'html',
             url:"controller.php?acao=inserir",
			
			data:dados,
		
		beforeSend: function()
		{
			
		  $("#carregando").fadeIn("slow",function()
			 { 		
			 $("#carregando").show(); 
			 $("#carregando").empty().html('<img src="../../dist/img/carregando_mini.gif" class="img-responsive" style="width:7%;height:7%">');
			 });	
		
		},
		success: function(response)
		
		{
           $("#sucesso").show('slow');
          if(response ==1)
				 {
					
				    $("#sucesso").slideDown('slow').fadeIn('slow',function()
				   {
					    $("#sucesso").show();
						console.log(response);
						 $("#sucesso").show();
					});
				  
				 }
				  else
				 {
				  $("#carregando").slideDown('slow').fadeIn('slow',function()
				   {
					   $("#sucesso").show();
						console.log(response);
						
					});

				 }	
				 
				  window.setTimeout(function () 
					{
					  $("#carregando").show('slow');
					   $("#sucesso").show('slow');
						 $("#sucesso").hide();	
						$('#cliente_modal').modal('hide');	
						window.location = 'index.php'; 
					 }, 2000); 
		
		
		console.log(response);	
			
		
		},
		complete: function()
		{
			$("#carregando").fadeOut('slow',function()
				 {
				    $("#carregando").hide();
				 });
				 
				   window.setTimeout(function () 
					{
					  $("#carregando").show('slow');
					   $("#sucesso").show('slow');
						 $("#sucesso").hide();	
						$('#cliente_modal').modal('hide');	
						window.location = 'index.php'; 
					 }, 2000); 
		}
			
		});
			return false;
	
	
    })
	
	  
	  $('#btn_buscar').on('click', function (e)
	   {
		e.preventDefault();
	    var pesquisa  =  $("#pesquisa").val();
        var carregar  =  $("#carregar").val();
		
		$("#carregar").hide();
		
		if(pesquisa == '')
		{
		 
		swal({
		  title: "Erro",
		  text: "Campo Obrigatório!",
		  icon: "warning",
		  button: "Erro!",
		 });
		 
		 return false;
		}

	  $.ajax(
		{
			 type:"POST",
			 method:"POST",
			 cache:false,
			 async: false,
			 dataType: 'html',
             url:"controller.php?acao=filtrarnome",
			data: "nome="+pesquisa,

		
		beforeSend: function()
		{
			
		  $("#carregar").fadeIn("slow",function()
			 { 		
			 $("#carregar").show(); 
			 $("#carregar").empty().html('<img src="../../dist/img/carregando_mini.gif" class="img-responsive" style="width:10%;height:10%">');
			 });	
		
		},
		success: function(response)
		
		{
         // if(response ==1)
			//	 {
					 $("#carregar").show(); 
					 $("#tabela_body").empty().html(response);
			         //$("#tabela_body").empty().load('controller.php?acao=filtrar');
			
			 	  console.log(response);
				// }
				//  else
				// {
				//  console.log(response);

				// }	
		
		},
		complete: function()
		{
			$("#carregar").fadeOut('slow',function()
				 {
				    $("#carregar").hide();
				 });
				 
						 
		}
			
		});
			return false;
	
	
    })
	
	
});

function dataAtualFormatada(){
			var data = new Date();
			var dia = data.getDate();
			if (dia.toString().length == 1)
			  dia = "0"+dia;
			var mes = data.getMonth()+1;
			if (mes.toString().length == 1)
			  mes = "0"+mes;
			var ano = data.getFullYear();  
			return dia+"/"+mes+"/"+ano;
		}
		 $('#data').val(dataAtualFormatada);
		 


 $(document).ready(function() 
 {
 
    		$('input').keypress(function(e) {
            var code = null;
            code = (e.keyCode ? e.keyCode : e.which);
            return (code === 13) ? false : true;
 
        });
 
        $('input[type=text]').keydown(function(e) {
            // Obter o próximo índice do elemento de entrada de texto
            var next_idx = $('input[type=text]').index(this) + 1;
 
            // Obter o número de elemento de entrada de texto em um documento html
            var tot_idx = $('body').find('input[type=text]').length;
 
            // Entra na tecla no código ASCII
            if (e.keyCode === 13) {
                if (tot_idx === next_idx)
                    // Vá para o primeiro elemento de texto
                    $('input[type=text]:eq(0)').focus();
                else
                    // Vá para o elemento de entrada de texto seguinte
                    $('input[type=text]:eq(' + next_idx + ')').focus();
            }
        });
           
			
			function limpar()
		   {
		
			  var numeromesa     = $("#numeromesa").val("");
			  var numerocomanda  = $("#numerocomanda").val("");
	   
		}

       
	
});
	
</script>
</body>
</html>
