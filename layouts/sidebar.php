<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>
		<ul class="nav menu">
			<li class=""><a href="../inicio/inicio.php"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg>Inicio</a></li>
			<li class="parent">
				<a data-toggle="collapse" href="#sub-usuario">
					<span ><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg></span> Usuarios 
				</a>
				<ul class="children collapse" id="sub-usuario">
					<li>
						<a class="" href="../usuarios/index.php">
							<span class="glyphicon glyphicon-list-alt"></span> Lista
						</a>
					</li>
					<li>
						<a class="" href="../usuarios/cerate-usuario.php">
							<span class="glyphicon glyphicon-plus-sign"> Registrar
						</a>
					</li>
					
				</ul>
			</li>
			
			<li class="parent">
				<a data-toggle="collapse" href="#sub-personal">
					<span class="glyphicon glyphicon-user"></span> Personal 
				</a>
				<ul class="children collapse" id="sub-personal">
					<li>
						<a class="" href="../personal/index.php">
							<span class="glyphicon glyphicon-list-alt"></span> Lista
						</a>
					</li>
					<li>
						<a class="" href="../personal/cerate-personal.php">
							<span class="glyphicon glyphicon-plus-sign"> Registrar
						</a>
					</li>
					
				</ul>
			</li>


			<li class="parent">
				<a data-toggle="collapse" href="#sub-asistencia">
					<span class="glyphicon glyphicon-ok-sign"></span> Asistencia 
				</a>
				<ul class="children collapse" id="sub-asistencia">
					<li>
						<a class="" href="../asistencia/index.php">
							<span class="glyphicon glyphicon-plus-sign"></span> Registrar Asistencia
						</a>
					</li>
					<li>
						<a class="" href="../asistencia/find-asistencia.php">
							<span class="glyphicon glyphicon-search"></span> Buscar Asistencia
						</a>
					</li>
					<li>
						<a class="" href="../asistencia/inasistencia.php">
							<span class="glyphicon glyphicon-plus-sign"> </span> Registrar Inasistencia
						</a>
					</li>
					
				</ul>
			</li>


			<li class="parent">
				<a data-toggle="collapse" href="#sub-vacaciones">
					<span class="glyphicon glyphicon-briefcase"></span>  Vacaciones
				</a>
				<ul class="children collapse" id="sub-vacaciones">
					<li>
						<a class="" href="../vacaciones/index.php">
							<span class="glyphicon glyphicon-plus-sign"></span> Registrar 
						</a>
					</li>
					<li>
						<a class="" href="../vacaciones/find-vacaciones.php">
							<span class="glyphicon glyphicon-search"> </span> Buscar
						</a>
					</li>
					
				</ul>
			</li>

			<li class="parent">
				<a data-toggle="collapse" href="#sub-permiso">
					<span class="glyphicon glyphicon-folder-close"></span>  Permisos
				</a>
				<ul class="children collapse" id="sub-permiso">
					<li>
						<a class="" href="../permiso/index.php">
							<span class="glyphicon glyphicon-plus-sign"></span> Registrar 
						</a>
					</li>
					<li>
						<a class="" href="../permiso/find-permiso.php">
							<span class="glyphicon glyphicon-search"> </span> Buscar
						</a>
					</li>
					
				</ul>
			</li>


			<li class="parent">
				<a data-toggle="collapse" href="#sub-reporte">
					<span class="glyphicon glyphicon-book"></span>  Reporte
				</a>
				<ul class="children collapse" id="sub-reporte">
					<li>
						<a class="" href="../reporte/generar-reporte.php">
							<span class="glyphicon glyphicon-file"></span> Generar Reporte 
						</a>
					</li>
					<li>
						<a class="" href="../reporte/historial-usuario.php">
							<span class="glyphicon glyphicon-list"> </span> Historial de Usuario
						</a>
					</li>
					
				</ul>
			</li>
		</ul>

</div><!--/.sidebar-->