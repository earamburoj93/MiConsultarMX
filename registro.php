<div id="RegistroModal" class="modal fade">
	<div class="modal-dialog modal-login">
		<div class="modal-content">
			<div class="modal-header">				
				<h4 class="modal-title">Registro</h4>	
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="modal-body">
				<form id="FormGuardarUsuario" action="" method="post">
                    
                    <input type="hidden" name="idusuario" id="txtidusuario" />                    
        

					<div class="form-group">
						<input type="text" class="form-control" name="nombre" id="txtnombre" placeholder="Nombre(s)" required="required">		
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="apellidop" id="txtapellidop" placeholder="Apellido Paterno" required="required">	
                    </div>        
					<div class="form-group">
						<input type="text" class="form-control" name="apellidom" id="txtapellidom" placeholder="Apellido Materno" required="required">	
                    </div>
					<div class="form-group">
						<input type="text" class="form-control" name="cel" id="txtcelular" placeholder="Telefono" required="required">	
                    </div>                                                        
					<div class="form-group">
						<input type="text" class="form-control" name="correo" id="txtcorreo" placeholder="Correo Electronico" required="required">	
                    </div>
					<div class="form-group">
						<input type="password" class="form-control" name="password" id="txtcontrasena" placeholder="Contraseña" required="required">	
                    </div>    
                    <input type="hidden" name="status" id="txtstatus" />  
                    <!--<div class="form-check">
                        <input type="hidden" name="tipou" id="txttipou"/>
                        <input class="form-check-input" type="checkbox" id="chAcceso">
                        <label class="form-check-label" for="chAcceso">
                            Usuario De Prueba
                        </label>
                    </div>    -->

					<div class="form-group">
						<button type="button" onclick="GuardarUsuario()" class="btn btn-primary btn-lg btn-block login-btn">Registrar</button>
                    </div>                 
				</form>
            </div>
		</div>
	</div>
</div>  



<script>

    var IDUsuario = "0";
    var status = "1";

    function GuardarUsuario()
    {
        $("#txtidusuario").val(IDUsuario);
        $("#txtstatus").val(status);
        $("#txttipou").val( $('#chAcceso').is(":checked") ? "1" : "0" );
        //console.log($("#FormGuardarUsuario").serialize());
        $.post(ws + "GuardaUsuario", $("#FormGuardarUsuario").serialize(), function(data){            
            if(data>0){ 
                $('#RegistroModal').modal('hide');
            }else{
                alert("Ocurrio un error, vuelva a intentar. Si el error continua, favor de comunicarnoslo por correo, en el apartado de Contancto");
            }
        }).done(function(){
            $("#myModal").modal('show');            
        });        
    }




</script>