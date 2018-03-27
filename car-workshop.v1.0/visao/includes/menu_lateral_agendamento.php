session_start();

<div id="sidebar" class="sidebar">
			<!-- begin sidebar scrollbar -->
			<div data-scrollbar="true" data-height="100%">
				<!-- begin sidebar user -->
				<ul class="nav">
					<li class="nav-profile">
						<div class="image">
							<a href="javascript:;"><img src="assets/img/user-13.jpg" alt="" /></a>
						</div>
						<div class="info">
                                                        <?php echo $_SESSION['nome'].' '.$_SESSION['sobre_nome'];?>
							<small><?php echo $_SESSION['tipo'];?></small>
						</div>
					</li>
				</ul>
				<!-- end sidebar user -->
				<!-- begin sidebar nav -->
				<ul class="nav">
					<li class="nav-header">Navegatção</li>
					<li class="has-sub">
						<a href="javascript:;">
						    <i class="fa fa-laptop"></i>
						    <span>Painel Principal</span>
					    </a>						
					</li>                                       
                                        <li class="has-sub">
                                            <a href="sys/fabrica_get.php?arquivo=perfil.php">
						    <i class="fa fa-user"></i>
						    <span>Meus Dados</span>
					    </a>						
					</li>                                       
                                        <li class="has-sub active">
						<a href="sys/fabrica_get.php?arquivo=calendar.php">
						    <i class="fa fa-calendar"></i>
						    <span>Agendar Serviço</span>
					    </a>						
					</li>
                                        
                                        <li class="has-sub">
						<a href="javascript:;">
						    <i class="fa fa-phone"></i>
						    <span>Contatos da Loja</span>
					    </a>						
					</li>                                        
                                        <li class="has-sub">
						<a href="sys/fabrica_get.php?arquivo=orcamentos_parciais.php">
						    <i class="fa fa-money"></i>
						    <span>Orçamentos Parciais</span>
					    </a>						
					</li>
                                        <li class="has-sub">
                                            <a href="logout.php">
						    <i class="fa fa-sign-out"></i>
						    <span>Sair</span>
					    </a>						
					</li>
                                        			
					
			        <!-- begin sidebar minify button -->
					<li><a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i class="fa fa-angle-double-left"></i></a></li>
			        <!-- end sidebar minify button -->
				</ul>
				<!-- end sidebar nav -->
			</div>
			<!-- end sidebar scrollbar -->
		</div>