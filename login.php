<div id="myModal" class="modal fade">
	<div class="modal-dialog modal-login">
		<div class="modal-content">
			<div class="modal-header">
				<div class="avatar">
					<img src="img/avatar.png" alt="Avatar">
				</div>				
				<h4 class="modal-title">Inicio de Sesion</h4>	
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="modal-body">
				<form action="" method="post">
					<div class="form-group">
						<input type="text" class="form-control" name="correo" placeholder="Correo Electronico" required="required">		
					</div>
					<div class="form-group">
						<input type="password" class="form-control" name="password" placeholder="Contraseña" required="required">	
					</div>        
					<div class="form-group">
						<button type="submit" class="btn btn-primary btn-lg btn-block login-btn">Iniciar Sesion</button>
                    </div>                    
				</form>
            </div>
			<div class="modal-footer">
                <a href="#RegistroModal" id="registro" data-toggle="modal">Registrate</a>
                <a href="#">Olvidaste la contraseña?</a>
			</div>
		</div>
	</div>
</div>  