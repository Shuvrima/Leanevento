<script type="text/javascript" src="<?php echo base_url(); ?>/js/m7a.js"></script>

<div id="logo6"></div>
<div id="lean6">
	<p id="lean6">LEANEVENTOS</p>
</div>
<div id="menubar2">
	<a href="<?php echo base_url(); ?>home"  name="Inicio"style="text-decoration : none;padding-left:20px" > Inicio </a>
	<a href="<?php echo base_url(); ?>about"  name="Quienes Somos"style="text-decoration : none;padding-left:20px"> Quienes Somos </a>
	<a href="http://asmitaorpe.uta.cloud"  name="Blog" style="text-decoration : none;padding-left:20px" > Blog </a>
	<a href="<?php echo site_url('Cont_7A/ag_reg'); ?>"  name="Registrate"style="text-decoration : none;padding-left:20px"> Registrate </a>
	<a href="<?php echo site_url('Cont_5msg/contact'); ?>"  name="Contacto"style="text-decoration : none;padding-left:20px" > Contacto </a>
	<a href="<?php echo site_url('Cont_login/login'); ?>"  name="Iniciar Sesion"style="text-decoration : none;padding-left:20px" > Iniciar Sesion </a>
	<a href="<?php echo base_url(); ?>3neweve"  name="Comprar Boletos" style="text-decoration : none;padding-left:20px" > Comprar Boletos </a>
</div>
			
<div id="imagemov7">
	<font style="font-size:25; color:#595959">REGISTRATE<br></font>
	<font style="text-align:center; font-size:15; color:#FFC300">INICIO<font style="text-align:center; font-size:15; color:#595959">REGISTRATE</font></font>
</div>
<div id="padding"></div>
		

<div class="container_reg">
	<h2 style="font-family:sans-serif;font-size:15;color: #595959;text-align:left">Elija el tipo de usuario para registrarse</h2>
	<form>
		<div >
			<button class="button6" onclick="location.href='<?php echo base_url();?>7signupI'">Como individual</button>
			<button class="button6"  onClick="return redirect('<?php echo site_url('/7signupB');?>'">Como Negocio o Fundacion</button>
			<button class="button6" onclick="location.href='<?php echo base_url();?>7signupA'">Como agente LEAN</button>
		</div>	
	</form>
</div>
		
		
<div  class="container_sign" id="pop">

				<?php echo validation_errors(); ?>
				<?php echo form_open('Cont_7A/ag_reg'); ?>

				<label> Correo </label>
				<input class="input1" id="i14" onkeyup="checkep()" type="text"  name="email1" placeholder="Tu correo electronico" pattern="^[A-Za-z0-9\.\-_]*@[a-z]+\.[a-z]+$">
				<label>Contrasena</label>
				<input class="input1" id="i15"  type="password"  name="password1" placeholder="Contrasena" pattern="^[A-Za-z0-9\.\-_!@#$%^&*]{8,15}$"><br>
				</label id="e10"></label><br>
				
				<label> Nombre </label>
				<input class="input1" id="i16"  onkeyup="checknames()" type="text"  name="firstname" placeholder="Tu Nombre" pattern="^[A-Za-z]*$">
				<label> Apellido </label>
				<input class="input1" id="i17" onkeyup="checknames()" type="text"  name="lastname" placeholder="Tu Apellido" pattern="^[A-Za-z]*$"><br>
				</label id="e11"></label><br>
				
				<label> Direccion </label>
				<input class="input2" id="i18" onkeyup="checkadd()" type="text"  name="address" placeholder="Direccion" pattern="^[0-9\sA-Za-z,]*$"><br>
				</label id="e12"></label><br>
				
				<label> Cludad </label>
				<input class="input2" id="i19" onkeyup="checkcity()" type="text"  name="city1" placeholder="Cludad" pattern="^[A-Za-z]*$"><br>
				</label id="e13"></label><br>
				
				<label> Estado </label>
				<input class="input1" id="i20" onkeyup="checkzip()" type="text"  name="state1" pattern="^[A-Za-z]*$" >
				
				<label> Codigo Postal </label>
				<input class="input1" id="i21" onkeyup="checkzip()" type="text"  name="zip1" maxlength=5 pattern="^\d{5}$"><br>
				</label id="e14"></label><br>
				
				<input id="submitkey"  type="submit" value="Registrarse">
				<button class="button6" onClick="cancel();" >Cerrar</button>
			
	</form>	
</div>