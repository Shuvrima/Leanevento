<script type="text/javascript" src="<?php echo base_url(); ?>/js/m6.js"></script>

<div id="logo6"></div>

<div id="lean6">
	<p id="lean6">LEANEVENTOS</p>
</div>


<div id="menubar2">
	<a href="<?php echo base_url(); ?>home"  name="Inicio"style="text-decoration : none;padding-left:20px" > Inicio </a>
	<a href="<?php echo base_url(); ?>about"  name="Quienes Somos"style="text-decoration : none;padding-left:20px"> Quienes Somos </a>
	<a href="http://asmitaorpe.uta.cloud"  name="Blog" style="text-decoration : none;padding-left:20px" > Blog </a>
	<a href="<?php echo site_url('Cont_7I/ind_reg'); ?>"  name="Registrate"style="text-decoration : none;padding-left:20px"> Registrate </a>
	<a href="<?php echo site_url('Cont_5msg/contact'); ?>"  name="Contacto"style="text-decoration : none;padding-left:20px" > Contacto </a>
	<a href="<?php echo site_url('Cont_login/login'); ?>"  name="Iniciar Sesion"style="text-decoration : none;padding-left:20px" > Iniciar Sesion </a>
	<a href="<?php echo base_url(); ?>3neweve"  name="Comprar Boletos" style="text-decoration : none;padding-left:20px" > Comprar Boletos </a>
</div>

		<div id="imagemov6">
			<font style="font-size:25; color:#595959">INICIAR SESION<br></font>
			<div id="padding"></div>
			<font style="text-align:center; font-size:15; color:#FFC300">INICIO<font style="text-align:center; font-size:15; color:#595959">INICIAR SESION</font></font>
		</div>



<div class="container_login">
	<h2 style="font-family:sans-serif;font-size:15;color: #595959;text-align:left">Iniciar Sesión</h2>
		
		<?php echo validation_errors(); ?>
		<?php echo form_open('Cont_login/login'); ?>
		
			<label> Nombre de Usuario </label>
			<input class="input1" id="i12" onkeyup="check6email()" type="text"  name="email1" placeholder="Nombre de Usuario o correo" pattern="^[A-Za-z0-9\.\-_]*@[a-z]+\.[a-z]+$">
			<label> Contraseña </label>
			<input class="input1" id="i13" onkeyup="checkpw()"type="password"  name="password1" placeholder="Contraseña" pattern="^[A-Za-z0-9\.\-_!@#$%^&*]{8,15}$"><br>
			<label id="e9"></label><br>
			<div id="loginpass">
					<label> Olvido su Contraseña? </label>
			</div>
			<input id="submit1" type="submit" value="Entra" >
		</form>
</div>	