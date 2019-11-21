<script type="text/javascript" src="<?php echo base_url(); ?>/js/m7b.js"></script>

<div id="logo6"></div>

<div id="lean6">
	<p id="lean6">LEANEVENTOS</p>
</div>


<div id="menubar2">
	<a href="<?php echo base_url(); ?>home"  name="Inicio"style="text-decoration : none;padding-left:20px" > Inicio </a>
	<a href="<?php echo base_url(); ?>about"  name="Quienes Somos"style="text-decoration : none;padding-left:20px"> Quienes Somos </a>
	<a href="http://asmitaorpe.uta.cloud"  name="Blog" style="text-decoration : none;padding-left:20px" > Blog </a>
	<a href="<?php echo site_url('Cont_7B/busi_reg'); ?>"  name="Registrate"style="text-decoration : none;padding-left:20px"> Registrate </a>
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
			<button class="button6" onClick="">Como individual</button>
			<button class="button6" onClick="openreg();">Como Negocio o Fundacion</button>
			<button class="button6" onClick="openreg();">Como agente LEAN</button>
		</div>	
		</form>
</div>
		
		
<div  class="container_sign" id="pop">
			<?php echo validation_errors(); ?>
			<?php echo form_open('Cont_7B/busi_reg'); ?>
		
			<label> Correo </label>
			<input class="input1" id="i22" onkeyup="checkep()" type="text"  name="email1" placeholder="Tu correo electronico" pattern="^[A-Za-z0-9\.\-_]*@[a-z]+\.[a-z]+$">
			<label>Contrasena</label>
			<input class="input1" id="i23"  onkeyup="checkep()" type="password"  name="password1" placeholder="Contrasena" pattern="^[A-Za-z0-9\.\-_!@#$%^&*]{8,15}$"><br>
			</label id="e15"></label><br>
				
			<label> Nombre </label>
			<input class="input1" id="i24"  onkeyup="checknames()" type="text"  name="firstname" placeholder="Tu Nombre" pattern="^[A-Za-z]*$">
			<label> Ticket % </label>
			<input class="input1" id="i25" onkeyup="checknames()" type="text"  name="tic" pattern="^[0-9]{0,2}$"><br>
			</label id="e16"></label><br>
				
			<label> Direccion </label>
			<input class="input2" id="i26" onkeyup="checkadd()" type="text"  name="address" placeholder="Direccion" pattern="^[0-9\sA-Za-z,]*$"><br>
			</label id="e17"></label><br>
				
			<label> Cludad </label>
			<input class="input2" id="i27" onkeyup="checkcity()" type="text"  name="city1" placeholder="Cludad" pattern="^[A-Za-z]*$"><br>
			</label id="e18"></label><br>
				
			<label> Estado </label>
			<input class="input1" id="i28" onkeyup="checkzip()" type="text"  name="state1" pattern="^[A-Za-z]*$" >
				
			<label> Codigo Postal </label>
			<input class="input1" id="i29" onkeyup="checkzip()" type="text"  name="zip1" maxlength=5 pattern="^\d{5}$"><br>
			</label id="e19"></label><br>
				
			<input id="submitkey"  type="submit" value="Registrarse">
			<button class="button6" onClick="cancel();" >Cerrar</button>
			
	</form>	
</div>