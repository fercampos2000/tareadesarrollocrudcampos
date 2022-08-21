<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>tarea camposg</title>
	<link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>css/estilo.css">
</head>
	<body>
	<div class="container">
		
<div class="row">
	<h2>Registro de alumnos Universitarios</h2>
</div>
<!--></!-->
<?php echo form_open('Welcome\agregar', ['id' => 'form-persona']); ?>
	<div class="row">
						<div class="form-group col-sm-4">
							<label for="">Nombre</label>
							<input type="text" name="nombre" class="form-control" required placeholder="Nombre" id="nombre">
						</div>
						<div class="form-group col-sm-4">
							<label for="">Apellido</label>
							<input type="text" name="apellido" class="form-control" required placeholder="Apellido" id="apellido">
						</div>
						<div class="form-group col-sm-4">
							<label for="">Direccion</label>
							<input type="text" name="direccion" class="form-control" required placeholder="Direccion" id="direccion">
						</div>
					</div>
					<div class="row">
					    <div class="form-group col-sm-4">
							<label for="">Movil</label>
							<input type="text" name="movil" class="form-control" required placeholder="Numero" id="movil">
						</div>
						<div class="form-group col-sm-4">
							<label for="">Email</label>
							<input type="text" name="email" class="form-control" required placeholder="Correo electronico" id="email">
						</div>
						<div class="form-group col-sm-4">
							<label for="">Usuario</label>
							<input type="text" name="usuario" class="form-control" required placeholder="Usuario" id="usuario">
						</div>
					</div>
					<div class="row">
						<div class="form-group col-sm-4">
							<label for="">Inactivo</label>
							<input type="text" name="inactivo" class="form-control" required placeholder="" id="inactivo">
						</div>
					</div>
					<button type="submit" class="btn btn-primary btn-block">Guardar</button>

	<!--></!-->
	<?php echo form_close(); ?>
	<div class="row">

	<div class="card col-12">
		<div class="card-header">
			<h4>Estudiantes UMG</h4>
		</div>
		<div class="card-body">
						<table class="table table-sm table-dark">
				<thead>
					<tr>
						<th scope="col">Id</th>
						<th scope="col">Nombre</th>
						<th scope="col">Apellido</th>
						<th scope="col">Direccion</th>
						<th scope="col">Movil</th>
						<th scope="col">Email</th>
						<th scope="col">Fecha</th>
						<th scope="col">Usuario</th>
						<th scope="col">Inactivo</th>
						<th scope="col">Borrar</th>
						<th scope="col">Editar</th>
					</tr>
				</thead>
				<tbody>
					<?php
						$count = 0;
						foreach ($alumnos as $alumno){
							echo '
							<tr>
								<td>'.$alumno->alumno.'</td>
								<td>'.$alumno->nombre.'</td>
								<td>'.$alumno->apellido.'</td>
								<td>'.$alumno->direccion.'</td>
								<td>'.$alumno->movil.'</td>
								<td>'.$alumno->email.'</td>
								<td>'.$alumno->fecha_creacion.'</td>
								<td>'.$alumno->user.'</td>
								<td>'.$alumno->inactivo.'</td>
								<td><a href="'.base_url('Welcome/eliminar/'.$alumno->alumno).'" target="_blank" type="button" class="btn btn-danger">🗑</a></td>
								<td><button type="button" class="btn btn-warning text-white" onclick="llenar_datos('.$alumno->alumno.',`'.$alumno->nombre.'`,`'.$alumno->apellido.'`,`'.$alumno->direccion.'`,`'.$alumno->movil.'`,`'.$alumno->email.'`,`'.$alumno->user.'`,`'.$alumno->inactivo.'`)">✏️</button></td>
							</tr>
							';
						}
					?>
				</tbody>
				</table>
		</div>
	</div>
</div>
	</div>
		<script>
			let url = "<?php echo base_url('Welcome/editar'); ?>";
			const llenar_datos = (alumno, nombre, apellido, direccion, movil, email, usuario, inactivo)	=> {
				console.log(alumno, nombre, apellido, direccion, movil, email, usuario, inactivo);
				let path = url+"/"+alumno;
				console.log(path);
				document.getElementById('form-persona').setAttribute('action', path);
				document.getElementById('nombre').value = nombre;
				document.getElementById('apellido').value = apellido;
				document.getElementById('direccion').value = direccion;
				document.getElementById('movil').value = movil;
				document.getElementById('email').value = email;
				document.getElementById('usuario').value = usuario;
				document.getElementById('inactivo').value = inactivo;
			};
		</script>
	</body>
</html>