

<div id="menubar">		
	<img src="<?php echo base_url('images/logo-blanco.png');?>" alt="logo" style=" width: 40px;height:40px; position: realtive; margin-right:330px">
	<p style="position:absolute; margin-left:170px; margin-top:-30px ;font-weight:bolder">LEANEVENTOS</p>
	<a href="<?php echo base_url(); ?>14homeagent"  name="Inicio"style="text-decoration : none;padding-left:20px" > Inicio </a>
	<a href="<?php echo base_url(); ?>15agtind"  name="Lista de Voluntarios"style="text-decoration : none;padding-left:20px"> Lista de Voluntarios </a>
	<a href="<?php echo base_url(); ?>16agtbusi"  name="Lista de Fundaciones" style="text-decoration : none;padding-left:20px"> Lista de Fundaciones </a>
	<a href="<?php echo base_url(); ?>17eventagt"  name="Eventos"style="text-decoration : none;padding-left:20px"> Eventos </a>
	<a href="<?php echo site_url('Cont_19perfilag/ag_fetch'); ?>"  name="Agente"style="text-decoration : none;padding-left:20px" > Agente </a>
</div>
			
			
<div class="container_event">		
<h2 style="padding-top: 40px"> <center> Lista De Eventos </center> </h2>

	<!--<form method="post">-->
	<td><button class="button3" onclick="location.href='<?php echo site_url('Cont_addevent/eve_reg');?>'" name="add" style="margin-left: 900px" >Agregar</button></td>
	<!--</form>-->
	
	<table>
	  <thead>
		  <tr>
		  <div >
			<th style="background-color:lightgrey;padding-bottom:8px;padding-top:8px"><center>DETALLES DE EVENTOS</center></th>
			<th style="background-color:lightgrey;padding-bottom:8px;padding-top:8px"><center>ID</center></th>
			<th style="background-color:lightgrey;padding-bottom:8px;padding-top:8px"><center>LUGAR</center></th>
			<th style="background-color:lightgrey;padding-bottom:8px;padding-top:8px"><center>FECHA</center></th>
			<th style="background-color:lightgrey;padding-bottom:8px;padding-top:8px"><center>COST</center></th>
			<th style="background-color:lightgrey;padding-bottom:8px;padding-top:8px"><center>MODIFICAR</center></th>
			<th style="background-color:lightgrey;padding-bottom:8px;padding-top:8px"><center>ELIMINAR</center></th>
		  </div>
		  </tr>
	  </thead>
	  
	  <tbody>
		  <tr>
			<td id="td1"><img src="<?php echo base_url('images/bannerlean1.jpg');?>" alt="lean banner" style=" width: 10%; height:10%; padding-right: 40px">Nombre del evento y sus detalles</td>
			<td id="td1">4001</td>
			<td id="td1">direccion del lugar</td>
			<td id="td1">14/01/2019</td>
			<td id="td1">$ 20</td>
			<td id="td1"><button class="button5" onclick="location.href='<?php echo site_url('Cont_eveup/update');?>'" style="margin-left: 20px"><i class="far fa-edit"></i></button></td>
			<td id="td1"><button class="button4" onclick="location.href='<?php echo site_url('Cont_delete/del');?>'" style="margin-left: 20px"><i class="far fa-trash-alt"></i></button></td>
		  </tr>
		  <tr>
			<td id="td1"><img src="<?php echo base_url('images/bannerlean2.jpg');?>" alt="lean banner" style=" width: 10%; height:10%; padding-right: 40px">Nombre del evento y sus detalles</td>
			<td id="td1"></td>
			<td id="td1">direccion del lugar</td>
			<td id="td1">14/01/2019</td>
			<td id="td1">$ 20</td>
			<td id="td1"><button class="button5" onclick="location.href='<?php echo site_url('Cont_eveup/update');?>'" style="margin-left: 20px"><i class="far fa-edit"></i></button></td>
			<td id="td1"><button class="button4" onclick="location.href='<?php echo site_url('Cont_delete/del');?>'" style="margin-left: 20px"><i class="far fa-trash-alt"></i></button></td>
		  </tr>
		  <tr>
			<td id="td1"><img src="<?php echo base_url('images/bannerlean3.jpg');?>" alt="lean banner" style=" width: 10%; height:10%; padding-right: 40px">Nombre del evento y sus detalles</td>
			<td id="td1"></td>
			<td id="td1">direccion del lugar</td>
			<td id="td1">14/01/2019</td>
			<td id="td1">$ 20</td>
			<td id="td1"><button class="button5" onclick="location.href='<?php echo site_url('Cont_eveup/update');?>'" style="margin-left: 20px"><i class="far fa-edit"></i></button></td>
			<td id="td1"><button class="button4" onclick="location.href='<?php echo site_url('Cont_delete/del');?>'" style="margin-left: 20px"><i class="far fa-trash-alt"></i></button></td>
		  </tr>
	  </tbody>
	</table>
</div>
	