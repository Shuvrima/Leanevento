<script type="text/javascript" src="<?php echo base_url(); ?>/js/m18.js"></script>

<div id="menubar">	
	<img src="<?php echo base_url( 'images/logo-blanco.png');?>" alt="logo" style=" width: 40px;height:40px; position: realtive; margin-right:330px">
	<p style="position:absolute; margin-left:170px; margin-top:-30px ;font-weight:bolder">LEANEVENTOS</p>
	<a href="<?php echo base_url(); ?>14homeagent"  name="Inicio"style="text-decoration : none;padding-left:20px" > Inicio </a>
	<a href="<?php echo base_url(); ?>15agtind"  name="Lista de Voluntarios"style="text-decoration : none;padding-left:20px"> Lista de Voluntarios </a>
	<a href="<?php echo base_url(); ?>16agtbusi"  name="Lista de Fundaciones" style="text-decoration : none;padding-left:20px"> Lista de Fundaciones </a>
	<a href="<?php echo base_url(); ?>17eventagt"  name="Eventos"style="text-decoration : none;padding-left:20px"> Eventos </a>
	<a href="<?php echo site_url('Cont_19perfilag/ag_fetch'); ?>"  name="Agente"style="text-decoration : none;padding-left:20px" > Agente </a>
</div>

			
<div id="imagemov7">
<font style="font-size:25; color:#595959">REGISTRO DE EVENTO<br></font>
<font style="text-align:center; font-size:15; color:#FFC300">EVENTO<font style="text-align:center; font-size:15; color:#595959">REGISTRO</font></font>
</div>
		
<div id="padding"></div>

<div class="container_perfil">
<h2 style="font-family:sans-serif;font-size:15;color: #595959;text-align:left">Registro de Evento</h2>

		<?php echo validation_errors(); ?>
		<?php echo form_open('Cont_addevent/eve_reg'); ?>

		<div>
		<label> Nombres </label><br>
		<input class="input1" id="i48" onkeyup="check1()" type="text"  name="ename" placeholder="Nombre del eventos"><br>
		<label> Responsable </label><br>
		<input class="input1" id="i49" onkeyup="check1()" type="text"  name="ano" placeholder="Nombre del Responsable"><br>
		<label id="e29"></label>
		
		<div style="padding-bottom:10px">
		<img src="<?php echo base_url( 'images/imagensubir.png');?>" alt="lean banner" style="width: 20%; height:30%;margin-left:410px;margin-top: -160px">
		<div style="margin-left:380px;margin-top: -10px">
		<button class="button6" >Seleccionar Logo</button>
		</div>
		</div>
		</div>
		
		<div>
		<label> Lugar </label>
		<input class="input2" id="i50" onkeyup="check2()" type="text"  name="place" placeholder=" Direccion del lugar del eventos" pattern="^[A-Za-z0-9]*$">
		<label> Fecha </label>
		<input class="input4" id="i51" onkeyup="check2()" type="text"  name="date1" placeholder="0000-00-00" pattern="^\d{4}-\d{2}-\d{2}$">
		<label> Hora </label>
		<input class="input4" id="i52" onkeyup="check2()" type="text"  name="time1" placeholder="00:00:00" >
		<label> Valor de Bolento </label>
		<input class="input4" id="i53" onkeyup="check2()" type="text"  name="cost" placeholder="$000.00" ><br>
		<label id="e30"></label>
		</div>
		
		<input type="submit" value="Guardar">
		
	</form>
</div>
