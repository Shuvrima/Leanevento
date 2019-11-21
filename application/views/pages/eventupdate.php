<div id="menubar">	
	<img src="<?php echo base_url('images/logo-blanco.png');?>" alt="logo" style=" width: 40px;height:40px; position: realtive; margin-right:330px">
	<p style="position:absolute; margin-left:170px; margin-top:-30px ;font-weight:bolder">LEANEVENTOS</p>
	<a href="<?php echo base_url(); ?>14homeagent"  name="Inicio"style="text-decoration : none;padding-left:20px" > Inicio </a>
	<a href="<?php echo base_url(); ?>15agtind"  name="Lista de Voluntarios"style="text-decoration : none;padding-left:20px"> Lista de Voluntarios </a>
	<a href="<?php echo base_url(); ?>16agtbusi"  name="Lista de Fundaciones" style="text-decoration : none;padding-left:20px"> Lista de Fundaciones </a>
	<a href="<?php echo base_url(); ?>17eventagt"  name="Eventos"style="text-decoration : none;padding-left:20px"> Eventos </a>
	<a href="<?php echo site_url('Cont_19perfilag/ag_fetch'); ?>"  name="Agente"style="text-decoration : none;padding-left:20px" > Agente </a>
</div>


<div id="imagemov7">
	<font style="font-size:25; color:#595959">UPDATE EVENTO<br></font>
	<font style="text-align:center; font-size:15; color:#FFC300">EVENTO<font style="text-align:center; font-size:15; color:#595959">UPDATE</font></font>
</div>
		

<div id="padding"></div>

	
<div class="container_perfil">
	<h2 style="font-family:sans-serif;font-size:15;color: #595959;text-align:left">Update Evento</h2>
	<?php echo validation_errors(); ?>
	<?php echo form_open('Cont_eveup/update'); ?>
	
		<div>
			<label> Nombres </label><br>
			<input class="input2" id="i48" onkeyup="check1()" type="text"  name="ename" placeholder="Nombre del eventos"><br>
			<label> Event ID </label>
			<input class="input4" id="i49" onkeyup="check2()" type="text"  name="ID" >
			<label id="e29"></label>
		</div>
		
		<div>
			<label> Lugar </label>
			<input class="input2" id="i50" onkeyup="check2()" type="text"  name="place" placeholder=" Direccion del lugar del eventos" >
			<label> Fecha </label>
			<input class="input4" id="i51" onkeyup="check2()" type="text"  name="date1" placeholder="0000-00-00" >
			<label> Hora </label>
			<input class="input4" id="i52" onkeyup="check2()" type="text"  name="time1" placeholder="00:00:00"  >
			<label> Valor de Bolento </label>
			<input class="input4" id="i53" onkeyup="check2()" type="text"  name="cost" placeholder="$000.00" ><br>
			<label id="e30"></label>
		</div>
		
		<input type="submit" value="Guardar">
		
	</form>
</div>