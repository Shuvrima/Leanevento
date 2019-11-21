<script type="text/javascript" src="<?php echo base_url(); ?>/js/m9.js"></script>

<div id="menubar">	
	<img src="<?php echo base_url( 'images/logo-blanco.png');?>" alt="logo" style=" width: 40px;height:40px; position: realtive; margin-right:700px">
	<p style="position:absolute; margin-left:170px; margin-top:-30px ;font-weight:bolder">LEANEVENTOS</p>
	<a href="<?php echo base_url(); ?>8eventind"  name="Inicio"style="text-decoration : none;padding-left:20px" > Inicio </a>
	<a href="<?php echo site_url('Cont_9perfil/ind_fetch'); ?>"  name="Individual"style="text-decoration : none;padding-left:20px"> Individual </a>
</div>
			


<div id="imagemov5">
	<font style="font-size:25; color:#595959">PERFIL<br></font>
	<font style="text-align:center; font-size:15; color:#FFC300">INICIO<font style="text-align:center; font-size:15; color:#595959">PERFIL</font></font>
</div>
		
<h3 style="margin-left: 320px; padding-top: 80px; font-family:sans-serif"> Tu Informacian del Perfil </h3>

<div>		

	<table>	 
	<?php foreach ($data->result() as $row) : ?> 
		<tr>

		    <td>
			<div id="fonts4">
				<i class="fas fa-book"></i><?php echo $row->Fname;?>
			</div>
			</td>
			<td>
			<div id="fonts3">
				<i class="fas fa-map-marker-alt"></i><?php echo $row->address; ?>,<?php echo $row->city; ?><br>
				<?php echo $row->state; ?>,<?php echo $row->zip; ?>
			</div>
			</td>
		</tr>
		
		<tr>
			<td>
			<div id="fonts4">
				<i class="fas fa-book"></i> <?php echo $row->Lname;?>
			</div>
			</td>
			<td>
			<div id="fonts3">
				<i class="fas fa-phone"></i><?php echo $row->phone;?>
			</div>
			</td>
		</tr>
				
		<tr>
			<td>
			<div id="fonts4">
				<i class="fas fa-user"></i><?php echo $row->email;?>
			</div>
			</td>
			<td>
			<div id="fonts3">
				<i class="far fa-paper-plane"></i><?php echo $row->email;?>
			</div>
			</td>
			<td rowspan="3">
				<img src="<?php echo base_url('images/user.png');?>" alt="lean banner" style="width: 20%; height:30%;margin-left:100px;margin-top: -160px">
			</td>
	    </tr>
	    <?php endforeach;?>
	</table>

</div>	
				
	
<div class="container_perfil">
	<h2 style="font-family:sans-serif;font-size:15;color: #595959;text-align:left">Estar en contacto</h2>
	<?php echo validation_errors(); ?>
	<?php echo form_open('Cont_9perfil/ind_update'); ?>
		<div>		
			<label> Tu Nombres </label><br>
			<input class="input1" id="i34" onkeyup="checkn()" type="text"  name="firstname" placeholder="Tu Nombre" pattern="^[A-Za-z]*$"><br>
			<label> Tu Apelliodos </label><br>
			<input class="input1" id="i35" onkeyup="checkn()" type="text"  name="lastname" placeholder="Tu Apelliodos" pattern="^[A-Za-z]*$"><br>
			<label id="e22"></label>
			
			<div style="padding-bottom:10px">
				<img src="<?php echo base_url('images/user.png');?>" alt="lean banner" style="width: 20%; height:27%;margin-left:410px;margin-top: -160px">
				<div style="margin-left:400px;margin-top: -10px">
				<button class="button6" >Seleccionar Logo</button>
				</div>
			</div>
		</div>
		
		<div>
			<label> Correo </label>
			<input class="input2" id="i30" onkeyup="check9email()" type="text" name="email1" placeholder="Tu correo electronico" pattern="^[A-Za-z0-9\.\-_]*@[a-z]+\.[a-z]+$"><br>
			<label id="e20"></label><br>
			
			<label> Telefono </label>
			<input class="input4" id="i31" onkeyup="checkall()" type="text"  name="phone" placeholder="telefono" pattern="^\d{3}[\-]\d{3}[\-]\d{4}$">
			<label> Usuario </label>
			<input class="input4" id="i32" onkeyup="checkall()" type="text"  name="uname" placeholder="Nombres de usuario" pattern="^[A-Za-z0-9\.\-_]*@[a-z]+\.[a-z]+$">
			<label> Contraseña </label>
			<input class="input4" id="i33" onkeyup="checkall()" type="password"  name="password1" placeholder="Contraseña" pattern="^[A-Za-z0-9\.\-_!@#$%^&*]{8,15}$"><br>
			<label id="e21"></label>
		</div>
		
		<div style="margin-left:10px; padding-top: 30px; color:#595959">
		<label><div style="width:40px; background-color:#FFC300"> Nota:</div><br>Solo puede cambiar los datos(Telefono, Contraseña y Logo) </label>
		</div>
		
		<input type="submit" value="Guardar Cambios">
		
	</form>
</div>
	


