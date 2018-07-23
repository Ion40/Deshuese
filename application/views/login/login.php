<div class="container">
	<div class="row center">
		<div class="container">
			<div class="container">
				<div class="col s12 m12 l12" id="form">
					<form action="<?php echo base_url("index.php/login");?>" method="post" class="form">
						<div class="row login-logo center col s12 m12 l12">
							<img id="img_log" class="responsive-img" src="<?php echo base_url("assets/img/lock.png")?>" alt="" width="100px">
							<h4 style="font-family: robotoblack">Iniciar Sesión</h4>
						</div>
						<div  class="row">
							<div class="col s12 m12 l12">
								<div class="input-field">
									<i class="material-icons prefix">account_circle</i>
									<input style="margin-top: 24px; width: 90%" placeholder="USUARIO"  name="txtUsuario" id="nombre" type="text" class=" validate">
								</div>
							</div>
						</div>
						<div class="row center">
							<div class="col s12 m12 l12">
								<div class="input-field">
									<i class="material-icons prefix">lock_circle</i>
									<input style="margin-top: 14px; width: 90%" placeholder="CONTRASEÑA" name="txtpassword" id="pass" type="password" class="validate">
								</div>
							</div>
						</div>
						<div class="row center">
							<button style="width: 90%;" id="Acceder" class="Btnadd btn" type="submit" name="action">ACCEDER</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
