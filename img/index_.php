<html lang="pt-BR" ng-app="epayApp" >
<head>
	<meta charset="utf-8">

	<link rel="icon" href="img/favicon.png">

	<title>epay</title>

	<meta property="title" content="epay | cartão presente, cupom promocional e recarga" />

	<meta property="description" content="A epay é líder mundial em soluções pré-pagas. Especialista em cartões presente, cartões para jogos online, assinaturas e créditos para conteúdos digitais." />

	<meta property="og:title" content="epay | cartão presente, cupom promocional e recarga" />

	<meta property="og:description" content="A epay é líder mundial em soluções pré-pagas. Especialista em cartões presente, cartões para jogos online, assinaturas e créditos para conteúdos digitais." />

	<meta name="theme-color" content="#Ea5d03">
	
	<meta name="msapplication-navbutton-color" content="#Ea5d03">

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta name="mobile-web-app-capable" content="yes">
	<link rel="icon" sizes="192x192" href="img/startup-icon/web-app-192.png">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<link rel="apple-touch-startup-image" href="img/startup-icon/web-app-76.png">
	<link rel="apple-touch-icon" href="img/startup-icon/web-app-76.png">
	<link rel="apple-touch-icon" sizes="76x76" href="img/startup-icon/web-app-76.png">
	<link rel="apple-touch-icon" sizes="120x120" href="img/startup-icon/web-app-120.png">
	<link rel="apple-touch-icon" sizes="152x152" href="img/startup-icon/web-app-152.png">
	
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<!-- Angular Material style sheet -->
	<!-- <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/angular_material/1.1.0-rc.5/angular-material.min.css?v=1"> -->
	<link rel="stylesheet" href="css/angular-material.min.css?v=1">

	<link rel="stylesheet" type="text/css" href="css/style.css?v=1">

	<script src="js/jquery.min.js?v=1"></script>
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js?v=1"></script> -->
	<!-- Angular Material requires Angular.js Libraries -->
	<script src="js/angular.min.js?v=1"></script>
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.7/angular.min.js?v=1"></script> -->
	<script src="js/angular-animate.min.js?v=1"></script>
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.7/angular-animate.min.js?v=1"></script> -->
	<script src="js//angular-aria.min.js?v=1"></script>
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.7/angular-aria.min.js?v=1"></script> -->
	<script src="js/angular-messages.min.js?v=1"></script>
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.7/angular-messages.min.js?v=1"></script> -->
	<!-- Angular Material Library -->
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/angular_material/1.1.0-rc.5/angular-material.min.js?v=1"></script> -->
	<script src="js/angular-material.min.js?v=1"></script>
	<script src="bower_components/jquery-mask-plugin/dist/jquery.mask.min.js"></script>
	<script src="bower_components/jquery-mask-plugin/dist/jquery.mask.min.js"></script>
	
	<script src="js/script.js?v=2"></script>

	<style type="text/css">
		[ng-cloak] {
			display: none;
		}
	</style>
</head>
<body ng-controller="appController" ng-cloak>

	<div id="loading"></div>

	<div class="container">

		<div layout="row" flex>

	    	<md-sidenav 
	    		class="md-sidenav-left sidenav-left md-whiteframe-4dp"
	    		md-component-id="left">

	      		<md-toolbar class="md-theme-indigo">
	        		<div class="logo-sidebar" flex></div>
	      		</md-toolbar>

	      		<md-content>
	      			<md-list flex class="Caviar-Dreams-Regular">
				        <md-list-item ng-href="#quem_somos" class="md-1-line">
								Quem Somos
				        </md-list-item>
				        <md-list-item ng-href="#nossos_servicos" class="md-1-line">
								Nossos Serviços
				        </md-list-item>
				        <md-list-item ng-href="http://epaybrasil.com.br/blog/" class="md-1-line">
								Blog
				        </md-list-item>
				        <md-list-item ng-href="https://portal.epaybrasil.com.br/site/home/home2.aspx" class="md-1-line">
								Portal de Serviços
				        </md-list-item>
					</md-list>
	      		</md-content>

	    	</md-sidenav>

		    <div flex>

		      	<!-- Cabeçalho -->
		      	<md-toolbar class="top-toolbar md-hue">
					<div class="md-toolbar-tools">
						<md-button hide-gt-md class="md-icon-button" ng-click="toggleMenu()">
							<i class="material-icons">menu</i>
						</md-button>
						<div flex layout="row" layout-align="center center" hide-gt-md >
							<img src="img/logo_simple.png">
						</div>
						<div flex layout="row" layout-align="left center" hide show-gt-md>
							<img src="img/logo_header.png">
						</div>
						<div hide show-gt-md class="Caviar-Dreams-Regular">
							<md-button aria-label="Quem Somos" ng-href="#quem_somos">
								Quem Somos
							</md-button>
							<md-button aria-label="Nossos Serviços" ng-href="#nossos_servicos">
								Nossos Serviços
							</md-button>
							<md-button aria-label="Blog" ng-href="http://epaybrasil.com.br/blog/">
								Blog
							</md-button>
							<md-button aria-label="Portal de Serviços" ng-href="https://portal.epaybrasil.com.br/site/home/home2.aspx">
								Portal de Serviços
							</md-button>
						</div>
					</div>
				</md-toolbar>
				<div hide show-gt-md class="line_sub_menu"></div>
				<!-- Corpo -->
				<div flex="none" class="body" layout="column">
					<!-- BANNER -->
					<div class="banner-01 Caviar-Dreams-Regular" layout="column">
						<p flex="none">
							A epay Brasil tem a solução certa para aumentar as suas vendas e gerar uma nova experiência de engajamento para o seu público.
						</p>
						<ul flex="none">
							<br>
							<br>
							<br>
							<li>
								Cartão Presente Marca Própria
							</li>
							<li>
								Cartão Presente de Grandes Marcas
							</li>
							<li>
								Plataforma de Fidelidade & Relacionamento
							</li>
							<li>
								Recarga de Celular
							</li>
							<br>
							<br>
							<br>
						</ul>
						
						<div flex="none" layout="column" layout-gt-xs="row" class="Caviar-Dreams-Bold">
							<a href="#contact">
								Fale Conosco
							</a>
							<a href="#conheca_nossos_clientes">
								Conheça nossos clientes
							</a>
						</div>
					</div>
					<div id="quem_somos" class="banner-02 Caviar-Dreams-Regular" layout="column">
						<ul flex="none">
							<li>
								Especialista em soluções pré-pagas, a epay Brasil é uma empresa do grupo Euronet, maior processadora de transações pré-pagas do mundo.
							</li>
							<li>
								Nosso propósito é ampliar a oferta de produtos e serviços no varejo, conectando grandes marcas com seus clientes, oferecendo uma experiência por meio de diferentes tecnologias.
							</li>
							<li>
								Nossas soluções aumentam a rentabilidade e visibilidade dos nossos parceiros, ampliando a oferta de produtos e serviços.
							</li>
						</ul>
						
						<div flex="none" layout="row" layout-align="center center" class="Caviar-Dreams-Bold">
							<a href="#contact">
								Fale Conosco
							</a>
							<a href="#conheca_nossos_clientes">
								Conheça nossos clientes
							</a>
						</div>
					</div>
					<!-- TABS -->
					<div id="nossos_servicos"></div>
					<md-nav-bar 
						hide
						show-gt-md
						class="products-tab Caviar-Dreams-Bold"
						md-selected-nav-item="currentNavItem"
						nav-bar-aria-label="navigation links"
						>
						<md-nav-item md-nav-click="goto('productPage1'); changeTab('productPage1');" name="productPage1">
							Cartão Marca Própria
						</md-nav-item>
						<md-nav-item md-nav-click="goto('productPage2'); changeTab('productPage2');" name="productPage2">
							Cartão Presente Grandes Marcas
						</md-nav-item>
						<md-nav-item md-nav-click="goto('productPage3'); changeTab('productPage3');" name="productPage3">
							Regarga de Celular
						</md-nav-item>
						<md-nav-item md-nav-click="goto('productPage4'); changeTab('productPage4');" name="productPage4">
							PIN
						</md-nav-item>
						<md-nav-item md-nav-click="goto('productPage5'); changeTab('productPage5');" name="productPage5">
							Tecnologia
						</md-nav-item>
					</md-nav-bar>
					<div flex md-swipe-left="tabsSwipeLeft()" md-swipe-right="tabsSwipeRight()">
						<div ng-show="currentNavItem == 'productPage1'">
							<img style="pointer-events:none;" width="100%" src="img/products-tab/1.jpg">
						</div>
						<div ng-show="currentNavItem == 'productPage2'">
							<img style="pointer-events:none;" width="100%" src="img/products-tab/2.jpg">
						</div>
						<div ng-show="currentNavItem == 'productPage3'">
							<img style="pointer-events:none;" width="100%" src="img/products-tab/3.jpg">
						</div>
						<div ng-show="currentNavItem == 'productPage4'">
							<img style="pointer-events:none;" width="100%" src="img/products-tab/4.jpg">
						</div>
						<div ng-show="currentNavItem == 'productPage5'">
							<img style="pointer-events:none;" width="100%" src="img/products-tab/5.jpg">
						</div>
					</div>
					<!-- Clientes -->
					<div id="conheca_nossos_clientes" style="margin-top: 70px;" layout-margin>
						<h1 style="margin: 50px 0 30px 30px; font-size: 200%;" class="Source-Serif-Light">Clientes</h1>
						<marquee class="customers">
							<?php
								function scanDirRecursive ($dir) {
						            $dirCtrls = scandir($dir);
						            foreach ($dirCtrls as $value) {
						                if($value != '.' && $value != '..') {
						                    if(is_dir($dir . DIRECTORY_SEPARATOR . $value)) {
						                        scanDirRecursive($dir . DIRECTORY_SEPARATOR . $value);
						                    } else if($value != '.DS_Store'){
						                        echo sprintf(
						                        	'<img  flex="none" src="%s/%s">', 
						                        		$dir, 
						                        		$value);
						                    }
						                }
						            }
						        }
						        scanDirRecursive("img/clientes");
							?>
						</marquee>	
					</div>
					<!-- Depoimentos -->
					<div style="margin-top: 70px;" layout-margin>
						<h1 style="margin: 50px 0 30px 30px; font-size: 200%;" class="Source-Serif-Light">Veja a opinião dos nossos clientes</h1>
						<div class="reviews OpenSans-Light" layout="column" layout-gt-sm="row" layout-align="center center">
							<div>
								It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here'.
								<span class="by">Carrefour</span>
							</div>
							<div>
								It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here'.
								<span class="by">Google</span>
							</div>
							<div>
								It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here'.
								<span class="by">Ri Happy</span>
							</div>
						</div>
					</div>
					<!-- CONTATO -->
					<div style="margin-top: 70px;" id="contact">
						<h1 class="md-display-1 text-center">Fale Conosco</h1>
					</div>
					<div class="contact" layout-gt-sm="row" flex layout-padding>
						<div flex flex-gt-sm="50" layout-padding>
							<form name="contactForm">
								<md-input-container class="md-block">
									<label>Nome</label>
									<input 
										required
										type="text" 
										name="name"
										ng-model="contact.name">
									<div ng-messages="contactForm.name.$error">
										<div ng-message="required">
											O nome é obrigatório.
										</div>
									</div>
								</md-input-container>

								<md-input-container class="md-block">
									<label>E-mail</label>
									<input 
										required
										type="email"
										name="email"
										ng-model="contact.email"
										minlength="10"
										maxlength="100"
										ng-pattern="/^.+@.+\..+$/" />
									<div ng-messages="contactForm.email.$error" role="alert">
										<div ng-message-exp="['required', 'minlength', 'maxlength', 'pattern']">
											Verifique seu e-mail. Lembre-se: deve ter de 10 a 100 caracteres, com @ e domínio.
										</div>
									</div>
								</md-input-container>

								<md-input-container class="md-block">
									<label>Telefone</label>
									<input 
										name="phone"
										type="tel" 
										ng-model="contact.phone"
										maxlength="15"/>
									<div ng-messages="contactForm.phone.$error">
										<div ng-message="pattern">
											Informe um número válido, exemplo: (11) 12345-6789
										</div>
									</div>
								</md-input-container>
								
								<md-input-container class="md-block">
									<md-select ng-model="contact.subject" name="subject">
										<md-option><em>Escolha um assunto...</em></md-option>
										<md-option
											ng-repeat="subject in contactSubjects" 
											ng-value="subject.value">
											{{subject.label}}
										</md-option>
									</md-select>
								</md-input-container>

								<md-input-container class="md-block">
									<label>Mensagem</label>
									<textarea 
										required 
										name="message" 
										ng-model="contact.message"
										md-maxlength="150"
										rows="5"
										md-select-on-focus></textarea>
									<div ng-messages="contactForm.message.$error" role="alert">
										<div ng-message="required">
											Escreva uma mensagem.
										</div>
									</div>
						        </md-input-container>

								<div flex class="form-upload" ng-show="contact.subject == 4">
									<md-button class="md-fab md-primary" ng-click="attachFile()">
							            <i class="material-icons">file_upload</i>
							        </md-button>
							        <span class="label">Currículo:</span>
							        <span class="value"></span>
							        <input 
							        	hide
										aria-label="Currículo"
										type="file" 
										name="curriculum"
										ng-model="contact.curriculum"
										onchange="angular.element(this).scope().fileChange()">
								</div>
								
								<div flex layout="row" layout-align="end none">
									<md-button style="min-width: 100px;" class="md-raised md-accent" flex flex-gt-sm="none" type="submit">Enviar</md-button>
								</div>
							</form>
						</div>
						<div class="call-center" flex flex-gt-sm="50">
							<div class="balloon" layout="column" layout-align="none start">
								<div class="text-fale-conosco-title">
									Central de Atendimento:
								</div>
								<br>
								<div class="text-fale-conosco-body">0800 282-5230</div>
								<br>
								<br>
								<div class="text-fale-conosco-title">
									Nossos escritórios:
									<br>
								</div>
								<md-button ng-click="openStatePhoneTooltip($event, 
										'São Paulo', 
										'Rua Bandeira Paulista, 600 cj. 121/122', 
										'São Paulo',
										'(11) 5213-1011')" 
									class="md-mini" 
									style="text-align: left;">
										São Paulo
								</md-button>
								<md-button ng-click="openStatePhoneTooltip($event, 
										'Bahia', 
										'Av. Otávio Mangabeira, 2401 lj 12', 
										'Shopping Ateliê',
										'(71) 3341-2035')" 
									class="md-mini" 
									style="text-align: left;">
									Bahia
								</md-button>
								<md-button ng-click="openStatePhoneTooltip($event, 
										'Pernambuco', 
										'Rua Ernesto de Paula Santos, 960 sl. 803', 
										'Recife',
										'(81) 3081-6711')" 
									class="md-mini" 
									style="text-align: left;">
									Pernambuco
								</md-button>
								<md-button ng-click="openStatePhoneTooltip($event, 
										'Ceará', 
										'Av. Desembargador Moreira, 2020 sl. 505', 
										'Fortaleza',
										'(85) 3261-3647')" 
									class="md-mini" 
									style="text-align: left;">
									Ceará
								</md-button>
								<md-button ng-click="openStatePhoneTooltip($event, 
										'Rio de Janeiro', 
										'Av. Lobo Júnior, 812 sl. 206/207', 
										'Rio de Janeiro', 
										'(21) 2220-4200')" 
									class="md-mini" 
									style="text-align: left;">
									Rio de Janeiro
								</md-button>
								<md-button ng-click="openStatePhoneTooltip($event, 
										'Rio Grande do Sul', 
										'Av. Auréliano de Figueiredo Pinto, 575 sl. 506', 
										'Porto Alegre', 
										'(51) 3224-9711')" 
									class="md-mini" 
									style="text-align: left;">
									Rio Grande do Sul
								</md-button>
							</div>
						</div>
					</div>
				</div>
		    </div>
	  	</div>
		<div class="footer" layout="column">
			<div class="brown" layout="column" layout-gt-sm="row">
				<div flex layout="column">
					<a class="title" href="#">Quem Somos</a>
				</div>
				<div flex layout="column">
					<a class="title" href="#">Nossos Negócios</a>
					<ul>
						<li>
							<a href="solucaovarejo.php">Varejo</a>
						</li>
						<li>
							<a href="solucaoconteudo.php">Conteúdo</a>
						</li>
						<li>
							<a href="solucaoempresa.php">Empresa</a>
						</li>
					</ul>
				</div>
				<div flex layout="column">
					<a class="title" href="#">Fale Conosco</a>
				</div>
				<div flex layout="column">
					<a class="title" href="#">Portal de Serviços</a>
				</div>
				<div flex layout="column">
					<a class="title" href="#">epay</a>
					<ul>
						<li>
							<a href="#quem_somos">Quem Somos</a>
						</li>
						<li>
							<a href="#">Nossos Negócios</a>
							<ul>
								<li>
									<a href="#">Varejos</a>
								</li>
								<li>
									<a href="#">Conteúdos</a>
								</li>
								<li>
									<a href="#">Empresas</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="#">Nossos Parceiros</a>
						</li>
						<li>
							<a href="#fale_conosco">Fale Conosco</a>
						</li>
						<li>
							<a href="https://portal.epaybrasil.com.br/site/home/home2.aspx">Portal de Serviços</a>
						</li>
					</ul>
				</div>
			</div>
			<a class="contratos_regulamentos_link" href="contratos_regulamentos.php">Conheça nossos Contratos e Regulamentos</a>
			<div layout="row" layout-align="center center">
				<img src="img/connecting_brands.png">
			</div>
			<div class="footer_footer">
				<p>
					Rua Bandeira Paulista, 600 - cj 121/122 - CEP 04532-001 - São Paulo <br>
					Fone - <a href="tel:+551152131001">(11) 5213-1001</a> / Central de Atendimento: <a href="08002825230">0800 282-5230</a>
				</p>
				<hr>
				<div class="copyright">
					Copyright ® 2014 Todos os direitos reservados.
				</div>
			</div>
		</div>
	</div>

	<div id="office-painel">
		<md-button ng-click="closeStatePhoneTooltip()" class="md-icon-button md-mini md-accent">
        	<i class="material-icons">close</i>
        </md-button>
		<h2>Estado</h2>
		<p class="address">Endere, nº</p>
		<p class="details">Detalhes...</p>
		<p class="phone"><a href="#">(11) 99988-2233</a></p>
	</div>

	<div id="product01-tooltip">
		<ul></ul>
	</div>
</body>
</html>