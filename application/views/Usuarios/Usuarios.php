<header class="demo-header mdl-layout__header ">
	<div class="centrado  ColorHeader"><span class=" title">DELMOR - Calidad Superior</span></div>
</header>

<main class="mdl-layout__content mdl-color--grey-100">
	<div class="mdl-grid demo-content">
		<div class="row TextColor center">Usuarios</div>
		<div class="row" style="width:100%">
			<div class="container">
				<div class="Buscar row column">
					<div class="col s1 m1 l1 offset-l3 offset-m2"><i class="material-icons ColorS">search</i></div>
					<div class="input-field col s11 m6 l5">
						<input  id="searchMain" type="text" placeholder="Buscar" class="validate mayuscula">
						<label for="search"></label>
					</div>
				</div>
			</div>
			<div style="margin-right: 10px; margin-bottom: 10px;" class="right m12" id="">
                <button id="btnNewUser" class="Btnadd btn waves-effect waves-light">Nuevo
                    <i class="material-icons right">group_add</i>
                </button>
            </div>
			<div class="row center">
				<table class="table striped RobotoR" id="tblUsuarios">
					<thead>
					<tr>
						<th>User Name</th>
						<th>Nombre</th>
						<th>Permisos</th>
						<th>Fecha Registro</th>
                        <th>Estado</th>
                        <th>Acciones</th>
					</tr>
					</thead>
					<tbody>
                      <?php
                        if (!$user)
                        {}else{
                          foreach ($user as $item) {
                              switch ($item["Permiso"])
                              {
                                  case 1:
                                      $item["Permiso"] = "Gerencia";
                                      break;
                                  case 2:
                                      $item["Permiso"] = "Contabilidad";
                                      break;
                                  case 3:
                                      $item["Permiso"] = "Produccion";
                                      break;
                                  default:
                                      $item["Permiso"] = "Administrador";
                                      break;
                              }

                              echo "
                                <tr>
                                  <td>".$item["Usuario"]."</td>
                                  <td>".$item["Nombre"]."</td>
                                  <td>".$item["Permiso"]."</td>
                                  <td>".$item["FechaRegistro"]."</td>";
                                  if ($item["Estado"] == 1)
                                  {
                                      echo "<td>Activo</td>";
                                  }else{
                                      echo "<td>Inactivo</td>";
                                  }
                                echo"
                                    <td>
                                        <a href='javascript:void(0)'><i style='color: #006091' class='material-icons'>edit</i></a>
                                        <a href='javascript:void(0)'><i style='color: #006091' class='material-icons'>delete</i></a>
                                    </td>
                                </tr>  
                              ";
                            }
                      }
                      ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</main>
<!-- Modal Structure -->
<div id="mdlnewUser" class="modal">
	<div class="modal-content">
        <a href="javascript:void(0)" class="modal-close right"><i class="material-icons">close</i></a>
		<div class="row TextColor center">Nuevo Usuario</div>
        <div class="row">
            <div class="col s6 m6 l6">
                <div class="input-field">
                    <label for="username">Usuario</label>
                    <input class="validate" type="text" id="username" name="username">
                </div>
            </div>
            <div class="col s6 m6 l6">
                <div class="input-field">
                    <label for="Nombre">Nombre</label>
                    <input class="validate" type="text" id="Nombre" name="Nombre">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s6 m6 l6">
                <label for="Pass">Contraseña</label>
                <input type="password" id="Pass" name="Pass">
            </div>
            <div class="col s6 m6 l6">
                <select class="browser-default chosen-select" name="permiso" id="permiso">
                    <option disabled selected>Selecciona un permiso</option>
                    <option value="1">Gerencia</option>
                    <option value="2">Contabilidad</option>
                    <option value="3">Produccion</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="center col s12 m12 l12">
                <button class="Btnadd btn" id="btnSaveUsers">Guardar <i class="material-icons right">save</i></button>
            </div>
        </div>
	</div>
</div>

