<!-- Inicio de Body -->
<body class="sticky-header left-side-collapsed"  onload="initMap()">
    <section>
    	<!-- left side Meunu start-->
		<div class="left-side sticky-left-side">

			<!--logo and iconic logo start-->
			<div class="logo">
				<h1><a href="<?=DOMAIN?>usuario/>">Opções</b></a></h1>
			</div>
			<div class="logo-icon text-center">
				<a href="<?=DOMAIN?>usuario/"><i class="lnr lnr-home"></i> </a>
			</div>

			<!--logo and iconic logo end-->
			<div class="left-side-inner">

				<!--sidebar nav start-->
					<ul class="nav nav-pills nav-stacked custom-nav">
						<li class="menu-list"><a href=""><i class="glyphicon glyphicon-user"></i> <span>Usuário</span></a>
							<ul class="sub-menu-list">
								<li><a href="<?=DOMAIN?>usuario/editaConta/">Editar Conta</a> </li>
								<li><a href="<?=DOMAIN?>usuario/excluirConta/">Excluir Conta</a></li>
							</ul>
						</li>              
						<li class="menu-list"><a href=""><i class="glyphicon glyphicon-eye-open"></i> <span>Patrimônio</span></a>
							<ul class="sub-menu-list">
								<li><a href="<?=DOMAIN?>patrimonio/efetuarBalanco/">Efetuar Balanço</a> </li>
							</ul>
						</li>
						<li class="menu-list"><a href=""><i class="glyphicon glyphicon-usd"></i> <span>Caixa</span></a>
								<ul class="sub-menu-list">
									<li><a href="<?=DOMAIN?>fluxodecaixa/exercicioCorrente/">Exercício Corrente</a> </li>
									<li><a href="<?=DOMAIN?>fluxodecaixa/exerciciosAnteriores/">Exercícios Anterirores</a> </li>
								</ul>
						</li>  
						<li class="menu-list"><a href="#"><i class="glyphicon glyphicon-search"></i> <span>Consultar</span></a>  
							<ul class="sub-menu-list">
								<li><a href="<?=DOMAIN?>ativo/consultar/">Ativo</a> </li>
								<li><a href="<?=DOMAIN?>passivo/consultar/">Passivo</a> </li>
								<li><a href="<?=DOMAIN?>receita/consultar/">Receita</a> </li>
								<li><a href="<?=DOMAIN?>despesa/consultar/">Despesa</a> </li>
								<li><a href="<?=DOMAIN?>metaFinenceira/consultar/">Meta Financeira</a> </li>
								<li><a href="<?=DOMAIN?>medida/consultar/">Medida</a> </li>
								<li><a href="<?=DOMAIN?>fluxodecaixa/consultar/">Fluxo de caixa</a> </li>
							</ul>
						</li>
						<li class="menu-list"><a href=""><i class="glyphicon glyphicon-pencil"></i> <span>Cadastrar</span></a>
						<ul class="sub-menu-list">
								<li><a href="<?=DOMAIN?>ativo/cadastrar/">Ativo</a> </li>
								<li><a href="<?=DOMAIN?>passivo/cadastrar/">Passivo</a> </li>
								<li><a href="<?=DOMAIN?>receita/cadastrar/">Receita</a> </li>
								<li><a href="<?=DOMAIN?>despesa/cadastrar/">Despesa</a> </li>
								<li><a href="<?=DOMAIN?>metaFinanceira/cadastrar/">Meta Financeira</a> </li>
								<li><a href="<?=DOMAIN?>medida/cadastrar/">Medida</a> </li>
								<li><a href="<?=DOMAIN?>fluxodecaixa/cadastrar/">Fluxo de caixa</a> </li>
							</ul>
						</li>
						<li class="menu-list"><a href=""><i class="glyphicon glyphicon-wrench"></i><span>Editar</span></a> 
							<ul class="sub-menu-list">
								<li><a href="<?=DOMAIN?>ativo/editar/">Ativo</a> </li>
								<li><a href="<?=DOMAIN?>passivo/editar/">Passivo</a> </li>
								<li><a href="<?=DOMAIN?>receita/editar/">Receita</a> </li>
								<li><a href="<?=DOMAIN?>despesa/editar/">Despesa</a> </li>
								<li><a href="<?=DOMAIN?>metaFinanceira/editar/">Meta Financeira</a> </li>
								<li><a href="<?=DOMAIN?>medida/editar/">Medida</a> </li>
								<li><a href="<?=DOMAIN?>fluxodecaixa/editar/">Fluxo de caixa</a> </li>
							</ul>
						</li>
						<li class="menu-list"><a href=""><i class="glyphicon glyphicon-trash"></i><span>Excluir</span></a> 
							<ul class="sub-menu-list">
								<li><a href="<?=DOMAIN?>ativo/excluir/">Ativo</a> </li>
								<li><a href="<?=DOMAIN?>passivo/excluir/">Passivo</a> </li>
								<li><a href="<?=DOMAIN?>receita/excluir/">Receita</a> </li>
								<li><a href="<?=DOMAIN?>despesa/excluir/">Despesa</a> </li>
								<li><a href="<?=DOMAIN?>metaFinanceira/excluir/">Meta Financeira</a> </li>
								<li><a href="<?=DOMAIN?>medida/excluir/">Medida</a> </li>
								<li><a href="<?=DOMAIN?>fluxodecaixa/excluir/">Fluxo de caixa</a> </li>
							</ul>
						</li>
						<li class="menu-list"><a href=""><i class="glyphicon glyphicon-off"></i><span>Dashboard</span></a>
							<ul class="sub-menu-list">
								<li><a href="<?=DOMAIN?>usuario/logout/">Sair</a></li>
							</ul>
						</li> 
					</ul>
				<!--sidebar nav end-->
			</div>
		</div>
    	<!-- left side Menu end -->