<script type="text/javascript" src="<?php echo base_url(); ?>/js/m.js"></script>


<div id="menubar">
	<img src="<?php echo base_url( 'images/logo-blanco.png');?>" alt="logo" style=" width: 40px;height:40px; position: realtive;margin-right:280px">
	<p style="position:absolute; margin-left:85px; margin-top:-30px ;font-weight:bolder">LEANEVENTOS</p>
	<a href="<?php echo base_url(); ?>home"  name="Inicio"style="text-decoration : none;padding-left:20px" > Inicio </a>
	<a href="<?php echo base_url(); ?>about"  name="Quienes Somos"style="text-decoration : none;padding-left:20px"> Quienes Somos </a>
	<a href="http://asmitaorpe.uta.cloud"  name="Blog" style="text-decoration : none;padding-left:20px" > Blog </a>
	<a href="<?php echo site_url('Cont_7I/ind_reg'); ?>"  name="Registrate"style="text-decoration : none;padding-left:20px"> Registrate </a>
	<a href="<?php echo site_url('Cont_5msg/contact'); ?>"  name="Contacto"style="text-decoration : none;padding-left:20px" > Contacto </a>
	<a href="<?php echo site_url('Cont_login/login'); ?>"  name="Iniciar Sesion"style="text-decoration : none;padding-left:20px" > Iniciar Sesion </a>
	<a href="<?php echo base_url(); ?>3neweve"  name="Comprar Boletos" style="text-decoration : none;padding-left:20px" > Comprar Boletos</a>
</div>
			
			
<div id="imagemov5"></div>
		
<h3 style="margin-left: 220px; padding-top: 80px; font-family:sans-serif"> Informacian del contacto </h3>
		
<table>	  
	<tr> 
			<td>
			<div style="padding-top: 5px; padding-bottom:10px; margin-left:220px;font-family:sans-serif;font-size:13;color: #595959">
					<i class="fas fa-map-marker-alt"></i>198 West 21st street,<br>
					Suite 721 New York NY 10016
			</div>
			</td>
			<td>
			<div id="fonts2">
				<i class="fas fa-phone"></i>+ 1235 2355 98
			</div>
			</td>
			<td>
			<div id="fonts2">
				<i class="far fa-paper-plane"></i>info@diazapps.com
			</div>
			</td>
			<td>
			<div id="fonts2">
				<i class="fas fa-globe"></i>diazapps.com
			</div>
			</td>			
    </tr>
</table>

	
<h3 style="margin-left: 300px; padding-top: 20px;padding-bottom:10px; margin-left:220px;font-family:sans-serif;color: #595959"> LEAN en las redes sociales </h3>
		
<table>	  
    <tr>
			<td>
			<div style="margin-left:220px; padding-bottom:30px">
			<img src="<?php echo base_url( 'images/facebook.png');?>" alt="facebook" id="contimg2">
			<figcaption><a href name="LEAN Ayuda Humanitaria" style=" text-decoration : none; color:#FFC300;font-family:sans-serif"> LEAN Ayuda Humanitaria </a></figcaption>
			</div>
			</td>
			<td>
			<div id="contimg">
			<img src="<?php echo base_url( 'images/twitter.png');?>" alt="twitter" id="contimg2">	
			<figcaption><a href name="@LeanEmergente" style=" text-decoration : none; color:#FFC300;font-family:sans-serif"> @LeanEmergente</a></figcaption>
			</div>
			</td>
			<td>
			<div id="contimg">
			<img src="<?php echo base_url( 'images/instagram.png');?>" alt="instagram" id="contimg2">
			<figcaption><a href name="@LeanAyudaHumanitaria" style=" text-decoration : none; color:#FFC300;font-family:sans-serif"> @LeanAyudaHumanitaria</a></figcaption>			
			</div>
			</td>
			<td>
			<div id="contimg">
			<img src="<?php echo base_url( 'images/correo.png');?>" alt="email" id="contimg2">
			<figcaption><a href name="lean.emergente@gmail.com" style=" text-decoration : none; color:#FFC300;font-family:sans-serif"> lean.emergente@gmail.com</a></figcaption>	
			</div>
			</td>
    </tr>
</table>
				
    
	
<div class="container">
	<h2 style="font-family:sans-serif;font-size:15;color: #595959;text-align:left">Estar en contacto</h2>
	<?php echo validation_errors(); ?>
	<?php echo form_open('Cont_5msg/contact'); ?>
	
		<label> Nombre </label>
		<input class="input1" id="i1" onkeyup="check5fn()" type="text"  name="fname"  placeholder="Tu Nombre"  pattern="^[A-Za-z]*$">
		<br><span></span><br>
		<label> Apellido </label>
		<input class="input1" id="i2" onkeyup="check5ln()" type="text"  name="lname"  placeholder="Tu Apellido" pattern="^[A-Za-z]*$">
		<br><span></span><br>
		
		<label> Correo </label>
		<input class="input2" id="i3" onkeyup="check5email()" type="text"  name="email"  placeholder="Tu correo electronico" pattern="^[A-Za-z0-9\.\-_]*@[a-z]+\.[a-z]+$"><br>
		<br><span></span><br> 
		
		<label> Tema </label>
		<input class="input2"  type="text"  name="sub"  placeholder="Su asunto de esta mensaje" pattern="^\S*$" maxlength="20">
		<br><span></span><br>
		<label> Mensaje </label>
		<input class="input3"  type="text"  name="msg"  placeholder="Di algo sobre nosotros" minlenghth="50" maxlength="300">
		<br><span></span><br>
		
		<input type="submit" name="submit" value="Enviar Mensaje">
		
	</form>
</div>


