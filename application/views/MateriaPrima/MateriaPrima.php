<header class="demo-header mdl-layout__header ">
    <div class="centrado  ColorHeader"><span class=" title"><?php echo $this->uri->segment(1);?></span></div>
</header>

<main class="mdl-layout__content mdl-color--grey-100">
    <div class="mdl-grid demo-content">
        <div class="row TextColor center">lista de <?php echo $this->uri->segment(1);?></div>
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
                <button id="btnNewMatPrim" class="Btnadd btn waves-effect waves-light">Nuevo
                    <i class="material-icons right">note_add</i>
                </button>
            </div>
            <div class="row center">
                <table class="table striped RobotoR" id="tblMateriaPrima">
                    <thead>
                    <tr>
                        <th>Materia Pima</th>
                        <th>Descripcion</th>
                        <th>Estado</th>
                        <th>Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $estado;
                        if(!$materia)
                        {}else{
                            foreach ($materia as $item) {

                                switch ($item["Estado"])
                                {
                                    case 1:
                                        $estado = "Activo";
                                        break;
                                    default:
                                        $estado = "Inactivo";
                                        break;
                                }

                                echo "
                                    <tr>
                                        <td>".$item["Materia_prima"]."</td>
                                        <td>".$item["Descripcion"]."</td>
                                        <td>".$estado."</td>
                                        <td>
                                           <a onclick='editar(".'"'.$item["Id_MP"].'","'.$item["Materia_prima"].'","'.$item["Descripcion"].'"'.")' 
                                                id='edit' href='javascript:void(0)'>
                                              <i style='color: #006091' class='material-icons'>edit</i>
                                            </a>";
                                            if ($item["Estado"] == 1)
                                            {
                                                echo "
                                                    <a onclick='ActualizarEs(".'"'.$item["Id_MP"].'","'.$item["Estado"].'"'.")' 
                                                        id='edit' href='javascript:void(0)'>
                                                      <i style='color: #006091' class='material-icons'>delete</i>
                                                    </a>
                                                ";
                                            }else{
                                                echo "
                                                    <a onclick='ActualizarEs(".'"'.$item["Id_MP"].'","'.$item["Estado"].'"'.")' 
                                                        id='edit' href='javascript:void(0)'>
                                                      <i style='color: #006091' class='material-icons'>restore</i>
                                                    </a>
                                                ";
                                            }
                                        echo "</td>
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
<div id="mdlnewMateria" class="modal">
    <div class="modal-content">
        <a href="javascript:void(0)" class="modal-close right"><i class="material-icons">close</i></a>
        <h3 class="TextColor center" id="header">Nueva Materia Prima</h3>
        <div id="save" class="row">
            <div class="col s4 m4 l4">
                <div class="input-field">
                    <label for="numMatPrim">Materia Prima</label>
                    <input type="text" id="numMatPrim" name="numMatPrim">
                </div>
            </div>
            <div class="col s8 m8 l8">
                <div class="input-field">
                    <label for="Descripcion">Descripcion</label>
                    <input type="text" id="Descripcion" name="Descripcion">
                </div>
            </div>
        </div>
        <div style="display: none;" id="Edit" class="row">
            <div class="col s4 m4 l4">
                <div class="input-field">
                    <label for="">Materia Prima</label>
                    <input type="text" id="numMatPrimedit" name="numMatPrimedit" placeholder="Materia Prima">
                    <input type="hidden" id="Idedit" name="Idedit">
                </div>
            </div>
            <div class="col s8 m8 l8">
                <div class="input-field">
                    <label for="">Descripcion</label>
                    <input type="text" id="Descripcionedit" name="Descripcionedit" placeholder="Descripcion">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col s12 m12 l12 center">
                <button id="btnSaveMat" class="btn Btnadd">Guardar <i class="material-icons right">save</i></button>
                <button id="btnUpdateMat" style="display: none" class="btn Btnadd">Actualizar <i class="material-icons right">save</i></button>
            </div>
        </div>
    </div>
</div>

